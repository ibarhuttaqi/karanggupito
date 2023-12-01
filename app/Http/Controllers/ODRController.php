<?php

namespace App\Http\Controllers;

use App\Models\ODR;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreODRRequest;
use App\Http\Requests\UpdateODRRequest;

class ODRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('letters.ODR.index', [
            'title' => 'Data Surat ODR',
            'odr' => ODR::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('letters.ODR.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nomorSurat' => 'required',
            'nama' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required|date',
            'agama' => 'required',
            'kelamin' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
        ]);
        
        $validatedData['tipeSurat'] = 'ODR';
        $validatedData['tanggalSurat'] = now();
        $validatedData['manager_id'] = 1;
        ODR::create($validatedData);

        return redirect('/surat')->with('success', 'Surat ODR Berhasil Ditambah, silahkan ke kantor Desa Karanggupito untuk melakukan proses tanda tangan dan print');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(ODR $odr)
    {
        //
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('letters.ODR.show', [
            'odr' => $odr
        ]);
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ODR $odr)
    {
        //
        return view('letters.ODR.edit', [
            'odr' => $odr,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ODR $odr)
    {
        //
        $rules = [
            'nomorSurat' => 'required',
            'nama' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required|date',
            'agama' => 'required',
            'kelamin' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
        ];
        
        $validatedData = $request->validate($rules);

        ODR::where('id', $odr->id)->update($validatedData);
        return redirect('/surat/odr')->with('success', 'Surat ODR berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ODR $odr)
    {
        //
        ODR::destroy($odr->id);
        return redirect('/surat/odr')->with('success', 'Data Surat ODR Berhasil Dihapus');
    }
}
