<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Template</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/mdb.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
</head>
<body class="login-page">
<div class="container-fluid clearfix">
    <a href="#" class="btn-support">Support</a>
</div>
<div class="form-holder">
    <div class="logo"><a href="#"><img src="{{ asset('images/logo.png') }}" alt=""></a></div>
    @yield('content')
</div>
<script src="{{ asset('admin/js/jquery-1.12.0.js') }}"></script>
<script src="{{ asset('admin/js/popper.js') }}"></script>
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/js/mdb.min.js') }}"></script>

</body>
</html>