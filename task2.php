<!-- Create a form with name, email, phone, dob, age field (form.php) -->
<!-- Receive those data in (bio.php) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bio Data</title>
</head>
<body>
<form action="bio.php" method ="POST">

<label for="">Full Name:</label><br>
<input type="text" name ="full_name"><br>

<label for="">Email:</label><br>
<input type="email" name ="email"><br>

<label for="">Phone Number:</label><br>
<input type="phone" name ="phone_number"><br>

<label for="">DOB:</label><br>
<input type="dob" name ="date_of_birth"><br>

<label for="">Age:</label><br>
<input type="age" name ="age"><br>
<br>
<input type="submit" value="Submit Data" name="btn">

</form>

    
</body>
</html>