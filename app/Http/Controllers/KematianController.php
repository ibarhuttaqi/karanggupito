<?php

namespace App\Http\Controllers;

use App\Models\Kematian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class KematianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('letters.kematian.index', [
            'title' => 'Data Surat Kematian',
            'kematian' => Kematian::latest()->filter(request(['search']))->paginate(20)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('letters.kematian.create');
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
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required|date',
            'kelamin' => 'required',
            'alamat' => 'required',
            'hariMeninggal' => 'required',
            'tanggalMeninggal' => 'required',
            'tempatMeninggal' => 'required',
            'sebabKematian' => 'required'
            
        ]);
        
        $validatedData['tipeSurat'] = 'Kematian';
        $validatedData['tanggalSurat'] = now();
        $validatedData['manager_id'] = 1;
        Kematian::create($validatedData);

        return redirect('/surat')->with('success', 'Surat Kematian Berhasil Ditambah, silahkan ke kantor Desa Karanggupito untuk melakukan proses tanda tangan dan print');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Kematian $kematian)
    {
        //
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('letters.kematian.show', [
            'kematian' => $kematian
        ]);
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kematian $kematian)
    {
        //
        return view('letters.kematian.edit', [
            'kematian' => $kematian,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kematian $kematian)
    {
        //
        $rules = [  
            'nomorSurat' => 'required',
            'nama' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required|date',
            'kelamin' => 'required',
            'alamat' => 'required',
            'hariMeninggal' => 'required',
            'tanggalMeninggal' => 'required',
            'tempatMeninggal' => 'required',
            'sebabKematian' => 'required'
        ];
        
        $validatedData = $request->validate($rules);

        Kematian::where('id', $kematian->id)->update($validatedData);
        return redirect('/surat/kematian')->with('success', 'Surat kematian berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kematian $kematian)
    {
        //
        Kematian::destroy($kematian->id);
        return redirect('/surat/kematian')->with('success', 'Data Surat Kematian Berhasil Dihapus');
    }
}
