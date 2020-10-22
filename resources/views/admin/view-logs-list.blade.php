@extends('layout.admin-main')

@section('title', '瀏覽紀錄管理')

@section('subTitle', '這邊可以看到一般客戶的瀏覽紀錄!')

@section('content')
    <div class="container">
        <div class="col-lg-8 col-md-12 mx-auto">
            <h2 class="text-center mb-3">以下所有一般客戶的瀏覽紀錄!</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">客戶</th>
                        <th scope="col">車款</th>
                        <th scope="col">瀏覽在</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($viewLogs as $viewLog)
                    <tr>
                        <th scope="row">{{ $viewLog->customer->fullname }}</th>
                        <td>{{ $viewLog->car->name }}</td>
                        <td>{{ $viewLog->viewed_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
