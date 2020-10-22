@extends('layout.admin-main')

@section('title', '使用者管理')

@section('subTitle', '這邊可以輕鬆地管理帳號!')

@section('content')
    <div class="container">
        <div class="col-lg-8 col-md-12 mx-auto mb-3">
            <h2 class="text-center">使用者列表</h2>
        </div>
        <div class="col-lg-8 col-md-12 mx-auto rwdTableContainer">
            <table class="table rwdTable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">編號</th>
                        <th scope="col">使用者名稱</th>
                        <th scope="col">Email</th>
                        <th scope="col">使用者等級</th>
                        <th scope="col">管理</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->userable_type }}</td>
                            <td><a href="{{ route('user.show', ['user' => $user->id]) }}" class="btn btn-primary">檢視</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
