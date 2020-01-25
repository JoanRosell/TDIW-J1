<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" href="css/main.css?v= <?php echo time(); ?>">
    <script src="js/jquery.js" type="application/javascript"></script>
    <script src="js/src.js" type="application/javascript"></script>
</head>

<body>
<header class="top-menu">
    <?php require_once __DIR__ . '/controller/mainMenu.php'; ?>
    <?php require_once __DIR__ . '/controller/controller_asideMenu.php'; ?>
</header>

<main id="mainSection">
    <h1>Customer Information</h1>
    <?php require_once __DIR__ . '/controller/controller_updateAccountForm.php'; ?>
</main>
</body>
</html>