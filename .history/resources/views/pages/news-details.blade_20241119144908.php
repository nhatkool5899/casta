@extends('layouts.page')

@section('content')
    <section class="section">
        <div class="container">
            <div class="wrapper-newspage">
                <div class="newspage-title">{{$news->name}}</div>
                <div class="newspage-action">
                    <span class="created-date"><i class="fa-regular fa-calendar"></i> {{$news->created_at->format('d/m/y')}}</span>
                    <div class="share-social">
                        <a href="#" class="share-social-item">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="share-social-item">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="wrapper-text">
                    {!! $news->content !!}
                </div>
            </div>
        </div>
    </section>


    <div class="clear-ft"></div>
@endsection