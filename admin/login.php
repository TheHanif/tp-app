<?php 
	require_once 'include/init.php';
	require_once 'classes/class.user.php';

	User::is_logged_in(FALSE);

	$ojb_user = new User;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	
</body>
</html>