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
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <b>Data User</b>
                        <a href="{{ url('admin/user/create') }}" class="btb btn-primary float-end"><i class="fa fa-plus"></i>
                            tambah
                            Data</a>

                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>username</th>



                            </thead>
                            <tbody>
                                @foreach ($list_user as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('admin/user', $user->id) }}" class="btn btn-dark"><i
                                                        class="fa fa-info"></i></a>
                                                <a href="{{ url('admin/user', $user->id) }}user/edit"
                                                    class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                                @include('admin.utils.delete', [
                                                    'url' => url('admin/user', $user->id),
                                                ])
                                            </div>
                                        </td>
                                        <td>{{ $user->username }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
