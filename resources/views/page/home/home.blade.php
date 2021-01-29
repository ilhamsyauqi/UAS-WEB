@extends('index')
@section('content')
<section class="video mb-5">
    <video loop autoplay muted playsinline width="100%">
        <source src="asset/video-background-comp_1.mp4" type="video/mp4">
    </video>
</section>

<section class="dua mb-5">
    <div class="container">
        @foreach ($kedua as $item)
        <div class="row">
            <div class="col mb-5">
                <img src="{{Storage::url($item->image)}}" style="width: 450px;" alt="">
            </div>
            <div class="col my-auto">
                <h3>{{$item->judul}}</h3>
                <div class="text">
                    <p>{{$item->text}}</p>
                </div>
                <button type="button" class="btn btn-dark">LEARN MORE ABOUT US</button>
            </div>
        </div>
        @endforeach

    </div>
</section>

<section class="tiga">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="border: none;">
                    <img src="asset/boots-cta_300x300.webp" alt="">
                    <div class="card-body text-center">
                        BOOTS
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="border: none;">
                    <img src="asset/booties-cta_300x300.webp" alt="">
                    <div class="card-body text-center">
                        BOOTIES
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="border: none;">
                    <img src="asset/Heels_300x300.webp" alt="">
                    <div class="card-body text-center">
                        HEELS
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="fixed-bottom">
    <img class="float-right" src="asset/wa.svg" style="width: 70px;" alt="">
</div>
@endsection
