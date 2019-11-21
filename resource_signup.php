<html lang="es">
    <head>
        <title>Registro</title>
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
        <header id="header">
            <?php require_once __DIR__ . '/controller/mainMenu.php'; ?>
        </header>

        <div class="flex-container">
            <section id="main-section">
                <h1>Registrarse</h1>
                <?php require_once __DIR__ . '/controller/signupForm.php'; ?>
            </section>
        </div>

        <footer id="footer">
        </footer>
    </body>
</html>
