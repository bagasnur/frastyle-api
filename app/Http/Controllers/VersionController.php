<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Version;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class VersionController extends Controller
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
        $version = Version::orderBy('number', 'ASC')->get();

        return view('dashboard.versi.index', compact('version'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'versi' => 'required|numeric|unique:versions,number|max:255',
            'tahap_versi' => ['required', Rule::in(['beta', 'rc', 'release'])]
        ]);

        $version = Version::create([
            'number' => $request->versi,
            'stage' => $request->tahap_versi,
        ]);

        return redirect( route('versi') )
                ->with('success','Versi '.$version->number.'.x berhasil di tambahkan.');
    }

    public function edit($id)
    {
        $version = Version::findOrFail($id);
        $stage = $version->stage;

        return view('dashboard.versi.edit', compact('version', 'stage'));
    }

    public function update(Request $request, $id)
    {
        $version = Version::findOrFail($id);

        $validated = $request->validate([
            'versi' => 'required|numeric|unique:versions,number,'.$version->id.',id|max:255',
            'tahap_versi' => ['required', Rule::in(['beta', 'rc', 'release'])]
        ]);


        $version->update([
            'number' => $request->versi,
            'stage' => $request->tahap_versi,
        ]);

        return redirect( route('versi') )
                ->with('success','Versi '.$version->number.'.x berhasil di update.');
    }

    public function destroy($id)
    {
        $version = Version::findOrFail($id);
        $value_version = $version->number;

        $version->delete();

        return redirect( route('versi') )
                ->with('success','Versi '.$value_version.'.x berhasil dihapus.');
    }
}
