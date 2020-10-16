<?php

$name = $_POST['name'];
$tel = $_PoST['tel'];
$email = $_POST['email'];

$name = htmlspecialchars($name);
$tel = htmlspecialchars($tel);
$email = htmlspecialchars($email);

$name = urldecode($name);
$tel = urldecode($tel);
$email = urldecode($email);

$name = trim($name);
$tel = trim($tel);
$email = trim($email);

echo $name;
echo "<br>";
echo $tel;
echo "<br>";
echo $email;

?>

