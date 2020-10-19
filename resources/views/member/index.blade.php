@extends('layout.main')

@section('title', '會員中心')

@section('subTitle', "這邊能夠管理您的帳號!!")

@section('backgroundImageUrl', 'https://miro.medium.com/max/7016/1*CGnmDsELRtRPSkFQC6LdjQ.jpeg');

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2>Member</h2>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">項目</th>
                            <th scope="col">值</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">使用者名稱</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">等級</th>
                            <td>{{ $user->level }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
