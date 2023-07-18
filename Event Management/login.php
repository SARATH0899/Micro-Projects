<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="#" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" name="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="signup.php">Sign up</a></p>
    </div>
</body>
</html>

<?php
include 'login_connect.php';
session_start();


if(isset($_POST['submit'])){

	$userr = array(
	'email' => $_POST['email'],
	'password' =>$_POST['password']);
	
       $user = $collection->findOne($userr);

        if ($user) {
            echo '<b>Login successful!</b>';
			$_SESSION["user"] = $user;
			header("Location:homepage.php");

        } 
		else {
            echo '<b>Invalid email, or password</b>';
        }

 }
 
?>