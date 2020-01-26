<html lang="en">
<head>
    <title>Ipsum Drones</title>
    <meta name="author" content="Joan Rosell">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css?v= <?php echo time(); ?>">
    <script src="js/jquery.js" type="application/javascript"></script>
    <script src="js/src.js" type="application/javascript"></script>
</head>

<body>
<div class="content-wrapper">
    <header class="top-menu">
        <?php require_once __DIR__ . '/controller/controller_mainMenu.php'; ?>
    </header>

    <section id="mainSection">
        <?php require_once __DIR__ . '/controller/controller_productDetail.php'; ?>
    </section>

    <footer>
    </footer>
</div>
</body>
</html>
