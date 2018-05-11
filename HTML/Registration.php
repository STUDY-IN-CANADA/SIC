<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student registration</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Registration.css">
</head>
<body>

<form action="../PHP/insert.php" method="post">
<h1>Registration</h1>
<input placeholder="Username" type="text" name ='username' required>
<br>
<input placeholder="Password" type="password" name="password" required>
<br>
<input placeholder="Email" type="email" name="email" required>
<br>
<input placeholder="University Name" type="text" name="university" >
<br>
<input placeholder="CGPA" type="text" name="cgpa" >
<br>
<input placeholder="No of Publications" type="text" name="publications" >
<br>
<input placeholder="Research area" type="text" name="research" >
<br>
<br>
<button type="submit">Done</button>
</form>
</body>
</html>