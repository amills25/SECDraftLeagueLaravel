<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRosterAthleteRequest;
use App\Http\Requests\UpdateUserRosterAthleteRequest;
use App\Models\UserRosterAthlete;

class UserRosterAthleteController extends Controller
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
     * @param  \App\Http\Requests\StoreUserRosterAthleteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRosterAthleteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserRosterAthlete  $userRosterAthlete
     * @return \Illuminate\Http\Response
     */
    public function show(UserRosterAthlete $userRosterAthlete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserRosterAthlete  $userRosterAthlete
     * @return \Illuminate\Http\Response
     */
    public function edit(UserRosterAthlete $userRosterAthlete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserRosterAthleteRequest  $request
     * @param  \App\Models\UserRosterAthlete  $userRosterAthlete
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRosterAthleteRequest $request, UserRosterAthlete $userRosterAthlete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserRosterAthlete  $userRosterAthlete
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserRosterAthlete $userRosterAthlete)
    {
        //
    }
}
