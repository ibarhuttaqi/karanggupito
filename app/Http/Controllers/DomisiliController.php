<?php

namespace App\Http\Controllers;

use App\Models\Domisili;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDomisiliRequest;
use App\Http\Requests\UpdateDomisiliRequest;

class DomisiliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('letters.domisili.index', [
            'title' => 'Data Surat domisili',
            'domisili' => Domisili::latest()->filter(request(['search']))->paginate(20)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('letters.domisili.create');
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
            'kebangsaan' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
        ]);
        
        $validatedData['tipeSurat'] = 'Surat Domisili';
        $validatedData['tanggalSurat'] = now();
        $validatedData['manager_id'] = 1;
        Domisili::create($validatedData);

        return redirect('/surat')->with('success', 'Surat Domisili Berhasil Ditambah, silahkan ke kantor Desa Karanggupito untuk melakukan proses tanda tangan dan print');

    }

    /**
     * Display the specified resource.
     */
    public function show(Domisili $domisili)
    {
        //
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('letters.domisili.show', [
            'domisili' => $domisili
        ]);
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Domisili $domisili)
    {
        //
        return view('letters.domisili.edit', [
            'domisili' => $domisili,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Domisili $domisili)
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
            'kebangsaan' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
        ];
        
        $validatedData = $request->validate($rules);

        Domisili::where('id', $domisili->id)->update($validatedData);
        return redirect('/surat/domisili')->with('success', 'Surat Domisili berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Domisili $domisili)
    {
        //
        Domisili::destroy($domisili->id);
        return redirect('/surat/domisili')->with('success', 'Data Surat Domisili Berhasil Dihapus');
    }
}
