@extends('admin.base')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card border-dark mb-3 ">
                    <div class="card-header ">
                        <div class="card-title">
                            <h5 class="mx-2 pt-2"> Tambah Regulasi</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('admin/upload') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nomor Regulasi</label>
                                        <input type="text" name="no_regulasi" id=""
                                            class="form-control @error('no_regulasi') is-invalid @enderror">
                                        @error('no_regulasi')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">Tentang</label>
                                        <input type="longtext" name="tentang" id=""
                                            class="form-control @error('tentang') is-invalid @enderror">
                                        @error('tentang')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="" class="control-label">File</label>
                                        <input type="file" name="file" id=""
                                            class="form-control @error('file') is-invalid @enderror">
                                        @error('file')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <p style="color: red; font-size:12px;">*PDF ukuran max:10 MB</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <select name="kategori" id=""
                                            class="form-control @error('kategori') is-invalid @enderror">
                                            <option value="" disabled selected>Pilih Kategori</option>
                                            <option value="Peraturan Pemerintah">Peraturan Pemerintah</option>
                                            <option value="Peraturan Presiden">Peraturan Presiden</option>
                                            <option value="Peraturan Menteri / Lembaga non kementrian">Peraturan Menteri /
                                                Lembaga non kementrian</option>
                                            <option value="Peraturan Gubernur">Peraturan Gubernur</option>
                                            <option value="Peraturan Daerah">Peraturan Daerah</option>
                                            <option value="Peraturan Bupati">Peraturan Bupati</option>
                                            <option value="SK Bupati">SK Bupati</option>
                                            <option value="SK Kepala DPMPTSP">SK Kepala DPMPTSP</option>
                                            <option value="Undang-Undang">Undang-Undang</option>
                                        </select>
                                        @error('kategori')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <!------------Peraturan Perubahan------------->
                <div class="card border-dark mb-3 mt-3">
                    <div class="card-header">
                        <div class="card-title">
                            <h5 class="mx-2 pt-2"> Perubahan Peraturan</h5>
                        </div>
                    </div>
                    <div class="card-body text-dark">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Nomor Regulasi Perubahan</label>
                                    <input type="text" name="no_perubahan" id=""
                                        class="form-control @error('no_Perubahan') is-invalid @enderror">
                                    @error('no_Perubahan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <p style="color: red; font-size:12px;">*Perubahan Hanya di isi, jika ada perubahan peraturan
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">Tentang</label>
                                    <input type="longtext" name="perubahan" id="perubahan"
                                        class="form-control @error('perubahan') is-invalid @enderror">
                                    @error('perubahan')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <p style="color: red; font-size:12px;">*Perubahan Hanya di isi, jika ada perubahan peraturan
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="" class="control-label">File Perubahan</label>
                                    <input type="file" name="file_perubahan" id="file_perubahan" class="form-control">
                                </div>
                                <p style="color: red; font-size:12px;">*File Perubahan Hanya di isi, jika ada perubahan
                                    peraturan <br> *PDF ukuran max:10 MB
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kategori_p">Kategori</label>
                                    <select name="kategori_p" id=""
                                        class="form-control @error('kategori_p') is-invalid @enderror">
                                        <option value="" disabled selected>Pilih Kategori</option>
                                        <option value="Peraturan Pemerintah">Peraturan Pemerintah</option>
                                        <option value="Peraturan Presiden">Peraturan Presiden</option>
                                        <option value="Peraturan Menteri / Lembaga non kementrian">Peraturan
                                            Menteri /
                                            Lembaga non kementrian</option>
                                        <option value="Peraturan Gubernur">Peraturan Gubernur</option>
                                        <option value="Peraturan Daerah">Peraturan Daerah</option>
                                        <option value="Peraturan Bupati">Peraturan Bupati</option>
                                        <option value="SK Bupati">SK Bupati</option>
                                        <option value="SK Kepala DPMPTSP">SK Kepala DPMPTSP</option>
                                        <option value="Undang-Undang">Undang-Undang</option>
                                    </select>
                                    @error('kategori_p')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <p style="color: red; font-size:12px;">*Perubahan Hanya di isi, jika ada perubahan
                                    peraturan
                                </p>
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
@endsection
