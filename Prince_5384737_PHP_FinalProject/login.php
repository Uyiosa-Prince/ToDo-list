<!DOCTYPE html>
<html>

<head>
    <title>classified ads/login</title>
    <link rel="stylesheet" href="includes/style.css" type="text/css" />
</head>

<body class="login_body">
    <div class="login">

    <?php 
        session_start();
        if (isset($_SESSION['login'])) {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }

    ?>

        <h2> Login </h2>

        <form action="includes/Validation.php" method="post" class="Lform">
            
            <div class="email">
                <label>Email</label><br/>
                <input type="email" name="email" class="#" required />
            </div>

            <div class="password">
                <label>Password</label><br/>
                <input type="password" name="password" class="#" required />
            </div>
            <br/>
            <button type="submit" class="submit"> Login </button>
            <br/>

            <p class="reg">Don't yet have an account? <a href="register.php">create an account</a></p>
           

        </form>
    </div>

   

</body>

</html>
