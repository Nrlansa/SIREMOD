@extends('admin.base')


@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4 mt-2">
            <div class="card-header bg-secondary py-3">
                <h5 class="h2 m-0 font-weight-bold text-white">Arsip Surat Keluar
                    <a href="{{ url('admin/surat-keluar/create') }}" class="btn btn-dark float-end"><i
                            class="fa fa-plus ml-2"></i>
                        Tambah
                        Arsip</a>
                </h5>
            </div>
            <div class="card-body">

                <h3>Surat Keluar</h3>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        @csrf
                        <thead class="bg-dark text-white">
                            <tr style="text-align:center">
                                <th style="width: 1%">NO</th>
                                <th class="col-md-1">AKSI</th>
                                <th class="col-md-4">PERIHAL</th>
                                <th class="col-md-3">
                                    NOMOR SURAT
                                </th>
                                <th class="col-md-2">Tujuan Surat</th>
                                <th>Tanggal</th>
                                <th>File</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($suratkeluar as $suratkeluar)
                                <tr style="text-align:center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            {{-- <a href="{{ url('admin/surat-keluar', $suratkeluar->id) }}"
                                                class="btn btn-drak"><i class="fa fa-info"></i></a> --}}
                                            {{-- <a href="{{ url('admin/surat-keluar', $suratkeluar->id) }}surat-keluar/edit"
                                                class="btn btn-warning"><i class="fa fa-edit"></i></a> --}}
                                            {{-- @include('admin.utils.delete', [
                                                'url' => url('admin/surat-keluar', $suratkeluar->id),
                                            ]) --}}
                                            <form action="{{ url('admin/surat-keluar', $suratkeluar->id) }}" method="post"
                                                class="form-inline" onsubmit="return confirm('Ingin menghapus data ini ?')">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>

                                        </div>

                                    </td>
                                    <td>
                                        {{ $suratkeluar->nomor_surat }}
                                    </td>
                                    <td>{{ $suratkeluar->perihal }}</td>
                                    <td>{{ $suratkeluar->tujuan }}</td>
                                    </td>
                                    <td>{!! date('l, d M Y', strtotime($suratkeluar->tanggal)) !!}
                                    </td>
                                    <td><a href="{{ asset('storage/public/surat-keluar/' . $suratkeluar->file) }}"><i
                                                class="fas fa-file-pdf"></i></a>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
            <script>
                $(function() {
                    $("#dataTable").DataTable({
                        "language": {
                            "url": "http://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
                            "sEmptyTable": "Tidak ada data di database"
                        }
                    });
                });
            </script>
        @endsection
