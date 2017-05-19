<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Awesomess - Portfolio Bootstrap Theme</title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="bootstrap themes, portfolio, responsive theme">
    <meta name="author" content="ThemeForces.Com">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	

    
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114.png')}}">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome/css/font-awesome.css')}}">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}">

    <script type="text/javascript" src="{{asset('js/modernizr.custom.js')}}"></script>

    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
   
    
    
    
  </head>
  <body>
    <div id="tf-home">
        <div class="overlay">
            <div id="sticky-anchor"></div>
            <nav id="tf-menu" class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand logo" href="index.html">Awesomeness</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    @permission('ACCEUIL')
                    <li><a href="{{ route('home') }}">Acceuil</a></li>
                    @endpermission
                    @permission('USERS')
                    <li><a href="{{ route('users.index') }}">Users</a></li>
                    @endpermission
                    @permission('ROLES')
                    <li><a href="{{ route('roles.index') }}">Roles</a></li>
                    @endpermission
                    @permission('ACCEUIL')
                    <li><a href="{{ route('permissions.index') }}">Permission</a></li>
                    @endpermission
                    @permission('ITEMS')
                    <li><a href="{{ route('item.manageItem') }}">Items</a></li>
                    @endpermission
                <li><a href="{{route('page', ['parameter' => 'ROLES'])}}">ouss</a></li>
                 <li><a href="{{route('page', ['parameter' => 'ENIG'])}}">ENIG</a></li>
                 <!--   <li><a href="{{route('page', ['parameter' => 'item-edit'])}}">item-edit</a></li>
                    <li><a href="{{route('page', ['parameter' => 'role-list'])}}">role-list</a></li>
                 <!--    <li><a href="{{ route('page',['parameter'=>'item-edit'])}}">item-edit</a></li>-->

                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position:relative; padding-left:50px;">
                                <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:32px; height:32px; position:absolute; top:10px; left:10px; border-radius:50%">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/profile') }}"><i class="fa fa-btn fa-user"></i>Profile</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <div>
                @yield('content')
            </div>
        </div>
    </div>

    <div id="tf-service">
        <div class="container">

            <div class="col-md-4">

                <div class="media">
                  <div class="media-left media-middle">
                    <i class="fa fa-motorcycle"></i>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Brand & Graphics Design</h4>
                    <p>Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="media">
                  <div class="media-left media-middle">
                    <i class="fa fa-gears"></i>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Web Designer & Developer</h4>
                    <p>Cras sit amet nibh libero, in gravida nulla. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="media">
                  <div class="media-left media-middle">
                    <i class="fa fa-heartbeat"></i>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Business Consultant</h4>
                    <p>Metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>

            </div>
            
        </div>
    </div>
   

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery.1.11.1.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    
    
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script type="text/javascript">
    	   var url = "<?php echo route('item.index')?>";
        </script>
        <script src="/js/item.js"></script> 
  </body>
</html>