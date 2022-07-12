<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationsRequest;
use App\Http\Requests\UpdateApplicationsRequest;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Return the view
        return view('application');
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
     * @param  \App\Http\Requests\StoreApplicationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplicationsRequest $request)
    {
        // Create new application instance
        $application = new Application();

        // Add values to application variable
        foreach ($request->safe() as $key => $value) {
            if($key == 'sound_room_call_count') {
                $application->call_count = $value;
            } else {
                $application->$key = $value;
            }
        }

        if($application->save()) {
            return redirect()->route('welcome')->with('status', 'Application sent successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $bookings
     * @return \Illuminate\Http\Response
     */
    public function show(Application $bookings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $bookings
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $bookings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApplicationsRequest  $request
     * @param  \App\Models\Application  $bookings
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplicationsRequest $request, Application $bookings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $bookings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $bookings)
    {
        //
    }
}
