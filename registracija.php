<?php include('connect.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="assets/registracija.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="registracija.php">
  	<?php include('greske.php'); ?>
  	<div class="input-group">
  	  <label>Korisničko ime</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>E-mail</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Lozinka</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Ponovljena loznika</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Registriraj se</button>
  	</div>
  	<p>
  		Već si registriran? <a href="login.php">Prijavi se</a>
  	</p>
    <a href="./index.php">Povratak na početnu stranicu</a>
  </form>
</body>
</html>
