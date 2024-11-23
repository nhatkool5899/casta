<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('front-end/assets/imgs/logo/logo.jpg')}}" rel="icon">


  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('back-end/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('back-end/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('back-end/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('back-end/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('back-end/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Template Main CSS File -->
  <link href="{{asset('back-end/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('back-end/assets/css/main.css')}}" rel="stylesheet">
  <link href="{{asset('back-end/assets/css/custom.css')}}" rel="stylesheet">
  

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
  <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{ url("/dashboard") }}" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item style dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{{asset('front-end/assets/imgs/logo/logo.jpg')}}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">ADMIN</span>
          </a><!-- End Profile Iamge Icon -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="left: auto;right: 6px;min-width: auto;top: 110% !important;">
            <li class="dropdown-header">
              <h6>Admin</h6>
              <span>Administration</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{url('change-password')}}">
                <i class="bi bi-person"></i>
                <span>Đổi mật khẩu</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="{{url('logout')}}">
                <i class="bi bi-box-arrow-right"></i>
                <span>Đăng xuất</span>
              </a>
            </li>
          </ul>
            <style>

            .nav-item.style{
              position: relative;
            }
            .nav-item.style::before{
              content: "";
              position: absolute;
              top: 26px;
              left: 0;
              width: 100%;
              height: 25px;
            }
          </style>

        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('/dashboard')}}">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{route('banner.index')}}">
            <i class="bi bi-file-earmark-image"></i><span>Banner</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{url('home-page/index')}}">
            <i class="bi bi-file-code"></i><span>Nội dung trang chủ</span>
          </a>
        </li>

   /

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{route('service.index')}}">
            <i class="bi bi-newspaper"></i><span>Dịch vụ</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{route('category.index')}}">
            <i class="bi bi-newspaper"></i><span>Danh mục tin tức</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{route('news.index')}}">
            <i class="bi bi-newspaper"></i><span>Quản lí tin tức</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link collapsed" href="{{route('partner.index')}}">
            <i class="bi bi-newspaper"></i><span>Quản lí đối tác</span>
          </a>
        </li>

        <li class="nav-heading mt-5">Tài khoản</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{url('/logout')}}">
            <i class="bi bi-person"></i>
            <span>Đăng xuất</span>
            </a>
        </li><!-- End Profile Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

    <main id="main" class="main">

        @yield('content')

    </main><!-- End #main -->

  <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
        &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('back-end/assets/vendor/tinymce/tinymce.min.js')}}"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

  
  <script src="{{asset('back-end/assets/js/main.js')}}"></script>
  <script src="{{asset('back-end/assets/js/index.js')}}"></script>
  <script>
    $('.sidebar-nav .nav-item .nav-link').filter(function(){
      return this.href == location.href.replace(/#.*/,"");
    }).removeClass('collapsed');

    $(document).ready( function () {
      $('#myTable').DataTable({
          paging: false
      });
    });
  </script>

<script>

  if(document.getElementById('editor')){
    ClassicEditor
    .create( document.querySelector( '#editor' ),
    {
      ckfinder:{
        uploadUrl: "{{route('ckeditor.upload', ['_token'=>csrf_token()])}}",
        
      }
    } )
    .catch( error => {
        console.error( error );
    } );
  }

  if(document.getElementById('editor1')){
    ClassicEditor
    .create( document.querySelector( '#editor1' ))
    .catch( error => {
        console.error( error );
    } );
  }
  if(document.getElementById('editor2')){
    ClassicEditor
    .create( document.querySelector( '#editor2' ))
    .catch( error => {
        console.error( error );
    } );
  }
  if(document.getElementById('editor3')){
    ClassicEditor
    .create( document.querySelector( '#editor3' ))
    .catch( error => {
        console.error( error );
    } );
  }
  if(document.getElementById('editor4')){
    ClassicEditor
    .create( document.querySelector( '#editor4' ))
    .catch( error => {
        console.error( error );
    } );
  }
  

  //CKEDITOR.replace('ckeditor1');
  //CKEDITOR.replace('ckeditor2');
  //CKEDITOR.replace('ckeditor3');
  //CKEDITOR.replace('ckeditor4');
</script>

  <script type="text/javascript">
    // Slug auto
    function ChangeToSlug()
        {
            var slug;
            
            //Lấy text từ thẻ input title 
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox có id “slug”
            document.getElementById('convert_slug').value = slug;
        }
              
  </script> 
  
</body>

</html>