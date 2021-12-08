<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLineupRequest;
use App\Http\Requests\UpdateLineupRequest;
use App\Models\Lineup;
use App\Models\Athlete;
use App\Models\Week;

class LineupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Lineup::with(['user', 'weeks.athlete'])->get();
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
     * @param  \App\Http\Requests\StoreLineupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLineupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lineup  $lineup
     * @return \Illuminate\Http\Response
     */
    public function show(Lineup $lineup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lineup  $lineup
     * @return \Illuminate\Http\Response
     */
    public function edit(Lineup $lineup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLineupRequest  $request
     * @param  \App\Models\Lineup  $lineup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLineupRequest $request, Lineup $lineup)
    {
        dd($request);
        //TO DO: deconstruct generateRows helper from react
        //update the athlete, and make a for loop to update all 10 of the individual weeks per athlete
        $athlete = Athlete::find($request->athlete_id);

        $athlete->active = $request->active;
        $athlete->name = $request->name;
        $athlete->team = $request->team;

        $athlete->save();

        for ($i = 1; $i <= 10; $i++) {
            //update all 10 of the individual weeks per athlete
        }


        $week = Week::find($request->week_id);

        $week->points = $request->points;
        $week->week_number = $request->week_number;

        $week->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lineup  $lineup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lineup $lineup)
    {
        //
    }
}
