<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            @yield('title','Be Elite.')
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="/css/foundation.css"/>
        <link rel="stylesheet" href="/css/ecomm.css"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bungee+Inline|Open+Sans" rel="stylesheet">    
    </head>
    <body>
        @include('top_nav')

        @yield('content')

        @include('footer')
    <script src="/js/jquery.js"></script>
    <script src="/js/app.js"></script>
    </body>
</html>