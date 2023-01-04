@extends('admin.base')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header ">
                        <div class="card-title">
                            <h5 class="mx-2 pt-2"> Tambah Regulasi</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/perubahan') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="control-label">Perbahan</label>
                                            <select name="id_perubahan" id="" class="form-control">
                                                @foreach ($list_upload as $upload)
                                                    <option value="" disabled selected>Pilih Perubahan</option>
                                                    <option value="{{ $upload->id }}">{{ $upload->tentang }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="no_regulasi"
                                                placeholder="Nomor Regulasi" name="no_regulasi2">
                                            <label for="floatingInputGrid">Nomor Regulasi</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <select class="form-select" id="floatingSelectGrid"
                                                aria-label="Floating label select example" name="kategori2">
                                                <option selected>Pilih Kategori</option>
                                                <option value="Peraturan Pemerintah">Peraturan Pemerintah
                                                </option>
                                                <option value="Peraturan Presiden">Peraturan Presiden
                                                </option>
                                                <option value="Peraturan Menteri / Lembaga non kementrian">
                                                    Peraturan Menteri /
                                                    Lembaga non kementrian</option>
                                                <option value="Peraturan Gubernur">Peraturan Gubernur
                                                </option>
                                                <option value="Peraturan Daerah">Peraturan Daerah</option>
                                                <option value="Peraturan Bupati">Peraturan Bupati</option>
                                                <option value="SK Bupati">SK Bupati</option>
                                                <option value="SK Kepala DPMPTSP">SK Kepala DPMPTSP</option>
                                                <option value="Undang-Undang">Undang-Undang</option>
                                            </select>
                                            <label for="floatingSelectGrid">Kategori</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-md mt-3">
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Tentang</label>
                                            <textarea class="form-control" id="message-text" name="tentang2"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-md mt-3">
                                        <div class="form-group">
                                            <label for="floatingInputGrid">File</label>
                                            <input type="file" name="file_perubahan" id="" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class=" float-end btn btn-primary mt-3"
                                        onclick="return confirm('apakah anda yakin ingin menambah data ini?')"><i
                                            class="fas fa-save mx-2"></i>Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
