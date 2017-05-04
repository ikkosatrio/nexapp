<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{base_url()}}assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{base_url()}}assets/css/style.css" media="screen">
  <link rel="stylesheet" type="text/css" href="{{base_url()}}assets/css/common.css" media="screen">
  @yield('style')
  <link rel="stylesheet" type="text/css" href="{{base_url()}}assets/css/secondeffect.css" media="screen">
  <style type="text/css">
    .navbar-default {
      background-color: blue;
      border-color: blue;
      font-weight: bold;
      color: white
    }
    
    .navbar-default .navbar-brand {
          color: white;
    }

    
  </style>
</head>
<body>
  <nav class="navbar navbar-default" style="background-color: blue">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{base_url()}}home">WebSiteName</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="#" style="color: white;">Home</a></li>
        <li><a href="#" style="color: white;">Page 1</a></li>
        <li><a href="#" style="color: white;">Page 2</a></li>
        <li><a href="#" style="color: white;">Page 3</a></li>
      </ul>
    </div>
  </nav>

<div class="container">
  @yield('content')
</div>
</body>
<script src="{{base_url()}}assets/js/core/libraries/jquery.min.js"></script>
@yield('corejs')
<script src="{{base_url()}}assets/js/core/libraries/bootstrap.min.js"></script>
</html>