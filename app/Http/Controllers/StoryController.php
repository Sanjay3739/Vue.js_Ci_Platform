<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mission;
use App\Models\Story;
use App\Models\StoryMedia;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class StoryController extends Controller
{

    public function index()
    {
        $stories = Story::join('users', 'users.user_id', '=', 'stories.user_id')
            ->join('missions', 'missions.mission_id', '=', 'stories.mission_id')
            ->select('story_id', 'stories.title as story_title','users.first_name', 'users.last_name', 'missions.title' ,'stories.status')
            ->orderBy('story_id', 'desc')
            ->get();
            return response()->json($stories);
    }

    public function approve($id)
    {
        $story = Story::findOrFail($id);
        $story->status = 'PUBLISHED';
        $story->save();


        return response()->json(['message' => 'Story approved successfully', 'status' => $story->status]);
    }
    public function decline($id)
    {
        $story = Story::findOrFail($id);
        $story->status = 'DECLINED';
        $story->save();

        return response()->json(['message' => 'Story declined successfully', 'status' => $story->status]);
    }

    public function destroy($id)
    {

        $story = Story::find($id);
        if ($story) {
            $story->delete();
            return response()->json(['message' => 'story deleted successfully']);
        }
        return response()->json(['message' => 'story not found'], 404);

    }
}
