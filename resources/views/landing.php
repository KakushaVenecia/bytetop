<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>
<style>
a:link, a:visited {
  background-color: #001E2C;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: #001E2C;
}
</style>
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
    <h1>Welcome to ByteTop</h1>
    
    <p>Here you will find our latest deals and offers!</p>

        <img class= "products" src="images/Hp_Laptop.jpeg" alt="Hp laptop">
        <img class= "products" src="images/Lenovo_Laptop.jpg" alt="Lenovo Laptop">
        <img class= "products" src="images/Dell_Laptop.webp" alt="Dell Laptop">
        <img class= "products" src="images/Acer_Laptop.webp" alt="Acer Laptop">

        <p> We have amazing deals on student laptops and accessories</p>
</body>
</html>