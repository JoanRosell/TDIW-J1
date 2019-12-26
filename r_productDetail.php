<html lang="es">
<head>
    <title>Ipsum Drones</title>
    <link rel="stylesheet" href="css/main.css?v= <?php echo time(); ?>">
</head>

<body>
<div class="content-wrapper">
    <header class="top-menu">
        <?php require_once __DIR__ . '/controller/mainMenu.php'; ?>
    </header>

    <section id="mainSection">
        <?php require_once __DIR__ . '/controller/getProductDetail.php'; ?>
    </section>

    <footer>
    </footer>
</div>
</body>
</html>
