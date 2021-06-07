<?php
	if (isset($_POST['id']) && isset($_POST['Tname']) && isset($_POST['status'])){
		include "db_conn.php";
		
		$id = $_POST['id'];
		$TaskName = $_POST['Tname'];
		$status = $_POST['status'];
		if(empty($_POST['id']) || empty($_POST['Tname']) ||empty($_POST['status'])){
			echo'Value can\'t be empty.';
		}
		else{
			$sql3 = "INSERT INTO tasklist (Id, TaskName, Status)
					VALUES ('$id', '$TaskName', '$status')";
			$find3 = mysqli_query($conn, $sql3);
			if (!$find3) {
				die('Error: ' . mysqli_error($conn));
			}
			else{
				echo'Task added Successfully.';
			}
		}
	}
	?> <a href = "home.php">Home Page</a><?php

?>


<!DOCTYPE html>
<html>
<head>
	<title>Upload New Task Here</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<img  src="f.jpg" class="imge" alt="image">
    <form action="#" method="post">
     	<h2>Input Task with Id and Initial Status</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
         <label>TaskID</label>
     	<input type="number" name="id" placeholder="Enter Task ID Here"><br>
     	<label>TaskName</label>
     	<input type="text" name="Tname" placeholder="Enter TaskName Here"><br>
     	<label>Task Status</label>
     	<input type="text" name="status" placeholder="Enter Task Status Here"><br>

     	<button type="submit">Submit</button>
    </form>
</body>
</html>