<?php include "includes/functions.php"?>
<?php include "includes/header.php"?>

<body>
	<div id="page" align="center">
		<div id="content" style="width:800px">
			<?php include "includes/logo.php" ?>
			<?php include "includes/headerDiv.php" ?>
			<?php include "includes/menu.php"?>
			<div id="contenttext">
				<?php include "includes/title.php"?>
					<div class="bodytext" style="padding:12px;" align="justify">
					
					<strong><br /><br />
					<font color=#CC0000>* Required Fields</font>
					</strong><br /><br />
					<?php 
					//-----------------Variables Declaration---------------
						$weightError = "";
						$heightError = "";
						
						$weightInput = "";
						$heightInput = "";
						
						$selectInput = 0;
					//-----------------Variables Validation--------------- 	
					
						if (isset($_POST['Submit'])) {
							if (empty($_POST['weight'])){
								$weightError= "Weight is required!";
							}
							else {
								$weightInput = $_POST['weight'];
							}
							
							if (empty($_POST['height'])){
								$heightError = "Height is required!";
							}
							else {
								$heightInput = $_POST['height'];
							}
							$selectInput = $_POST['unit'];
						}
						
					?>
					<form  action="#" method="POST"> 
						weight: <input type="number" placeholder="Enter Weight" name="weight" size=20 value= <?php echo $weightInput;?> />
						<select name="unit" id="unit" class="unit" style="color:#0000ff; font-weight:bold; font-size:10pt">
						<option value='0' <?php if ($selectInput == 0) { echo "Kg selected";}?> >Kg</option>
						<option value='1' <?php if ($selectInput == 1) { echo "Lbs selected";}?>>Lbs</option>						
						</select>
						<strong><font color=#CC0000>* <?php echo $weightError; ?></font></strong><br/><br/>
						Height: <input type="number" placeholder="Enter height in centimeters" name="height" size=20 value=<?php echo $heightInput;?> />
							<strong><font style="font-weight:bold; color:#0000ff">Cm</font></strong>
							<strong><font color=#CC0000>* <?php echo $heightError; ?></font></strong><br/><br/>
							
					<input type="submit" value="Calculate BMI" name="Submit" style=" font-weight: bold; size: 15; color:#fff; Background-color:#CC0000 "/>
					<br/><br/>						
					</form>
					
					<?php 
					//------------RESULT---------------
					
					if (isset($_POST['Submit']) && !empty($_POST['weight']) && !empty($_POST['height'])) {
						echo "<strong><font color=#CC0000>";
						echo "Your BMI = ".CalculateBMI($weightInput, $heightInput, $selectInput);
						echo  "</font>";
						echo "</strong>";
					}
					
					?>
				</div>
			</div>
			<?php include "includes/footer.php"?>
		</div>
	</div>
</body>
</html>