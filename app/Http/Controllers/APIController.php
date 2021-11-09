<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Content;
use App\Models\Version;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;


class APIController extends Controller
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

    public function content(Request $request)
    {
        $versionKey = $request->v;

        $result = Content::whereHas('version', function (Builder $query) use ($versionKey) {
                                $query->where('number', $versionKey);
                            })
                            ->get()->groupBy('category.category_idn');

        if (count($result) == 0) {
            $data['code'] = 404;
            $data['message'] = "Not Found";
        } elseif ($result) {
            $data['code'] = 200;
            $data['data'] = $result;
        } else {
            $data['code'] = 500;
            $data['message'] = 'Error';
        }

        return response()->json($data);
    }

    public function search(Request $request)
    {
        $versionKey = $request->v;
        $searchKey = preg_split('/[^A-Za-z0-9]+/', $request->q);

        $result = Content::whereHas('version', function (Builder $query) use ($versionKey) {
                                $query->where('number', $versionKey);
                            })
                            ->where(function (Builder $query) use ($searchKey) {
                                $key = array_map('strtolower', $searchKey);
                                foreach ($searchKey as $key){
                                    if ($key) {
                                        $query->where(strtolower('title'), 'like', '%'.$key.'%')
                                            ->orWhere(strtolower('content_file'), 'like', '%'.$key.'%')
                                            ->orWhereHas('category', function (Builder $query) use ($key) {
                                                $query->where(strtolower('category_idn'), 'like', '%'.$key.'%')
                                                    ->orWhere(strtolower('category_eng'), 'like', '%'.$key.'%');
                                            })
                                            ->orWhereHas('tag', function (Builder $query) use ($key) {
                                                $query->where(strtolower('name'), 'like', '%'.$key.'%')
                                                    ->orWhere(strtolower('tag_alt'), 'like', '%'.$key.'%');
                                            });
                                    }
                                }
                            })
                            ->get()->groupBy('category.category_idn');

        if (count($result) == 0) {
            $data['code'] = 404;
            $data['message'] = "Not Found";
        } elseif ($result) {
            $data['code'] = 200;
            $data['data'] = $result;
        } else {
            $data['code'] = 500;
            $data['message'] = 'Error';
        }

        return response()->json($data);
    }

    public function version()
    {
        $result = Version::select('number','stage','created_at as release-date')->orderBy('number', 'DESC')->get();

        if (count($result) == 0) {
            $data['code'] = 404;
            $data['message'] = "Not Found";
        } elseif ($result) {
            $data['code'] = 200;
            $data['data'] = $result;
         } else {
            $data['code'] = 500;
            $data['message'] = 'Error';
         }

         return response()->json($data);
    }

    public function last_version()
    {
        $release_result = Version::where('stage', 'release')->select('number','stage','created_at as release-date','updated_at as last_updated')->orderBy('number', 'DESC')->first();
        $rc_result = Version::where('stage', 'rc')->select('number','stage','created_at as release-date','updated_at as last_updated')->orderBy('number', 'DESC')->first();
        $beta_result = Version::where('stage', 'beta')->select('number','stage','created_at as release-date','updated_at as last_updated')->orderBy('number', 'DESC')->first();

        if ($release_result) {
            $data['code'] = 200;
            $data['data'] = $release_result;
         } elseif ($rc_result) {
            $data['code'] = 200;
            $data['data'] = $rc_result;
         } elseif ($beta_result) {
            $data['code'] = 200;
            $data['data'] = $beta_result;
         } else {
            $data['code'] = 404;
            $data['message'] = "Not Found";
         }

         return response()->json($data);
    }
}
