<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Kategorije;
use Illuminate\Http\Request;

class KategorijeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $kategorije = DB::table('kategorije')
            ->orderBy('imeKat')
            ->get();

        $guns=DB::table('guns')
            ->get();
        

        return view('kategorije.index', ['kategorije' => $kategorije, 'guns'=>$guns]);
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
     * @param  \App\Models\Kategorije  $kategorije
     * @return \Illuminate\Http\Response
     */
    public function show(Kategorije $kategorije)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kategorije  $kategorije
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategorije $kategorije)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kategorije  $kategorije
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategorije $kategorije)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kategorije  $kategorije
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategorije $kategorije)
    {
        //
    }
}
