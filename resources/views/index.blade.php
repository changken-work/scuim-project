@extends('layout.main')

@section('title', '首頁')

@section('subTitle', "一切的開始!")

@section('backgroundImageUrl', asset('img/home-bg.jpg'));

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
                <img src="{{ asset('img/person1.jpg') }}" alt="">
                <p>二手車交易網真的太棒了，它解決了我許多的問題!</p>
            </div>
            <div class="col-lg-4 col-md-12">
                <img src="{{ asset('img/person2.png') }}" alt="">
                <p>我從來都沒有看到任何有像這個網站的服務，區塊鏈技術真的太「wonderful」了，你一定要試試!</p>
            </div>
            <div class="col-lg-4 col-md-12">
                <img src="{{ asset('img/person3.png') }}" alt="">
                <p>我愛死這個平台了，它真的幫了我很多!</p>
            </div>
        </div>
    </div>
@endsection
