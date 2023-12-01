<?php

namespace App\Http\Controllers;

use App\Models\Letter;
use App\Models\Kelahiran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreKelahiranRequest;
use App\Http\Requests\UpdateKelahiranRequest;

class KelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('letters.kelahiran.index', [
            'title' => 'Data Surat Kelahiran',
            'kelahiran' => Kelahiran::latest()->filter(request(['search']))->paginate(20)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('letters.kelahiran.create');

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
            'namaBayi' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required|date',
            'alamat' => 'required',
            // 'agama' => 'required',
            'kelamin' => 'required',
            'anakKe' => 'required',
            'pekerjaan' => 'required',
            'namaAyah' => 'required',
            // 'nikAyah' => 'required',
            'tempatLahirAyah' => 'required',
            'tanggalLahirAyah' => 'required|date',
            'alamatAyah' => 'required',
            'namaIbu' => 'required',
            // 'nikIbu' => 'required',
            'tempatLahirIbu' => 'required',
            'tanggalLahirIbu' => 'required|date',
            'alamatIbu' => 'required',
            // 'nkk' => 'required',
        ]);
        
        $validatedData['tipeSurat'] = 'Kelahiran';
        $validatedData['tanggalSurat'] = now();
        $validatedData['manager_id'] = 1;
        Kelahiran::create($validatedData);

        return redirect('/surat')->with('success', 'Surat Kelahiran Berhasil Ditambah, silahkan ke kantor Desa Karanggupito untuk melakukan proses tanda tangan dan print');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelahiran $kelahiran)
    {
        //

        // return view('letters.kelahiran.show', [
        //     'kelahiran' => $kelahiran
        // ]);
        
        // dd($kelahiran);

        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('letters.kelahiran.show', [
            'kelahiran' => $kelahiran
        ]);
        return $pdf->stream();

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelahiran $kelahiran)
    {
        //
        return view('letters.kelahiran.edit', [
            'kelahiran' => $kelahiran,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kelahiran $kelahiran)
    {
        //
        $rules = [
            'nomorSurat' => 'required',
            'namaBayi' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'alamat' => 'required',
            // 'agama' => 'required',
            'kelamin' => 'required',
            'anakKe' => 'required',
            'pekerjaan' => 'required',
            'namaAyah' => 'required',
            // 'nikAyah' => 'required',
            'tempatLahirAyah' => 'required',
            'tanggalLahirAyah' => 'required',
            'alamatAyah' => 'required',
            'namaIbu' => 'required',
            // 'nikIbu' => 'required',
            'tempatLahirIbu' => 'required',
            'tanggalLahirIbu' => 'required',
            'alamatIbu' => 'required',
            // 'nkk' => 'required',
        ];
        
        $validatedData = $request->validate($rules);

        Kelahiran::where('id', $kelahiran->id)->update($validatedData);
        return redirect('/surat/kelahiran')->with('success', 'Surat kelahiran berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelahiran $kelahiran)
    {
        //
        Kelahiran::destroy($kelahiran->id);
        return redirect('/surat/kelahiran')->with('success', 'Data Surat Kelahiran Berhasil Dihapus');
    }
}
