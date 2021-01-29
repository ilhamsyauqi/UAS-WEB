@extends('layouts.admin')
@section('content')
<div class="container-fluid text-black mt-3">
    <div class="card">
        <div class="card-header bg-primary">
            <div class="card-tittle">
                <h5 class="text-white">Tambah pertanian</h5>
            </div>
        </div>
        <div class="card-body p-2">

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="post" action="{{route('pertanian.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="produj">Produk</label>
                <input type="text" class="form-control" id="produk" name="produk" placeholder="Enter Image">
              </div>
              <div class="form-group">
                <label for="bulan">Bulan</label>
                <input type="text" class="form-control" id="bulan" name="bulan" placeholder="Enter Image">
              </div>
              <div class="form-group">
                <label for="terakhir">Terakhir</label>
                <input type="number" class="form-control" id="terakhir" name="terakhir" placeholder="Enter Image">
              </div>
              <div class="form-group">
                <label for="persentase">Persentase</label>
                <input type="number" class="form-control" id="persentase" name="persentase" placeholder="Enter Image">
              </div>
              <div class="form-group">
                <label for="perubahan">Perubahan</label>
                <input type="number" class="form-control" id="perubahan" name="perubahan" placeholder="Enter Image">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
</div>
@endsection
