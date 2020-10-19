@extends('layout.main')

@section('title', '列出所有車款')

@section('subTitle', "這邊能夠找到您想到找的車!!")

@section('backgroundImageUrl', 'https://s7d1.scene7.com/is/image/hyundai/2020-elantra-vlp-hero-grad:Hero-Image?qlt=85,0');

@section('content')
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="text-center">Query</h2>
            </div>
        </div>
        <div class="row">
            @foreach($cars as $car)
                <a class="col-lg-4 col-md-12 mb-3 query-item" href="{{ route('queryItem', ['id' => $car->id]) }}">
                    <img src="{{ $car->image_url }}" alt="{{ $car->name }}" class="mb-3">
                    <h3>{{ $car->name }}</h3>
                    <span>{{ $car->brand }}</span><br>
                    <span>Price: NT$ {{ $car->price }}</span>
                </a>
            @endforeach
        </div>
    </div>
@endsection
