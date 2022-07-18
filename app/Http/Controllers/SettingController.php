<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use App\Models\Message;
use App\Models\Application;
use App\Models\Price;
use App\Models\Setting;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return mixed
     */
    public function index() {
        $admin = Auth::user();
        $contact_count = Application::all();
        $consults = Application::all();
        $open_consults = Application::all();
        $testimonials = Application::all();
        $today = Carbon::now();
        $consult_created = null;
        $testimonial_created = null;
        $open_consults->isNotEmpty() ? $open_consults = $open_consults->count() : $open_consults = 0;
        $testimonials->isNotEmpty() ? $testimonials = $testimonials->count() : $testimonials = 0;

        // Create Carbon Date if there is an open consult
        $open_consults !== 0 ? $consult_created = new Carbon(Application::all()->first()->created_at) : null;

        // Create Carbon Date if there is testimonials availble
        $testimonials !== 0 ? $testimonial_created = new Carbon(Application::all()->first()->created_at) : null;

        $standard_calls = Price::StandardCalls()->get();
        $no_holds_calls = Price::NoHoldsCalls()->get();
        $sound_room_calls = Price::SoundRoomCalls()->get();

        return view('dashboard', compact('admin', 'consults', 'open_consults', 'contact_count', 'consult_created', 'today', 'testimonials', 'testimonial_created', 'standard_calls', 'no_holds_calls', 'sound_room_calls'));
    }
    /**
     * Display the web home page
     *
     * @return mixed
     */
    public function welcome() {
        return view('welcome');
    }

    /**
     * Display the about page
     *
     * @return mixed
     */
    public function about() {
        //Return the view
        return view('about');
    }

    /**
     * Display the servives page
     *
     * @return mixed
     */
    public function services() {
        //Return the view
        return view('services');
    }

    /**
     * Display the payment options
     *
     * @return mixed
     */
    public function payment_options() {
        //Return the view
        return view('payment');
    }

    /**
     * Post and save a contact message
     *
     * @return mixed
     */
    public function send_contact(Request $request) {
        $message = new Message();

        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;

        if($message->save()) {
            return redirect()->route('welcome')->with('status', 'Message Sent Successfully');
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
     * @param  \App\Http\Requests\StoreSettingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSettingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSettingRequest  $request
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSettingRequest $request, Setting $setting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
