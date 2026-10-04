<?php
  include 'pure_php.php';
  
  $username = "BSIT NT 3101";
  $user_id = 12345;
  $course = "BSIT";
  $section = "NT 3101";
  $subject = "Web System";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DEMO BSIT NT 3101</title>
</head>
<body>

 <h3>
   Username: <u id="displayusername"><?php echo $username; ?></u><br>
   UserID: <u id="displayuserid"><?php echo $user_id; ?></u><br>
   Course: <u id="displaycourse"><?php echo $course; ?></u><br>
   Section: <u id="displaysection"><?php echo $section; ?></u><br>
   Subject: <u id="displaysubject"><?php echo $subject; ?></u>
 </h3>

 <button type="button" onclick="greetUser()">Greet UserID</button>

 <script src="external.js"></script>
</body>
</html>
