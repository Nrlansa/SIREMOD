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
                            <a href="{{ url('admin/perubahan/create') }}" class="float-end btn btn-primary mt-2 mb-2 mx-3"><i
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
                                    <th>file perubahan</th>
                                </thead>
                                <tbody>
                                    @foreach ($list_perubahan as $perubahan)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="btn-group">
                                                    {{-- <a href="{{ url('admin/upload', $perubahan->id) }}"
                                                        class="btn btn-primary"><i class="fa fa-info"></i></a> --}}
                                                    {{-- <a href="{{ url('admin/upload', $perubahan->id) }}Upload/edit"
                                                        class="btn btn-warning"><i class="fa fa-edit"></i></a> --}}
                                                    @include('admin.utils.delete', [
                                                        'url' => url('admin/upload', $perubahan->id),
                                                    ])
                                                </div>
                                            </td>
                                            <td>{{ $perubahan->no_regulasi2 }}</td>
                                            <td>{{ $perubahan->tentang2 }}</td>
                                            <td>{{ $perubahan->kategori2 }}</td>
                                            <td>
                                                <a href="{{ asset('storage/public/' . $perubahan->file_perubahan) }}">
                                                    <i class="fas fa-file-pdf">file p</i></a>
                                            </td>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>





                </div>

            </div>
        </div>
    </div>
@endsection
