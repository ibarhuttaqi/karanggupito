<?php

namespace App\Http\Controllers;

use App\Models\Villager;
use Illuminate\Http\Request;

class VillagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // dd(request('search'));

        return view('pages.villagers', [
            'title' => 'Data Penduduk',
            'villagers' => Villager::latest()->filter(request(['search']))->paginate(50)->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('villagers.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nkk' => 'required|integer',
            'nik' => 'required|unique:villagers|integer',
            'nama' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'agama' => 'required',
            'statusKawin' => 'required',
            'kelamin' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'ektp' => 'required',
        ]);
        Villager::create($validatedData);
        return redirect('/dataPenduduk')->with('success', 'Penduduk baru ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Villager $villager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    // public function edit(Villager $villager)
    // {
    //     //
    //     // dd($villager);
    //     return view('villagers.edit', [
    //         'villager' => $villager,
    //     ]);
    // }

    public function edit($nik)
    {
        // $villager = Villager::find($nik); // atau Villager::findOrFail($nik);
        $villager = Villager::findOrFail($nik);
        return view('villagers.edit', [
            'villager' => $villager,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $nik)
    {
        //
        // dd($request->all());
        $rules = [
            'nkk' => 'required|integer',
            'nik' => 'required|integer',
            'nama' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'agama' => 'required',
            'statusKawin' => 'required',
            'kelamin' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'ektp' => 'required',
        ];
        
        $validatedData = $request->validate($rules);
        $villager = Villager::findOrFail($nik);
        $villager->update($validatedData);
        // Villager::where('nik', $villager->nik)->update($validatedData);
        return redirect('/dataPenduduk')->with('success', 'Data penduduk berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($nik)
    {
        //
        $villager = Villager::findOrFail($nik);
        $villager->delete();
        return redirect('/dataPenduduk')->with('success', 'Data Penduduk Berhasil Dihapus');
    }
}
