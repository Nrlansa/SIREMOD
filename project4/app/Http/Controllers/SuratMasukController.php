<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index()
    {
        $penting = SuratMasuk::where('jenissurat', 1)->get();
        $biasa = SuratMasuk::where('jenissurat', 2)->get();
        $rahasia = SuratMasuk::where('jenissurat', 3)->get();
        $konfidensial = SuratMasuk::where('jenissurat', 4)->get();
        $sangatrahasia = SuratMasuk::where('jenissurat', 5)->get();
        return view('surat-masuk.index', compact('penting', 'biasa', 'rahasia', 'konfidensial', 'sangatrahasia'));
    }
    public function create()
    {
        return view('surat-masuk.create');
    }
    public function store(Request $request)
    {

        $fileName = time() . '.' . $request->file->extension();
        $request->file('file')->storeAs('public/surat-masuk', $fileName);

        $validatedData = $request->validate([
            'file' => 'required|mimes:pdf|max:2000',
        ]);

        $suratmasuk = new SuratMasuk;
        $suratmasuk->nomor_surat = request('nomor_surat');
        $suratmasuk->tanggal = request('tanggal');
        $suratmasuk->perihal = request('perihal');
        $suratmasuk->asal_surat = request('asal_surat');
        $suratmasuk->jenissurat = request('jenissurat');
        $suratmasuk->file = $fileName;
        $suratmasuk->save();
        // dd($suratmasuk);
        return redirect('admin/surat-masuk')->with('success', 'Data Di Tamabahkan');
    }

    public function show(SuratMasuk $SuratMasuk)
    {
        $data['suratmasuk'] = $SuratMasuk;
        return view('surat-masuk.show', $data);
    }

    public function edit($id)
    {
        //
    }

    public function update(SuratMasuk $suratmasuk, $id)
    {
        $suratmasuk->nomor_surat = request('nomor_surat');
        $suratmasuk->tanggal = request('tanggal');
        $suratmasuk->perihal = request('perihal');
        $suratmasuk->asal_surat = request('asal_surat');
        $suratmasuk->jenissurat = request('jenissurat');
        $suratmasuk->file = request('file');
        $suratmasuk->save();

        return redirect('admin/surat-masuk')->with('success', 'Data Di Tamabahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suratmasuk = SuratMasuk::find($id);
        $suratmasuk->delete();

        return redirect('admin/surat-masuk')->with('danger', 'data berhasil dihapus');
    }
}