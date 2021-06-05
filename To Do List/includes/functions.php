<?php

    require_once "includes/session.php";
    require_once "includes/DB_config.php";


    if (isset($_POST['view'])) {
                $displayResult = $connection->query("SELECT * FROM tasks") or die("Connection Failed ".mysqli_connect_error());
?>
                <?php while ($row = $displayResult->fetch_assoc()): ?>
        <div class="row justify-content-center">
             <table class="table table-striped table-hover"> table-striped  thead-light
                <thead>
                    <tr>
                        <th scope="col">Code</th> <!--from hidden input with name and id="code" -->
                        <th scope="col">Task</th>
                        <th scope="col" colspan="2">Action</th>
                    </tr>
                </thead>
                    <tr>
                        <td><?php echo $row['task_ID'];?></td>
                        <td><?php echo $row['task_Name'];?></td>
                        <td>
                            <a href="../index.php edit=<?php echo $row['task_ID'];?>" class="btn btn-info">Edit</a>
                            <a href="../process.php delete=<?php echo $row['task_ID'];?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php 
                        endwhile;  
            }
                    ?>
            </table>
        </div> 