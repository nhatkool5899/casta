@extends('layouts.admin')
@section('content')
    
    <div class="pagetitle">
        <h1>Quản lý Tin tức</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Daschboard</a></li>
                <li class="breadcrumb-item">Tin tức</li>
                <li class="breadcrumb-item active">Thêm mới</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-12">

                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Tin tức</h5>
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
                    <form action="{{route('news.store')}}" enctype="multipart/form-data" method="POST">                      
                        @csrf

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Chọn danh mục(*)</label>
                            <div class="col-sm-9">
                              <select name="category_id" class="form-select">
                                <option value="1">Sự kiện</option>
                                <option value="2">Tin khoa học</option>
                              </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tiêu đề</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="name" id="slug" value="{{old('name')}}" onkeyup="ChangeToSlug()">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Slug</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control" name="slug" value="{{old('slug')}}" id="convert_slug">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Mô tả</label>
                            <div class="col-sm-9">
                                <textarea name="description" class="form-control" rows="4">{{old('description')}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nội dung</label>
                            <div class="col-sm-9">
                                <textarea name="content" class="form-control" id="editor" rows="4">{{old('content')}}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Hình ảnh(4:3)</label>
                            <div class="col-sm-9">
                                <input class="form-control file-img" name="image" id="inputImg" type="file">
                            </div>
                        </div>

                        <div class="preview-img"><img id="preview-img" src="" style="max-width:500px"></div>
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

                        <div class="preview-img"><img id="preview-img" src="" style="max-width:500px"></div>


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