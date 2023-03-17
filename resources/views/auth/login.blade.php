<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{asset('assets/css/paper-dashboard.css')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('assets/css/demo.css')}}" rel="stylesheet" />
<!--font awesome link-->
<link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.css')}}">

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('assets/css/themify-icons.css')}}" rel="stylesheet">
    <!--cdn font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>
<body>

<div class="wrapper">
       
    <div class="main-panel">
      <div class="content" style="margin-top: 120px; margin-left:280px;">
         <div class="col-lg-8 col-md-7">
            <div class="card">
                <div class="header">
                    <h4 class="title">Login</h4>
                </div>
                <div class="content " >
                    <form action="/login" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                 <div style="margin-left: 500px;" class="bg-info text-center">
                                   @error('email')
                                   <span class="text-danger">{{$message}}</span>
                                   @enderror
                                 </div>
                                   <label>Email-Address</label>
                                    <input type="email" class="form-control border-input" placeholder="Enter Your Email" autocomplete="off" name="email" >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                         
                           <a href="/forgot-password "  style="margin-left:540px;">Forget-Password</a>
                         
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control border-input" placeholder="Enter Your Password" autocomplete="off" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-info btn-fill btn-wd">Sign In</button>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
      </div>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
   @stack('scripts')
	
</html>
