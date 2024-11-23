@extends('layouts.admin')
@section('content')
    <div class="pagetitle">
        <h1>Quản lý Danh mục</h1>
        <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item">Danh mục</li>
        </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">

            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <div class="box-title">
                            <h5 class="card-title">Danh mục</h5>
                            <div><a href="{{route('category.create')}}" class="btn-add"><i class="fa-solid fa-plus"></i> Thêm mới</a></div>
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
                                <th scope="col">Tên</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($category as $item => $value)
                                    <tr>
                                        <th scope="row">{{ $item+1 }}</th>
                                        <td >{{$value->name}}</td>
                                        <td >{{$value->slug}}</td>
                                        <td>
                                            <a href="{{route('category.edit', ['category' => $value->id])}}" class="edit-icon"><i class="fa-solid fa-pen"></i></a>

                                            {{-- <form action="{{route('category.destroy',['category' => $value->id])}}" method="post" style="display: inline-block">
                                                @method("DELETE")
                                                @csrf
                                                <button class="delete-icon" style="border:none;background:none" onclick="return confirm('Bạn có chắc chắn xóa không')"><i class="fa-solid fa-trash-can"></i></button>
                                            </form> --}}
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