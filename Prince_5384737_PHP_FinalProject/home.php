<?php
session_start();
if(!isset($_SESSION['username'])) {
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html>
<header>
<title>Classified Ads-Home</title>
</header>
<body>
<div style=" float:right;" class="logout">
<a href="login.php">Log out</a>
</div>
<h1> Welcome <?php echo $_SESSION['username']; ?> </h1>

<div>


</div>

</body>
</html>