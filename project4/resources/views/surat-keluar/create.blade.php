@extends('admin.base')


@section('content')
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header bg-secondary ">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="h2 m-0 font-weight-bold text-white">Tambah Arsip Surat Keluar</h2>
                    </div>

                </div>
            </div>

            <div class="card-body">
                <form action="{{ url('admin/surat-keluar') }}" id="add_form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Nomor Surat</label>
                                <input type="text" class="form-control @error('nomor_surat') is-invalid @enderror"
                                    name="nomor_surat" value="{{ old('nomor_surat') }}">
                                @error('nomor_surat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Tanggal Surat</label>
                                <input type="date" name="tanggal"
                                    class="form-control @error('tanggal') is-invalid @enderror"
                                    value="{{ old('tanggal') }}">
                                @error('tanggal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Perihal</label>
                                <input type="text" class="form-control @error('perihal') is-invalid @enderror"
                                    name="perihal" value="{{ old('perihal') }}">
                                @error('perihal')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Tujuan</label>
                                <input type="text" class="form-control @error('tujuan') is-invalid @enderror"
                                    name="tujuan" value="{{ old('tujuan') }}">
                                @error('tujuan')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">File</label>
                                <input type="file" name="file" id=""
                                    class="form-control @error('file') is-invalid @enderror">
                                @error('file')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <button type="" class="btn btn-success float-end mt-3" data-toggle="modal"
                        data-target=".bd-example-modal-sm"><i class="fa fa-save"></i>
                        Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
