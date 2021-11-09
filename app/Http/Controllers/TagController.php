<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
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
        $tag = Tag::orderBy('name', 'ASC')->get();

        return view('dashboard.label.index', compact('tag'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_label' => 'required|string|min:3|unique:tags,name|max:255',
            'label_alternatif' => 'string|min:3|different:nama_label|unique:tags,tag_alt|max:255',
        ]);

        $tag = Tag::create([
            'name' => $request->nama_label,
            'tag_alt' => $request->label_alternatif,
        ]);

        return redirect( route('label') )
                ->with('success','Label: '.$tag->name.' berhasil di tambahkan.');
    }

    public function edit($id)
    {
        $tag = Tag::findOrFail($id);

        return view('dashboard.label.edit', compact('tag'));
    }

    public function update(Request $request, $id)
    {
        $tag = Tag::findOrFail($id);

        $validated = $request->validate([
            'nama_label' => 'required|string|min:3|unique:tags,name,'.$tag->id.',id|max:255',
            'label_alternatif' => 'required|string|min:3|different:nama_label|unique:tags,tag_alt,'.$tag->id.'|max:255',
        ]);

        $tag->update([
            'name' => $request->nama_label,
            'tag_alt' => $request->label_alternatif,
        ]);

        return redirect( route('label') )
                ->with('success','Label: '.$tag->name.' berhasil di update.');
    }

    public function destroy($id)
    {
        $tag = Tag::findOrFail($id);
        $value_tag = $tag->name;

        $tag->delete();

        return redirect( route('label') )
                ->with('success','Label: '.$value_tag.' berhasil dihapus.');
    }
}
