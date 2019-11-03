<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>ABC Company</title>
</head>
<body>
	<h1>ABC Company</h1>
	<form>
		<fieldset>
			<div>
				<ul>
				  <li><a href="index.html">Home</a></li>
				  <li><a href="reg.php">Registration</a></li>
				  <li><a href="signin.html">Login</a></li>
				</ul>

			</div>
		</fieldset>	
		<fieldset>
			<legend>Registration</legend>
			<table border="0">
				<tr>
					<td>Name : </td>
					<td><input type="text" name="name"/></td>
				</tr>
				<tr>
					<td>Email : </td>
					<td><input type="email" name="email"/></td>
				</tr>
				<tr>
					<td>User Name : </td>
					<td><input type="text" name="uname"/></td>
				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="password" name="pass" /></td>
				</tr>
				<tr>
					<td>Confirm Password :</td>
					<td><input type="password" name="pass" /></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<input type="radio" name="gender"/> Male
						<input type="radio" name="gender"/> Female 
						<input type="radio" name="gender"/> Other
					</td>
				</tr>
				<tr>
					<td>DOB:</td>
					<td><input type="date" name="" /></td>
				</tr>
				<tr>
					<td>
						<input type="reset" name="" value="reset">
						<input type="submit" name="" value="submit">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>