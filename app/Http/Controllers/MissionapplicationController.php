<?php

namespace App\Http\Controllers;

use App\Models\MissionApplication;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class MissionapplicationController extends Controller
{
    public function index()
    {
        $applications = MissionApplication::join('users', 'users.user_id', '=', 'mission_applications.user_id')
            ->join('missions', 'missions.mission_id', '=', 'mission_applications.mission_id')
            ->get();

        return response()->json($applications);
    }

    public function approve($id)
    {
        $application = MissionApplication::findOrFail($id);
        $application->approval_status = 'APPROVE';
        $application->save();

        // Return a response with the approval status
        return response()->json(['message' => 'Application approved successfully', 'status' => $application->approval_status]);
    }

    public function decline($id)
    {
        $application = MissionApplication::findOrFail($id);
        $application->approval_status = 'DECLINE';
        $application->save();

        // Return a response with the approval status
        return response()->json(['message' => 'Application declined successfully', 'status' => $application->approval_status]);
    }
}
