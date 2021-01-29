@extends('layouts.admin')
@section('content')
<div class="container-fluid text-black mt-3">
    <div class="card">
        <div class="card-header bg-primary">
            <div class="card-tittle">
                <h5 class="text-white">Edit berita</h5>
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

        <form method="post" action="{{route('berita.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="Enter Image">
              </div>
              <div class="form-group">
                <label for="text">Text</label>
                <input type="text" class="form-control" id="text" name="text" placeholder="Enter Text">
              </div>
              <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" placeholder="Enter Date">
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
    </div>
</div>
@endsection
