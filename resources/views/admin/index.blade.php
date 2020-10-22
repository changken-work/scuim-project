@extends('layout.admin-main')

@section('title', '管理後台')

@section('subTitle', '一個讓管理員輕鬆管理的後台!')

@section('content')
    <div class="container">
        <div class="col-lg-8 col-md-12 mx-auto">
            <h2>歡迎您進入本系統的管理後台!</h2>
            <h2>以下為權限表</h2>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">項目</th>
                        <th scope="col">管理員</th>
                        <th scope="col">車商</th>
                        <th scope="col">車廠</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">帳號管理</th>
                        <td>V</td>
                        <td>X</td>
                        <td>X</td>
                    </tr>
                    <tr>
                        <th scope="row">瀏覽紀錄</th>
                        <td>V</td>
                        <td>X</td>
                        <td>X</td>
                    </tr>
                    <tr>
                        <th scope="row">車款管理</th>
                        <td>V</td>
                        <td>X</td>
                        <td>X</td>
                    </tr>
                    <tr>
                        <th scope="row">車況維護管理</th>
                        <td>V</td>
                        <td>X</td>
                        <td>X</td>
                    </tr>
                    <tr>
                        <th scope="row">上傳車款資訊</th>
                        <td>X</td>
                        <td>V</td>
                        <td>X</td>
                    </tr>
                    <tr>
                        <th scope="row">上傳車況維護資訊</th>
                        <td>X</td>
                        <td>X</td>
                        <td>V</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
