<nav class="mainMenu">
    <ul>
        <li><a href="/index.php">Home</a></li>
        <?php foreach($categories as $category) : ?>
            <li>
                <a href=<?php echo '/index.php?action=' . strtolower($category['Name'])?>><?php echo $category['Name']?></a>
            </li>
        <?php endforeach; ?>
        <li><a href="/index.php?action=login">Entrar</a></li>
        <li><a href="/index.php?action=register">Registrarse</a></li>
    </ul>
</nav>


