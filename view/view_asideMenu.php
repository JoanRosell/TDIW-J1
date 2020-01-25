<aside id="asideMenu" class="sidenav">
    <ul class="verticalGrid">
        <li id="asideMenuCloseButton" class="menu-item grid-item">
            <svg id="i-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32">
                <path d="M2 30 L30 2 M30 30 L2 2" />
            </svg>
        </li>
        <l1 class="grid-item">
            <h2>Categories</h2>
        </l1>
        <?php foreach($categories as $category) : ?>
        <li class="menu-item grid-item">
            <a id="<?php echo $category['CategoryID']?>" class="categoryRef"><?php echo htmlentities($category['Name'], ENT_QUOTES | ENT_HTML5, 'UTF-8'); ?></a>
        </li>
        <?php endforeach; ?>
        <li class="menu-item grid-item"></li>
    </ul>
    <ul class="verticalGrid">
        <l1 class="grid-item">
            <h2>Account</h2>
        </l1>
        <?php if ($_SESSION['userIsLogged']) : ?>
            <li class="menu-item grid-item"><a href="/index.php?action=myProfile">My Profile</a></li>
            <li class="menu-item grid-item"><a href="/index.php?action=logout">Log Out</a></li>
        <?php else: ?>
        <li class="menu-item grid-item"><a href="/index.php?action=login">Log In</a></li>
        <li class="menu-item grid-item"><a href="/index.php?action=signup">Sign Up</a></li>
        <?php endif; ?>
    </ul>
</aside>