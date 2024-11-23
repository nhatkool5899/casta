@extends('layouts.admin')
@section('content')
    
    <div class="pagetitle">
        <h1>Quản lý Chính sách</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Daschboard</a></li>
                <li class="breadcrumb-item">Chính sách</li>
                <li class="breadcrumb-item active">Thêm mới</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-12">

                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Chính sách</h5>
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
                    <form action="{{route('policy.store')}}" enctype="multipart/form-data" method="POST">                      
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tên(*)</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="name" value="{{old('name')}}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nội dung</label>
                            <div class="col-sm-9">
                                <textarea name="content" class="form-control" id="editor" rows="4">{{old('content')}}</textarea>
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