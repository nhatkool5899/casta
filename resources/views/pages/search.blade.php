@extends('layouts.page')


@section('content')
    
<section class="section">
    <div class="container">
        <div class="wrapper-title">
            <h2>Từ khóa: "{{$keyword}}"</h2>
        </div>
        <div class="search-list">

            @foreach ($news as $item)
                
            <div class="news-inner">
                <a href="{{url('chi-tiet-tin-tuc/'.$item->slug)}}" class="news-inner-img">
                    <img src="{{asset('uploads/news/'.$item->image)}}" alt="{{$item->image}}">
                </a>
                <div class="news-inner-context">
                    <a href="{{url('chi-tiet-tin-tuc/'.$item->slug)}}" class="news-inner-name">{{$item->name}}</a>
                    <div class="news-inner-bot">
                        <div class="news-inner-info">
                            <span><i class="fa-regular fa-calendar"></i> {{$item->created_at->format('d/m/y')}}</span>
                            <span><i class="fa-regular fa-eye"></i> 5899</span>
                        </div>
                        <a href="{{url('chi-tiet-tin-tuc/'.$item->slug)}}" class="btn-primary btn-news">
                            Xem thêm<i class="fa-regular fa-chevron-right"></i>
                        </a>
                        
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>

<div class="clear-ft"></div>
@endsection
