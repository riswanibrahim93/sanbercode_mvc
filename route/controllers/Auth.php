<?php 

class Auth
{
	public function register()
	{
?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<h1>Buat Account Baru!</h1>
		<h3>Sing Up Form</h3>
		<form action="http://localhost/latihan_sanbercode/11_MVC/public/auth/welcome">
			<!-- name -->
			<label>First name:</label><br>
			<input type="text" name="first"><br>
			<label>Last name:</label><br>
			<input type="text" name="Last">
			<br><br>

			<!-- Gender -->
			<label>Gender</label><br>
			<input type="radio" id="male" name="gender" value="male">
			<label for="male">Male</label><br>
		  	<input type="radio" id="female" name="gender" value="female">
		  	<label for="female">Female</label><br>
		  	<input type="radio" id="other" name="gender" value="other">
		  	<label for="other">Other</label><br><br>

		  	<!-- National -->
		  	<label>Nationality:</label><br>
		  	<select name="national">
		  		<option value="indo">Indonesia</option>
		  		<option value="malay">Malaysia</option>
		  		<option value="arab">Arab</option>
		  	</select><br><br>

		  	<!-- language -->
		  	<label>Language Spoken</label><br><br>
		  	<input type="checkbox" name="indonesia">
		  	<label>Bahasa Indonesia</label><br>
		  	<input type="checkbox" name="ingris">
		  	<label>English</label><br>
		  	<input type="checkbox" name="lain">
		  	<label>Other</label><br><br>

		  	<!-- bio -->
		  	<label>Bio</label><br>
		  	<textarea name="bio"></textarea><br><br>

		  	<input type="submit" name="sumbit">
			
		</form>
	</body>
	</html>

<?php 

	}
	public function welcome()
	{

?>
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<h2>SELAMAT DATANG!</h2>
		<h3>Terima kasih telah bergabung di SanberBook. Sosial Media kita bersama</h3>

	</body>
	</html>
<?php 

	}
}