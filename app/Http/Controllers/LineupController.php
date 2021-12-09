<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lineup;
use App\Models\Athlete;
use App\Models\Week;
use Illuminate\Support\Facades\Log;

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
    public function store(Request $request)
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
    public function update(Request $request)
    {
        Log::debug($request);
        //TO DO: deconstruct generateRows helper from react
        //update the athlete, and make a for loop to update all 10 of the individual weeks per athlete
        //loop through rows and adjust the athlete
        $lineup = Lineup::find($request->lineup_id);

        for ($i = 1; $i <= 9; $i++) {
            $athlete = Athlete::find($request->rows[$i]['active']['props']['athleteID']);

            $athlete->name = $request->rows[$i]['name'];
            $athlete->team = $request->rows[$i]['team'];
            $athlete->active = $request->rows[$i]['toggled'];

            $athlete->save();
        }

        //loop through rows and adjust the week
        for ($i = 1; $i <= 10; $i++) {
            $week = Week::find($request->wk_id);

            $week->athlete_id = $request[$i]->athlete_id;
            $week->lineup_id = $request[$i]->lineup_id;
            $week->points = $request[$i]->points;
            $week->week_number = $request[$i]->week_number;

            $week->save();
        }

        $lineup->save();
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
