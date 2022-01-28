<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Resources\MessageResource;
use App\Http\Requests\StoreMessageRequest;
use Illuminate\Support\Facades\Redirect;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();

        return Inertia::render('Messages/Index', [
            'messages' => MessageResource::collection($messages),
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessageRequest $request)
    {
        Message::create($request->validated());

        return Redirect::route('home')->with('message', 'The message was sent...');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        return Inertia::render('Messages/Show', [
            'message' => new MessageResource($message),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $message->delete();

        return redirect(route('messages.index'));
    }
}
