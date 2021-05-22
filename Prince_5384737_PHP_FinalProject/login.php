<!DOCTYPE html>
<html>

<head>
    <title>classified ads/login</title>
    <link rel="stylesheet" href="includes/style.css" type="text/css" />
</head>

<body>
    <div class="login">

        <h2> Login </h2>

        <form action="validation.php" method="post">
            
            <div class="">
                <label>Email</label>
                <input type="email" name="email" class="#" required />
            </div>

            <div class="">
                <label>Password</label>
                <input type="password" name="password" class="#" required />
            </div>

            <button type="submit" class=""> Login </button>
            <br/>

            <p class="reg">Don't yet have an account? <a href="register.php">create an account</a></p>        

        </form>
    </div>

</body>

</html>
