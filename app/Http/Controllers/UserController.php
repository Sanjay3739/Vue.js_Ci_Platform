<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Egulias\EmailValidator\EmailValidator;
use Egulias\EmailValidator\Validation\DNSCheckValidation;
class UserController extends Controller
{
    public function index(Request $request)
    {

        $users = User::orderByDesc('user_id')->get();
        return response()->json($users);
    }

    public function create()
    {
        $countries = Country::get(['name', 'country_id']);
        return response()->json(['countries' => $countries]);
    }

    public function store(Request $request)
    {
        /**
         * Store a newly created resource in storage.
         */
        $validatedData = $request->validate([
            'first_name' => 'required|max:16',
            'last_name' => 'required|max:16',
            'email' => 'required|email:dns',

            'phone_number' => 'bail|required|numeric',
            // 'password' => 'required',
            // 'confirm_password' => 'bail|required|same:password',
            'employee_id' => 'numeric',
            'avatar' => 'required',
            'department' => 'required',
            'profile_text' => 'required',
            'country_id' => 'required',
            // 'city_id' => 'required',
            'status' => 'required',
        ]);
        // $password = $validatedData['password'];
        // $validatedData['password'] = bcrypt($password);
        $user = User::create($validatedData);
        return response()->json(['message' => 'Your Account Created successfully'], 200);
    }

    public function show($id)
    {
        $user = User::with('city', 'country')->find($id);

        if ($user) {
            return response()->json($user);
        }

        return response()->json(['message' => 'User not found'], 404);
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'bail|required|email:dns',
            'phone_number' => 'bail|required|numeric',
            'avatar' => 'required',
            'department' => 'required',
            'profile_text' => 'required|max:216',
            'country_id' => 'required',
            'status' => 'required',
            'employee_id' => 'required|numeric',
        ]);
        User::findOrFail($id)->fill($validatedData)->save();
        return response()->json(['message' => 'User updated successfully'], 200);
    }
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return response()->json(['message' => 'CmsPage deleted successfully']);
        }
        return response()->json(['message' => 'CmsPage not found'], 404);
    }
}
