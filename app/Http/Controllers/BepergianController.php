<?php

namespace App\Http\Controllers;

use App\Models\Bepergian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBepergianRequest;
use App\Http\Requests\UpdateBepergianRequest;

class BepergianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('letters.bepergian.index', [
            'title' => 'Data Surat bepergian',
            'bepergian' => Bepergian::latest()->filter(request(['search']))->paginate(20)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('letters.bepergian.create');
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
            'nik' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required|date',
            'kelamin' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'tujuan' => 'required',
            'keperluan' => 'required',
        ]);
        
        $validatedData['tipeSurat'] = 'Surat Bepergian';
        $validatedData['tanggalSurat'] = now();
        $validatedData['manager_id'] = 1;
        Bepergian::create($validatedData);

        return redirect('/surat')->with('success', 'Surat Bepergian Berhasil Ditambah, silahkan ke kantor Desa Karanggupito untuk melakukan proses tanda tangan dan print');

    }

    /**
     * Display the specified resource.
     */
    public function show(Bepergian $bepergian)
    {
        //
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('letters.bepergian.show', [
            'bepergian' => $bepergian
        ]);
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bepergian $bepergian)
    {
        //
        return view('letters.bepergian.edit', [
            'bepergian' => $bepergian,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bepergian $bepergian)
    {
        //
        $rules = [
            'nomorSurat' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required|date',
            'kelamin' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'tujuan' => 'required',
            'keperluan' => 'required',
        ];
        
        $validatedData = $request->validate($rules);

        Bepergian::where('id', $bepergian->id)->update($validatedData);
        return redirect('/surat/bepergian')->with('success', 'Surat Bepergian berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bepergian $bepergian)
    {
        //
        Bepergian::destroy($bepergian->id);
        return redirect('/surat/bepergian')->with('success', 'Data Surat Bepergian Berhasil Dihapus');
    }
}
