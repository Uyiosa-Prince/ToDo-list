<!DOCTYPE html>
<html>
<head>
<title>Login DataBase mySQL PHP</title>

<link rel="stylesheet" type= "text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >

</head>
<body>

<div class="container">

<div class="login-box">   

<div class="row" >   
	<div class="col-md-6"> 
	
	<h2> Login Here  </h2>
	
	<form action="validation.php" method="post">
		<div class="form-group">
				<label>UserName</label>
				<input type="text"  name="user" class="form-control" required />
		</div>
		
			<div class="form-group">
				<label>Password</label>
				<input type="password"  name="password" class="form-control" required />
			</div>
			
		<button  type="submit"  class="btn btn-primary"> Login </button>
		
	</form>  
	</div>
		
		<!-- Registration-->
	<div class="col-md-6"> 
	
	<h2> Register  </h2>
	
	<form action="registration.php" method="post">
		<div class="form-group">
				<label>UserName</label>
				<input type="text"  name="user" class="form-control" required />
		</div>
		
			<div class="form-group">
				<label>Password</label>
				<input type="password"  name="password" class="form-control" required />
			</div>
			
		<button  type="submit"  class="btn btn-primary"> Register </button>
		
	</form>
	</div>

</div>
</div>
</div>
</body>
</html>