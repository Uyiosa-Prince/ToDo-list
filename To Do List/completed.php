      <!-- display as table-->
<?php
    $displayResult = $connection->query("SELECT * FROM tasks WHERE Completed ='1'") or die("Connection Failed ".mysqli_connect_error());
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
            <th scope="col" colspan="1">Action</th> <!--Changed colspan to 1 because we need just remove btn in completed-->
        </tr>
    </thead>
    <?php while ($row = $displayResult->fetch_assoc()): ?>
    <tbody>
        <tr>
            <!-- <td><?php //echo $row['task_ID'];?></td> -->
            <td><?php echo $row['task_Name'];?></td>
            <td>
                <!-- <a href="index.php?edit=<?php //echo $row['task_ID'];?>" class="btn btn-info">Edit</a> -->
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