<?php include('connect.php') ?>
<?php


$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="tpribic"; // Database name
$tbl_name="fquestions"; // Table name

$connection = mysqli_connect("$host", "$username", "$password");
if (!$connection) {
    die("Database connection failed");
}

// 2. Select a database to use
$db_select = mysqli_select_db($connection, "tpribic");
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($connection));
}

// mysqli_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name ORDER BY id DESC";
// OREDER BY id DESC is order result by descending

$result=mysqli_query($connection, $sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/forum.css">
    <title>Forum</title>
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

    <table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
      <tr>
        <td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
        <td width="53%" align="center" bgcolor="#E6E6E6"><strong>Tema</strong></td>
        <td width="15%" align="center" bgcolor="#E6E6E6"><strong>Broj pregleda</strong></td>
        <td width="13%" align="center" bgcolor="#E6E6E6"><strong>Broj odgovora</strong></td>
        <td width="13%" align="center" bgcolor="#E6E6E6"><strong>Datum/Vrijeme</strong></td>
      </tr>

      <?php

      // Start looping table row
      while($rows = mysqli_fetch_array($result)){
      ?>
      <tr>
        <td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
        <td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
        <td align="center" bgcolor="#FFFFFF"><?php echo $rows['view']; ?></td>
        <td align="center" bgcolor="#FFFFFF"><?php echo $rows['reply']; ?></td>
        <td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
      </tr>

      <?php
      // Exit looping and close connection
      }
      mysqli_close($connection);
      ?>

      <tr>
      <td colspan="5" align="right" bgcolor="#E6E6E6"><a href="new_topic.php"><strong>Napravi novu raspravu</strong> </a></td>
      </tr>
    </table>
  </body>
</html>
