<?php

$email = $_POST['email'];
$password = $_POST['password'];
$duration = $_POST['duration'];

$total_cost = ($duration * 30);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 3</title>
</head>

<body>
    <p>
        Thank you <?php echo $email;?> your password is <?php echo $password;?> 
        <br>
        Your membership length is <?php echo $duration;?> months.
        <br>
        Total charge is $<?php echo $total_cost;?>.
    </p>
  
</body>

</html>