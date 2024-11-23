@extends('layouts.admin')
@section('content')
    
    <div class="pagetitle">
        <h1>Quản lý Mật khẩu</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Daschboard</a></li>
                <li class="breadcrumb-item">Mật khẩu</li>
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
                    <form action="{{url('change-password/update')}}" method="POST">                      
                        @csrf


                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Mật khẩu hiện tại</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="password" value="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Mật khẩu mới</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="new_password" value="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nhập lại mật khẩu mới</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="confirm_password" value="">
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