
<?php include 'includes/header.php'?>
<?php include "includes/form.php"; ?>



    <div class="row justify-content-center">
        <!-- show link to in_progress and completed files-->
        <table class="table table-bordered table-hover">
            <thead class="table thead-dark">
                <tr>
                    <th scope="col">
                        <button type="button" class="btn btn-outline-secondary" name="btn-in-progress" id="btn-in-progress" onclick="inProgress()">In Progress</button>
                    </th>
                    <th scope="col">
                        <button type="button" class="btn btn-outline-secondary" name="btn-Completed" id="btn-Completed" onclick="completed()">Completed</button>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="row justify-content-center no-task" id="no-task">
        <!-- show link to in_progress and completed files-->
        <table class="table table-striped table-hover ">
            <tbody class="table">
                <tr>
                    <td>
                        <h3>Click on in progress to see your tasks!</h3>
                    </td>
                    <td>
                        <h3>Click on completed to see tasks you have done!</h3>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="in-progress">
        <?php include "inProgress.php"; ?>
    </div>
    <div id="completed">
        <?php include "completed.php"; ?>
    </div>

    <!-- <script language="JavaScript" src="images/script.js"></script> -->
</body>
<footer>
</footer>
</html>