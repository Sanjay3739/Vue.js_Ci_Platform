<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\CmsPage;
use Illuminate\Validation\ValidationException;

class CmsController extends Controller
{


    public function index()
    {
        return CmsPage::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'slug' => 'required',
            'status' => 'required',
        ]);

        $cmsPage = CmsPage::create($validatedData);

        return response()->json($cmsPage, 201);
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
        $validatedData = $request->validate([
            'title' => 'required',
            'text' => 'required',
            'slug' =>'required',

            'status' => 'required',
        ]);

        $cmspage->update($validatedData);

        return response()->json($cmspage);
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
