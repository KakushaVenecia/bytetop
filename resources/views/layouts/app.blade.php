<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bytetop | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/nav.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/productpage.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
   
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">



    @yield('meta')
</head>
<body >
    @include('partials.navbar')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    <script src="{{ asset('js/productpage.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>