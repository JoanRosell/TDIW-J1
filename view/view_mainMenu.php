<nav>
    <ul id="mainMenu">
        <li id="asideMenuOpenButton" class="grid-item menu-item">
            <svg id="i-menu"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32">
                <path d="M4 8 L28 8 M4 16 L28 16 M4 24 L28 24" />
            </svg>
        </li>

        <li class="grid-item"><a class="title" href="/index.php">ipsum drones</a></li>

        <ul id="cartMenu">
            <li id="cartOpenButton" class="grid-item menu-item">
                <svg id="i-cart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32">
                    <path d="M6 6 L30 6 27 19 9 19 M27 23 L10 23 5 2 2 2" />
                    <circle cx="25" cy="27" r="2" />
                    <circle cx="12" cy="27" r="2" />
                </svg>
            </li>

            <?php  if (!$cart_is_empty): ?>
            <li id="totalUnitsDisplay" class="grid-item">Products: <?php echo $_SESSION['_cart']['total_units']; ?></li>
            <li id="totalPriceDisplay" class="grid-item">Total: <?php echo $_SESSION['_cart']['total_price']; ?>&euro;</li>
            <?php endif; ?>
        </ul>
    </ul>
</nav>


