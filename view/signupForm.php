<form name="signup" id="signupForm" method="post" target="_self" action="#">
    Nombre: <input name="name" type="text"> <br>
    E-Mail: <input name="email" type="email" required> <br>
    Contraseña: <input name="password" type="password" required> <br>
    Dirección: <input name="address" type="text" maxlength="30"> <br>
    Población: <input name="city" type="text"  maxlength="30"> <br>
    Código Postal: <input name="zipcode" type="number" pattern="ˆ\d{5}$"> <br>
    <input type="submit" value="Enviar">
</form>
