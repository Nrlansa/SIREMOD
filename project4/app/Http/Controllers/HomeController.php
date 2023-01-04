<?php

namespace App\Http\Controllers;

use App\Models\Perubahan;
use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Block\Element\ListData;

class HomeController extends Controller
{
    function Showregulasi()
    {
        $data['list_upload'] = $list_upload = Upload::all();
        // $datas['list_perubahan'] = $list_perubahan = Perubahan::all();
        return view('regulasi.regulasi', $data);
    }

    function Showstatus(Upload $upload)
    {
        $data['upload'] = $upload;
        return view('regulasi.status', $data);
        // $perubahan = Perubahan::where('id', $id)->first();
        // $upload = Upload::all();

        // return view('regulasi.status')
        //     ->with('perubahan', $perubahan)
        //     ->with('upload', $upload);
    }

    // function Showstatus(Perubahan $id_perubahan, Upload $upload)
    // {
    //     $data['perubahan']::find($id_perubahan);
    //     $data['upload'] = $upload;

    //     return view('regulasi.status', $data);
    // }
    // function Showstatus(Perubahan $perubahan, Upload $upload)
    // {
    //     $data['perubahan'] = $perubahan;
    //     $data['upload'] = $upload;

    //     return view('regulasi.status')->with('perubahan', $perubahan, 'upload', $upload);
    // }
    // function Showregulasi()
    // {
    //     $data['upload'] = $upload;
    //     return view('regulasi.regulasi');
    // }
    // public function autocomplete(Request $request)
    // {
    //     $data = Upload::select("tentang")
    //         ->where("tentang", "LIKE", "%{$request->query}%")
    //         ->orwhere("kategori", "LIKE", "%{$request->query}%")
    //         ->get();

    //     return response()->json($data);
    // }

    // function read()
    // {
    //     return 'Harap Periksa Kembali Pencarian Anda';
    // }


    function search(Request $request)
    {
        $upload = Upload::where('tentang', 'Like', '%' . $request->search . '%')
            ->orWhere('kategori', 'Like', '%' . $request->search . '%')
            ->orWhere('no_regulasi', 'Like', '%' . $request->search . '%')
            ->get();
        $c = count($upload);

        if ($c == 0) {
            return '<center><p class="text-white" style="font-size:16px"> Harap Periksa Kembali Pencarian Anda </p></center>';
        } else {
            return view('template.ajaxpage')->with([
                'data' => $upload
            ]);
        }
        // $tentang = $request->tentang;
        // $kategori = $request->kategori;
        // $results = DB::table('upload')->where('tentang', 'like', '%' . $tentang . '%')->orWhere('kategori', 'Like', '%' . $kategori . '%')->get();
        // $c = count($results);

        // if ($c == 0) {
        //     return '<center><p class="text-white" style="font-size:16px"> Harap Periksa Kembali Pencarian Anda </p></center>';
        // } else {
        //     return view('template.ajaxpage')->with([
        //         'data' => $results
        //     ]);
        // }
    }
}