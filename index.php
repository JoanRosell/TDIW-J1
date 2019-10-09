<?php include_once("includes/header.php"); ?>
<?php include_once("app/conexion.php"); ?>

<?php
    $consulta = "SELECT * FROM categorias";
    $resultado = mysqli_query( $conn, $consulta );

    while ($columna = mysqli_fetch_array( $resultado ))
    {
        echo $columna['nombre'];
        echo "<br>";
    }
?>
    
<!--main content-->
<section class="main-content">
    <h1 class="title">Pràctiques TDIW 222</h1>
    
    <!--center-wrapper-->
    <div class="center-wrapper">
    
    <h2>Accés a la pàgina web</h2>

        <p><a href="http://tdiw-j1.deic-docencia.uab.cat">http://tdiw-j1.deic-docencia.uab.cat</a></p>

    <h2>Accés a la base de dades</h2>

        <p><a href="https://deic-docencia.uab.cat/phpmyadmin/">https://deic-docencia.uab.cat/phpmyadmin/</a></p>

        <p>Feu servir la mateixa combinació nom d'usuari - paraula de pas que feu servir per accedir als ordinadors del
            laboratori. Encara que canvieu la paraula de pas que feu servir per accedir al laboratori, això no canviarà
            la vostra paraula de pas per accedir a PHPMYADMIN.</p>

    <h2>Accés als logs</h2>

        <p><a href="https://deic-docencia.uab.cat/TDIW/tdiw-j1/">https://deic-docencia.uab.cat/TDIW/tdiw-j1/</a></p>

        <p>Trobareu els logs del darrer dia en format text pla, i els logs anteriors (fins a una setmana) en format
            comprimit</p>

    </div>
    <!--end center-wrapper-->
</section>
<!--end main content-->
      
<?php include_once("includes/footer.php"); ?>
