<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<img  src="c.jpeg" class="imge" alt="image">
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>UserName/Email</label>
     	<input type="text" name="uname" placeholder="Enter Your Email Here"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Enter Your Password Here"><br>
     	<button type="submit">Login</button>
     </form>
</body>
</html>