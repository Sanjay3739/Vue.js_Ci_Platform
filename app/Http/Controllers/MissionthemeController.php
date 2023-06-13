<?php

namespace App\Http\Controllers;

use App\Models\MissionTheme;
use Illuminate\Http\Request;

class MissionthemeController extends Controller
{

    public function index()
    {
        return MissionTheme::all();
    }


    public function store(Request $request)
    {
        $request->validate([
            'title',
            'status',
        ]);

        return MissionTheme::create($request->all());
    }

    public function show($id)
    {
        $missiontheme = MissionTheme::find($id);
        if ($missiontheme) {
            return $missiontheme;
        }
        return response()->json(['message' => 'missiontheme not found'], 404);
    }

    public function update(Request $request, MissionTheme $missiontheme)
    {
        $request->validate([
            'title',
            'status',
        ]);

        $missiontheme->update($request->all());
        return $missiontheme;
    }

    public function destroy($id)
    {
        $missiontheme = MissionTheme::find($id);
        if ($missiontheme) {
            $missiontheme->delete();
            return response()->json(['message' => 'missiontheme deleted successfully']);
        }
        return response()->json(['message' => 'missiontheme not found'], 404);
    }
}
