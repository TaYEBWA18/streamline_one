<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //applying the middleware to the create method up here
        @middleware('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //applying the middleware to the store method up here
    
     @middleware('CheckRole');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //applying the middleware to the edit method up here
        @middleware('edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //applying the middleware to the update method up here
        @middleware('update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
