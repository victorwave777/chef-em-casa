<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  action = "<?php htmlespecialchars( $_SERVER["PHP_SELF"])?>" method="post">
    <h2>BEM-VINDO AO LOGIN</h2>
    username:<br>;
    <input type="text" name="username"><br>
    password:<br>
    <input type="password" name="password"><br>
    <input type="submit" name="submit" value="registrar">
     
</form>  
</body>
</html>

<?php 
mysqli_close($conn);
?>
