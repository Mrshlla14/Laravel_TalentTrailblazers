<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.categories', compact('categories'));
    }

    public function create()
    {
        return view('categories.categories-entry');
    }

    public function store(Request $request)
    {
       $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'tipe' => 'required',
        ]);

            Category::create([
            'nama' => $request->nama,
            'tipe' => $request->tipe,
            'harga' => $request->harga,
        ]);

        return redirect('/category');
    }

    public function edit($id_categories)
    {
        $category = Category::find($id_categories);
        return view('categories.categories-edit', compact('category'));
    }

    public function update(Request $request, $id_categories)
    {
        $request->validate([
            'nama' => 'required',
            'tipe' => 'required',
            'harga' => 'required',
          
        ]);

        $category = Category::find($id_categories);
         
        $category->update([
            'nama' => $request->nama,
            'tipe' => $request->tipe,
            'harga' => $request->harga,
        ]);

        return redirect('/category');
    }

    public function delete($id_categories)
    {
        $category = Category::find($id_categories);
        return view('categories.categories-hapus', compact('category'));
    }

    public function destroy($id_categories)
    {
        $category = Category::find($id_categories);
        $category->delete();
        return redirect('/category');
    }

}

