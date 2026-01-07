@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-5">Data Custumer</h4>
                    <ul class="navbar-nav w-100 mb-3">
                        <li class="nav-item w-100">
                            <!-- <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search" action="/dataReservasi/search" method="GET">
                                <input type="search" name="cari" class="form-control" placeholder="Cari nama custumer ..." autofocus value="{{ old('cari') }}">
                                <button type="submit" class="btn btn-success ml-2 ">&nbsp;&nbsp;<i class="mdi mdi-account-search"></i></button>
                            </form> -->
                        </li>
                    </ul>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> No. </th>
                                    <th> custumer</th>
                                    <th> email</th>
                                    <th> no_hp</th>
                                    <th> paket</th>
                                    <th> harga</th>
                                    <th> tanggal Reservasi </th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dataReservasi as $row)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $row->custumer }} </td>
                                    <td> {{ $row->email }} </td>
                                    <td> {{ $row->no_hp }} </td>
                                    <td> {{ $row->paket }} </td>
                                    <td> {{ $row->harga }} </td>
                                    <td> {{ $row->tanggal_reservasi }} </td>
                                    <td>
                                    <button class="badge bg-info border-0"><a href="{{ route('dataReservasi.edit',$row->id) }}"><i class="mdi mdi-pencil"></i></a></button>
                                        &nbsp;
                                        <form action="{{ route('dataReservasi.destroy',$row->id) }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="badge bg-danger border-0" onclick="return confirm('Apakah Anda yakin?')"><i class="mdi mdi-popcorn"></i></button>
                                    </td>
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