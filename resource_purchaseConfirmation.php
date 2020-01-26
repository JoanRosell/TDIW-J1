<html lang="en">
<head>
    <title>Confirmation</title>
    <meta name="author" content="Joan Rosell">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css?v= <?php echo time(); ?>">
    <script src="js/jquery.js" type="application/javascript"></script>
    <script src="js/src.js" type="application/javascript"></script>
</head>
<body>
<header class="top-menu">
    <?php require_once __DIR__ . '/controller/controller_mainMenu.php'; ?>
    <?php require_once __DIR__ . '/controller/controller_asideMenu.php'; ?>
</header>
<main id="mainSection">
    <h1>
        Order processed successfully.
    </h1>
    <h3>
        Please check your email for more details.
    </h3>
</main>
<footer></footer>
</body>
</html>
