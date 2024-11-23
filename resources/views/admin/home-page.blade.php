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
                            <label class="col-sm-2 col-form-label">Text giới thiệu</label>
                            <div class="col-sm-8">
                                <textarea name="text_1" id="editor" class="form-control">{{$home->text_1}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputFIle" class="col-sm-2 col-form-label">Ảnh 1</label>
                            <div class="col-sm-9">
                                <input class="form-control file-img" name="image_1" id="inputImg" type="file" accept="image/*">
                            </div>
                        </div>

                        <div class="preview-img"><img id="preview-img" src="{{asset('uploads/home-page/'.$home->image_1)}}" style="max-width:500px"></div>
                        <script>
                            const input = document.getElementById('inputImg');
                            const image = document.getElementById('preview-img');

                            input.addEventListener('change', (e) => {

                                if (e.target.files.length) {
                                    const src = URL.createObjectURL(e.target.files[0]);
                                    image.src = src;
                                }
                            });
                        </script>

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
