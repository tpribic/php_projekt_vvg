<?php include('connect.php') ?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="/assets/forum.css">
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <?php
          if ($_SESSION == true) {
            echo "<li><a href='index.php'>Početna stranica</a></li>";
            echo "<li>Ulogiran si kao: ".$_SESSION["username"]."</li>";
            echo "<li><a href='logout.php'>Odjava</a></li>";
            echo "<li><a href='main_forum.php'>Forum</a></li>";
          }
          else{
                  echo "<li><a href='registracija.php'>Registracija</a></li>";
                  echo "<li><a href='login.php'>Login</a></li>";
                }
          ?>
        </ul>
      </nav>
    <header>
    <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
      <tr>
        <form id="form1" name="form1" method="post" action="add_new_topic.php">
          <td>
            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
              <tr>
              <td colspan="3" bgcolor="#E6E6E6"><strong>Napravi novu raspravu</strong> </td>
              </tr>
              <tr>
                <td width="14%"><strong>Naziv rasprave</strong></td>
                <td width="2%">:</td>
                <td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
              </tr>
              <tr>
                <td valign="top"><strong>Detalji</strong></td>
                <td valign="top">:</td>
                <td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
              </tr>
              <!-- <tr>
                <td><strong>Name</strong></td>
                <td>:</td>
                <td><input name="name" type="text" id="name" size="50" /></td>
              </tr>
              <tr>
                <td><strong>Email</strong></td>
                <td>:</td>
                <td><input name="email" type="text" id="email" size="50" /></td>
              </tr>
              <tr> -->
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td><input type="submit" name="Submit" value="Pošalji" />
                <input type="reset" name="Submit2" value="Reset" /></td>
              </tr>
            </table>
          </td>
        </form>
      </tr>
    </table>
  </body>
</html>
