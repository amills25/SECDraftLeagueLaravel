<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeeklyReportRequest;
use App\Http\Requests\UpdateWeeklyReportRequest;
use App\Models\WeeklyReport;

class WeeklyReportController extends Controller
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
     * @param  \App\Http\Requests\StoreWeeklyReportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWeeklyReportRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WeeklyReport  $weeklyReport
     * @return \Illuminate\Http\Response
     */
    public function show(WeeklyReport $weeklyReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WeeklyReport  $weeklyReport
     * @return \Illuminate\Http\Response
     */
    public function edit(WeeklyReport $weeklyReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWeeklyReportRequest  $request
     * @param  \App\Models\WeeklyReport  $weeklyReport
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWeeklyReportRequest $request, WeeklyReport $weeklyReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WeeklyReport  $weeklyReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeeklyReport $weeklyReport)
    {
        //
    }
}
