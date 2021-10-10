<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endpoint;
use App\Http\Requests\EndpointRequest;

class EndpointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Endpoint::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EndpointRequest $request)
    {
        $endpoint = new Endpoint();
        $endpoint->codendpoint = substr($request->url,8, 2).'00'.(Endpoint::count()+1);
        $endpoint->url = $request->url;
        $endpoint->description = $request->description;
        $endpoint->save();
              
        $endpoint->roles()->attach($request->roles);
        
        return response()->json([
            'Message' => 'The new endpoint was successfully saved',
            'State' => 'true'
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Endpoint $endpoint)
    {
        return response()->json([
            'Message'=> 'Showing the queried endpoint',
            'Response' => $endpoint
        ],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Endpoint $endpoint)
    {
        $endpoint->update($request->all());
        return response()->json([
            'Message'=> 'The endpoint was updated',
            'Response' => $endpoint
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Endpoint $endpoint)
    {
        $endpoint->delete();
        return response()->json([
            'Message'=> 'The endpoint was deleted',
            'Response' => $endpoint
        ],200);
    }
}
