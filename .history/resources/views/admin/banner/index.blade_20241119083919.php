@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
        <h1>Quản lý Banner</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Banner</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <div class="box-title">
                            <h5 class="card-title">Banner</h5>
                            <div><a href="{{route('banner.create')}}" class="btn-add"><i class="fa-solid fa-plus"></i> Thêm mới</a></div>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success" style="margin-left: 0">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- Table with stripped rows -->
                        <table class="table table-striped table-style">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Danh mục</th>
                                    <th scope="col">Hình ảnh | Video</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banner as $item => $value)
                                    <tr>
                                        <th scope="row">{{ $item+1 }}</th>
                                        <td>
                                            
                                            @switch($value->category)
                                                @case(1)
                                                    Trang chủ
                                                    @break
                                                @case(2)
                                                    Dịch vụ
                                                    @break
                                                @case(3)
                                                    Thông tin
                                                    @break
                                                @case(4)
                                                    Cung cầu CN
                                                    @break
                                                @case(5)
                                                    Về trung tâm
                                                    @break
                                                @default
                                                    
                                            @endswitch
                                        </td>
                                        <td>
                                            <img src="{{ asset('uploads/banner/'.$value->image) }}" alt="" style="max-width:350px">
                                        </td>

                                        <td>
                                            <a href="{{ route('banner.edit', ['banner' => $value->id]) }}" class="edit-icon"><i class="fa-solid fa-pen"></i></a>
                        
                                            <form action="{{ route('banner.destroy', ['banner' => $value->id]) }}" method="post" style="display: inline-block">
                                                @method("DELETE")
                                                @csrf
                                                <button class="delete-icon" style="border:none;background:none" onclick="return confirm('Bạn có chắc là xóa danh mục này?')"><i class="fa-solid fa-trash-can"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection