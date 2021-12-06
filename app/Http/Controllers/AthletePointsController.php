<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAthletePointsRequest;
use App\Http\Requests\UpdateAthletePointsRequest;
use App\Models\AthletePoints;

class AthletePointsController extends Controller
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
     * @param  \App\Http\Requests\StoreAthletePointsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAthletePointsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AthletePoints  $athletePoints
     * @return \Illuminate\Http\Response
     */
    public function show(AthletePoints $athletePoints)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AthletePoints  $athletePoints
     * @return \Illuminate\Http\Response
     */
    public function edit(AthletePoints $athletePoints)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAthletePointsRequest  $request
     * @param  \App\Models\AthletePoints  $athletePoints
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAthletePointsRequest $request, AthletePoints $athletePoints)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AthletePoints  $athletePoints
     * @return \Illuminate\Http\Response
     */
    public function destroy(AthletePoints $athletePoints)
    {
        //
    }
}
