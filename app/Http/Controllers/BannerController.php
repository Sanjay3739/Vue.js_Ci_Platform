<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Validation\ValidationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class BannerController extends Controller
{
    public function index()
    {
        return Banner::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'sort_order' => 'required',
            'image' => 'required',
        ]);

        $request->image->store('public/uploads');

        $banner = new Banner([
            "text" => $request->get('text'),
            "sort_order" => $request->get('sort_order'),
            "image" => $request->image->hashName()
        ]);

        $banner->save();

        return response()->json(['message' => 'New Banner added successfully'], 200);
    }

    public function show($id)
    {
        $banner = Banner::find($id);

        if (!$banner) {
            return response()->json(['message' => 'Banner not found'], 404);
        }

        return response()->json(['banner' => $banner], 200);
    }

    public function update(Request $request, Banner $banner)
    {
        // $image = $request->file('image');
        // dd($image);
        try {
            $validatedData = $request->validate([
                'text' => 'required',
                'sort_order' => 'required',
            ]);
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'image',
                ]);

                $image = $request->file('image');
                $imageName = $image->hashName();
                $image->store('public/uploads');
                $banner->image = $imageName;
            }
            $banner->update($validatedData);
            return response()->json($banner);
        } catch (ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
    }
    public function destroy($id)
    {
        $banner = Banner::find($id);
        if ($banner) {
            $banner->delete();
            return response()->json(['message' => 'banner deleted successfully']);
        }
        return response()->json(['message' => 'banner not found'], 404);
    }
}
