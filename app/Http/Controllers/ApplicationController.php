<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationsRequest;
use App\Http\Requests\UpdateApplicationsRequest;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $applications = Application::paginate(9);

            //Return the view
            return view('applications.index', compact('applications'));
        } else {
            //Return the view
            return view('application');
        }
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
     * @param \App\Http\Requests\StoreApplicationsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplicationsRequest $request)
    {
        // Create new application instance
        $application = new Application();
        // Validated data
        $validated = $request->safe();

        // Add values to application variable
        foreach ($validated as $key => $value) {
            if (Str::contains($key, 'call_count'))
                continue;

            $application->$key = $value;
        }

        $call_information = $application->calls_information($validated['call_type'], $validated[$validated['call_type'] . '_count']);
        $application->call_count = $call_information[0];
        $application->amount_due = $call_information[1];

        if ($application->save()) {
            return redirect()->route('welcome')->with('status', 'Application sent successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Application $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //Return the view
        return view('applications.show', compact('application'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Application $application
     * @return \Illuminate\Http\Response
     */
    public function edit(Application $application)
    {
        //Return the view
        return view('applications.edit', compact('application'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateApplicationsRequest $request
     * @param \App\Models\Application $application
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplicationsRequest $request, Application $application)
    {
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Application $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
