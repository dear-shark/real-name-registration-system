<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <title>@yield('title')－website</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="新，實名制進場系統。">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/bootstrap-table@1.18.1/dist/bootstrap-table.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <link href="{{ asset('v2/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('v2/assets/css/btn-rnrs.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.1/dist/bootstrap-table.min.js"></script>
    <meta property="og:locale" content="zh_TW"/>
    <meta http-equiv="pragma" content="no-cache">
    <meta name="author" content="">
    <meta name="robots" content="noindex,nofollow">
    <!-- icons -->
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="apple-touch-icon" sizes="180x180" href="">
    <link rel="icon" type="image/png" sizes="192x192" href="">
    <style>
        section.banner-container {
            background: url(" {{ route('function.thumb') }}?h=1080&w=1920&zc=1&src=./v2/assets/img/david-tran-g-dZ1h7nQ0E-unsplash.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
            background-attachment: fixed;
            position: fixed;
            z-index: -1;
            opacity: 0.5;
        }
    </style>
</head>
<body>
    @include('v2.layout.header')
    @include('v2.layout.container')
    @include('v2.layout.footer')
</body>
</html>