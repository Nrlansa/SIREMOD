<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use App\Models\Perubahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    function index()
    {
        $data['list_upload'] = $list_upload = Upload::all();

        return view('Upload.index', $data);
    }
    function Create()
    {
        $data['list_perubahan'] = $list_perubahan = Perubahan::all();

        return view('Upload.create', $data);
    }

    function Store(Request $request)
    {
        $rules = [
            'tentang' => 'required',
            'no_regulasi' => 'required',
            'kategori' => 'required',
        ];
        $massages = [
            'required' => ':attribute wajib diisi',
        ];

        $this->validate($request, $rules, $massages);


        $validatedData = $request->validate([
            'file' => 'required|mimes:pdf|max:10000',
        ]);

        $validatedData = $request->validate([
            'file_perubahan' => 'nullable|mimes:pdf|max:10000',
        ]);

        $upload = new upload;
        $upload->tentang =  request('tentang');
        $upload->no_regulasi = request('no_regulasi');
        // $upload->tanggal_penerbitan = request('tanggal_penerbitan');
        if (request()->hasFile('file_perubahan')) {
            //file yang boleh kosong
            $file_perubahan = time() . '_' . $request->file->getClientOriginalName();
            $data2 = $request->file('file_perubahan')->storeAs('public/perubahan', $file_perubahan);
            $upload->file_perubahan = $data2;
        }
        if (request()->hasFile('file')) {
            //file yang dak boleh kosong
            $file = time() . '.' . $request->file->extension();
            $data = $request->file('file')->storeAs('public', $file);
            $upload->file = $data;
        }
        $upload->kategori = request('kategori');
        $upload->no_perubahan = request('no_perubahan');
        $upload->perubahan = request('perubahan');
        $upload->kategori_p = request('kategori_p');
        $upload->save();

        return redirect('admin/upload')->with('success', 'data berhasil ditambahkan');
    }

    function Show(Upload $upload)
    {
        $data['upload'] = $upload;
        return view('Upload.show', $data);
    }
    function edit(Upload $upload)
    {
        $data['upload'] = $upload;
        return view('Upload.edit', $data);
    }
    function update(Upload $upload, Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|mimes:pdf|max:10000',
        ]);

        $validatedData = $request->validate([
            'file_perubahan' => 'nullable|mimes:pdf|max:10000',
        ]);

        $upload->tentang =  request('tentang');
        $upload->no_regulasi = request('no_regulasi');
        $upload->tanggal_penerbitan = request('tanggal_penerbitan');
        if (request()->hasFile('file_perubahan')) {
            //file yang boleh kosong
            $file_perubahan = time() . '_' . $request->file->getClientOriginalName();
            $data2 = $request->file('file_perubahan')->storeAs('public/perubahan', $file_perubahan);
            $upload->file_perubahan = $data2;
        }
        if (request()->hasFile('file')) {
            //file yang dak boleh kosong
            $file = time() . '.' . $request->file->extension();
            $data = $request->file('file')->storeAs('public', $file);
            $upload->file = $data;
        }
        $upload->kategori = request('kategori');
        $upload->no_perubahan = request('no_perubahan');
        $upload->perubahan = request('perubahan');
        $upload->kategori_p = request('kategori_p');
        $upload->save();

        return redirect('admin/upload')->with('success', 'data berhasil diedit');
    }
    function destroy(Upload $upload)
    {
        $data1 = $upload->file_perubahan;
        if ($data1) {
            Storage::disk('public')->delete($data1);
        }

        $data2 = $upload->file;
        if ($data2) {
            Storage::disk('public')->delete($data2);
        }

        $upload->delete();
        return redirect('admin/upload')->with('danger', 'data berhasil dihapus');
    }
}