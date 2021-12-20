<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\Version;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;


class ContentController extends Controller
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
        $content = Content::with('version')->with('category')->get();
        return view('dashboard.konten.index', compact('content'));
    }

    public function add()
    {
        $versions = Version::orderBy('number', 'ASC')->get();
        $categories = Category::orderBy('category_idn', 'ASC')->get();
        $tags = Tag::orderBy('name', 'ASC')->get();

        return view('dashboard.konten.create', compact(['versions', 'categories', 'tags']));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|min:3|max:255',
            'nama_file' => 'required|string|min:3|max:255',
            'kategori' => 'required',
        ]);

        $insert_tag = [];
        $insert_ver = [];

        if($request->label){
            foreach ($request->label as $key => $value) {
                array_push($insert_tag, (int)$value);
            }
        }
        if($request->versi){
            foreach ($request->versi as $key => $value) {
                array_push($insert_ver, (int)$value);
            }
        }

        $label = Tag::find($insert_tag);
        $versi = Version::find($insert_ver);

        $content = Content::create([
            'title' => $request->judul,
            'content_file' => $request->nama_file,
            'category_id' => $request->kategori,
        ]);

        $content->tag()->attach($label);
        $content->version()->attach($versi);

        return redirect( route('konten') )
                ->with('success','Konten: '.$content->title.' berhasil di tambahkan.');
    }

    public function edit($id)
    {
        $content = Content::with('version')->with('category')->with('tag')->findOrFail($id);
        $versions = Version::orderBy('number', 'ASC')->get();
        $categories = Category::orderBy('category_idn', 'ASC')->get();
        $tags = Tag::orderBy('name', 'ASC')->get();

        return view('dashboard.konten.edit', compact(['content', 'versions', 'categories', 'tags']));
    }

    public function update(Request $request, $id)
    {
        $content = Content::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string|min:3|max:255',
            'nama_file' => 'required|string|min:3|max:255',
            'kategori' => 'required',
        ]);

        $insert_tag = [];
        $insert_ver = [];

        if($request->label){
            foreach ($request->label as $key => $value) {
                array_push($insert_tag, (int)$value);
            }
        }
        if($request->versi){
            foreach ($request->versi as $key => $value) {
                array_push($insert_ver, (int)$value);
            }
        }

        $label = Tag::find($insert_tag);
        $versi = Version::find($insert_ver);

        $content->update([
            'title' => $request->judul,
            'content_file' => $request->nama_file,
            'category_id' => $request->kategori,
        ]);

        $content->tag()->sync($label);
        $content->version()->sync($versi);

        return redirect( route('konten') )
                ->with('success','Konten: '.$content->title.' berhasil di update.');
    }

    public function destroy($id)
    {
        $content = Content::where('id', $id)->first();
        $value_content = $content->title;

        $content->delete();
        $content->version()->detach();
        $content->tag()->detach();

        return redirect( route('konten') )
                ->with('success','Konten '.$value_content.' berhasil dihapus.');
    }
}
