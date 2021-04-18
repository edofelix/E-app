<!DOCTYPE html>
<html>
<head>
    <title>Felix njajal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main.css') }}">
</head>

<body>
    <div class="judul">
        <a>F's APP</a>
    </div>
    
    <div class="white-space"></div>

    <div class="navbar">
        @yield('navbar')
    </div>

    @yield('konten')

    <div class="white-space"></div>
    
    <div class="footer">
        <a>INI Footer</a>
    </div>

</body>
</html>