<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = DB::table('carts')
            ->join('guns', 'carts.idGun', '=', 'guns.id')
            ->join('users', 'carts.idKupac', '=', 'users.id')
            ->select('guns.nazivGun as puska','users.name as kor','carts.*')
            ->get();

        $lema = DB::table('carts')
            ->join('guns', 'carts.idGun', '=', 'guns.id')
            ->join('users', 'carts.idKupac', '=', 'users.id')
            ->select('guns.nazivGun as puska','users.name as kor','carts.*')
            ->where('idKupac','=','1')
            ->get();

        $najcescePuske=DB::table('guns')
            ->select('guns.nazivGun',DB::raw('count(*) as brojac'))
            ->groupBy('guns.nazivGun','guns.id')
            ->join('carts','guns.id','=','carts.idGun')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(4)
            ->get();

        $najDrzave=DB::table('guns')
            ->select('brands.drzava',DB::raw('count(*) as brojac'))
            ->groupBy('brands.drzava')
            ->join('carts','guns.id','=','carts.idGun')
            ->join('brands','guns.idBrend','=','brands.id')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(4)
            ->get();

            return view('cart.index', ['carts' => $carts, 'lema'=>$lema,'najcescePuske'=>$najcescePuske, 'najDrzave'=>$najDrzave]);
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
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
