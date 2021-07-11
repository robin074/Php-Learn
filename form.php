<?php
if(isset ($_POST['btn'])){
    $username = $_POST ['user_name'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form in php </title>
</head>
<body>
<h2>User Name: <?php if(isset ($username)){
    echo $username ;
} ?></h2>
<h2>Email: <?php if(isset ($email))
{
    echo $email;
}
?></h2>
<h2>Password: <?php if(isset ($password))
{
    echo $password;
}

?></h2>


<form action="" method="POST">

<label for=""> User Name:</label><br>
<input type="text" name="user_name"><br>

<label for=""> Email:</label><br>
<input type="email" name="email"><br>

<label for=""> Password:</label><br>
<input type="password" name="password"><br>
<br>
<input type="submit" value="Submit Data" name="btn">

</form>
    
</body>
</html>