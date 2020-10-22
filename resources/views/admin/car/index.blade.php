@extends('layout.admin-main')

@section('title', '車款管理')

@section('subTitle', '這邊可以看到所有車款的紀錄!')

@section('content')
    <div class="container">
        <div class="col-lg-10 col-md-12 mx-auto">
            <h2 class="text-center mb-3">以下是在資料庫中的汽車資料!</h2>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">編號</th>
                    <th scope="col">車商</th>
                    <th scope="col">名稱</th>
                    <th scope="col">圖片</th>
                    <th scope="col">管理</th>
                </tr>
                </thead>
                <tbody>
                @foreach($cars as $car)
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->vendor->name }}</td>
                        <td>{{ $car->name }}</td>
                        <td><img src="{{ $car->image_url }}" alt="{{ $car->name }}"></td>
                        <td><a href="{{ route('car.show', ['car'=>$car->id]) }}" class="btn btn-primary">檢視</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
