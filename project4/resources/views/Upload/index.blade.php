@extends('admin.base')


@section('content')
    <style>
        .tableme {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        th {
            text-align: center
        }

        td {
            text-align: center
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card ">
                    <div class="card-header">
                        <div class="float-right">
                            <a href="{{ url('admin/upload/create') }}" class="float-end btn btn-primary mt-2 mb-2 mx-3"><i
                                    class="fa fa-plus mx-1"></i>Tambah Regulasi</a>
                        </div>
                        <div class="card-title">
                            <h5 class="mx-4 pt-2">Upload Regulasi</h5>
                        </div>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        </div>
                    </div>



                    <div class="card-header bg-transparent border-dark">
                        <h3>Regulasi</h3>
                    </div>
                    <div class="card-body">
                        <div style="overflow-x: auto;">
                            <table id="datatablesSimple"">
                                <thead class="bg-dark text-white">
                                    <th>NO</th>
                                    <th width="100px">Aksi</th>
                                    <th>Nomor Regulasi</th>
                                    <th>Tentang</th>
                                    <th>Jenis Peraturan</th>
                                    <th>Tanggal Penerbitan</th>
                                    <th>file</th>
                                    <th>file perubahan</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_upload as $upload)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    {{-- <a href="{{ url('admin/upload', $upload->id) }}"
                                                        class="btn btn-primary"><i class="fa fa-info"></i></a> --}}
                                                    <a href="{{ url('admin/upload', $upload->id) }}Upload/edit"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                    @include('admin.utils.delete', [
                                                        'url' => url('admin/upload', $upload->id),
                                                    ])
                                                </div>
                                            </td>
                                            <td>{{ $upload->no_regulasi }}</td>
                                            <td>{{ $upload->tentang }}</td>
                                            <td>{{ $upload->kategori }}</td>

                                            <td>{!! date('l,d M Y', strtotime($upload->tanggal_penerbitan)) !!}</td>


                                            @if ($upload->file_perubahan && $upload->file)
                                                <td>
                                                    <a href="{{ asset('storage/' . $upload->file) }}"> <i
                                                            class="fas fa-file-pdf"></i>file</a>
                                                </td>
                                                <td>
                                                    <a href="{{ asset('storage/' . $upload->file_perubahan) }}">
                                                        <i class="fas fa-file-pdf">file p</i></a>
                                                </td>
                                            @elseif($upload->file)
                                                <td><a href="{{ asset('storage/' . $upload->file) }}"> <i
                                                            class="fas fa-file-pdf"></i>file</a></td>
                                            @elseif($upload->file_perubahan)
                                                <td>
                                                    <a href="{{ asset('storage/' . $upload->file_perubahan) }}">
                                                        <i class="fas fa-file-pdf"></i>file perubahan</a>
                                                </td>
                                            @endif

                                            {{-- <td><a href="{{ asset('storage/public/perubahan' . $upload->file_perubahan) }}"><i
                                                        class="fas fa-file-pdf"></i></a></td>
                                            <td><a href="{{ asset('storage/public/' . $upload->file) }}"><i
                                                        class="fas fa-file-pdf"></i></a></td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!----------Peraturan Presiden------------>
                    {{-- <div class="card ms-2 mt-3" style="border: 1px solid #000000;">
                        <div class="card-header bg-transparent border-dark">
                            <h3>Peraturan Presiden</h3>
                        </div>
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <table class="tableme table-bordered">
                                    <thead class="bg-dark text-white">
                                        <th>NO</th>
                                        <th width="100px">Aksi</th>
                                        <th>Judul Regulasi</th>
                                        <th>Tentang</th>
                                        <th>Asal Surat</th>
                                        <th>Nomor Regulasi</th>
                                        <th>Tanggal Penerbitan</th>
                                        <th>file</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($presiden as $upload)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('admin/upload', $upload->id) }}"
                                                            class="btn btn-drak"><i class="fa fa-info"></i></a>
                                                        <a href="{{ url('admin/upload', $upload->id) }}Upload/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('admin.utils.delete', [
                                                            'url' => url('admin/upload', $upload->id),
                                                        ])
                                                    </div>

                                                </td>

                                                <td>{{ $upload->name }}</td>
                                                <td>{{ $upload->asal_surat }}</td>
                                                <td>{{ $upload->tentang }}</td>
                                                <td>{{ $upload->no_regulasi }}</td>
                                                <td>{!! date('l,d M Y', strtotime($upload->tanggal_penerbitan)) !!}
                                                </td>
                                                <td><a href="{{ asset('storage/public/' . $upload->file) }}"><i
                                                            class="fas fa-file-pdf"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                    <!----------Peraturan Menteri---------->
                    {{-- <div class="card ms-2 mt-3" style="border: 1px solid #000000;">
                        <div class="card-header bg-transparent border-dark">
                            <h3>Peraturan Menteri</h3>
                        </div>
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <table class="tableme table-bordered">
                                    <thead class="bg-dark text-white">
                                        <th>NO</th>
                                        <th width="100px">Aksi</th>
                                        <th>Judul Regulasi</th>
                                        <th>Tentang</th>
                                        <th>Asal Surat</th>
                                        <th>Nomor Regulasi</th>
                                        <th>Tanggal Penerbitan</th>
                                        <th>file</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($menteri as $upload)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('admin/upload', $upload->id) }}"
                                                            class="btn btn-drak"><i class="fa fa-info"></i></a>
                                                        <a href="{{ url('admin/upload', $upload->id) }}Upload/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('admin.utils.delete', [
                                                            'url' => url('admin/upload', $upload->id),
                                                        ])
                                                    </div>

                                                </td>
                                                <td>{{ $upload->name }}</td>
                                                <td>{{ $upload->asal_surat }}</td>
                                                <td>{{ $upload->tentang }}</td>
                                                <td>{{ $upload->no_regulasi }}</td>
                                                <td>{!! date('l,d M Y', strtotime($upload->tanggal_penerbitan)) !!}
                                                </td>
                                                <td><a href="{{ asset('storage/public/' . $upload->file) }}"><i
                                                            class="fas fa-file-pdf"></i></a></td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                    <!----------Peraturan Gubernur------------>
                    {{-- <div class="card ms-2 mt-3" style="border: 1px solid #000000;">
                        <div class="card-header bg-transparent border-dark">
                            <h3>Peraturan Gubernur</h3>
                        </div>
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <table class="tableme table-bordered">
                                    <thead class="bg-dark text-white">
                                        <th>NO</th>
                                        <th width="100px">Aksi</th>
                                        <th>Judul Regulasi</th>
                                        <th>Tentang</th>
                                        <th>Asal Surat</th>
                                        <th>Nomor Regulasi</th>
                                        <th>Tanggal Penerbitan</th>
                                        <th>file</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($gubernur as $upload)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('admin/upload', $upload->id) }}"
                                                            class="btn btn-drak"><i class="fa fa-info"></i></a>
                                                        <a href="{{ url('admin/upload', $upload->id) }}Upload/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('admin.utils.delete', [
                                                            'url' => url('admin/upload', $upload->id),
                                                        ])
                                                    </div>

                                                </td>

                                                <td>{{ $upload->name }}</td>
                                                <td>{{ $upload->asal_surat }}</td>
                                                <td>{{ $upload->tentang }}</td>
                                                <td>{{ $upload->no_regulasi }}</td>
                                                <td>{!! date('l,d M Y', strtotime($upload->tanggal_penerbitan)) !!}
                                                </td>
                                                <td><a href="{{ asset('storage/public/' . $upload->file) }}"><i
                                                            class="fas fa-file-pdf"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                    <!----------Peraturan Daerah------------>
                    {{-- <div class="card ms-2 mt-3" style="border: 1px solid #000000;">
                        <div class="card-header bg-transparent border-dark">
                            <h3>Peraturan Daerah</h3>
                        </div>
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <table class="tableme table-bordered">
                                    <thead class="bg-dark text-white">
                                        <th>NO</th>
                                        <th width="100px">Aksi</th>
                                        <th>Judul Regulasi</th>
                                        <th>Tentang</th>
                                        <th>Asal Surat</th>
                                        <th>Nomor Regulasi</th>
                                        <th>Tanggal Penerbitan</th>
                                        <th>file</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($daerah as $upload)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('admin/upload', $upload->id) }}"
                                                            class="btn btn-drak"><i class="fa fa-info"></i></a>
                                                        <a href="{{ url('admin/upload', $upload->id) }}Upload/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('admin.utils.delete', [
                                                            'url' => url('admin/upload', $upload->id),
                                                        ])
                                                    </div>

                                                </td>

                                                <td>{{ $upload->name }}</td>
                                                <td>{{ $upload->asal_surat }}</td>
                                                <td>{{ $upload->tentang }}</td>
                                                <td>{{ $upload->no_regulasi }}</td>
                                                <td>{!! date('l,d M Y', strtotime($upload->tanggal_penerbitan)) !!}
                                                </td>
                                                <td><a href="{{ asset('storage/public/' . $upload->file) }}"><i
                                                            class="fas fa-file-pdf"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                    <!----------Peraturan Bupati------------>
                    {{-- <div class="card ms-2 mt-3" style="border: 1px solid #000000;">
                        <div class="card-header bg-transparent border-dark">
                            <h3>Peraturan Bupati</h3>
                        </div>
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <table class="tableme table-bordered">
                                    <thead class="bg-dark text-white">
                                        <th>NO</th>
                                        <th width="100px">Aksi</th>
                                        <th>Judul Regulasi</th>
                                        <th>Tentang</th>
                                        <th>Asal Surat</th>
                                        <th>Nomor Regulasi</th>
                                        <th>Tanggal Penerbitan</th>
                                        <th>file</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($bupati as $upload)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('admin/upload', $upload->id) }}"
                                                            class="btn btn-drak"><i class="fa fa-info"></i></a>
                                                        <a href="{{ url('admin/upload', $upload->id) }}Upload/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('admin.utils.delete', [
                                                            'url' => url('admin/upload', $upload->id),
                                                        ])
                                                    </div>

                                                </td>

                                                <td>{{ $upload->name }}</td>
                                                <td>{{ $upload->asal_surat }}</td>
                                                <td>{{ $upload->tentang }}</td>
                                                <td>{{ $upload->no_regulasi }}</td>
                                                <td>{!! date('l,d M Y', strtotime($upload->tanggal_penerbitan)) !!}
                                                </td>
                                                <td><a href="{{ asset('storage/public/' . $upload->file) }}"><i
                                                            class="fas fa-file-pdf"></i></a></td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                    <!----------SK Bupati------------>
                    {{-- <div class="card ms-2 mt-3" style="border: 1px solid #000000;">
                        <div class="card-header bg-transparent border-dark">
                            <h3>SK Bupati</h3>
                        </div>
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <table class="tableme table-bordered" id="datatablesSimple">
                                    <thead class="bg-dark text-white">
                                        <th>NO</th>
                                        <th width="100px">Aksi</th>
                                        <th>Judul Regulasi</th>
                                        <th>Tentang</th>
                                        <th>Asal Surat</th>
                                        <th>Nomor Regulasi</th>
                                        <th>Tanggal Penerbitan</th>
                                        <th>file</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($skbupati as $upload)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('admin/upload', $upload->id) }}"
                                                            class="btn btn-drak"><i class="fa fa-info"></i></a>
                                                        <a href="{{ url('admin/upload', $upload->id) }}Upload/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('admin.utils.delete', [
                                                            'url' => url('admin/upload', $upload->id),
                                                        ])
                                                    </div>

                                                </td>

                                                <td>{{ $upload->name }}</td>
                                                <td>{{ $upload->asal_surat }}</td>
                                                <td>{{ $upload->tentang }}</td>
                                                <td>{{ $upload->no_regulasi }}</td>
                                                <td>{!! date('l,d M Y', strtotime($upload->tanggal_penerbitan)) !!}
                                                </td>
                                                <td><a href="{{ asset('storage/public/' . $upload->file) }}"><i
                                                            class="fas fa-file-pdf"></i></a></td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                    <!----------SK Kepala DPMPTSP------------>
                    {{-- <div class="card ms-2 mt-3" style="border: 1px solid #000000;">
                        <div class="card-header bg-transparent border-dark">
                            <h3>SK Kepala DPMPTSP</h3>
                        </div>
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <table class="tableme table-bordered">
                                    <thead class="bg-dark text-white">
                                        <th>NO</th>
                                        <th width="100px">Aksi</th>
                                        <th>Judul Regulasi</th>
                                        <th>Tentang</th>
                                        <th>Asal Surat</th>
                                        <th>Nomor Regulasi</th>
                                        <th>Tanggal Penerbitan</th>
                                        <th>file</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($skkepptsp as $upload)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('admin/upload', $upload->id) }}"
                                                            class="btn btn-drak"><i class="fa fa-info"></i></a>
                                                        <a href="{{ url('admin/upload', $upload->id) }}Upload/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('admin.utils.delete', [
                                                            'url' => url('admin/upload', $upload->id),
                                                        ])
                                                    </div>

                                                </td>

                                                <td>{{ $upload->name }}</td>
                                                <td>{{ $upload->asal_surat }}</td>
                                                <td>{{ $upload->tentang }}</td>
                                                <td>{{ $upload->no_regulasi }}</td>
                                                <td>{!! date('l,d M Y', strtotime($upload->tanggal_penerbitan)) !!}
                                                </td>
                                                <td><a href="{{ asset('storage/public/' . $upload->file) }}"><i
                                                            class="fas fa-file-pdf"></i></a></td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}
                    <!----------UU------------>
                    {{-- <div class="card ms-2 mt-3" style="border: 1px solid #000000;">
                        <div class="card-header bg-transparent border-dark">
                            <h3>Undang-undang</h3>
                        </div>
                        <div class="card-body">
                            <div style="overflow-x: auto;">
                                <table class="tableme table-bordered">
                                    <thead class="bg-dark text-white">
                                        <th>NO</th>
                                        <th width="100px">Aksi</th>
                                        <th>Judul Regulasi</th>
                                        <th>Tentang</th>
                                        <th>Asal Surat</th>
                                        <th>Nomor Regulasi</th>
                                        <th>Tanggal Penerbitan</th>
                                        <th>file</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($uu as $upload)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('admin/upload', $upload->id) }}"
                                                            class="btn btn-drak"><i class="fa fa-info"></i></a>
                                                        <a href="{{ url('admin/upload', $upload->id) }}Upload/edit"
                                                            class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                        @include('admin.utils.delete', [
                                                            'url' => url('admin/upload', $upload->id),
                                                        ])
                                                    </div>

                                                </td>

                                                <td>{{ $upload->name }}</td>
                                                <td>{{ $upload->asal_surat }}</td>
                                                <td>{{ $upload->tentang }}</td>
                                                <td>{{ $upload->no_regulasi }}</td>
                                                <td>{!! date('l,d M Y', strtotime($upload->tanggal_penerbitan)) !!}
                                                </td>
                                                <td><a href="{{ asset('storage/public/' . $upload->file) }}"><i
                                                            class="fas fa-file-pdf"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> --}}







                </div>

            </div>
        </div>
    </div>
@endsection
