<?php

namespace App\Http\Controllers;

use App\Models\MissionApplication;
use Illuminate\Http\Request;

class MissionapplicationController extends Controller
{
    public function index()
    {
        $applications = MissionApplication::join('users', 'users.user_id', '=', 'mission_applications.user_id')
            ->join('missions', 'missions.mission_id', '=', 'mission_applications.mission_id')
            // ->where('mission_applications.approval_status', 'PENDING')
            ->get();
        return response()->json($applications);
    }

    public function approve($id)
    {
        $application = MissionApplication::findOrFail($id);
        $application->approval_status = 'APPROVE';
        $application->save();

        // Optionally, you can return a response or success message
        return response()->json(['message' => 'Application approved successfully']);
    }

    public function decline($id)
    {
        $application = MissionApplication::findOrFail($id);
        $application->approval_status = 'DECLINE';
        $application->save();

        // Optionally, you can return a response or success message
        return response()->json(['message' => 'Application declined successfully']);
    }



}
