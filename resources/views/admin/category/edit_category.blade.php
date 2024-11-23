@extends('layouts.admin')
@section('content')
    
    <div class="pagetitle">
        <h1>Quản lý Danh mục</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Daschboard</a></li>
                <li class="breadcrumb-item">Danh mục</li>
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
                    <form action="{{url('category-update/'.$course->id)}}" enctype="multipart/form-data" method="POST">                      
                        @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Title 1</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="title_1" value="{{$course->title_1}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Text 1</label>
                            <div class="col-sm-8">
                                <textarea name="text_1" id="editor">{{$course->text_1}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputImg1" class="col-sm-2 col-form-label">Ảnh 1</label>
                            <div class="col-sm-8">
                                <input class="form-control file-img" name="image_1" id="inputImg1" type="file">
                            </div>
                        </div>

                        <div class="preview-img"><img id="preview-img-1" src="{{asset('uploads/category/'.$course->image_1)}}" class="preview-images" alt="image-preview"></div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Title 2</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="title_2" value="{{$course->title_2}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Text 2</label>
                            <div class="col-sm-8">
                                <textarea name="text_2" id="editor1">{{$course->text_2}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputImg2" class="col-sm-2 col-form-label">Ảnh 2</label>
                            <div class="col-sm-8">
                                <input class="form-control file-img" name="image_2" id="inputImg2" type="file">
                            </div>
                        </div>

                        <div class="preview-img"><img id="preview-img-2" src="{{asset('uploads/category/'.$course->image_2)}}" class="preview-images" alt="image-preview"></div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Title 3</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="title_3" value="{{$course->title_3}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Text 3</label>
                            <div class="col-sm-8">
                                <textarea name="text_3" id="editor2">{{$course->text_3}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputImg3" class="col-sm-2 col-form-label">Ảnh 3</label>
                            <div class="col-sm-8">
                                <input class="form-control file-img" name="image_3" id="inputImg3" type="file">
                            </div>
                        </div>

                        <div class="preview-img"><img id="preview-img-3" src="{{asset('uploads/category/'.$course->image_3)}}" class="preview-images" alt="image-preview"></div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Title 4</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="title_4" value="{{$course->title_4}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Text 4</label>
                            <div class="col-sm-8">
                                <textarea name="text_4" id="editor3">{{$course->text_4}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputImg4" class="col-sm-2 col-form-label">Ảnh 4</label>
                            <div class="col-sm-8">
                                <input class="form-control file-img" name="image_4" id="inputImg4" type="file">
                            </div>
                        </div>

                        <div class="preview-img"><img id="preview-img-4" src="{{asset('uploads/category/'.$course->image_4)}}" class="preview-images" alt="image-preview"></div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Title 5</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="title_5" value="{{$course->title_5}}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Text 5</label>
                            <div class="col-sm-8">
                                <textarea name="text_5" id="editor4">{{$course->text_5}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputImg5" class="col-sm-2 col-form-label">Ảnh 5</label>
                            <div class="col-sm-8">
                                <input class="form-control file-img" name="image_5" id="inputImg5" type="file">
                            </div>
                        </div>

                        <div class="preview-img"><img id="preview-img-5" src="{{asset('uploads/category/'.$course->image_5)}}" class="preview-images" alt="image-preview"></div>
                       
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
