<?php   session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>

	<?php
      if(!isset($_SESSION['username'])) // If session is not set then redirect to Login Page
       {
           header("Location:login.php");  
       }

          echo "Login Success";

          echo "<a href='../PHP/logout.php'> Logout</a> "; 
?>

<h2>Hi, <?php echo $_SESSION['username']; ?></h2>

</body>
</html>