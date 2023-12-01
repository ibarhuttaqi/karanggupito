<?php

namespace App\Http\Controllers;

use App\Models\TidakMampu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTidakMampuRequest;
use App\Http\Requests\UpdateTidakMampuRequest;

class TidakMampuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('letters.tidakmampu.index', [
            'title' => 'Data Surat Tidak Mampu',
            'tidakmampu' => TidakMampu::latest()->filter(request(['search']))->paginate(20)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('letters.tidakmampu.create');
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
            'pekerjaan' => 'required',
            'sekolah' => 'required',
            'alamat' => 'required',
            'namaAyah' => 'required',
            'nikAyah' => 'required',
            'tempatLahirAyah' => 'required',
            'tanggalLahirAyah' => 'required|date',
            'pekerjaanAyah' => 'required',
            'alamatAyah' => 'required',
            'namaIbu' => 'required',
            'nikIbu' => 'required',
            'tempatLahirIbu' => 'required',
            'tanggalLahirIbu' => 'required|date',
            'pekerjaanIbu' => 'required',
            'alamatIbu' => 'required',
        ]);
        
        $validatedData['tipeSurat'] = 'Tidak mampu';
        $validatedData['tanggalSurat'] = now();
        $validatedData['manager_id'] = 1;
        TidakMampu::create($validatedData);

        return redirect('/surat')->with('success', 'Surat Tidak Mampu Berhasil Ditambah, silahkan ke kantor Desa Karanggupito untuk melakukan proses tanda tangan dan print');
    

    }

    /**
     * Display the specified resource.
     */
    public function show(TidakMampu $tidakmampu)
    {
        //
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('letters.tidakmampu.show', [
            'tidakmampu' => $tidakmampu
        ]);
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TidakMampu $tidakmampu)
    {
        //
        return view('letters.tidakmampu.edit', [
            'tidakmampu' => $tidakmampu,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TidakMampu $tidakmampu)
    {
        //
        $rules = [
            'nomorSurat' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required|date',
            'kelamin' => 'required',
            'pekerjaan' => 'required',
            'sekolah' => 'required',
            'alamat' => 'required',
            'namaAyah' => 'required',
            'nikAyah' => 'required',
            'tempatLahirAyah' => 'required',
            'tanggalLahirAyah' => 'required|date',
            'pekerjaanAyah' => 'required',
            'alamatAyah' => 'required',
            'namaIbu' => 'required',
            'nikIbu' => 'required',
            'tempatLahirIbu' => 'required',
            'tanggalLahirIbu' => 'required|date',
            'pekerjaanIbu' => 'required',
            'alamatIbu' => 'required',
        ];
        
        $validatedData = $request->validate($rules);

        TidakMampu::where('id', $tidakmampu->id)->update($validatedData);
        return redirect('/surat/tidakmampu')->with('success', 'Surat tidak mampu berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TidakMampu $tidakmampu)
    {
        //
        TidakMampu::destroy($tidakmampu->id);
        return redirect('/surat/tidakmampu')->with('success', 'Data Surat Tidak Mampu Berhasil Dihapus');
    }
}
