@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit paket</h4>
                        <form class="forms-sample" method="post" action="{{ route('dataKamar.update', $datakamar->id) }}" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="paket">Tipe paket</label>
                                <input type="text" class="form-control @error('paket') is-invalid @enderror" id="paket" placeholder="Edit data kamar" name="paket" value="{{ old('paket', $datakamar->paket) }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="harga">harga</label>
                                <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" id="harga" placeholder="Edit jumlah kamar" value="{{ old('harga', $datakamar->harga) }}" required>
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