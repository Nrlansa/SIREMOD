@extends('admin.base')


@section('content')
    <div class="container-xl">

        <div class="card shadow mb-4">
            <div class="card-header bg-secondary py-3">

                <h2 class="m-0 font-weight-bold text-white">
                    Detail Surat Keluar
                </h2>
            </div>
            <div class="card card-default">
                <hr class="no-margin">
                <div class="card-body">
                    <dl>
                        <dt>Perihal</dt>
                        <dd>{{ $suratkeluar->prihal }}</dd>
                        <h6><u>Detail</u></h6>
                        <div class="row">
                            <div class="col-md-6">
                                <dt>Nomor Surat</dt>
                                <dd>{{ $suratkeluar->nomor_surat }}</dd>
                            </div>
                            <div class="col-md-6">
                                <dt>Tanggal Surat</dt>
                                <dd>{{ $suratkeluar->tanggal_string }}</dd>
                            </div>
                            <div class="col-md-6">
                                <dt>Tujuan Surat</dt>
                                <dd>{{ $suratkeluar->tujuan }}</dd>
                            </div>
                        </div>
                        <hr>
                        <div class="row ">
                            <table class="table table-bordered " style="text-align: center">
                                <thead class="bg-dark text-white ">
                                    <tr>
                                        <th>File Lampiran</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td>
                                        <a href="{{ asset('storage/public/surat-keluar/' . $suratkeluar->file) }}">View</a>
                                    </td>
                                </tbody>
                            </table>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
@endsection
