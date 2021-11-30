<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\UserMembership;
use App\Http\Resources\UsersResource;
use Illuminate\Support\Facades\Log;

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
            return UsersResource::collection(User::all());
        } else {
            return 'User not allowed.';
        }
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

        return new UsersResource($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faker = \Faker\Factory::create(1);

        $password = Hash::make('password');

        $user = User::create([
            'name' => $faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $password,
        ]);

        return new UsersResource($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return new UsersResource($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
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
     * @param  \App\Models\Checkout  $checkout
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
     * @param  \App\Models\Checkout  $checkout
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
}
