<!DOCTYPE html>
<html>
<head>
	<title>LOGOWANIE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGOWANIE</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Nazwa</label>
     	<input type="text" name="uname" placeholder="Nazwa"><br>

     	<label>Haslo</label>
     	<input type="password" name="password" placeholder="Hasło"><br>

     	<button type="submit">Zaloguj</button>
          <a href="signup.php" class="ca">Utworz konto</a>
     </form>
</body>
</html>