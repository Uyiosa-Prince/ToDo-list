<?php
if(isset($_SESSION['email'])) {
    header('location: login.php');
}

?>

<!DOCTYPE html>
<html>
<header>
<title>Classified Ads-Home</title>
</header>
<body>
<div style=" float:left;" class="logout">
<a href="login.php">Log out</a>
</div>

<h1> Welcome <?php echo $_SESSION['email'] ?></h1>

</body>
</html>