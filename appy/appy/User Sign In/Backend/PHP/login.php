<?php

session_start();

include 'signupuserDBH.php';

$firstname = $_POST ['firstname'];
$lastname = $_POST ['lastname'];
$username = $_POST ['username'];
$psw= $_POST ['psw'];

$sql = "SELECT * FROM user_personal_info
        WHERE firstname = '$first' AND lastname = '$firstname' AND username = '$username' AND password = '$psw'";

$result = $conn->query($sql);
/*runs the query*/

if (!$row = mysql_fetch_assoc($result)) {
  echo "The details you entered for not match an account!";
}  else {
  $_SESSION['id'] = £row ['id'];

header("Location: index.php");

//this starts the session for the user for every single page the user goes on. This must be in the header tag
}
 ?>
