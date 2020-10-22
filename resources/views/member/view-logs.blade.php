@extends('layout.main')

@section('title', '瀏覽紀錄')

@section('subTitle', '一般客戶可以在此觀看車款瀏覽紀錄')

@section('backgroundImageUrl', 'https://www.business.com/images/content/5ca/3cad05a215e8a458b48e3/1500-0-');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 mx-auto">
                <h2 class="text-center mb-3">瀏覽紀錄</h2>
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">車款</th>
                        <th scope="col">在何時查看?</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cars as $car)
                        <tr>
                            <td>{{ $car->name }}</td>
                            <td>{{ $car->pivot->viewed_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
