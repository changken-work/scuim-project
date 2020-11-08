@extends('layout.main')

@section('title', '會員中心')

@section('subTitle', "這邊能夠管理您的帳號!!")

@section('backgroundImageUrl', asset('img/member-center-bg.jpeg'));

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <h2 class="mb-2">Member</h2>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">項目</th>
                            <th scope="col">會員資料</th>
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
                        @switch($user->userable_type)
                            @case("customers")
                                <tr>
                                    <th scope="row">大名</th>
                                    <td>{{ $user->userable->fullname }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">手機</th>
                                    <td>{{ $user->userable->phone }}</td>
                                </tr>
                            @break
                            @case("vendors")
                            @case("factories")
                                <tr>
                                    <th scope="row">公司名稱</th>
                                    <td>{{ $user->userable->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">電話</th>
                                    <td>{{ $user->userable->tel }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">地址</th>
                                    <td>{{ $user->userable->address }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">上班時間</th>
                                    <td>{{ $user->userable->worktime }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">介紹</th>
                                    <td>{{ $user->userable->description }}</td>
                                </tr>
                            @break
                        @endswitch
                        <tr>
                            <th scope="row">等級</th>
                            <td>
                                @switch($user->userable_type)
                                    @case("admins")
                                    管理者
                                    @break
                                    @case("customers")
                                    一般客戶
                                    @break
                                    @case("vendors")
                                    車商
                                    @break
                                    @case("factories")
                                    車廠
                                    @break
                                @endswitch
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
