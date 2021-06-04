<?php
//  session_start();
//  $connection = mysqli_connect ('localhost', 'root', '');
//  mysqli_select_db($connection, 'todo_list');
    // add session file and connection file
    require_once "includes/session.php";
    require_once "includes/DB_Config.php";

   // store user input in a variable
   if (isset($_POST['submit'])){
     // store user input in a variable
         $task_input = $_POST['task_input'];
        //   $connection = include "includes/DB_Config.php";

       // insert the the userinput into the database
   $query = "SELECT * FROM tasks WHERE task_Name = '$task_input'";

   $result = mysqli_query($connection,  $query);

   $num_rows = mysqli_num_rows($result);

   if ($num_rows == 1){
       echo "<div> task already exists </div>";
   }
  else{
       $addTask = "INSERT INTO tasks (task_Name) VALUES('$task_input')";
       mysqli_query($connection,  $addTask);
   }

   }

   // Display data

   if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    if (isset($_POST['list'])){
        $task_input = $_POST['task_input'];
    $displayResult = $connection->query("SELECT FROM tasks WHERE task_Name = '$task_input'") or die("Connection Failed ".mysqli_connect_error());
       while ($row = $displayResult->fetch_assoc()): 
       ?>
       <tr>
           <td><?php echo $row['task_ID']; ?></td>
           <td><?php echo $row['task_Name']; ?></td>
           <td></td>
       </tr>
   <?php 
   endwhile;
    }
   }


//    if (isset($_POST['submit'])){
//     $task_input = $_POST['task_input'];
//     AddTask($task_input);
  



?>
