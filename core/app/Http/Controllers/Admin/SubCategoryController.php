<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function __construct()
    {
        $this->activeTemplate = activeTemplate();
    }
    public function index(){
        $pageTitle = 'Sub Category List';
        $emptyMessage = 'No sub category found.';
        $subCategories  = SubCategory::paginate(getPaginate());
        return view('admin.sub_category.list', compact('pageTitle', 'emptyMessage', 'subCategories'));
    }
    public function create(){
        $pageTitle = 'Create Sub Category';
        $emptyMessage = 'No sub category found.';
        $subCategories  = SubCategory::paginate(getPaginate());
        return view('admin.sub_category.add', compact('pageTitle', 'emptyMessage', 'subCategories'));

    }
 
    public function activate(Request $request)
    {
        $request->validate(['id' => 'required|integer']);
        $category = SubCategory::where('id', $request->id)->firstOrFail();
        $category->status = 1;
        $category->save();
        $notify[] = ['success', $category->name . ' has been activated.'];
        return back()->withNotify($notify);
    }

    public function deactivate(Request $request)
    {
        $request->validate(['id' => 'required|integer']);
        $category = SubCategory::where('id', $request->id)->firstOrFail();
        $category->status = 0;
        $category->save();
        $notify[] = ['success', $category->name . ' has been deactivated.'];
        return back()->withNotify($notify);
    }
    public function edit($id){
        $pageTitle = 'Edit Category';
        $emptyMessage = 'No category found.';
        $category  = Category::where('id',$id)->first();
        // dd($category);
        return view('admin.category.edit', compact('pageTitle', 'emptyMessage', 'category'));
    }
    public function store(Request $request){
        $path = imagePath()['category']['image']['path'];
        $size = imagePath()['category']['image']['size'];
        $filename = '';

        if ($request->hasFile('image')) {
            try {
                $filename = uploadImage($request->image, $path, $size, $filename);
            } catch (\Exception $exp) {
                $notify[] = ['errors', 'Image could not be uploaded.'];
                return back()->withNotify($notify);
            }
        }
        $category = new Category();
        $category->image = $filename;
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();

        $notify[] = ['success', $category->title . ' has been added.'];
        return back()->withNotify($notify);
    }
    public function update(Request $request, $id){
        $category  = Category::where('id',$id)->first();
        $path = imagePath()['category']['image']['path'];
        $size = imagePath()['category']['image']['size'];
        $filename = $category->image;
        if ($request->hasFile('image')) {
            try {
                $filename = uploadImage($request->image, $path, $size, $filename);
            } catch (\Exception $exp) {
                $notify[] = ['errors', 'Image could not be uploaded.'];
                return back()->withNotify($notify);
            }
        }
        $category->image = $filename;
        $category->title = $request->title;
        $category->description = $request->description;
        $category->save();

        $notify[] = ['success', $category->title . ' has been added.'];
        return back()->withNotify($notify);
    }
    public function delete(Request $request){
        $category  = Category::where('id',$request->id)->first();

        $path = imagePath()['category']['image']['path'];
        if (!empty($category->image)) {
            removeFile($path.'/'.$category->image);
        }
        $category->delete();
        $notify[] = ['success', "Delete successfully"];
        return back()->withNotify($notify);
    }
}
