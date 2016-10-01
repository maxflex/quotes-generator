<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <script src="{{ asset('js/vendor.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('css/app.css')}}" media="screen" title="no title">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
        <title></title>
    </head>
    <body ng-app="Quotes" ng-controller="@yield('controller')">
        @yield('body')
    </body>
</html>
