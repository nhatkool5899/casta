@extends('layouts.admin')
@section('content')
    
    <div class="pagetitle">
        <h1>Quản lý Đối tác</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Daschboard</a></li>
                <li class="breadcrumb-item">Đối tác</li>
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
                    <form action="{{route('partner.update', ['partner' => $partner->id])}}" enctype="multipart/form-data" method="POST" onsubmit="return validateForm()">                      
                        @csrf
                        @method("PUT")
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Tên(*)</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control input_name" name="name" value="{{$partner->name}}">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="inputNumber" class="col-sm-2 col-form-label">Hình ảnh(3:2)</label>
                            <div class="col-sm-8">
                                <input class="form-control file-img" name="image" id="inputImg" type="file" accept="image/*">
                            </div>
                        </div>

                        <div class="preview-img"><img id="preview-img" src="{{asset('uploads/partner/'.$partner->image)}}" style="max-width:500px; background: #f1f1f1;" ></div>
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

    <script>
        function validateForm() {
            var name = document.querySelector('.input_name').value.trim();
            if (name === '') {
                alert('Vui lòng nhập tên');
                return false;
            }
            return true;
        }
    </script>
@endsection