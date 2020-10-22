@extends('layout.admin-main')

@section('title', '簽署紀錄列表')

@section('subTitle', '這邊可以看到車廠的簽署紀錄!')

@section('content')
    <div class="container">
        <div class="col-lg-10 col-md-12 mx-auto">
            <h2 class="text-center mb-3">以下是您簽署的維護紀錄!</h2>
        </div>
        <div class="col-lg-10 col-md-12 rwdTableContainer">
            <table class="table rwdTable mx-auto">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">車款名稱</th>
                        <th scope="col">本次hash</th>
                        <th scope="col">前次hash</th>
                        <th scope="col">里程數</th>
                        <th scope="col">簽署在</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($repairLogs as $repairLog)
                    <tr>
                        <th scope="row">{{ $repairLog->car->name }}</th>
                        <td>{{ $repairLog->current_hash }}</td>
                        <td>{{ $repairLog->prev_hash }}</td>
                        <td>{{ $repairLog->mileages }}</td>
                        <td>{{ $repairLog->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
