<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class MissionskillController extends Controller
{
    public function index()
    {
        return Skill::all();
    }


    public function store(Request $request)
    {
        $request->validate([

            'skill_name',
            'status',
        ]);

        return Skill::create($request->all());
    }

    public function show($id)
    {
        $missionskill = Skill::find($id);
        if ($missionskill) {
            return $missionskill;
        }
        return response()->json(['message' => 'missionskill not found'], 404);
    }

    public function update(Request $request, Skill $missionskill)
    {
        $request->validate([
            'skill_name',
            'status',
        ]);

        $missionskill->update($request->all());
        return $missionskill;
    }

    public function destroy($id)
    {
        $missionskill = Skill::find($id);
        if ($missionskill) {
            $missionskill->delete();
            return response()->json(['message' => 'missionskill deleted successfully']);
        }
        return response()->json(['message' => 'missionskill not found'], 404);
    }
}
