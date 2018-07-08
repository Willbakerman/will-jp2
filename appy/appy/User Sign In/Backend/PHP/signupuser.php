<?php

session_start();

include 'signupuserDBH.php';

$firstname = $_POST ['firstname'];
$lastname = $_POST ['lastname'];
$emailaddress = $_POST ['emailaddress'];
$confirmemailaddress = $_POST ['confirmemailaddress'];

$sql = "INSERT INTO user_personal_info (firstname, lastname, emailaddress, confirmemailaddress)
        VALUES ('$firstname, $lastname, $emailaddress, $confirmemailaddress') ";

$result = mysqli_query($conn, $sql);
/*runs the query*/

header ("Location: index.php"); /*19:23 in: https://www.youtube.com/watch?v=e8TP2FERKls*/
