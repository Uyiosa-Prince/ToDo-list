<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> To do List </title>
    <!--My Github -> https://github.com/Uyiosa-Prince/To-Do-list -->
    <!--BootStrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <!-- Icons from font awesome-->
    <script src="https://kit.fontawesome.com/0a31f47d96.js" crossorigin="anonymous"></script>
    <!--JQuery link-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--captcha Link-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!--stylesheet file Link-->
    <link rel="stylesheet" href="includes/style.css">
</head>
<body>
        <?php require_once "process.php"; ?>
        <!-- <?php //require_once "process.php"; ?> -->
    <div class="row justify-content-center">
        <!-- Form to add task from database-->
        <div class="form-group">
            <form method="post" action="process.php">
                <input type="hidden" name="code" id="code" /> <!--code in table row-->
                <input type="text" placeholder="Enter Task"  name="task_input" class="form-control" required/>
                <button type="submit" name="submit" class="btn btn-primary">Add Task</button>
                <button type="submit" name="list" class="btn btn-primary">List</button>
                <button type="submit" name="view" class="btn btn-info">View Tasks</button>
                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                <button type="submit" name="done" class="btn btn-success" id="btnDone">Done</button>
                <button type="submit" name="remove" class="btn btn-danger" id="btnRemove">Remove</button>
            </form>
        </div>
    </div>

         <!-- display as table-->
<?php
    $displayResult = $connection->query("SELECT * FROM tasks WHERE task_Name = 'task_input'") or die("Connection Failed ".mysqli_connect_error());
    // print_r($displayResult-> fetch_assoc()); used to display data in database with, print query fetched from database;
    //  print_r($displayResult-> fetch_assoc()); echo "<br/>"; 
    //  print_r($displayResult-> fetch_assoc());


?>
         <div class="row justify-content-center">
             <table class="table table-striped table-hover"> <!--table-striped  thead-light-->
                <thead>
                    <tr>
                        <th scope="col">Code</th> <!--from hidden input with name and id="code"-->
                        <th scope="col">Task</th>
                        <th scope="col" colspan="2">Action</th> <!--colspan="2"-->
                    </tr>
                </thead>
                
                <!--Display user input data from database-->
                    <?php
                    // if ($_SERVER["REQUEST_METHOD"] == 'POST'){
                    //  if (isset($_POST['list'])){
                    //  //$displayResult = $connection->query("SELECT FROM tasks WHERE task_Name = 'task_input'") or die("Connection Failed ".mysqli_connect_error());
                    //     while ($row = $displayResult->fetch_assoc()): 
                    //     ?>
                         <tr>
                             <td><?php //echo $row['task_ID']; ?></td>
                             <td><?php //echo $row['task_Name']; ?></td>
                             <td></td>
                         </tr>
                     <?php 
                    // endwhile;
                    //  }
                    // }
                             
                     ?> <!--To close the opened for loop-->

            </table>
         </div>
</body>
<footer>
</footer>
</html>