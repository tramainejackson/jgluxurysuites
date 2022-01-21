<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessagesRequest;
use App\Http\Requests\UpdateMessagesRequest;
use App\Models\Message;

class MessageController extends Controller
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
     * @param  \App\Http\Requests\StoreMessagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $messages
     * @return \Illuminate\Http\Response
     */
    public function show(Message $messages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $messages
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $messages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMessagesRequest  $request
     * @param  \App\Models\Message  $messages
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMessagesRequest $request, Message $messages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $messages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $messages)
    {
        //
    }
}
