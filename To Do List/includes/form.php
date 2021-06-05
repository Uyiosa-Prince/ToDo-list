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