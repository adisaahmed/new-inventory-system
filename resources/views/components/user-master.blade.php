<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inventory System - User Home</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap_css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap_css/bootstrap-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <!-- Latest compiled and minified JavaScript -->
    <script src="{{asset('js/bootstrap_js/bootstrap.js')}}"></script>

</head>

<body id="page-top">
    <nav class="navbar navbar-default navbar_default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Inventory System</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('home')}}">Home</a></li>
                    @if(Auth::check())
                        <li><a href="{{route('users.index')}}">Reports</a></li>
                    @else
                        <li><a href="/login">Login</a></li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    @yield('content')
</body>

</html>
