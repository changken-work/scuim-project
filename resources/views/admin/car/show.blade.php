@extends('layout.admin-main')

@section('title', '車款管理 - '.$car->name)

@section('subTitle', 'NT$ '.$car->price)

@section('content')
    <div class="container">
        <div class="col-lg-8 col-md-12 mx-auto">
            <h2 class="text-center mb-3">以下是這輛車的詳細記錄</h2>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">項目</th>
                    <th scope="col">值</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">編號</th>
                        <td>{{ $car->id }}</td>
                    </tr>
                    <tr>
                        <th scope="row">名稱</th>
                        <td>{{ $car->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">圖片</th>
                        <td><img src="{{ $car->image_url }}" alt="{{ $car->name }}"></td>
                    </tr>
                    <tr>
                        <th scope="row">品牌</th>
                        <td>{{ $car->brand }}</td>
                    </tr>
                    <tr>
                        <th scope="row">型號</th>
                        <td>{{ $car->model }}</td>
                    </tr>
                    <tr>
                        <th scope="row">價格</th>
                        <td>{{ $car->price }}</td>
                    </tr>
                    <tr>
                        <th scope="row">車齡</th>
                        <td>{{ $car->age }} 年</td>
                    </tr>
                    <tr>
                        <th scope="row">上架在</th>
                        <td>{{ $car->created_at }}</td>
                    </tr>
                </tbody>
            </table>
            <h2 class="text-center mb-3">車商資訊</h2>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">項目</th>
                    <th scope="col">值</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">編號</th>
                    <td>{{ $car->vendor->id }}</td>
                </tr>
                <tr>
                    <th scope="row">名稱</th>
                    <td>{{ $car->vendor->name }}</td>
                </tr>
                <tr>
                    <th scope="row">電話</th>
                    <td>{{ $car->vendor->tel }}</td>
                </tr>
                <tr>
                    <th scope="row">地址</th>
                    <td>{{ $car->vendor->address }}</td>
                </tr>
                <tr>
                    <th scope="row">上班時間</th>
                    <td>{{ $car->vendor->worktime }}</td>
                </tr>
                <tr>
                    <th scope="row">介紹</th>
                    <td>{{ $car->vendor->description }}</td>
                </tr>
                </tbody>
            </table>
            <h2 class="text-center mb-3">車況維護紀錄</h2>
            <p class="text-center">採用時下最潮的區塊鏈!</p>
        </div>
        <div class="col-lg-10 col-md-12 mx-auto rwdTableContainer">
            <table class="table rwdTable">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">車廠</th>
                    <th scope="col">本次hash</th>
                    <th scope="col">前次hash</th>
                    <th scope="col">里程數</th>
                    <th scope="col">紀錄時間</th>
                </tr>
                </thead>
                <tbody>
                @foreach($car->factory as $factory)
                <tr>
                    <th scope="row">{{ $factory->name }}</th>
                    <td>{{ $factory->pivot->current_hash }}</td>
                    <td>{{ $factory->pivot->prev_hash }}</td>
                    <td>{{ $factory->pivot->mileages }}</td>
                    <td>{{ $factory->pivot->created_at }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
