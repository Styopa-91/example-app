<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('category.index', compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function update(Category $category)
    {
        $data = request()->validate([
            'title' => 'string'
        ]);
        $category->update($data);
        return redirect()->route('category.show', $category->id);
    }

    public function delete()
    {
        $category = Category::find(3);
        $category->delete();
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|unique:categories|string'
        ]);
        Category::create($data);
        return redirect()->route('category.index');
    }

    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
}
