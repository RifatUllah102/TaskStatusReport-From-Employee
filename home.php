<?php 
     session_start();
     include "db_conn.php";

     if (isset($_SESSION['Id']) && isset($_SESSION['email'])) {

          ?>
          <!DOCTYPE html>
          <html>
          <head>
               <title>HOME</title>
               <link rel="stylesheet" type="text/css" href="style.css">
               
          </head>
          <body>
               <img  src="main.jpg" class="imge" alt="image">
               <h1>Hello, <?php echo $_SESSION['Name']; ?></h1>

               <div>
               <h3>Today's all of the Tasks are here:</h3>
               <?php
               $sql1 = "SELECT * FROM tasklist";
               $find = mysqli_query($conn, $sql1);
               if (mysqli_num_rows($find) > 0) {
               // output data of each row
              
               while($row1 = mysqli_fetch_assoc($find)) {
               echo " Task: " . $row1["Id"]. "-->" . $row1["TaskName"]. "<br>Task State:  " . $row1["Status"]. "<br>";
               }
               } else {
                    echo "No Task Available for Today, Try to Contact to Your Boss/Other Superior.";
               }
               ?>
               </div><?php
               if($_SESSION['Name'] === "Mr. Boss"){
               ?> <br><a href = "AddTask.php">Add_New_Task</a><br><?php
               }
               ?>

               <a href="status.php">Task Status Report</a><br>

               <a href="logout.php">Logout</a>
          </body>
          </html>

          <?php 
     }
     else{
          header("Location: index.php");
          exit();
     }
?>