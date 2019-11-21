<html lang="es">
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="css/main.css?v= <?php time() ?>">
    </head>

    <body>
        <header class="header">
            <?php require_once __DIR__ . '/controller/header.php'; ?>
            <?php require_once __DIR__ . '/controller/mainMenu.php'; ?>
        </header>

        <section class="grid-container">
            <?php require_once __DIR__ . '/controller/listCategories.php'; ?>
        </section>

        <footer class="footer">
        </footer>
    </body>
</html>
