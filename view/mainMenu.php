<nav class="mainMenu">
    <ul>
        <li><a href="/index.php">Home</a></li>
        <li class="dropdown">
            <a href="javascript:void(0)" class="dropbtn">Categorías</a>
            <div class="dropdown-content">
                <?php foreach($categories as $category) : ?>
                        <a href=<?php echo '/index.php?action=listProducts&categoryID=' . $category['CategoryID']?>><?php echo $category['Name']?></a>
                <?php endforeach; ?>
            </div>
        </li>
        <li class="right-align"><a href="/index.php?action=cart">Mi Carrito</a></li>
        <li class="dropdown right-align">
            <a href="javascript:void(0)" class="dropbtn">Cuenta</a>
            <div id="userMenu" class="dropdown-content">
                <a id="loginBtn" href="/index.php?action=login">Iniciar sesión</a>
            </div>
        </li>
    </ul>
</nav>


