@extends('template.welcome')


@section('content')
    {{-- <div class="container">
        <div class="row">

            <div class="card mb-4 mt-4" id="kotak">

                <div class="card-body">
                    <table id="datatablesSimple" style="background-color: 	#DFF6FF">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Peraturan</th>
                                <th>Nomor Regulasi</th>
                                <th>Tentang</th>
                                <th>Download</th>

                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($list_upload as $upload)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if ($upload->kategori == 1)
                                            <p>Peraturan Pemerintah</p>
                                        @elseif ($upload->kategori == 2)
                                            <p>Peraturan Presiden</p>
                                        @elseif ($upload->kategori == 3)
                                            <p>Peraturan Menteri</p>
                                        @elseif ($upload->kategori == 4)
                                            <p>Peraturan Gubernur</p>
                                        @elseif ($upload->kategori == 5)
                                            <p>Peraturan Daerah</p>
                                        @elseif ($upload->kategori == 6)
                                            <p>Peraturan Bupati</p>
                                        @elseif ($upload->kategori == 7)
                                            <p>Peraturan SK Bupati</p>
                                        @elseif ($upload->kategori == 8)
                                            <p>Peraturan SK Kepala DPMPTSP</p>
                                        @elseif ($upload->kategori == 9)
                                            <p>Undang-Undang</p>
                                        @endif
                                    </td>
                                    <td>{{ $upload->no_regulasi }}</td>
                                    <td>{{ $upload->tentang }}</td>
                                    <td><a href="{{ asset('storage\public/' . $upload->file) }}"><B>Download Disini</B></a>
                                    </td>
                            @endforeach


                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <style>
        #kotak {
            box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.8);
            padding: 10px;
            border: 1px solid grey;
        }
    </style> --}}
@endsection
