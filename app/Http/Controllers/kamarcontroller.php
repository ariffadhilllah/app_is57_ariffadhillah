<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jeniskamar;
use App\Models\kamar;

class kamarcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor =1;
        $kamar = kamar::all();
        return view('page.kamar.index', compact('kamar','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $jeniskamar = jeniskamar::all();
        return view('page.kamar.form',compact('jeniskamar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ext = $request->foto->extension();
        $namaFile = $request->no_kamar.".".$ext;
        $simpan = $request->foto->move('fotokamar',$namaFile);
        

        $kamar = new kamar;
        $kamar->no_kamar = $request->no;
        $kamar->jeniskamars_id = $request->kamar;
        if($request->has('foto'))
        {
            $kamar->foto = $namaFile;
        }
        
        $kamar->save();

        return redirect('/kamar');
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
        $kamar = Kamar::find($id);
        return view('page.kamar.edit', compact('kamar'));
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
        $kamar = Kamar::find($id);

        $kamar->no_kamar = $request->no;
        $kamar->jeniskamar_id = $request->jeniskamar;
        $kamar->max_dewasa = $request->max_dewasa;
        $kamar->max_anak = $request->max_anak;
        $kamar->harga = $request->harga;
        
        $kamar->save();

        return redirect('/kamar');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kamar = kamar:: find($id);

      
        $kamar->delete();

        return redirect('/kamar');
    }
}
