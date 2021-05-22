<!DOCTYPE html>
<html>

<head>
    <title>classified ads/login</title>
    <link rel="stylesheet" href="includes/style.css" type="text/css" />
</head>

<body>
    <div class="register">

        <h2> Register </h2>

        <form action="registration.php" method="post">
            <div class="">
                <label>First Name</label>
                <input type="text" name="firstname" class="#" required />
            </div>

            <div class="">
                <label>Last Name</label>
                <input type="text" name="lastname" class="#" required />
            </div>

            <div class="">
                <label>Email</label>
                <input type="email" name="email" class="#" required />
            </div>

            <div class="">
                <label>Phone No</label>
                <input type="text" name="phoneno" class="#" required />
            </div>

            <div class="">
                <label>DOB</label>
                <input type="date" name="dob" class="#" required />
            </div>

            <div class="">
                <label>Address</label>
                <input type="text" name="address" class="#" required />
            </div>

            <div class="">
                <label>State</label>
                <input type="text" name="state" class="#" required />
            </div>

            <div class="">
                <label>City</label>
                <input type="text" name="city" class="#" required />
            </div>

            <div class=>
                <label>Password</label>
                <input type="password" name="password" class="#" required />
            </div>

            <div class=>
                <label>Confirm Password</label>
                <input type="password" name="confirmpassword" class="#" required />
            </div>

            <button type="submit" class="btn btn-primary"> Register </button>
            

        </form>
    </div>

</body>

</html>