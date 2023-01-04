@extends('admin.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">

                <div class="card">
                    <div class="card-header">
                        <h5 class=" pt-2">Peraturan Undang-Undang</h5>
                    </div>
                    <div class="card-body">
                        {{-- <td class="card-text">Nama : {{ $upload->name }}</td> <br> --}}
                        <td class="card-text">Kategori :{{ $upload->kategori }}
                            
                        </td> <br>

                        <a href="{{ asset('storage\public/' . $upload->file) }}">View</a>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
