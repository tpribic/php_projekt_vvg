<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registracija</title>
  <link rel="stylesheet" type="text/css" href="assets/registracija.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>

  <form method="post" action="login.php">
  	<?php include('greske.php'); ?>
  	<div class="input-group">
  		<label>Korisničko ime</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Lozinka</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Prijava</button>
  	</div>
  	<p>
  		Nisi još registriran? <a href="registracija.php">Registriraj se</a>
  	</p>
    <a href="./index.php">Povratak na početnu stranicu</a>
  </form>
</body>
</html>
