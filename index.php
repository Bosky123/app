<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Přihlášení</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Uživatelské Jméno</label>
     	<input type="text" name="uname" placeholder="Uživatelské Jméno"><br>

     	<label>Heslo</label>
     	<input type="password" name="password" placeholder="Heslo"><br>

     	<button type="submit">Přihlásit</button>
          <a href="signup.php" class="ca">vytvořit účet</a>
     </form>
</body>
</html>