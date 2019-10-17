<html lang="es">
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
        <header id="header">
            <?php require_once __DIR__ . '/controller/mainMenu.php'; ?>
        </header>

        <div class="flex-container">
            <section id="main-section">
                <?php require_once __DIR__ . '/controller/listProducts.php'; ?>
            </section>
        </div>

        <footer id="footer">
        </footer>
    </body>
</html>