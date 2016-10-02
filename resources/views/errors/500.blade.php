<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Not Found</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-linearicons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jquery-ui.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/theme.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/responsive.css') }}" media="all" /> </head>

<body class="four04-bg">
    <div class="wrap">    
        <!-- End Header -->
        <div id="content">
            <div class="content-shop">
                <div class="container">
                    <div class="row">                        
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="four04-wrapper">
                                <img src="{{ URL::asset('images/pages/404.png') }}">
                                <h1>Oops! Looks like something went wrong.</h1>
                                {{--<h4>We can’t find the page you’re looking for.</h4>--}}
                                <a class="btn btn-price btn-sm four04-link" href="{{ url('/') }}">GO TO HOME</a>
                            </div>
                            <!-- End Main Content Shop -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content Shop -->
        </div>
        <!-- End Content -->        
    </div>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-1.12.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/theme.js') }}"></script>
</body>

</html>