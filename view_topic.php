<?php include('connect.php') ?>
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="myforum"; // Database name
$tbl_name="fquestions"; // Table name

// Connect to server and select databse.
// mysql_connect("$host", "$username", "$password")or die("cannot connect");
// mysql_select_db("$db_name")or die("cannot select DB");

$connection = mysqli_connect("$host", "$username", "$password");
if (!$connection) {
    die("Database connection failed");
}

// 2. Select a database to use
$db_select = mysqli_select_db($connection, "tpribic");
if (!$db_select) {
    die("Database selection failed: " . mysqli_error($connection));
}

// get value of id that sent from address bar
$id=$_GET['id'];
$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=mysqli_query($connection, $sql);
$rows=mysqli_fetch_array($result);
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

    <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
      <tr>
        <td>
          <table width="100%" border="0" cellpadding="3" cellspacing="1" bordercolor="1" bgcolor="#FFFFFF">
            <tr>
              <td bgcolor="#FFFFFF"><strong>Tema: <?php echo $rows['topic']; ?></strong></td>
            </tr>

            <tr>
              <td bgcolor="#FFFFFF"><?php echo $rows['detail']; ?></td>
            </tr>

            <tr>
              <td bgcolor="#FFFFFF"><strong>Napravio :</strong> <?php echo $rows['name']; ?> <strong>Email : </strong><?php echo $rows['email'];?></td>
            </tr>

            <tr>
              <td bgcolor="#FFFFFF"><strong>Datum/Vrijeme : </strong><?php echo $rows['datetime']; ?></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <BR>

    <?php

    $tbl_name2="fanswer"; // Switch to table "forum_answer"
    $sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
    $result2=mysqli_query($connection, $sql2);
    while($rows=mysqli_fetch_array($result2)){
    ?>

    <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
      <tr>
        <td>
        <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
          <tr>
            <td bgcolor="#FFFFFF"><strong>ID</strong></td>
            <td bgcolor="#FFFFFF">:</td>
            <td bgcolor="#FFFFFF"><?php echo $rows['a_id']; ?></td>
          </tr>
          <tr>
            <td width="18%" bgcolor="#FFFFFF"><strong>Korisničko ime</strong></td>
            <td width="5%" bgcolor="#FFFFFF">:</td>
            <td width="77%" bgcolor="#FFFFFF"><?php echo $rows['a_name']; ?></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><strong>Email</strong></td>
            <td bgcolor="#FFFFFF">:</td>
            <td bgcolor="#FFFFFF"><?php echo $rows['a_email']; ?></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><strong>Odgovor</strong></td>
            <td bgcolor="#FFFFFF">:</td>
            <td bgcolor="#FFFFFF"><?php echo $rows['a_answer']; ?></td>
          </tr>
          <tr>
            <td bgcolor="#FFFFFF"><strong>Datum/Vrijeme</strong></td>
            <td bgcolor="#FFFFFF">:</td>
            <td bgcolor="#FFFFFF"><?php echo $rows['a_datetime']; ?></td>
          </tr>
        </table>
        </td>
      </tr>
    </table><br>

    <?php
    }

    $sql3="SELECT view FROM $tbl_name WHERE id='$id'";
    $result3=mysqli_query($connection, $sql3);
    $rows=mysqli_fetch_array($result3);
    $view=$rows['view'];

    // if have no counter value set counter = 1
    if(empty($view)){
    $view=1;
    $sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
    $result4=mysqli_query($connection, $sql4);
    }

    // count more value
    $addview=$view+1;
    $sql5="update $tbl_name set view='$addview' WHERE id='$id'";
    $result5=mysqli_query($connection, $sql5);
    mysqli_close($connection);
    ?>

    <BR>
    <table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
      <tr>
        <form name="form1" method="post" action="add_answer.php">
          <td>
            <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
              <tr>
                <td width="18%"><strong>Name</strong></td>
                <td width="3%">:</td>
                <td width="79%"><?php echo $_SESSION['username'] ?> </td>
              </tr>
              <tr>
                <td><strong>Email</strong></td>
                <td>:</td>
                <td><?php echo $_SESSION['email'] ?></td>
              </tr>
              <tr>
                <td valign="top"><strong>Odgovor</strong></td>
                <td valign="top">:</td>
                <td><textarea name="a_answer" cols="45" rows="3" id="a_answer"></textarea></td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
                <td><input type="submit" name="Submit" value="Pošalji"> <input type="reset" name="Submit2" value="Reset"></td>
              </tr>
            </table>
          </td>
        </form>
      </tr>
    </table>

  </body>
</html>
