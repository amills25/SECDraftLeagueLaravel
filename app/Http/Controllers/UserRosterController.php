<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRosterRequest;
use App\Http\Requests\UpdateUserRosterRequest;
use App\Models\UserRoster;

class UserRosterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserRosterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRosterRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserRoster  $userRoster
     * @return \Illuminate\Http\Response
     */
    public function show(UserRoster $userRoster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserRoster  $userRoster
     * @return \Illuminate\Http\Response
     */
    public function edit(UserRoster $userRoster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRosterRequest  $request
     * @param  \App\Models\UserRoster  $userRoster
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRosterRequest $request, UserRoster $userRoster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserRoster  $userRoster
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserRoster $userRoster)
    {
        //
    }
}
