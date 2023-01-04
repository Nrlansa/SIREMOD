 @extends('admin.base')


 @section('content')
     <div class="container-fluid">

         <div class="card shadow mb-4 mt-2">
             <div class="card-header bg-secondary py-3">
                 <h5 class="h2 m-0 font-weight-bold text-white">Arsip Surat Masuk
                     <a href="{{ url('admin/surat-masuk/create') }}" class="btn btn-dark float-end"><i
                             class="fa fa-plus ml-2"></i>
                         Tambah
                         Arsip</a>
                 </h5>
             </div>
             <div class="card-body">
                 <!----Penting----->
                 <h3> Surat Penting</h3>
                 <div class="table-responsive">
                     <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                         @csrf
                         <thead class="bg-dark text-white">
                             <tr style="text-align:center">
                                 <th style="width: 1%">NO</th>
                                 <th class="col-md-1">AKSI</th>
                                 <th class="col-md-4">HAL</th>
                                 <th class="col-md-3">
                                     NOMOR SURAT
                                 </th>
                                 <th class="col-md-2">ASAL</th>
                                 <th>Tanggal</th>
                                 <th>File</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($penting as $suratmasuk)
                                 <tr style="text-align:center">
                                     <td>{{ $loop->iteration }}</td>
                                     <td>
                                         <div class="btn-group">
                                             {{-- <a href="{{ url('admin/surat-masuk', $suratmasuk->id) }}"
                                                 class="btn btn-drak"><i class="fa fa-info"></i></a>
                                             <a href="{{ url('admin/surat-masuk', $suratmasuk->id) }}surat-masuk/edit"
                                                 class="btn btn-warning"><i class="fa fa-edit"></i></a> --}}
                                             @include('admin.utils.delete', [
                                                 'url' => url('admin/surat-masuk', $suratmasuk->id),
                                             ])
                                         </div>

                                     </td>
                                     <td>{{ $suratmasuk->perihal }}</td>
                                     </td>
                                     <td>
                                         {{ $suratmasuk->nomor_surat }}
                                     </td>
                                     <td>{{ $suratmasuk->asal_surat }}</td>
                                     {{-- <td>{{ $registeredAt = $suratmasuk->tanggal->isoFormat('dddd, D MMMM Y') }}
                                     </td> --}}
                                     <td>{!! date('l,d M Y', strtotime($suratmasuk->tanggal)) !!}
                                     </td>
                                     <td><a href="{{ asset('storage/public/surat-masuk/' . $suratmasuk->file) }}"><i
                                                 class="fas fa-file-pdf"></i></a>
                                     </td>

                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>
                 <!----Biasa---->
                 <h3>Surat Biasa</h3>
                 <div class="table-responsive">
                     <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                         @csrf
                         <thead class="bg-dark text-white">
                             <tr style="text-align:center">
                                 <th style="width: 1%">NO</th>
                                 {{-- <th class="col-md-1">AKSI</th> --}}
                                 <th class="col-md-4">HAL</th>
                                 <th class="col-md-3">
                                     NOMOR SURAT
                                 </th>
                                 <th class="col-md-2">ASAL</th>
                                 <th>Tanggal</th>
                                 <th>File</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($biasa as $suratmasuk)
                                 <tr style="text-align:center">
                                     <td>{{ $loop->iteration }}</td>
                                     {{-- <td>
                                         <div class="btn-group">
                                             <a href="{{ url('admin/surat-masuk', $suratmasuk->id) }}"
                                                 class="btn btn-drak"><i class="fa fa-info"></i></a>
                                             <a href="{{ url('admin/surat-masuk', $suratmasuk->id) }}surat-masuk/edit"
                                                 class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                             @include('admin.utils.delete', [
                                                 'url' => url('admin/surat-masuk', $suratmasuk->id),
                                             ])
                                         </div>

                                     </td> --}}
                                     <td>{{ $suratmasuk->perihal }}</td>
                                     </td>
                                     <td>
                                         {{ $suratmasuk->nomor_surat }}
                                     </td>
                                     <td>{{ $suratmasuk->asal_surat }}</td>
                                     <td>{{ $registeredAt = $suratmasuk->created_at->isoFormat('dddd, D MMMM Y') }}
                                     </td>
                                     <td><a href="{{ asset('storage/public/surat-masuk/' . $suratmasuk->file) }}"><i
                                                 class="fas fa-file-pdf"></i></a>
                                     </td>

                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>

                 <!----rahasia----->
                 <h3> Surat Rahasia</h3>
                 <div class="table-responsive">
                     <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                         @csrf
                         <thead class="bg-dark text-white">
                             <tr style="text-align:center">
                                 <th style="width: 1%">NO</th>
                                 {{-- <th class="col-md-1">AKSI</th> --}}
                                 <th class="col-md-4">HAL</th>
                                 <th class="col-md-3">
                                     NOMOR SURAT
                                 </th>
                                 <th class="col-md-2">ASAL</th>
                                 <th>Tanggal</th>
                                 <th>File</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($rahasia as $suratmasuk)
                                 <tr style="text-align:center">
                                     <td>{{ $loop->iteration }}</td>
                                     {{-- <td>
                                         <div class="btn-group">
                                             <a href="{{ url('admin/surat-masuk', $suratmasuk->id) }}"
                                                 class="btn btn-drak"><i class="fa fa-info"></i></a>
                                             <a href="{{ url('admin/surat-masuk', $suratmasuk->id) }}surat-masuk/edit"
                                                 class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                             @include('admin.utils.delete', [
                                                 'url' => url('admin/surat-masuk', $suratmasuk->id),
                                             ])
                                         </div>

                                     </td> --}}
                                     <td>{{ $suratmasuk->perihal }}</td>
                                     </td>
                                     <td>
                                         {{ $suratmasuk->nomor_surat }}
                                     </td>
                                     <td>{{ $registeredAt = $suratmasuk->created_at->isoFormat('dddd, D MMMM Y') }}
                                     </td>
                                     <td><a href="{{ asset('storage/public/surat-masuk/' . $suratmasuk->file) }}"><i
                                                 class="fas fa-file-pdf"></i></a>
                                     </td>

                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>

                 <!----Konfidensial----->
                 <h3> Surat Konfidensial</h3>
                 <div class="table-responsive">
                     <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                         @csrf
                         <thead class="bg-dark text-white">
                             <tr style="text-align:center">
                                 <th style="width: 1%">NO</th>
                                 {{-- <th class="col-md-1">AKSI</th> --}}
                                 <th class="col-md-4">HAL</th>
                                 <th class="col-md-3">
                                     NOMOR SURAT
                                 </th>
                                 <th class="col-md-2">ASAL</th>
                                 <th>Tanggal</th>
                                 <th>File</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($konfidensial as $suratmasuk)
                                 <tr style="text-align:center">
                                     <td>{{ $loop->iteration }}</td>
                                     {{-- <td>
                                         <div class="btn-group">
                                             <a href="{{ url('admin/surat-masuk', $suratmasuk->id) }}"
                                                 class="btn btn-drak"><i class="fa fa-info"></i></a>
                                             <a href="{{ url('admin/surat-masuk', $suratmasuk->id) }}surat-masuk/edit"
                                                 class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                             @include('admin.utils.delete', [
                                                 'url' => url('admin/surat-masuk', $suratmasuk->id),
                                             ])
                                         </div>

                                     </td> --}}
                                     <td>{{ $suratmasuk->perihal }}</td>
                                     </td>
                                     <td>
                                         {{ $suratmasuk->nomor_surat }}
                                     </td>
                                     <td>{{ $registeredAt = $suratmasuk->created_at->isoFormat('dddd, D MMMM Y') }}
                                     </td>
                                     <td><a href="{{ asset('storage/public/surat-masuk/' . $suratmasuk->file) }}"><i
                                                 class="fas fa-file-pdf"></i></a>
                                     </td>

                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>

                 <!----Sangat Rahasia----->
                 <h3> Surat Sangat Rahasia</h3>
                 <div class="table-responsive">
                     <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                         @csrf
                         <thead class="bg-dark text-white">
                             <tr style="text-align:center">
                                 <th style="width: 1%">NO</th>
                                 {{-- <th class="col-md-1">AKSI</th> --}}
                                 <th class="col-md-4">HAL</th>
                                 <th class="col-md-3">
                                     NOMOR SURAT
                                 </th>
                                 <th class="col-md-2">ASAL</th>
                                 <th>Tanggal</th>
                                 <th>File</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($sangatrahasia as $suratmasuk)
                                 <tr style="text-align:center">
                                     <td>{{ $loop->iteration }}</td>
                                     {{-- <td>
                                         <div class="btn-group">
                                             <a href="{{ url('admin/surat-masuk', $suratmasuk->id) }}"
                                                 class="btn btn-drak"><i class="fa fa-info"></i></a>
                                             <a href="{{ url('admin/surat-masuk', $suratmasuk->id) }}surat-masuk/edit"
                                                 class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                             @include('admin.utils.delete', [
                                                 'url' => url('admin/surat-masuk', $suratmasuk->id),
                                             ])
                                         </div>

                                     </td> --}}
                                     <td>{{ $suratmasuk->perihal }}</td>
                                     </td>
                                     <td>
                                         {{ $suratmasuk->nomor_surat }}
                                     </td>
                                     <td>{{ $registeredAt = $suratmasuk->created_at->isoFormat('dddd, D MMMM Y') }}
                                     </td>
                                     <td><a href="{{ asset('storage/public/surat-masuk/' . $suratmasuk->file) }}"><i
                                                 class="fas fa-file-pdf"></i></a>
                                     </td>

                                 </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>


             </div>
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
