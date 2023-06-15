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


    // public function show($story_id)
    // {
    //     /**
    //      * View  the specified application from resorces.
    //      */
    //     $story = Story::join('users', 'users.user_id', '=', 'stories.user_id')->join('missions', 'missions.mission_id', '=', 'stories.mission_id')->where(['story_id' => $story_id])->first((['*', 'stories.title AS story_title', 'stories.description AS story_desc']));
    //     $medias = StoryMedia::where(['story_id' => $story_id])->get();
    //     // $medias['ogPath'] = storage_public('images/' . $medias->path);
    //     return view('admin.story.view_story', compact('story', 'medias'));
    // }
    public function approve($id)
    {
        $story = Story::findOrFail($id);
        $story->status = 'PUBLISHED';
        $story->save();

        // Optionally, you can return a response or success message
        return response()->json(['message' => 'story approved successfully']);
    }
    public function decline($id)
    {
        $story = Story::findOrFail($id);
        $story->status = 'DECLINED';
        $story->save();

        // Optionally, you can return a response or success message
        return response()->json(['message' => 'Application declined successfully']);
    }
    
    // public function approve($story_id)
    // {
    //     /**
    //      * Approve  the specified application from resorces.
    //      */
    //     Story::where('story_id', $story_id)->update(['status' => 'PUBLISHED']);
    //     return redirect('story')->with('message', 'Your!..........Story Published 😁👌');
    // }

    // public function decline($story_id)
    // {
    //     /**
    //      * Decline  the specified application from resorces.
    //      */
    //     Story::where('story_id', $story_id)->update(['status' => 'DECLINED']);
    //     return redirect('story')->with('message', 'Your!...........Story  Decline 😒');
    // }
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
