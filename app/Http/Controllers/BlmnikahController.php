<?php

namespace App\Http\Controllers;

use App\Models\blmnikah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreblmnikahRequest;
use App\Http\Requests\UpdateblmnikahRequest;

class BlmnikahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('letters.blmnikah.index', [
            'title' => 'Data Surat Belum Nikah',
            'blmnikah' => Blmnikah::latest()->filter(request(['search']))->paginate(20)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('letters.blmnikah.create');
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
            'agama' => 'required',
            'kebangsaan' => 'required',
            'kelamin' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
        ]);
        
        $validatedData['tipeSurat'] = 'Surat Belum Nikah';
        $validatedData['tanggalSurat'] = now();
        $validatedData['manager_id'] = 1;
        Blmnikah::create($validatedData);

        return redirect('/surat')->with('success', 'Surat Belum Nikah Berhasil Ditambah, silahkan ke kantor Desa Karanggupito untuk melakukan proses tanda tangan dan print');

    }

    /**
     * Display the specified resource.
     */
    public function show(blmnikah $blmnikah)
    {
        //
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('letters.blmnikah.show', [
            'blmnikah' => $blmnikah
        ]);
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(blmnikah $blmnikah)
    {
        //
        return view('letters.blmnikah.edit', [
            'blmnikah' => $blmnikah,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blmnikah $blmnikah)
    {
        //
        $rules = [
            'nomorSurat' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required|date',
            'agama' => 'required',
            'kebangsaan' => 'required',
            'kelamin' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
        ];
        
        $validatedData = $request->validate($rules);

        blmnikah::where('id', $blmnikah->id)->update($validatedData);
        return redirect('/surat/blmnikah')->with('success', 'Surat Belum Nikah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blmnikah $blmnikah)
    {
        //
        Blmnikah::destroy($blmnikah->id);
        return redirect('/surat/blmnikah')->with('success', 'Data Surat Belum Nikah Berhasil Dihapus');
    }
}
