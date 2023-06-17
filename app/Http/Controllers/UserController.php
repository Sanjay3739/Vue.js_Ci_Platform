<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index(Request $request)
    {
        return User::all();
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
            'email' => 'required|email:snoof',
            'phone_number' => 'bail|required|numeric',
            // 'password' => 'required',
            // 'confirm_password' => 'bail|required|same:password',
            'employee_id' => 'numeric',
            'avatar' => 'required',
            'department' => 'required',
            'profile_text' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
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

    public function edit($id)
    {
        /**
         * Show the form for editing the specified resource.
         */
        $user = User::find($id);
        if ($user->city_id != null) {
            $cities = $user->country->city;
            $countries = Country::get(['name', 'country_id']);
            return view('admin.user.edit', compact('user', 'countries', 'cities'));
        } else {
            $countries = Country::get(['name', 'country_id']);
            return view('admin.user.edit', compact('user', 'countries'));
        }
    }

    public function update(Request $request, $id)
    {

        /**
         * Update the specified resource in storage.
         */
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            // 'email' => 'bail|required|email',
            'phone_number' => 'bail|required|numeric',
            // 'password' => 'required',
            // 'confirm_password' => 'bail|required|same:password',
            'employee_id' => 'numeric',
            'avatar' => 'required',
            'department' => 'required',
            'profile_text' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
            'status' => 'required',
        ]);

        // $password = $validatedData['password'];
        // $validatedData['password'] = bcrypt($password);
        User::findOrFail($id)->fill($validatedData)->save();
        return redirect()->route('user.index')->with('message', 'Your!.. Data Updated sucessfully 🙂👍');
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
