<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}">
</head>

<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Beranda</a></li>
            <li><a href="{{ url('users') }}">Data Diri</a></li>
            <li><a href="{{ url('cities') }}">Data Kota</a></li>
            <li><a href="{{ url('merchant') }}">Data Merchant</a></li>
            <li><a href="{{ url('products') }}">Data Product</a></li>
            <li><a href="{{ url('orders') }}">Order</a></li>
        </ul>
    </nav>

    <h1>Sihlakan klik navigasi website untuk berinteraksi dengan website</h1>

    @yield('content');
    
</body>

</html>
