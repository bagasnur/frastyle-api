<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $category = Category::orderBy('category_idn', 'ASC')->get();

        return view('dashboard.kategori.index', compact('category'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kategori_indonesia' => 'required|string|min:3|unique:categories,category_idn|max:255',
            'kategori_english' => 'required|string|min:3|different:kategori_indonesia|unique:categories,category_eng|max:255',
        ]);

        $category = Category::create([
            'category_idn' => $request->kategori_indonesia,
            'category_eng' => $request->kategori_english,
        ]);

        return redirect( route('kategori') )
                ->with('success','Kategori: '.$category->category_idn.' berhasil di tambahkan.');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('dashboard.kategori.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $validated = $request->validate([
            'kategori_indonesia' => 'required|string|min:3|unique:categories,category_idn,'.$category->id.',id|max:255',
            'kategori_english' => 'required|string|min:3|different:kategori_indonesia|unique:categories,category_eng,'.$category->id.'|max:255',
        ]);

        $category->update([
            'category_idn' => $request->kategori_indonesia,
            'category_eng' => $request->kategori_english,
        ]);

        return redirect( route('kategori') )
                ->with('success','Kategori: '.$category->category_idn.' berhasil di update.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $value_category = $category->category_idn;

        $category->delete();

        return redirect( route('kategori') )
                ->with('success','Kategori: '.$value_category.' berhasil dihapus.');
    }
}
