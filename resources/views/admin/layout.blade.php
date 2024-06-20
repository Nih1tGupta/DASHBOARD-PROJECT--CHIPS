<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Dashboard')</title>
    @yield('css')
    
</head>
<body>
@include('admin.include.header')
@include('admin.include.navbar')
    <main class="nxl-container apps-calendar apps-container"> 
     <div class="nxl-content">@yield('content')</div>
    @include('admin.include.footer')
    </main>
    @yield('js')
</body>
</html>