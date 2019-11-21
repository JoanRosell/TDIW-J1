$(document).ready(function () {

    if (sessionStorage.getItem("userLogged") === "true") {
        $("#userMenu").html(
            "<a href='#'>Mi cuenta</a>" +
            "<a href='#'>Mis compras</a>" +
            "<a id='endSessionBtn' href='/index.php'>Cerrar sesión</a>"
        );
    }
    else {
        $("#userMenu").html(
            "<a href='/index.php?action=login'>Iniciar sesión</a>" +
            "<a href='/index.php?action=signup'>Registrarse</a>"
        );
    }

    $("#loginForm").submit(function () {
        sessionStorage.setItem("userLogged", "true");
    });

    $("#endSessionBtn").click(function () {
        sessionStorage.clear();
    });


});

