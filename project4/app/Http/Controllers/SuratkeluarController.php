<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use Illuminate\Http\Request;

class SuratkeluarController extends Controller
{
    public function index()
    {
        $data['suratkeluar'] = SuratKeluar::all();
        return view('surat-keluar.index', $data);
    }
    public function create()
    {
        return view('surat-keluar.create');
    }
    public function store(Request $request)
    {

        $fileName = time() . '.' . $request->file->extension();
        $request->file('file')->storeAs('public/surat-keluar', $fileName);

        $validatedData = $request->validate([
            'file' => 'required|mimes:pdf|max:2000'
        ]);

        $suratkeluar = new SuratKeluar;
        $suratkeluar->nomor_surat = request('nomor_surat');
        $suratkeluar->tanggal = request('tanggal');
        $suratkeluar->perihal = request('perihal');
        $suratkeluar->tujuan = request('tujuan');
        $suratkeluar->file = $fileName;
        $suratkeluar->save();


        // dd($suratkeluar);
        return redirect('admin/surat-keluar')->with('success', 'Data Di Tamabahkan');
    }
    public function show(SuratKeluar $Suratkeluar)
    {
        $data['suratkeluar'] = $Suratkeluar;
        return view('surat-keluar.show', $data);
    }
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Suratkeluar $suratkeluar, $id)
    {
        $suratkeluar->nomor_surat = request('nomor_surat');
        $suratkeluar->tanggal = request('tanggal');
        $suratkeluar->perihal = request('perihal');
        $suratkeluar->tujuan = request('tujuan');
        $suratkeluar->file = request('file');
        $suratkeluar->save();


        // dd($suratkeluar);
        return redirect('admin/surat-keluar')->with('success', 'Data Di Tamabahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suratkeluar = SuratKeluar::find($id);
        $suratkeluar->delete();

        return redirect('admin/surat-keluar')->with('danger', 'data berhasil dihapus');
    }
}