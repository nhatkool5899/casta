@extends('layouts.admin')
@section('content')
    
    <div class="pagetitle">
        <h1>Quản lý Giới thiệu</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Daschboard</a></li>
                <li class="breadcrumb-item">Giới thiệu</li>
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
                   <form action="{{url('about-page/update')}}" enctype="multipart/form-data" method="POST">                      
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Text giới thiệu chung</label>
                        <div class="col-sm-8">
                            <textarea name="text_1" id="editor" class="form-control">{{$about->text_1}}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputImg1" class="col-sm-2 col-form-label">Ảnh giới thiệu chung</label>
                        <div class="col-sm-8">
                            <input class="form-control file-img" name="image_1" id="inputImg1" type="file">
                        </div>
                    </div>

                    <div class="preview-img"><img id="preview-img-1" src="{{asset('uploads/about-page/'.$about->image_1)}}" class="preview-images" alt="image-preview"></div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Text chức năng</label>
                        <div class="col-sm-8">
                            <textarea name="text_2" id="editor1" class="form-control">{{$about->text_2}}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputImg2" class="col-sm-2 col-form-label">Ảnh chức năng</label>
                        <div class="col-sm-8">
                            <input class="form-control file-img" name="image_2" id="inputImg2" type="file">
                        </div>
                    </div>

                    <div class="preview-img"><img id="preview-img-2" src="{{asset('uploads/about-page/'.$about->image_2)}}" class="preview-images" alt="image-preview"></div>


                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Text năng lực</label>
                        <div class="col-sm-8">
                            <textarea name="text_3" id="editor2" class="form-control">{{$about->text_3}}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputImg3" class="col-sm-2 col-form-label">Ảnh năng lực</label>
                        <div class="col-sm-8">
                            <input class="form-control file-img" name="image_3" id="inputImg3" type="file">
                        </div>
                    </div>

                    <div class="preview-img"><img id="preview-img-3" src="{{asset('uploads/about-page/'.$about->image_3)}}" class="preview-images" alt="image-preview"></div>

                    <div class="row mb-3">
                        <label for="inputNumber" class="col-sm-2 col-form-label">File năng lực</label>
                        <div class="col-sm-9">
                            <input class="form-control file-img" name="file" type="file" accept=".doc,.docx,.pdf">
                        </div>
                        <div>
                            <a target="_blank" href="{{url('uploads/about-page/'.$about->file)}}" class="edit-icon"><i class="fas fa-file-pdf"></i></a>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputImg4" class="col-sm-2 col-form-label">Ảnh ban lãnh đạo</label>
                        <div class="col-sm-8">
                            <input class="form-control file-img" name="image_4" id="inputImg4" type="file">
                        </div>
                    </div>

                    <div class="preview-img"><img id="preview-img-4" src="{{asset('uploads/about-page/'.$about->image_4)}}" class="preview-images" alt="image-preview"></div>

                    <div class="row mb-3">
                        <label for="inputImg5" class="col-sm-2 col-form-label">Ảnh sơ đồ tổ chức</label>
                        <div class="col-sm-8">
                            <input class="form-control file-img" name="image_5" id="inputImg5" type="file">
                        </div>
                    </div>

                    <div class="preview-img"><img id="preview-img-5" src="{{asset('uploads/about-page/'.$about->image_5)}}" class="preview-images" alt="image-preview"></div>

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

    <script>
        document.getElementById('inputImg1').addEventListener('change', function(event) {
            previewImage(event, 'preview-img-1');
        });
        document.getElementById('inputImg2').addEventListener('change', function(event) {
            previewImage(event, 'preview-img-2');
        });
        document.getElementById('inputImg3').addEventListener('change', function(event) {
            previewImage(event, 'preview-img-3');
        });
        document.getElementById('inputImg4').addEventListener('change', function(event) {
            previewImage(event, 'preview-img-4');
        });
        document.getElementById('inputImg5').addEventListener('change', function(event) {
            previewImage(event, 'preview-img-5');
        });

        function previewImage(event, previewId) {
            const input = event.target;
            const reader = new FileReader();
            reader.onload = function() {
                const dataURL = reader.result;
                const output = document.getElementById(previewId);
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
@endsection