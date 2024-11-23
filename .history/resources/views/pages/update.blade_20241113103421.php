@extends('layouts.page')

@section('banner')
    <div class="banner">
        <div class="banner-page">
            <img src="https://themes.webdevia.com/smart-home-wordpress-theme/wp-content/uploads/2017/04/pgae-bg.jpg" alt="image">
            <div class="wrapper-breadcrumbs">
                <h1>Chuyển giao công nghệ</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{route('home')}}">Trang chủ</a></li>
                    <li><a href="{{route('home')}}">Chuyển giao công nghệ</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="wrapper-upadte">
                <img src="{{asset('front-end/assets/imgs/update.webp')}}" alt="update">
            </div>
        </div>
    </section>
    <div class="clear-ft"></div>
@endsection