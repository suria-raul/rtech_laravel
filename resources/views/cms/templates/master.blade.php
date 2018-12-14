<!doctype html>
<html lang="en">
<head>
    <title>R.TECH Admin Tool</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link rel="icon" type="image/png" href="{{asset('cms/img/favicon.ico')}}">
    <link href="{{asset('cms/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('cms/css/animate.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('cms/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('cms/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

    <script src="{{asset('cms/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('cms/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('cms/js/chartist.min.js')}}"></script>
    <script src="{{asset('cms/js/bootstrap-notify.js')}}"></script>
    <script src="{{asset('cms/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

</head>
<body>

    <div class="wrapper">
        @include('cms.templates.sidebar')
        <div class="main-panel">
            @include('cms.templates.navbar')
            @yield('body')
        </div>
    </div>    

</body>
<script type="text/javascript">
    $(document).ready(function(){

        demo.initChartist();

        $.notify({
            icon: 'pe-7s-gift',
            message: "Put Something awesome here!"

        },{
            type: 'info',
            timer: 4000
        });

    });
</script>
</html>
