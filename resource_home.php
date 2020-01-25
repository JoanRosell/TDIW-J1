<html lang="es">
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="css/main.css?v= <?php echo time(); ?>">
        <script src="js/jquery.js" type="application/javascript"></script>
        <script src="js/src.js" type="application/javascript"></script>
    </head>

    <body>
        <div class="content-wrapper">
            <header class="top-menu">
                <?php require_once __DIR__ . '/controller/mainMenu.php'; ?>
                <?php require_once __DIR__ . '/controller/controller_asideMenu.php'; ?>
            </header>

            <section id="mainSection" class="grid-container">
                <?php require_once __DIR__ . '/controller/listCategories.php'; ?>
            </section>

            <footer>
            </footer>
        </div>
    </body>
</html>
