@extends('layouts.admin')
@section('content')
<div class="container-fluid mt-3">
    <a href="{{route('kedua.create')}}" class="btn btn-primary float-right mb-3"> CREATE</a>

    <table class="table table-bordered">
      <thead class="thead-warnin bg-primary">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Image</th>
          <th scope="col">Judul</th>
          <th scope="col">Text</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($items as $no => $item)
        <tr>
          <th scope="row">{{$no+1}}</th>
          <td>
              <img src="{{Storage::url($item->image)}}" alt="image" style="width: 150px" class="img-thumbnail">
          </td>
          <td>{{($item->judul)}}</td>
          <td>{{($item->text)}}</td>
          <td>
              <a href="{{ route('kedua.edit' ,$item->id)}}"
              class="btn btn-outline-primary">Edit</a>
              <a onclick="return confirm('Apakah anda yakin untuk menghapus ini?')">
              <form action="{{ route('kedua.destroy', $item->id)}}" method="post" class="d-inline">
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
