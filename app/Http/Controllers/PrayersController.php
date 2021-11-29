<?php

namespace App\Http\Controllers;

use App\Models\Prayers;
use App\Http\Requests\StorePrayersRequest;
use App\Http\Requests\UpdatePrayersRequest;

class PrayersController extends Controller
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
     * @param  \App\Http\Requests\StorePrayersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrayersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prayers  $prayers
     * @return \Illuminate\Http\Response
     */
    public function show(Prayers $prayers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prayers  $prayers
     * @return \Illuminate\Http\Response
     */
    public function edit(Prayers $prayers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrayersRequest  $request
     * @param  \App\Models\Prayers  $prayers
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrayersRequest $request, Prayers $prayers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prayers  $prayers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prayers $prayers)
    {
        //
    }
}
