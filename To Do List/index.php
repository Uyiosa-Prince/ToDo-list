<?php include "includes/header.php"; ?>
<?php include "includes/form.php"; ?>


    <div class="row justify-content-center">
        <!-- show link to in_progress and completed files-->
        <table class="table table-bordered table-hover">
            <thead class="table thead-dark">
                <tr>
                    <th scope="col">
                        <button type="button" class="btn btn-outline-secondary" id="btn-In-progress" onclick="inProgress()">In Progress</button>
                    </th>
                    <th scope="col">
                        <button type="button" class="btn btn-outline-secondary" id="btn-Completed" onclick="completed()">Completed</button>
                    </th>
                </tr>
            </thead>
        </table>
    </div>

    <div id="in-progress">
        <?php include "inProgress.php"; ?>
    </div>
    <div id="completed">
        <?php include "completed.php"; ?>
    </div>


<!-- </body>
<footer>
</footer>
</html> -->