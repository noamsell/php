<!DOCTYPE html>
<?php 
$to="togetthere5@gmail.com"
$subject "verification request from {name}"
$Name=$_POST['name']
$PhoneNum=$_POST['phone']
$accsslvl=$_POST['accsslvl']
$message= <<<MESSAGE
 

Hello there's a new verification request awaiting approval 

business name: {Name}
tel: {phone}
accessiblity level notes:
{accsslvl}
MESSAGE;
mail($to, $subject, $message)

 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>contact us</title>
</head>
<body>
	<form action="?" method="post" >
	<ul>
		<li><label for="name"></label>Name<input type="text" id="name"></li>
		<li><label for="pass"> password</label><input type="password" id="pass"></li>
		<li><label for="phone"></label>phone number: <input type="text" id="phone"></li>
		<li><label for="accsslvl"> accessiblity level: </label>text <textarea name="accsslvl" id="accsslvl" cols="54" rows="10"></textarea></li>
		<li><input type="submit"> submit</li>
	</ul>

	</form>
</body>
</html>