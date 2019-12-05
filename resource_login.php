<html lang="es">
    <head>
        <title>Registro</title>
        <link rel="stylesheet" href="css/main.css?v= <?php echo time(); ?>">

    </head>

    <body>
        <header id="header">
            <?php require_once __DIR__ . '/controller/mainMenu.php'; ?>
        </header>

        <div class="flex-container">
            <section id="main-section">
                <h1>Iniciar sesión</h1>
                <?php require_once __DIR__ . '/controller/loginForm.php'; ?>
            </section>
        </div>

        <footer id="footer">
        </footer>
    </body>
</html>
