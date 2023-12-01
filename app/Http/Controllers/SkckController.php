<?php

namespace App\Http\Controllers;

use App\Models\Skck;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use App\Http\Requests\StoreSkckRequest;
use App\Http\Requests\UpdateSkckRequest;

class SkckController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('letters.skck.index', [
            'title' => 'Data SKCK',
            'skck' => Skck::latest()->filter(request(['search']))->paginate(20)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('letters.skck.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
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
            'keterangan' => 'required',
        ]);
        
        $validatedData['tipeSurat'] = 'SKCK';
        $validatedData['tanggalSurat'] = now();
        $validatedData['manager_id'] = 1;
        Skck::create($validatedData);

        return redirect('/surat')->with('success', 'SKCK Berhasil Ditambah, silahkan ke kantor Desa Karanggupito untuk melakukan proses tanda tangan dan print');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skck $skck)
    {
        //
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('letters.skck.show', [
            'skck' => $skck
        ]);
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skck $skck)
    {
        //
        return view('letters.skck.edit', [
            'skck' => $skck,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skck $skck)
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
            'keterangan' => 'required',
        ];
        
        $validatedData = $request->validate($rules);

        Skck::where('id', $skck->id)->update($validatedData);
        return redirect('/surat/skck')->with('success', 'SKCK berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skck $skck)
    {
        //
        Skck::destroy($skck->id);
        return redirect('/surat/skck')->with('success', 'Data SKCK Berhasil Dihapus');
    }
}
