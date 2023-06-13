<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CmsPage;

class CmsController extends Controller
{


    public function index()
    {
        return CmsPage::all();
    }
    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required',
            'text' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);

        return CmsPage::create($request->all());
    }

    public function show($id)
    {
        $cmsPage = CmsPage::find($id);
        if ($cmsPage) {
            return $cmsPage;
        }
        return response()->json(['message' => 'CmsPage not found'], 404);
    }


    public function update(Request $request, CmsPage $cmspage)
    {
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);

        $cmspage->update($request->all());
        return $cmspage;
    }

    public function destroy($id)
    {
        $cmsPage = CmsPage::find($id);
        if ($cmsPage) {
            $cmsPage->delete();
            return response()->json(['message' => 'CmsPage deleted successfully']);
        }
        return response()->json(['message' => 'CmsPage not found'], 404);
    }
}
