@extends('layouts.admin')
@section('content')
<div class="container-fluid mt-3">
    <a href="{{route('pertanian.create')}}" class="btn btn-primary float-right mb-3"> CREATE</a>

    <table class="table table-bordered">
      <thead class="thead-warnin bg-primary">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Produk</th>
          <th scope="col">Bulan</th>
          <th scope="col">Terakhir</th>
          <th scope="col">Persentase</th>
          <th scope="col">Perubahan</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($items as $no => $item)
        <tr>
          <th scope="row">{{$no+1}}</th>
          <td>{{($item->produk)}}</td>
          <td>{{($item->bulan)}}</td>
          <td>{{($item->terakhir)}}</td>
          <td>{{($item->persentase)}}%</td>
          <td>{{($item->perubahan)}}</td>
          <td>
              <a href="{{ route('pertanian.edit' ,$item->id)}}"
              class="btn btn-outline-primary">Edit</a>
              <a onclick="return confirm('Apakah anda yakin untuk menghapus ini?')">
              <form action="{{ route('pertanian.destroy', $item->id)}}" method="post" class="d-inline">
              @csrf
              @method('delete')
              <button class="btn btn-outline-primary">Delete</button>
              </form>
              </a>
          </td>
          </tr>
        @empty

        @endforelse

      </tbody>
    </table>
   </div>
@endsection
