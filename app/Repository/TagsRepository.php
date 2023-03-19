<?php
namespace App\Repository;

use App\Interface\TagsRepositoryInterface;
use App\Models\Tag;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TagsRepository implements TagsRepositoryInterface
{
    public function index()
    {
        $tags=Tag::all();
        return view('admin.tags.tags',compact('tags'));
    }






    public function create()
    {
        return view('admin.tags.create_tags');

    }




    public function store($request)
    {

        Tag::create([

      "name"=>["ar"=>$request->name_ar,"en"=>$request->name_en],
      "slug"=>Str::slug($request->slug),
        ]);


    flash()->addsuccess(trans('messages.save_message'));
    return back();
    }




    public function edit($id)
    {
        $tag=Tag::find($id);
           return view('admin.tags.edit_tags',compact('tag'));
    }




    public function update($request)
    {
        $tag=tag::find($request->id);
        $tag->update([
            "name"=>["ar"=>$request->name_ar,"en"=>$request->name_en],
            "slug"=>Str::slug($request->slug),

        ]);

        flash()->addsuccess(trans('messages.update_message'));
        return back();

    }




    public function destroy($id)
    {
        tag::destroy($id);
        flash()->adderror(trans('messages.delete_message'));
        return back();


}
}
