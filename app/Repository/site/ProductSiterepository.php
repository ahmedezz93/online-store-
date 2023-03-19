<?php
namespace App\Repository\site;

use App\Interface\site\ProductSiterepositoryinterface;
use App\Models\Attribute;
use App\Models\Image;
use App\Models\Option;
use App\Models\Product;
use App\Models\products_sections;
use App\Models\Section;
use Illuminate\Support\Facades\Storage;

class ProductSiterepository implements ProductSiterepositoryinterface
{
    public function get_products($slug)
    {
        $data['section'] = Section::where('slug', $slug)->first();
        $data['products'] = $data['section']->products;
        return view('site.products.products', $data);
    }

    public function product_details($slug)
    {
        $data['product'] = Product::where('slug', $slug)->first();
        $attribute_id = Option::where('product_id', $data['product']->id)
            ->select('attribute_id')
            ->get();
        $product_id = $data['product']->id;
        // $product_attributes=Attribute::wherein('id',$attribute_id)->get();

        $data['product_attributes'] = Attribute::whereHas('options', function ($q) use ($product_id) {
            $q->whereHas('products', function ($qq) use ($product_id) {
                $qq->where('product_id', $product_id);
            });
        })->get();

        $section_ids = $data['product']->sections->pluck('id');

        $data['related_products'] = Product::where('id', $product_id)
            ->whereHas('sections', function ($section) use ($section_ids) {
                $section->whereIn('sections.id', $section_ids);
            })
            ->limit(2)
            ->latest()
            ->get();

        return view('site.products.products-details', $data);
    }

    public function search_results($request)
    {
        if ($request->search_query == null) {
            return redirect()->route('home');
        }
         elseif ($request->search_query && $request->section_id == null) {
            $products = Product::where('description', 'like', '%' . $request->search_query . '%')
                ->orWhere('description', 'like', '%' . $request->search_query . '%')
                ->get();
        }

        elseif ($request->search_query && $request->section_id) {

               $section = Section::findorfail($request->section_id);


             $products=$section->products()->where('description','like', '%' . $request->search_query . '%')->get();
        }

        return view('site.products.search_results', compact('products'));
    }
}
