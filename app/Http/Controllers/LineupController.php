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

        $lineup = Lineup::find($request->lineup_id);

        for ($i = 0; $i < 9; $i++) {
            $athlete = Athlete::find($request->rows[$i]['active']['props']['athleteID']);

            $athlete->name = $request->rows[$i]['name'];
            $athlete->team = $request->rows[$i]['team'];
            $athlete->active = $request->rows[$i]['toggled'];

            $athlete->save();

            for ($j = 0; $j < count($request->rows[$i]['wkData']); $j++) {
                $weekObj = $request->rows[$i]['wkData'][$j];
                Log::debug($weekObj);
                $week = Week::find($weekObj['id']);

                $week->points = $weekObj['points'];

                $week->save();
            }
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
