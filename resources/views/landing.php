<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>landing page</title>
</head>
<body>
    <nav>
        <img class="logo" src="images/Logo.png" alt="Logo">

        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Search...">
            <button onclick="performSearch()">Search</button>
        </div>
        <div id="searchResults"></div>
        <div class="nav-links">
            <a href="/about">About</a>
            <a href="/register">Sign Up</a>
            <a href="/login">Log In</a>
            <a href="#">Basket</a>
        </div>

        <script src="js/script.js"></script>

    </nav>
<div class="container">
    <h1>Welcome to ByteTop</h1>

    <p> We have amazing deals on student laptops and accessories</p>

    <p>Here you will find our latest deals and offers!</p>
<div class= "container2">
    <img class= "banner" src="images/student_discount.jpg" alt="student discount banner">
</div>
<div class = "deals">
    <div class="card">
        <h3><b>Deals in Laptops</b></h3>
        <br>
        <img class="card-img"src="images/Hp_Laptop.jpeg" alt="Hp laptop">
        <div class="more">
            <button class= "but">View More</button>
        </div>
    </div>
   <div class="card">
        <h3><b>Deals in PCs</b></h3>
        <br>
        <img class="card-img"src="images/PC.jpeg" alt="PC">
        <div class="more">
            <button class= "but">View More</button>
        </div>
    </div>
    <div class="card">
        <h3><b>Deals in Accessories</b></h3>
        <br>
        <img class="card-img" src="images/Keyboard.webp" alt="keyboard">
        <div class="more">
            <button class= "but">View More</button>
        </div>
    </div>
</div>  

<footer>
    <a href = "">Contact us </a>
    <a href = "">Your orders </a>

</footer>
</body>
</html>