@extends('layouts.admin')
@section('content')
    
    <div class="pagetitle">
        <h1>Quản lý Trang chủ</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Daschboard</a></li>
                <li class="breadcrumb-item">Trang chủ</li>
                <li class="breadcrumb-item active">Cập nhật</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-12">

                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">General Form Elements</h5>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (session('status'))
                        <div class="alert alert-success" style="margin-left: 0">
                            {{ session('status') }}
                        </div>
                    @endif
                    <!-- General Form Elements -->
                    <form action="{{url('home-page/update')}}" enctype="multipart/form-data" method="POST">                      
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Title 1</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="title_1" value="{{$home->title_1}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Text 1</label>
                            <div class="col-sm-8">
                                <textarea name="text_1" class="form-control" rows="5">{{$home->text_1}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Title 2</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="title_2" value="{{$home->title_2}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Text 2</label>
                            <div class="col-sm-8">
                                <textarea name="text_2" class="form-control" rows="5">{{$home->text_2}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Title 3</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="title_3" value="{{$home->title_3}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Text 3</label>
                            <div class="col-sm-8">
                                <textarea name="text_3" class="form-control" rows="5">{{$home->text_3}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Title 4</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="title_4" value="{{$home->title_4}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Text 4</label>
                            <div class="col-sm-8">
                                <textarea name="text_4" class="form-control" rows="5">{{$home->text_4}}</textarea>
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-sm-9"></div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn-confirm">Xác nhận <i class="fa-solid fa-floppy-disk"></i></button>
                            </div>
                        </div>
      
                    </form><!-- End General Form Elements -->
      
                  </div>
                </div>
      
              </div>
        </div>
    </section>

@endsection
