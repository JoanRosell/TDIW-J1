<html lang="en">
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

    <main id="mainSection">
        <div class="profile-layout">
            <?php require_once __DIR__ . '/controller/controller_userDetail.php'; ?>
            <div class="profile-aside">
                <a href="index.php?action=modifyAccount">Modify account information</a>
                <a href="#">Order history</a>
            </div>
        </div>

    </main>

    <footer></footer>
</div>
</body>
</html>