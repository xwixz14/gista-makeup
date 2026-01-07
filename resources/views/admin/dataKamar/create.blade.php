@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Data paket</h4>
                        <form class="forms-sample" method="post" action="{{ route('dataKamar.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="paket">paket</label>
                                <input type="text" class="form-control" name="paket" id="paket" placeholder="Masukan paket " value="{{ old('paket') }}" required autofocus>
                                @error('tipe_kamar')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="harga">harga</label>
                                <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukan harga" value="{{ old('harga') }}" required>
                                @error('harga')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg mr-2">Submit</button>
                            <a class="btn btn-dark btn-lg" href="/dataKamar">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection