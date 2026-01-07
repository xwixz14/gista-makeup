@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Custumer</h4>
                        <form class="forms-sample" method="post" action="{{ route('dataReservasi.update', $datareservasi->id) }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="custumer">Nama Custumer</label>
                                <input type="text" class="form-control @error('custumer') is-invalid @enderror" id="custumer"name="custumer" value="{{ old('custumer', $datareservasi->custumer) }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email"value="{{ old('email', $datareservasi->email) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">no_hp</label>
                                <input type="number" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" id="no_hp" value="{{ old('no_hp', $datareservasi->no_hp) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="paket">paket</label>
                                <input type="text" class="form-control @error('paket') is-invalid @enderror" name="paket" id="paket" value="{{ old('paket', $datareservasi->paket) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="harga">harga</label>
                                <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" id="harga" value="{{ old('harga', $datareservasi->harga) }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_reservasi">tanggal_reservasi</label>
                                <input type="date" class="form-control @error('tanggal_reservasi') is-invalid @enderror" name="tanggal_reservasi" id="tanggal_reservasi" value="{{ old('tanggal_reservasi', $datareservasi->tanggal_reservasi) }}" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-lg mr-2">Submit</button>
                            <a class="btn btn-dark btn-lg" href="/dataReservasi">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection