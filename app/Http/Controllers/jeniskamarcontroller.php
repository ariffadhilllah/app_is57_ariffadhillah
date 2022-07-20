<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jeniskamar;

class jeniskamarcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nomor =1;
        $jeniskamar = jeniskamar::all();
        return view('page.jeniskamar.index', compact('jeniskamar','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('page.jeniskamar.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jeniskamar = new jeniskamar;

        
        $jeniskamar->kd_jenis = $request->kd_jenis;
        $jeniskamar->nm_jenis = $request->nm_jenis;
        $jeniskamar->max_anak = $request->max_anak;
        $jeniskamar->max_dewasa = $request->max_dewasa;
        $jeniskamar->harga = $request->harga;
        
        $jeniskamar->save();

        return redirect('/jeniskamar');
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
        $jeniskamar = jeniskamar::find($id);
        return view('page.jeniskamar.edit', compact('jeniskamar'));
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
        $jeniskamar = jeniskamar::find($id);

        $jeniskamar->kd_jenis = $request->kd_jenis;
        $jeniskamar->nm_jenis = $request->nm_jenis;
        $jeniskamar->max_anak = $request->max_anak;
        $jeniskamar->max_dewasa = $request->max_dewasa;
        $jeniskamar->harga = $request->harga;
      
        $jeniskamar->save();

        return redirect('/jeniskamar');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jeniskamar = jeniskamar:: find($id);

      
        $jeniskamar->delete();

        return redirect('/jeniskamar');
    }
}
