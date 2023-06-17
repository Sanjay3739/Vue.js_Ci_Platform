<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
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
            'text' => 'required|string',
            'sort_order' => 'required|integer',
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



    public function update(Request $request, $id)
    {
        $request->validate([
            'text' => 'required|string',
            'sort_order' => 'required|integer',
            'image' => 'nullable|image',
        ]);

        $banner = Banner::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName();
            $image->store('public/uploads');
            $banner->image = $imageName;
        }

        $banner->text = $request->input('text');
        $banner->sort_order = $request->input('sort_order');
        $banner->save();

        return response()->json(['message' => 'Banner updated successfully'], 200);
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
