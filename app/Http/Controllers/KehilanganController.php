<?php

namespace App\Http\Controllers;

use App\Models\Kehilangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKehilanganRequest;
use App\Http\Requests\UpdateKehilanganRequest;

class KehilanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('letters.kehilangan.index', [
            'title' => 'Data Surat Kehilangan',
            'kehilangan' => Kehilangan::latest()->filter(request(['search']))->paginate(20)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('letters.kehilangan.create');
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
            'kelamin' => 'required',
            'status' => 'required',
            'kebangsaan' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'keterangan' => 'required',
        ]);
        
        $validatedData['tipeSurat'] = 'Surat Kehilangan';
        $validatedData['tanggalSurat'] = now();
        $validatedData['manager_id'] = 1;
        Kehilangan::create($validatedData);

        return redirect('/surat')->with('success', 'Surat Kehilangan Berhasil Ditambah, silahkan ke kantor Desa Karanggupito untuk melakukan proses tanda tangan dan print');

    }

    /**
     * Display the specified resource.
     */
    public function show(Kehilangan $kehilangan)
    {
        //
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('letters.kehilangan.show', [
            'kehilangan' => $kehilangan
        ]);
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kehilangan $kehilangan)
    {
        //
        return view('letters.kehilangan.edit', [
            'kehilangan' => $kehilangan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kehilangan $kehilangan)
    {
        //
        $rules = [
            'nomorSurat' => 'required',
            'nama' => 'required',
            'nik' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required|date',
            'agama' => 'required',
            'kelamin' => 'required',
            'status' => 'required',
            'kebangsaan' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'keterangan' => 'required',
        ];
        
        $validatedData = $request->validate($rules);

        Kehilangan::where('id', $kehilangan->id)->update($validatedData);
        return redirect('/surat/kehilangan')->with('success', 'Surat Kehilangan berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kehilangan $kehilangan)
    {
        //
        Kehilangan::destroy($kehilangan->id);
        return redirect('/surat/kehilangan')->with('success', 'Data Surat Kehilangan Berhasil Dihapus');
    }
}
