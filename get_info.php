<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
</body>
<html>
<html>
    <body>
        <form action = "add_user.php" method="post">
            Firstname: <input type="text" name="firstname" required><br>
            Lastname: <input type="text" name="lastname" required><br>
            E-mail: <input type="text"  name="email" pattern=".+@gmail\.com"  required><br>
            Password: <input type="text" name="password"
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
            required><br>
            Registration date: <input type="date" name="reg_date" required><br>
            <input type="submit" value="Submit Data">
        </form>
        <div id="message">
            <h3>Password must contain the following:</h3>
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
          </div>
    </body>
</html>