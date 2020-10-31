@extends('layout.main')

@section('title', $car->name)

@section('subTitle', 'NT$ '.$car->price)

@section('backgroundImageUrl', $car->image_url);

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <h2 class="text-center mb-3">產品資訊</h2>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">項目</th>
                            <th scope="col">值</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">車輛名稱</th>
                            <td>{{ $car->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">車輛品牌</th>
                            <td>{{ $car->brand }}</td>
                        </tr>
                        <tr>
                            <th scope="row">車輛型號</th>
                            <td>{{ $car->model }}</td>
                        </tr>
                        <tr>
                            <th scope="row">車輛價格</th>
                            <td>NT$ {{ $car->price }}</td>
                        </tr>
                        <tr>
                            <th scope="row">車輛年齡</th>
                            <td>{{ $car->age }} 年</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6 col-md-12">
                <h2 class="text-center mb-3">車商聯絡資訊</h2>
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">項目</th>
                        <th scope="col">值</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">車商名稱</th>
                        <td>{{ $car->vendor->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">車商電話</th>
                        <td>{{ $car->vendor->tel }}</td>
                    </tr>
                    <tr>
                        <th scope="row">車商地址</th>
                        <td>{{ $car->vendor->address }}</td>
                    </tr>
                    <tr>
                        <th scope="row">車商上班時間</th>
                        <td>{{ $car->vendor->worktime }}</td>
                    </tr>
                    <tr>
                        <th scope="row">車商介紹</th>
                        <td>{{ $car->vendor->description }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mb-3">近30天車況維護紀錄</h2>
            </div>
            <div class="col-12 mx-auto rwdTableContainer">
                <table class="table rwdTable">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">車廠</th>
                        <th scope="col">本次hash值</th>
                        <th scope="col">前次hash值</th>
                        <th scope="col">里程數</th>
                        <th scope="col">平均轉速</th>
                        <th scope="col">紀錄時間</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($car->factory as $factory)
                        <tr>
                            <td>{{ $factory->name }}</td>
                            <td>{{ $factory->pivot->current_hash }}</td>
                            <td>{{ $factory->pivot->prev_hash }}</td>
                            <td>{{ $factory->pivot->mileages }}</td>
                            <td>{{ $factory->pivot->avg_rpm }}</td>
                            <td>{{ $factory->pivot->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
