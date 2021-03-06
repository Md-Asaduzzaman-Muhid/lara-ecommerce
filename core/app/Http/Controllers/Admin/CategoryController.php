<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->activeTemplate = activeTemplate();
    }
    public function index(){
        $pageTitle = 'Category List';
        $emptyMessage = 'No category found.';
        $categories  = Category::paginate(getPaginate());
        return view('admin.category.list', compact('pageTitle', 'emptyMessage', 'categories'));
    }
    public function activated(){
        $pageTitle = 'Category List';
        $emptyMessage = 'No category found.';
        $categories  = Category::where('status',1)->paginate(getPaginate());
        return view('admin.category.list', compact('pageTitle', 'emptyMessage', 'categories'));
    }
    public function deactivated(){
        $pageTitle = 'Category List';
        $emptyMessage = 'No category found.';
        $categories  = Category::where('status',0)->paginate(getPaginate());
        return view('admin.category.list', compact('pageTitle', 'emptyMessage', 'categories'));
    }
    public function create(){
        $pageTitle = 'Create Category';
        $emptyMessage = 'No category found.';
        $categories  = Category::paginate(getPaginate());
        return view('admin.category.add', compact('pageTitle', 'emptyMessage', 'categories'));

    }
 
    public function activate(Request $request)
    {
        $request->validate(['id' => 'required|integer']);
        $category = Category::where('id', $request->id)->firstOrFail();
        $category->status = 1;
        $category->save();
        $notify[] = ['success', $category->name . ' has been activated.'];
        return back()->withNotify($notify);
    }

    public function deactivate(Request $request)
    {
        $request->validate(['id' => 'required|integer']);
        $category = Category::where('id', $request->id)->firstOrFail();
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
