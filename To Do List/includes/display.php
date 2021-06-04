<?php
    // Display data

   if ($_SERVER["REQUEST_METHOD"] == 'POST'){
    if (isset($_POST['list'])){
    //$displayResult = $connection->query("SELECT FROM tasks WHERE task_Name = 'task_input'") or die("Connection Failed ".mysqli_connect_error());
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


?>