<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserMembership;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userMemberships = UserMembership::where('user_id', $request->user()->id)->get()->toArray();
        $allowed = false;
        foreach ($userMemberships as $id => $userMembership) {
            if ($userMembership['membership_id'] == 1) {
                $allowed = true;
            }
        }
        if ($allowed) {
            return UserResource::collection(User::all());
        } else {
            return 'User not allowed.';
        }
    }

    //SAT: ADDED 'LINEUP'
    public function user(Request $request)
    {
        $user = $request->user();
        $userData = User::with(['userMemberships.membership', 'lineup'])->where('id', $user->id)->get();
        return $userData;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //create new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return new UserResource($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $email = User::find($request->email);

        $email = $request->input('email');

        $email->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $userMemberships = UserMembership::where('user_id', $user->id)->get();
        foreach ($userMemberships as $id => $userMembershipItem) {
            $user_membership = UserMembership::find($userMembershipItem['id']);
            $user_membership->delete();
        }

        $user->delete();
        return response(null, 204);
    }

    public function logout(Request $request)
    {
        if (Auth::user()) {
            $user = Auth::user()->token;
            $user->revoke();
            return response()->json([
                'success' => true,
                'message' => 'Logout Successful',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Logout Failed',
            ]);
        }
    }

    public function allUsers(Request $request)
    {
        return User::all();
    }
}
