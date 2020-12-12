<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta name="description" content="اطلب واتمنى">
        <title>اطلب واتمنى</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_files/css/main.css') }}">
    </head>
    <body class="app sidebar-mini">
        @include('layouts.dashboard._header')
        @include('layouts.dashboard._aside')

        <script src="{{ asset('dashboard_files/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('dashboard_files/js/popper.min.js') }}"></script>
        <script src="{{ asset('dashboard_files/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('dashboard_files/js/main.js') }}"></script>
    </body>
</html>
