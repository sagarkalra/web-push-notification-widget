<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use File;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class DeliveryController extends Controller
{
    protected $clientJS = 'main.js';
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = [
            "account_id" => $id,
            "host" => "https://bebetter.in/",
            "api_key" => "AIzaSyCzvaekWSLHG7FAf-IV3QS3bBJMvdY6k1s",
            "gcm_endpoint" => "https://android.googleapis.com/gcm/send",
            "register_endpoint" => "subscriber",
            "logging" => true
        ];
        $contents = File::get($this->clientJS);
        return response()->view('delivery.index', ['contents' => $contents, 'user' => json_encode($user, JSON_UNESCAPED_SLASHES)])->header('Content-Type', 'application /javascript');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
