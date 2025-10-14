<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Makanan</title>
    <link rel="stylesheet" href="style/menu.css">
    <script defer src="/script/data.js"></script>
    <script defer src="/script/script.js"></script>
</head>
<body>

    <!-- Banner -->
    <header class="hero-section">
        <div class="hero-content">
            <h2><span class="highlight">FoodRecipe</span></h2>
            <h1>Just a Moment<br> For a Bite of Perfection.</h1>
            <p>"Enjoy mouthwatering recipes crafted by top chefs, bringing delicious flavors straight to your kitchen with ease!" 🍽️🔥</p>
            <div class="menu-button">
                <a href="#filter" class="btn">Discover Menu</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="images/nasgor.png" alt="Briko Salad">
        </div>
    </header>

    <!-- Filter Buttons -->
    <div id="filter" class="filter-container">
        <button onclick="filterMenu('all')" class="active">All</button>
        <button onclick="filterMenu('appetizer')"><img src="https://png.pngtree.com/png-vector/20230412/ourmid/pngtree-appetizer-line-icon-vector-png-image_6702855.png" alt=""> Appetizer</button>
        <button onclick="filterMenu('main')"><img src="https://static.thenounproject.com/png/3735485-200.png" alt=""> Main</button>
        <button onclick="filterMenu('dessert')"> <img src="images/cale.png" alt=""> dessert</button>
    </div>

    <!-- Menu Grid -->
    <section id="menu-container" class="grid-container">
        <!-- Items akan ditambahkan secara dinamis oleh JavaScript -->
    </section>

</body>
</html>
