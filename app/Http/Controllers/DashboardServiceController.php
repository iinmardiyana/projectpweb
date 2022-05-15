<?php

namespace App\Http\Controllers;

use App\Models\postl;
use App\Models\kategoriLayanan;
use Illuminate\Http\Request;
use App\Models\User;
class DashboardServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.service.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.service.create',[
            'kategorilayanans' => kategoriLayanan::all()
            // 'kategorilayanans' => kategoriLayanan::where('user_id', auth()->user()->id)->get()
        ] );
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
     * @param  \App\Models\postl  $postl
     * @return \Illuminate\Http\Response
     */
    public function show(postl $postl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\postl  $postl
     * @return \Illuminate\Http\Response
     */
    public function edit(postl $postl)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\postl  $postl
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, postl $postl)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\postl  $postl
     * @return \Illuminate\Http\Response
     */
    public function destroy(postl $postl)
    {
        //
    }
}
