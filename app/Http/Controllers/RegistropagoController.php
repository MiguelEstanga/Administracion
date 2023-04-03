<?php

namespace App\Http\Controllers;

use App\Models\registropago;
use App\Http\Requests\StoreregistropagoRequest;
use App\Http\Requests\UpdateregistropagoRequest;

class RegistropagoController extends Controller
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
     * @param  \App\Http\Requests\StoreregistropagoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreregistropagoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registropago  $registropago
     * @return \Illuminate\Http\Response
     */
    public function show($id1  , $id2)
    {
       return [$id1 , $id2];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registropago  $registropago
     * @return \Illuminate\Http\Response
     */
    public function edit(registropago $registropago)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateregistropagoRequest  $request
     * @param  \App\Models\registropago  $registropago
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateregistropagoRequest $request, registropago $registropago)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registropago  $registropago
     * @return \Illuminate\Http\Response
     */
    public function destroy(registropago $registropago)
    {
        //
    }
}
