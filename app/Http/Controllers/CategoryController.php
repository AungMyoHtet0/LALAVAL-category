<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\MyRequest;


class CategoryController extends Controller
{
    public function index()
    {
        $categorys = Category::all();
        return view('categories.index', compact('categorys'));
    }

    public function store(MyRequest $request)
    {
        $request->all();
        $category = new Category();
        $category->name = $request->name;
        $category->created_at = now();
        $category->updated_at = now();
        $category->save();
        return redirect('/category');
    }

    public function create()
    {
        return view('categories.create');
    }

    public function show($id)
    {
        $category = Category::find($id);
        return view('categories.show',compact('category'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }

    public function update(MyRequest $request, $id)
    {
        $request->all();
        $category = Category::find($id);
        $category->name = $request->name;
        $category->updated_at = now();
        $category->save();
        return redirect('/category');
    }

    public function destroy($id)
    {

        Category::destroy($id);
        return redirect('/category');
    }
}
