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
                    <!-- General Form Elements -->
                    <form action="{{route('category.update', ['category' => $category->id])}}" method="POST" enctype="multipart/form-data">                      
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tên danh mục</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="name" id="slug" value="{{$category->name}}" onkeyup="ChangeToSlug()">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Slug</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="slug" value="{{$category->slug}}" id="convert_slug">
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

    <script>
        document.getElementById('inputImg1').addEventListener('change', function(event) {
            previewImage(event, 'preview-img-1');
        });

        function previewImage(event, previewId) {
            const input = event.target;
            const reader = new FileReader();
            reader.onload = function() {
                const dataURL = reader.result;
                const output = document.getElementById(previewId);
                output.style.display = "block";
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
@endsection