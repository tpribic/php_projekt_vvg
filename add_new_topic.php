<?php include('connect.php') ?>
<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="tpribic"; // Database name
$tbl_name="fquestions"; // Table name

// Connect to server and select database.
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

// get data that sent from form
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_SESSION["username"];
$email=$_SESSION['email'];

$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysqli_query($connection ,$sql);

if($result){
echo "Successful<BR>";
echo "<a href=main_forum.php>View your topic</a>";

header('Location: ./main_forum.php');

}
else {
echo "ERROR";
}
mysqli_close($connection);
?>
