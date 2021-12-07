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
    public function create(){
        $pageTitle = 'Create Category';
        $emptyMessage = 'No category found.';
        $categories  = Category::paginate(getPaginate());
        return view('admin.category.add', compact('pageTitle', 'emptyMessage', 'categories'));

    }
    public function activate(){

    }
    public function deactivate(){
        
    }
    public function edit(){
        
    }
    public function store(Request $request){
        dd($request);
    }
}
