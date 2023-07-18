<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="#" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" name="submit" value="Sign Up">
        </form>
        <p>Already have an account? <a href="login.php">Login</a></p>
    </div>
</body>
</html>

<?php

include 'login_connect.php';

if(isset($_POST['submit'])){
	$user = array(
	'name' => $_POST['name'],
	'email' => $_POST['email'],
	'password' => $_POST['password']
	);
	
	$collection->insertOne($user);
	
	echo "Account Created !!!";
}
?>
