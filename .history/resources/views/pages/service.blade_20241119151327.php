@extends('layouts.page')

@section('banner')
    <div class="banner">
        <div class="banner-page">
            <img src="{{asset('uploads/banner/'.$banner->image)}}" alt="image">
            <div class="wrapper-breadcrumbs">
                <h1>{{$service->name}}</h1>
                <ul class="breadcrumbs">
                    <li><a href="{{route('home')}}">Trang chủ</a></li>
                    <li><a href="#">{{$service->name}}</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="wrapper-text">
                {!! $service->content !!}
            </div>
        </div>
    </section>
    <div class="clear-ft"></div>
@endsection