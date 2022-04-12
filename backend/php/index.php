<?php

$username = $_POST["username"];
$password = $_POST["password"];


if($username == "rodrigo" and $password == "251917")
{

echo "bem vindo rodrigo";

}
else{
    header('Location:../../frontend/html/index.html')
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>