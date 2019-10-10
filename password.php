<?php

$pass = $_POST['pass'] ?? 'School!2345';

$hash = password_hash($pass, PASSWORD_BCRYPT);

$verify = password_verify($pass,$hash);



?><!DOCTYPE html>
<html>
	<head>
		<title>PHP Encrypted Password Generator</title>
	</head>
	<body>
		<fieldset>
			<?php
				if (isset($pass) && isset($hash)) {
					echo '<table>';
					echo '<tr><th>Password: </th><td>'.$pass.'</td></tr>';
					echo '<tr><th>Hash: </th><td>'.$hash.'</td></tr>';
					echo '</table>';
				}
			?>
		</fieldset>
		<fieldset>
			<form action="password.php" method="post">
				<label style="font-weight: bold;">Wachtwoord: <input type="text" name="pass"></label>
				<input type="submit" value="hash">
			</form>
		</fieldset>
	</body>
</html>