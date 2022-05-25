<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
</body>
<form action ="add_user.php" = "post">
Firstname: <input type="text" name="firstname" required><br>
Lastname : <input type="text" name="lastname" required><br>
E-mail   : <input type="text" id="email" name="email" pattern=".+@globex\.com" required><br>
Password : <input type="text" name="password" 
pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
title="Must contain at least one number and one uppercase and lowercase letter, and at least between 6 or 8 characters 
required><br>
Registration date : <input type="date" name="reg_date" required><br>
<input type="submit" value="Submit Data">
</form>
</body>
</html>