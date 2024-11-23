@extends('layouts.admin')
@section('content')
    
    <div class="pagetitle">
        <h1>Quản lý Chính sách</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}l">Daschboard</a></li>
                <li class="breadcrumb-item">Chính sách</li>
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
                    <!-- General Form Elements -->
                    <form action="{{route('policy.update', ['policy' => $policy->id])}}" method="POST">                      
                        @csrf
                        @method("PUT")

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tên(*)</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="name" value="{{$policy->name}}" id="slug" onkeyup="ChangeToSlug()">
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nội dung</label>
                            <div class="col-sm-9">
                                <textarea name="content" class="form-control" id="editor" rows="4">{{$policy->content}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">File</label>
                            <div class="col-sm-9">
                                <input class="form-control file-img" name="file" type="file" accept=".doc,.docx,.pdf">
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