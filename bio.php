<?php
if(isset($_POST['btn'])){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $date_of_birth = $_POST['date_of_birth'];
    $age = $_POST['age'];
}

?>

<h2>Full Name: <?php  
if(isset($full_name))
echo $full_name;
?></h2>

<h2>Email: <?php  
if(isset($email))
echo $email;
?> </h2>

<h2>Phone Number: <?php  
if(isset($phone_number))
echo $phone_number;
?></h2>

<h2>DOB:<?php  
if(isset($date_of_birth))
echo $date_of_birth;
?></h2>

<h2>Age:<?php  
if(isset($age))
echo $age;
?></h2>