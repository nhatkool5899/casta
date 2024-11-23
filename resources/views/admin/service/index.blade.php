@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
        <h1>Quản lý Tin tức</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Tin tức</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <div class="box-title">
                            <h5 class="card-title">Tin tức</h5>
                            <div><a href="{{route('service.create')}}" class="btn-add"><i class="fa-solid fa-plus"></i> Thêm mới</a></div>
                        </div>
                        @if (session('status'))
                            <div class="alert alert-success" style="margin-left: 0">
                                {{ session('status') }}
                            </div>
                        @endif

                        <!-- Table with stripped rows -->
                        <table class="table table-striped table-style" id="myTable">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tiêu đề</th>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($service as $item => $value)
                                    <tr>
                                        <th scope="row">{{ $item+1 }}</th>
                                        <td  style="max-width:500px">{{$value->name}}</td>
                                        <td><img src="{{asset('uploads/service/'.$value->image)}}" alt="" style="max-width:150px"></td>
                                        <td>
                                            <a href="{{route('service.edit', ['service' => $value->id])}}" class="edit-icon"><i class="fa-solid fa-pen"></i></a>

                                            <form action="{{route('service.destroy',['service' => $value->id])}}" method="post" style="display: inline-block">
                                                @method("DELETE")
                                                @csrf
                                                <button class="delete-icon" style="border:none;background:none" onclick="return confirm('Bạn có chắc là xóa mục này?')"><i class="fa-solid fa-trash-can"></i></button>
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