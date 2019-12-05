<div id="asideMenu" class="sidenav">
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
    </ul>
</div>

<nav>
    <ul id="mainMenu">
        <li id="asideMenuOpenButton" class="grid-item menu-item">
            <svg id="i-menu"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32">
                <path d="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24" />
            </svg>
        </li>
        <li class="grid-item"><a class="title" href="/index.php">ipsum drones</a></li>
        <li id="userMenuOpenButton" class="grid-item menu-item">
            <svg id="i-user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32">
                <path d="M22 11 C22 16 19 20 16 20 13 20 10 16 10 11 10 6 12 3 16 3 20 3 22 6 22 11 Z M4 30 L28 30 C28 21 22 20 16 20 10 20 4 21 4 30 Z" />
            </svg>
        </li>
        <li id="cartOpenButton" class="grid-item menu-item">
            <svg id="i-cart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32">
                <path d="M6 6 L30 6 27 19 9 19 M27 23 L10 23 5 2 2 2" />
                <circle cx="25" cy="27" r="2" />
                <circle cx="12" cy="27" r="2" />
            </svg>
        </li>
    </ul>
</nav>


