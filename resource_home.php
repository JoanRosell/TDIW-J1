<html lang="es">
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="css/main.css?v= <?php echo time(); ?>">
    </head>

    <body>
        <div class="content-wrapper">
            <header class="top-menu">
                <?php require_once __DIR__ . '/controller/header.php'; ?>
                <?php require_once __DIR__ . '/controller/mainMenu.php'; ?>
            </header>

            <section id="mainSection" class="grid-container">
                <?php require_once __DIR__ . '/controller/listCategories.php'; ?>
            </section>

            <footer>
            </footer>
        </div>
    </body>
</html>
