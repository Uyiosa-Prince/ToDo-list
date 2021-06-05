<?php
//  session_start();
//  $connection = mysqli_connect ('localhost', 'root', '');
//  mysqli_select_db($connection, 'todo_list');
    // add session file and connection file
    require_once "includes/session.php";
    require_once "includes/DB_Config.php";

   // store user input in a variable
   if (isset($_POST['submit'])){
        if (empty($_POST['task_input']) || ctype_space($_POST['task_input'])){
               // add session to display messages to user when cliked
            $_SESSION['message'] = "ERROR: Task field empty!";
            $_SESSION['msg_type'] = "danger";
            header("Location:index.php");
        }
        else{

     // store user input in a variable
         $task_input = $_POST['task_input'];

       // insert the the userinput into the database
   $query = "SELECT * FROM tasks WHERE task_Name = '$task_input'";

   $result = mysqli_query($connection,  $query);

   $num_rows = mysqli_num_rows($result);

   if ($num_rows == 1){
    //    echo "<div> task already exists </div>";

    // add session to display messages to user when cliked
    $_SESSION['message'] = "Task already exists!";
    $_SESSION['msg_type'] = "info";
    header("Location:index.php");
   }
  else{
       $addTask = "INSERT INTO tasks (task_Name) VALUES('$task_input')";
       mysqli_query($connection,  $addTask);
            // add session to display messages to user when cliked
    $_SESSION['message'] = "Task saved successfully!";
    $_SESSION['msg_type'] = "success";
    header("Location:index.php");
    }
        }
   }
   

   //button delete task
   if(isset($_GET['remove'])){
       $id = $_GET['remove'];
       $connection->query("DELETE FROM tasks WHERE task_ID = '$id'") or die("Connection Failed ".mysqli_connect_error());

       // add session to display messages to user when cliked
       $_SESSION['message'] = "Task deleted successfully!";
       $_SESSION['msg_type'] = "danger";

       header("Location:index.php");
   }

   //button done task
   if(isset($_GET['done'])){
    $id = $_GET['done'];

    //  $connection->query("ALTER TABLE tasks ALTER Completed SET DEFAULT '0', ALTER in_Progress SET DEFAULT '1'") 
    //                 or die("Connection Failed ".mysqli_connect_error());
    //   $connection->query("UPDATE tasks SET in_Progress = '0', Completed = '1' WHERE id = '$id'") 
    //                  or die("Connection Failed ".mysqli_connect_error());
    //   $update_query = "UPDATE tasks SET in_Progress = '0', Completed = '1' WHERE id = '$id'";
    //   mysqli_query($connection, $update_query);
      $Squery = "SELECT FROM tasks WHERE id = '$id'";
      $Uresult = mysqli_query($connection, $Squery);

      if ($Uresult == true){  
        $update_query = "UPDATE tasks SET in_Progress = '0', Completed = '1' WHERE id = '$id'";
        mysqli_query($connection, $update_query);

        // add session to display messages to user when cliked
        $_SESSION['message'] = "Task Completed!";
        $_SESSION['msg_type'] = "success";
        header("Location:index.php");
    }
    else{
        // add session to display messages to user when cliked
        $_SESSION['message'] = "Task Error!";
        $_SESSION['msg_type'] = "danger";
        header("Location:index.php");
    }
    
}


   //button to delete, remove, clear all tasks
   if(isset($_POST['clear'])){
        $check_query = "SELECT * FROM tasks";
        $check_result = mysqli_query($connection,$check_query);
        $row = $check_result -> fetch_assoc();
        $id = $row['task_ID'];

        if(is_null($id)){
            // add session to display messages to user when cliked
    $_SESSION['message'] = "ERROR: You do not have any saved task to clear!";
    $_SESSION['msg_type'] = "danger";

    header("Location:index.php");
        }
        else{
    // $connection->query("DELETE * FROM tasks") or die("Connection Failed ".mysqli_connect_error());
     $delete_query = "TRUNCATE TABLE tasks";
     mysqli_query($connection,  $delete_query);

    // add session to display messages to user when cliked
    $_SESSION['message'] = "All Task Removed successfully!";
    $_SESSION['msg_type'] = "danger";

    header("Location:index.php");
    }
}

   ?>
