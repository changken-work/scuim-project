@extends('layout.main')

@section('title', '首頁')

@section('subTitle', "一切的開始!")

@section('backgroundImageUrl', 'https://s.yimg.com/os/en/homerun/feed_manager_auto_publish_494/6f2aa144355c81caac9c9ed66a2075bf');

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row mb-3">
            <div class="col-12">
                <h2 class="text-center">我們的特點</h2>
            </div>
        </div>
        <div class="row mx-auto">
            <div class="col-lg-4 col-md-12 text-center">
                <i class="fas fa-link fa-7x mb-2"></i>
                <h3>區塊練技術</h3>
                <p>本系統利用的是時下最潮的區塊鏈技術，能夠保證車輛維護資料的正確性!</p>
            </div>
            <div class="col-lg-4 col-md-12 text-center">
                <i class="fas fa-car fa-7x mb-2"></i>
                <h3>多車款可供挑選</h3>
                <p>在本站的車型款式多元，可供使用者輕易的進行挑選!</p>
            </div>
            <div class="col-lg-4 col-md-12 text-center">
                <i class="fas fa-school fa-7x mb-2"></i>
                <h3>監理機關保證</h3>
                <p>本網站的車況資料皆由政府的監理機關做為保證，讓客戶選的安心、挑的放心!</p>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-12">
                <h2 class="text-center">客戶見證</h2>
            </div>
        </div>
        <div class="row mx-auto">
            <div class="col-lg-4 col-md-12">
                <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80" alt="">
                <p>二手車交易網真的太棒了，它解決了我許多的問題!</p>
            </div>
            <div class="col-lg-4 col-md-12">
                <img src="https://ewscripps.brightspotcdn.com/dims4/default/5194996/2147483647/strip/true/crop/1000x563+0+0/resize/1280x720!/quality/90/?url=https%3A%2F%2Fewscripps.brightspotcdn.com%2Fe9%2F93%2Fa52c003f42ea9ebb36550ca123eb%2Fmike-kelly.png" alt="">
                <p>我從來都沒有看到任何有像這個網站的服務，區塊鏈技術真的太「wonderful」了，你一定要試試!</p>
            </div>
            <div class="col-lg-4 col-md-12">
                <img src="https://www.westernunion.com/content/dam/wu/jm/responsive/send-money-in-person-from-jamaica-resp.png" alt="">
                <p>我愛死這個平台了，它真的幫了我很多!</p>
            </div>
        </div>
    </div>
@endsection
