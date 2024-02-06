<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Document</title>
</head>

<body>
    @include('partials.navbar')

    <div class="container">
        <h1>Welcome to ByteTop</h1>

        <p> We have amazing deals on student laptops and accessories</p>

        <p>Here you will find our latest deals and offers!</p>
        <div class="deals">
            <div class="card">
                <h3><b>Deals in Laptops</b></h3>
                <br>
                <img class="card-img" src="{{ asset('images/Hp_Laptop.jpeg') }}" alt="Hp laptop">
                <div class="more">
                    <button>View More</button>
                </div>
            </div>
            <div class="card">
                <h3><b>Deals in PCs</b></h3>
                <br>
                <img class="card-img" src="{{ asset('images/PC.jpeg') }}" alt="PC">
                <div class="more">
                    <button>View More</button>
                </div>
            </div>
            <div class="card">
                <h3><b>Deals in Accessories</b></h3>
                <br>
                <img class="card-img" src="{{ asset('images/Keyboard.webp') }}" alt="keyboard">
                <div class="more">
                    <button>View More</button>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
