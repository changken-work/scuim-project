@extends('layout.admin-main')

@section('title', '使用者 - ' . $user->name)

@section('subTitle', $user->email)

@section('content')
    <div class="container">
        <div class="col-lg-8 col-md-12 mx-auto mb-3">
            <h2 class="text-center">使用者詳細資料</h2>
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
                        <td>{{ $user->id }}</td>
                    </tr>
                    <tr>
                        <th scope="row">使用者名稱</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th scope="row">使用者等級</th>
                        <td>{{ $user->userable_type }}</td>
                    </tr>
                    <tr>
                        <th scope="row">註冊在</th>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                </tbody>
            </table>

            @if($user->userable_type !== 'admins')
            <h2 class="text-center">個別身分資料</h2>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">項目</th>
                    <th scope="col">值</th>
                </tr>
                </thead>
                <tbody>
                @if($user->userable_type === 'vendors' || $user->userable_type === 'factories')
                    <tr>
                        <th scope="row">公司名稱</th>
                        <td>{{ $user->userable->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">公司電話</th>
                        <td>{{ $user->userable->tel }}</td>
                    </tr>
                    <tr>
                        <th scope="row">公司地址</th>
                        <td>{{ $user->userable->address }}</td>
                    </tr>
                    <tr>
                        <th scope="row">公司上班時間</th>
                        <td>{{ $user->userable->worktime }}</td>
                    </tr>
                    <tr>
                        <th scope="row">公司介紹</th>
                        <td>{{ $user->userable->description }}</td>
                    </tr>
                @elseif($user->userable_type === 'customers')
                    <tr>
                        <th scope="row">客戶大名</th>
                        <td>{{ $user->userable->fullname }}</td>
                    </tr>
                    <tr>
                        <th scope="row">客戶手機</th>
                        <td>{{ $user->userable->phone }}</td>
                    </tr>
                @endif
                </tbody>
            </table>
            @endif
        </div>
    </div>
@endsection
