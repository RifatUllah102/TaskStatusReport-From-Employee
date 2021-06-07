<?php 
	if (isset($_GET['id']) && isset($_GET['status'])){
		include "db_conn.php";

		$status = $_GET['status'];
		$id = $_GET['id'];
		//echo "Status Value " . $_GET['status'] . " Id value " . $_GET['id'];
		//echo "Status Value " . $status . " Id value " . $id;

		//$sql2 = "UPDATE tasklist SET `Status` = '$status' WHERE `tasklist`.`Id` = '$id'";
		$sql = "UPDATE tasklist SET Status = '$status' WHERE Id = '$id'";
		$find = mysqli_query($conn, $sql);
		if (!$find) {
            die('Error: ' . mysqli_error($conn));
        }
		elseif(empty($_GET['id']) || empty($_GET['status'])){
			echo'Value can\'t be empty.';
		}
		else{
			echo'Status Updated Successfully.';
		}
	}

	?> <a href = "home.php">Home Page</a><?php


?>

<!DOCTYPE html>
<html>
<head>
	<title>Change Task Status</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<img  src="home.jpg" class="imge" alt="image">
     <form action="#" method="get">
     	<h2>Update Task Status</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Task ID</label>
     	<input type="number" name='id' placeholder="Enter Task ID Here"><br>
         <label>Task Status (Working/Done)</label>
     	<input type="text" name="status" placeholder="Enter Task Status Here"><br>

     	<button type="submit">Submit</button>
     </form>
</body>
</html>