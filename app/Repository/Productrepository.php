<?php
namespace App\Repository;

use App\Http\Traits\All_FuncTrait;
use App\Interface\ProductRepositoryInterface;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\Section;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Productrepository implements ProductRepositoryInterface
{
    use All_FuncTrait;

    public function index()
    {
        $products = Product::all();
        return view('admin.products.general.products', compact('products'));
    }

    public function create()
    {
        $data['sections'] = Section::all();
        $data['brands'] = Brand::all();
        $data['tags'] = Tag::all();

        return view('admin.products.general.create_products', $data);
    }

    public function store($request)
    {
        if (!$request->has('is_active')) {
            $request->request->add(['status' => '0']);
        } else {
            $request->request->add(['status' => '1']);
        }

        $product = Product::create([
            'name' => ['ar' => $request->name_ar, 'en' => $request->name_en],
            'slug' => Str::slug($request->slug),
            'description' => $request->description,
            'short_description' => $request->short_description,
            'brand_id' => $request->brand_id,
            'is_active' => $request->status,
        ]);

        $product->sections()->attach($request->sections);
        $product->tags()->attach($request->tags);
        $products = Product::all();

        flash()->addsuccess(trans('messages.save_message'));
        return view('admin.products.general.products', compact('products'));
    }

    public function get_price($id)
    {
        $product_id = $id;
        return view('admin.products.prices.create_price', compact('product_id'));
    }

    public function store_price($request)
    {
        $product = Product::where('id', $request->product_id)->update([
            'price' => $request->price,
            'special_price' => $request->special_price,
            'special_price_type' => $request->special_price_type,
            'special_price_start' => $request->special_price_start,
            'special_price_end' => $request->special_price_end,
        ]);

        $product_id = $request->product_id;
        flash()->addsuccess(trans('messages.save_message'));

        $products = Product::all();
        return view('admin.products.general.products', compact('products'));
    }

    public function get_stock($id)
    {
        $product_id = $id;
        return view('admin.products.stock.create_stock', compact('product_id'));
    }

    public function store_stock($request)
    {
        $product = Product::where('id', $request->product_id)->update([
            'sku' => $request->sku,
            'manage_stock' => $request->manage_stock,
            'qty' => $request->qty,
            'in_stock' => $request->in_stock,
        ]);

        flash()->addsuccess(trans('messages.save_message'));
        $products = Product::all();
        return view('admin.products.general.products', compact('products'));
    }

    public function add_image($id)
    {
        $product_id = $id;
        return view('admin.products.images.create_image', compact('product_id'));
    }

    //save image in folder
    public function image_in_folder($request)
    {
        $file = $request->file('dzfile');

        $image_name = $file->getclientoriginalname();
        $file_name = $file->storeAs('/products', $image_name, 'upload_files');
        return response()->json([
            'name' => $file_name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }

    //save image in db

    public function save_image($request)
    {
        try {
            // save dropzone images
            if ($request->has('document') && count($request->document) > 0) {
                foreach ($request->document as $image) {
                    Image::create([
                        'imageable_id' => $request->product_id,
                        'image_name' => $image,
                        'imageable_type' => Product::class,
                    ]);
                }
            }

            flash()->addsuccess(trans('messages.save_message'));
            return redirect()->route('products');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()
                ->back()
                ->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
    }

    public function update($request)
    {
    }

    public function destroy($id)
    {


        DB::beginTransaction();

        try {
            $product = product::find($id);
               $all_images = $product->images;
            if ($all_images != null) {
                    //delete from server
                         $images_ex=$product->images()->pluck('image_name');
                         foreach($images_ex as $image){

                            Storage::disk('upload_files')->delete("/".$image);

                         }


                    //delete from db
                    $all_images = $product->images()->where('imageable_id',$id)->delete();

                    //delete product
                    Product::destroy($id);
                    DB::commit();
                    flash()->adderror(trans('messages.delete_message'));
                    return back();

                }
            }
        catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }
}
