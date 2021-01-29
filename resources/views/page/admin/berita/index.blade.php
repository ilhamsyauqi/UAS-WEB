@extends('layouts.admin')
@section('content')
<div class="container-fluid mt-3">
    <a href="{{route('berita.create')}}" class="btn btn-primary float-right mb-3"> CREATE</a>

    <table class="table table-bordered">
      <thead class="thead-warnin bg-primary">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Image</th>
          <th scope="col">Text</th>
          <th scope="col">Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($items as $no => $item)
        <tr>
          <th scope="row">{{$no+1}}</th>
          <td><img src="{{Storage::url($item->image)}}" style="width: 150px" class="img-thumbnail" alt=""></td>
          <td>{{($item->text)}}</td>
          <td>{{($item->date)}}</td>
          <td>
              <a href="{{ route('berita.edit' ,$item->id)}}"
              class="btn btn-outline-primary">Edit</a>
              <a onclick="return confirm('Apakah anda yakin untuk menghapus ini?')">
              <form action="{{ route('berita.destroy', $item->id)}}" method="post" class="d-inline">
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
