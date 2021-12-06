<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLineupAthleteRequest;
use App\Http\Requests\UpdateLineupAthleteRequest;
use App\Models\LineupAthlete;

class LineupAthleteController extends Controller
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
     * @param  \App\Http\Requests\StoreLineupAthleteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLineupAthleteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LineupAthlete  $lineupAthlete
     * @return \Illuminate\Http\Response
     */
    public function show(LineupAthlete $lineupAthlete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LineupAthlete  $lineupAthlete
     * @return \Illuminate\Http\Response
     */
    public function edit(LineupAthlete $lineupAthlete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLineupAthleteRequest  $request
     * @param  \App\Models\LineupAthlete  $lineupAthlete
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLineupAthleteRequest $request, LineupAthlete $lineupAthlete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LineupAthlete  $lineupAthlete
     * @return \Illuminate\Http\Response
     */
    public function destroy(LineupAthlete $lineupAthlete)
    {
        //
    }
}
