<?php
require_once '../inc/config.php';

$username = $_GET['username'];

$query = "DELETE FROM user WHERE username='$username'";
$result = mysql_query($query) or die(mysql_error());

mysql_close();

header('Location:user_form_view.php');


?>