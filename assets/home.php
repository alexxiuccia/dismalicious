<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contattaci - Il Mondo Alieno</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <header>
        <h1>Contattaci</h1>
    </header>
    
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Chi Siamo</a></li>
            <li><a href="#">Servizi</a></li>
            <li><a href="#">Contattaci</a></li>
        </ul>
    </nav>

    <section class="contact-form">
        <h2>Invia un messaggio</h2>
        <form action="invia_messaggio.php" method="post">
            <input type="text" name="nome" placeholder="Il tuo nome" required>
            <input type="email" name="email" placeholder="La tua email" required>
            <textarea name="messaggio" placeholder="Il tuo messaggio" required></textarea>
            <button type="submit" class="btn">Invia</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Il Mondo Alieno. Tutti i diritti riservati.</p>
    </footer>
</body>
</html>
