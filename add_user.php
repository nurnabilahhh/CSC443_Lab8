<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'conn.php';

$sql="insert into user (first_name,last_name,email,password)
values('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]',
'$_POST[reg_date]')";
if(!mysqli_query($conn, $sql)){
    echo "Failed to connect to MySQL: ";
    exit();
}
else {
echo "1 record successfully added...";}

mysqli_free_result($sql);
mysqli_close($conn);
?>
</body>
</html>