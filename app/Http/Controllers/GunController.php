<?php

namespace App\Http\Controllers;
use DB;

use App\Models\Gun;
use Illuminate\Http\Request;

class GunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guns = DB::table('guns')
            ->join('brands', 'guns.idBrend', '=', 'brands.id')
            ->orderBy('nazivGun')
            ->select('brands.imeBrand as brend','guns.*')
            ->get();

        $brands = DB::table('brands')
            ->get();
        return view('guns.index', ['guns' => $guns]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = DB::table('brands')
                ->get();
        $kategorije = DB::table('kategorije')
               ->get();
        return view('guns.add',['brands'=> $brands, 'kategorije'=>$kategorije]);
    }

    public function home(){
        $guns = DB::table('guns')
                ->get();

        $novi=DB::table('guns')
                ->orderBy('id','DESC') 
                ->limit(4)
                ->get();

        $best=DB::table('guns')
                ->where('rating', 5)
                ->limit(4)
                ->get();

        $brands = DB::table('brands')
                ->get();

        $kategorije = DB::table('kategorije')
                ->orderBy('imeKat')
                ->get();

        $drzava = DB::table('guns')
               ->join('brands', 'guns.idBrend', '=', 'brands.id')
               ->orderBy('nazivGun')
               ->where('brands.drzava', 'Great Britain')
               ->select('brands.imeBrand as brend','guns.*')
               ->limit(4)
               ->get();

        $izmedju=DB::table('guns')
            ->whereRaw('guns.cijena BETWEEN ' . 0 . ' AND ' . 500 . '')
            ->orderBy('cijena')
            ->limit(4)
            ->get();

        $kao=DB::table('guns')
            ->where('nazivGun','like','%AK%')
            ->limit(4)
            ->get();

        $data = DB::table('guns')->select('idBrend')->where('idBrend','=','2')->get()->count();
        
        $riley=DB::table('guns')
            ->select('guns.*')
            ->where('idBrend','=','2')
            ->get();

        return view('guns.home',['guns' => $guns, 'brands'=> $brands, 'kategorije'=>$kategorije, 'novi'=>$novi, 'best'=>$best, 'drzava'=>$drzava, 'izmedju'=>$izmedju, 'kao'=>$kao, 'data'=>$data]);
    }
    public function ispisi()
    {
        $guns = DB::table('guns')
            ->get();
        
        return view('guns.tabela', ['guns' => $guns]);
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nazivGun' => 'required|string|max:255',
        ]);

    if ($request->slikaGun) {
        $file = $request->File('slikaGun');
        $ext  = time(). "." . $file->clientExtension();
        $file->storeAs('slike/', $ext);
    }

        DB::table('guns')->insert([
            'nazivGun' => $request->nazivGun,
            'idBrend' => $request->idBrend,
            'idKat' => $request->idKat,
            'opis' => $request->opis,
            'cijena' => $request->cijena,
            'rating' => $request->rating,
            'slikaGun' => $ext,
        ]);
    
        return redirect()->route('guns');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gun  $gun
     * @return \Illuminate\Http\Response
     */
    public function show(Gun $gun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gun  $gun
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $id=$request->id;

        $guns=DB::table('guns')
            ->where('id',$id)
            ->get();

        $brands = DB::table('brands')
                ->get();

        $kategorije = DB::table('kategorije')
               ->get();

        return view('guns.edit',['guns'=>$guns, 'brands'=> $brands, 'kategorije'=>$kategorije]);
 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gun  $gun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id=$request->id;

        $request->validate([
            'nazivGun' => 'required|string|max:255',
        ]);

        $slika = $request->stara;
        if($request->nova != NULL) {

                $file = $request->File('nova');
                $ext  = time(). "." . $request->file('nova')->getClientOriginalExtension();
                $file->storeAs('slike/', $ext);
            
            $slika=$ext;
            
        }

        $update_query=DB::table('guns')
            ->where('id',$id)
            ->update([
            'nazivGun' => $request->nazivGun,
            'idBrend' => $request->idBrend,
            'idKat' => $request->idKat,
            'opis' => $request->opis,
            'cijena' => $request->cijena,
            'rating' => $request->rating,
            'slikaGun' => $slika
            ]);

            return redirect()->route('ispis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gun  $gun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id=$request->id;

        Gun::destroy($id);

        return redirect()->route('ispis');
    }
}
