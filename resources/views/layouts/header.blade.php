<!DOCTYPE HTML>
<html>
<head>
<link rel="short icon" type="icon" href="./images/BATON-4.png">
<link rel="icon" sizes="32x32" href="{{ url('images/BATON-4.png') }}">
 
<title>BATON</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- /font files -->
<!-- css files -->
<link href=" {{ asset('css/bootstrap.min.css')}} " rel="stylesheet" type="text/css" media="all" />
<link href=" {{ asset('css/font-awesome.min.css')}} " rel="stylesheet" type="text/css" media="all" />
<link href=" {{ asset('css/typo.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href=" {{ asset('css/portfolio.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href=" {{ asset('css/serv.css')}} " rel="stylesheet" type="text/css" media="all"/>
<link href="{{ asset('css/nav.css')}} " rel="stylesheet" type="text/css" media="all"/>
<link href=" {{ asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<!-- /css files -->
<!-- js files -->
<script src=" {{ asset('js/modernizr.custom.js')}} "></script>
<!-- /js files -->
</head>
<body>
    @yield('content')
</body>
</html>