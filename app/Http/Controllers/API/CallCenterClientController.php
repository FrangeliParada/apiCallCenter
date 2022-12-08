<?php

namespace App\Http\Controllers\API;

use App\Models\CallCenterClient;
use Illuminate\Http\Request;
use App\Http\Request\ActualizarClienteRequest;
use App\Http\Controllers\Controller as Controller;

class CallCenterClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $CallCenterClients = CallCenterClient::all();
        return $CallCenterClients;
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
        // laravel excel
        // composer require maatwebsite/excel
        // composer require psr/simple-cache:^2.0 maatwebsite/excel
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CallCenterClient  $callCenterClient
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $CallCenterClients = CallCenterClient::where("status", "=", 0)
            ->where("available", "=", 1)
            ->firstOrFail();

        // if ($CallCenterClients) {
        //     $CallCenterClients->available = 0;
        //     $CallCenterClients->save();
        // }
        return $CallCenterClients;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CallCenterClient  $callCenterClient
     * @return \Illuminate\Http\Response
     */
    public function edit(CallCenterClient $callCenterClient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CallCenterClient  $callCenterClient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $cliente = CallCenterClient::findOrFail($request->id);
        $cliente ->id= $request->id;
        $cliente ->status= $request->status;
        $cliente ->observations= $request->observations;
        $cliente->save();

        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CallCenterClient  $callCenterClient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $cliente= CallCenterClient::destroy($request->id);
        return $cliente;
    }
}
