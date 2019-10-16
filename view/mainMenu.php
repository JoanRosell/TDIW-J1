<nav class="mainMenu">
    <ul>
        <li><a href="/index.php">Home</a></li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Categorías</a>
            <div class="dropdown-content">
                <?php foreach($categories as $category) : ?>
                        <a href=<?php echo '/index.php?action=' . strtolower($category['Name'])?>><?php echo $category['Name']?></a>
                <?php endforeach; ?>
            </div>
        </li>
        <li class="right-align"><a href="/index.php?action=cart">Mi Carrito</a></li>
        <li class="right-align"><a href="/index.php?action=login">Entra o regístrate</a></li>
    </ul>
</nav>


