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
        $categories  = Category::with('subCategories')->paginate(getPaginate());
        return view('admin.sub_category.list', compact('pageTitle', 'emptyMessage', 'subCategories','categories'));
    }
    public function activated(){
        $pageTitle = 'Category List';
        $emptyMessage = 'No category found.';
        $subCategories  = SubCategory::where('status',1)->paginate(getPaginate());
        $categories  = Category::with('subCategories')->where('status',1)->paginate(getPaginate());
        return view('admin.category.list', compact('pageTitle', 'emptyMessage', 'subCategories','categories'));
    }
    public function deactivated(){
        $pageTitle = 'Category List';
        $emptyMessage = 'No category found.';
        $subCategories  = SubCategory::where('status',0)->paginate(getPaginate());
        $categories  = Category::with('subCategories')->where('status',0)->paginate(getPaginate());
        return view('admin.category.list', compact('pageTitle', 'emptyMessage', 'subCategories','categories'));
    }
    public function create(){
        $pageTitle = 'Create Sub Category';
        $emptyMessage = 'No sub category found.';
        $subCategories  = SubCategory::paginate(getPaginate());
        $categories  = Category::get();
        return view('admin.sub_category.add', compact('pageTitle', 'emptyMessage', 'subCategories','categories'));

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
        $pageTitle = 'Edit Sub Category';
        $emptyMessage = 'No sub category found.';
        $category  = SubCategory::where('id',$id)->first();
        $categories  = Category::get();
        return view('admin.sub_category.edit', compact('pageTitle', 'emptyMessage', 'category', 'categories'));
    }
    public function store(Request $request){
        // dd($request);
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
        $subCategory = new SubCategory();
        $subCategory->category_id = $request->pcategory;
        $subCategory->image = $filename;
        $subCategory->title = $request->title;
        $subCategory->description = $request->description;
        $subCategory->save();

        $notify[] = ['success', $subCategory->title . ' has been added.'];
        return back()->withNotify($notify);
    }
    public function update(Request $request, $id){
        $category  = SubCategory::where('id',$id)->first();
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
        $category  = SubCategory::where('id',$request->id)->first();

        $path = imagePath()['category']['image']['path'];
        if (!empty($category->image)) {
            removeFile($path.'/'.$category->image);
        }
        $category->delete();
        $notify[] = ['success', "Delete successfully"];
        return back()->withNotify($notify);
    }
}
