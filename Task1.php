<?php
	if(isset($_POST["register"])){
?>
	First Name : <?php echo $_POST["name"];?> <br>
	Username:  <?php echo $_POST["uname"];?> <br>
	Password:  <?php echo $_POST["pass"];?> <br>
	Gender:  <?php echo $_POST["gndr"];?> <br>
	Profession:  <?php echo $_POST["profs"];?> <br>
	Bio:  <?php echo $_POST["bio"];?> <br>
	Hobbies:
	<ul>
		<?php
			foreach($_POST["hobbies"] as $hobby)
			{
				echo "<li>$hobby</li>";
			}
		?>
	</ul>

	<?php }
		else{
	?>
<html>
	<head>
		<title>Registration</title>
	</head>
	<body>
		<h1>Registration Form</h1>
		<hr/>
		<form action="" method="post">
			<table >
				<tr>
					<td>First Name:</td>
					<td><input type="text"  name="name" ></td>
				</tr>
				<tr>
					<td>Last name:</td>
					<td><input type="text"  name="name" ></td>
				</tr>
				<tr>
					<td>Age:</td>
					<td><input type="value" age="value"></td>
		</tr>

				
				<tr>
					<td>Designation:</td>
					<td><input type="radio" value="Junior Programmer" name="Desig"> Junior Programmer <input type="radio" value="Senior Programmer" name="Desig"> Senior Programmer <input type="radio" value="Project Lead" name="Desig"> Project Lead</td>
				</tr>
				<tr>
					<td>Preferred language: </td>
					<td><input type="checkbox" value="JAVA" name="Preferred language[]">JAVA
					<input type="checkbox" value="PHP" name="Preferred language[]"> PHP
					<input type="checkbox" value="C++" name="Preferred language[]"> C++
					</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="pass"></td>
				</tr>
				<tr>
					<td colspan="2" >
						<input type="submit" name="register" value="Register">
						<input type="button" value="Refresh"> 
					</td>
				</tr>
			</table>
			
			 
			
		</form>
	</body>
</html>
		<?php }?>