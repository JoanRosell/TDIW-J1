<html lang="es">
    <head>
        <title>Registro</title>
        <link rel="stylesheet" href="css/main.css?v= <?php echo time(); ?>">
        <script src="js/jquery.js" type="application/javascript"></script>
        <script src="js/src.js" type="application/javascript"></script>
    </head>

    <body>
    <div class="content-wrapper">
        <header id="header" class="top-menu">
            <?php require_once __DIR__ . '/controller/mainMenu.php'; ?>
            <?php require_once __DIR__ . '/controller/controller_asideMenu.php'; ?>
        </header>

        <div class="flex-container">
            <main id="mainSection">
                <h1>Sign Up</h1>
                <?php require_once __DIR__ . '/controller/signupForm.php'; ?>
            </main>
        </div>

        <footer id="footer">
        </footer>
    </div>
    </body>
</html>
