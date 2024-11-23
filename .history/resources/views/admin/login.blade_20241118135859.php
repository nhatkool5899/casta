<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Zenix -  Crypto Admin Dashboard </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{asset('back-end/assets/css/custom.css')}}" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="authincation-content">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center m-4">
										<img style="width:165px" src="{{asset('front-end/assets/imgs/logo/logo.jpg')}}" alt="">
									</div>
                                    <div class="text-center mb-4" style="color: #fff; font-size:22px">ĐĂNG NHẬP TRANG QUẢN TRỊ</div>
                                    <form action="{{url('/auth/login')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="hello@example.com">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                                        </div>
   
                                        @if(count($errors)>0)
                                            <div class="alert alert-danger">
                                                @foreach($errors->all() as $err)
                                                <i class="fas fa-exclamation"></i> {{$err}}<br>
                                                @endforeach
                                            </div>
                                        @endif
                                        @if(session('message'))
                                            <div class="alert alert-danger">
                                                {{session('message')}}<br>
                                            </div>
                                        @endif
                                        <div class="text-center mb-3 mt-3">
                                            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>
</html>