<!DOCTYPE html>
<html>

<head>
    <title>classified ads/login</title>
    <link rel="stylesheet" href="includes/style.css" type="text/css" />
</head>

<body>

    <!-- Validate user inputs and assign error messages-->
<?php
// ================================================================================================================================ 
// define variables and set to empty values
$nameErr = $emailErr = $phonenoErr = $passwordErr = $confirmPasswordErr = $dobErr = $addressErr = $stateErr = $cityErr = "";
$firstname = $lastname = $email = $phoneno = $password = $confirmPassword = $name = "";
$passwordLenght = 6;

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if (isset($_POST['submit'])) {
  if (empty($_POST["firstname"]) && empty($_POST["lastname"])) {
    $nameErr = "Name is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    $lastname =  test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["password"])) {
    $password = "";
  } else {
    
    $containsLetter  = preg_match('/[a-zA-Z]/',    $password);
    $containsDigit   = preg_match('/\d/',          $password);
    $containsSpecial = preg_match('/[^a-zA-Z\d]/', $password);

    $password = test_input($_POST["password"]);
    // check if password lenght is up to 6 
    if (strlen($password) != $passwordLenght) {
        $passwordErr = "password must at least 6 letters";
    }
    // check if password syntax is valid 
    if (!$containsLetter && !$containsDigit && !$containsSpecial ){
      $passwordErr = "Invalid password: password should contain at least one uppercase, lowercase letter and number";
    }
    // check if confirm password matches with password
    
    }
        // check if confirm password matches with password
    if (empty($_POST["confirmPassword"])) {
        $confirmPassword = "";
      } 
      else {
        $confirmPassword = test_input($_POST["confirmPassword"]);
        if ($_POST["confirmPassword"] !== $_POST["password"]) {
            $confirmPasswordErr = "password and confirm password should match"; 
        }
        }
 
}
?>
<!-- //=========================================================================================================================================== -->


    <div class="register">

        <h2> Register </h2>

        <form action="registration.php" method="post">
            <div class="">
                <label>First Name</label>
                <input type="text" name="firstname" class="#" required />
                <span style="color: #c00;" class="error"><?php echo $nameErr;?></span>
            </div>

            <div class="">
                <label>Last Name</label>
                <input type="text" name="lastname" class="#" required />
                <span style="color: #c00;" class="error"><?php echo $nameErr;?></span>
            </div>

            <div class="">
                <label>Email</label>
                <input type="email" name="email" class="#" required />
                <span style="color: #c00;" class="error"><?php echo $emailErr;?></span>                
            </div>

            <div class="">
                <label>Phone No</label>
                <input type="text" name="phoneno" class="#" required />
                <span style="color: #c00;" class="error"><?php echo $phonenoErr;?></span>
            </div>

            <div class="">
                <label>DOB</label>
                <input type="date" name="dob" class="#" required />
                <span style="color: #c00;" class="error"><?php echo $dobErr;?></span>
            </div>

            <div class="">
                <label>Address</label>
                <input type="text" name="address" class="#" required />
                <span style="color: #c00;" class="error"><?php echo $addressErr;?></span>
            </div>

            <div class="">
                <label>State</label>
                <input type="text" name="state" class="#" required />
                <span style="color: #c00;" class="error"><?php echo $stateErr;?></span>
            </div>

            <div class="">
                <label>City</label>
                <input type="text" name="city" class="#" required />
                <span style="color: #c00;" class="error"><?php echo $cityErr;?></span>
            </div>

            <div class=>
                <label>Password</label>
                <input type="password" name="password" class="#" required />
                <span style="color: #c00;" class="error"><?php echo $passwordErr;?></span>
            </div>

            <div class=>
                <label>Confirm Password</label>
                <input type="password" name="confirmPassword" class="#" required />
                <span style="color: #c00;" class="error"><?php echo $confirmPasswordErr;?></span>
            </div>

            <button type="submit" class="#"> Register </button>

            <br/>
            <p class="log">Already have an account? <a href="login.php">Login here</a></p>
            

        </form>
    </div>

</body>

</html>