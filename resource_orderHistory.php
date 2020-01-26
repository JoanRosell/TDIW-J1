<html lang="en">
<head>
    <title>Cart</title>
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

    <main id="mainSection" class="verticalGrid">
        <?php require_once __DIR__ . '/controller/controller_listOrders.php'; ?>
    </main>

    <footer>
    </footer>
</div>
</body>
</html>
