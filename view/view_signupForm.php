<form name="signup" id="signupForm" method="post" target="_self" action="/index.php?action=processSignup">
    First Name: <input name="name" type="text"> <br>
    E-Mail: <input name="email" type="email" required> <br>
    Password: <input name="password" type="password" required> <br>
    Address: <input name="address" type="text" maxlength="30"> <br>
    City: <input name="city" type="text"  maxlength="30"> <br>
    Zip Code: <input name="zipcode" type="number" pattern="ˆ\d{5}$"> <br>
    <input type="submit" value="Sign Up">
</form>
