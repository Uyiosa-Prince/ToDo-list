<?php include "includes/header.php"; ?>

<body class="body">
        <?php require_once "process.php"; ?> 

        <?php if(isset($_SESSION['message'])): ?>
        <div class="alert alert-<?php echo $_SESSION['msg_type'];?>"> 
            <?php 
                echo $_SESSION['message']; 
                unset($_SESSION['message']);
            ?>
        </div>
        <?php endif; ?>

    
    <div class="row justify-content-center">
        <!-- Form to add task from database-->
        <div class="form-group">
            <form method="post" action="process.php">
                <!--<input type="hidden" name="code" id="code" /> code in table row-->
                <input type="text" placeholder="Enter Task"  name="task_input" class="form-control"/>
                <button type="submit" name="submit" class="btn btn-primary">Add Task</button>
                <button type="submit" name="clear" class="btn btn-danger">Clear all</button> 
                <!-- <button type="submit" name="list" class="btn btn-primary">List</button>
                <button type="submit" name="view" class="btn btn-info">View Tasks</button>
                <button type="submit" name="delete" class="btn btn-danger">Delete</button>
                <button type="submit" name="done" class="btn btn-success" id="btnDone">Done</button>
                <button type="submit" name="remove" class="btn btn-danger" id="btnRemove">Remove</button> -->
            </form>
        </div>
    </div>

         <!-- display as table-->
<?php
    $displayResult = $connection->query("SELECT * FROM tasks") or die("Connection Failed ".mysqli_connect_error());
    // print_r($displayResult-> fetch_assoc()); used to display data in database with, print query fetched from database;
    //  print_r($displayResult-> fetch_assoc()); echo "<br/>"; 
    //  print_r($displayResult-> fetch_assoc());
?>


<div class="row justify-content-center">
<!-- <div><a href="process.php?clear" class="btn btn-warning">Clear all</a></div> -->
 <table class="table table-striped table-hover">  <!--table-striped  thead-light -->
    <thead class="table thead-dark">
        <tr>
            <!--<th scope="col">Id</th> from hidden input with name and id="code" -->
            <th scope="col">Task</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
    </thead>
    <?php while ($row = $displayResult->fetch_assoc()): ?>
    <tbody>
        <tr>
            <!-- <td><?php //echo $row['task_ID'];?></td> -->
            <td><?php echo $row['task_Name'];?></td>
            <td>
                <a href="index.php?edit=<?php echo $row['task_ID'];?>" class="btn btn-info">Edit</a>
                <a href="process.php?remove=<?php echo $row['task_ID'];?>" class="btn btn-danger">Remove</a>
            </td>
        </tr>
    </tbody>
        <?php endwhile; ?>
 
</table>
</div> 
</body>
<footer>
</footer>
</html>