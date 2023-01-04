<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use App\Models\Perubahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PerubahanController extends Controller
{
    function index()
    {

        $data['list_perubahan'] = $list_perubahan = Perubahan::all();

        return view('admin.perubahan.index', $data);
    }
    function Create()
    {
        $data['list_upload'] = $list_upload = Upload::all();
        return view('admin.perubahan.create', $data);
    }

    function Store(Request $request)
    {
        $fileName = time() . '.' . $request->file_perubahan->extension();
        $request->file('file_perubahan')->storeAs('public', $fileName);


        $validatedData = $request->validate([
            'file_perubahan' => 'required|mimes:pdf|max:10000',
        ]);

        $perubahan = new Perubahan;
        $perubahan->tentang2 =  request('tentang2');
        $perubahan->no_regulasi2 = request('no_regulasi2');
        $perubahan->file_perubahan = $fileName;
        $perubahan->kategori2 = request('kategori2');
        $perubahan->save();

        return redirect('admin/perubahan')->with('success', 'data berhasil ditambahkan');
    }

    function Show(Perubahan $perubahan)
    {
        //
    }
    function update(Perubahan $perubahan)
    {
        $perubahan->tentang2 =  request('tentang2');
        $perubahan->no_regulasi2 = request('no_regulasi2');
        $perubahan->kategori2 = request('kategori2');
        $perubahan->save();

        return redirect('admin/perubahan')->with('success', 'data berhasil diedit');
    }
    function destroy(Perubahan $perubahan)
    {
        $data1 = $perubahan->file_perubahan;
        if ($data1) {
            Storage::disk('public')->delete($data1);
        }

        $perubahan->delete();
        return redirect('admin/perubahan')->with('danger', 'data berhasil dihapus');
    }
}