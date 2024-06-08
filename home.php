<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    // Barra di navigazione
    echo '
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </nav>
    ';

    // Intestazione
    echo '
    <header>
        <h1>Welcome to My Website</h1>
    </header>
    ';

    // Sezione principale
    echo '
    <div class="container">
        <h2>Our Features</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel urna et lacus ullamcorper luctus.</p>

        <div class="cards">
            <div class="card">
                <img src="path/to/your/image1.jpg" alt="Image 1">
                <h3>Feature One</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="card">
                <img src="path/to/your/image2.jpg" alt="Image 2">
                <h3>Feature Two</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="card">
                <img src="path/to/your/image3.jpg" alt="Image 3">
                <h3>Feature Three</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
    ';

    // Footer
    echo '
    <footer>
        <p>&copy; 2024 My Website. All Rights Reserved.</p>
    </footer>
    ';
    ?>
</body>
</html>
