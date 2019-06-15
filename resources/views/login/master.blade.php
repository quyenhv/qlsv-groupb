<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title') | Trường cao đẳng công nghệ Thủ Đức</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('start/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="{{asset('start/css/sb-admin.css')}}" rel="stylesheet">
  <style type="text/css">
    .action {

      border-bottom: 1px solid #d8d8d8;
    }
  </style>
  @yield('css')
</head>

<body class="bg-dark">
@yield('content')
  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('start/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('start/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('start/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

</body>

</html>