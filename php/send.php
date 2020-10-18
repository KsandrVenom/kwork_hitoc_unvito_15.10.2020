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



if (mail("hitosroot@gmail.com", "Заказ с сайта", "Имя ".$name. " , Телефон: " .$tel. " , E-mail: ".$email, "From: info@uviton.com \r\n"))
 {
    echo "<script>window.location.href='https://uviton.com/';</script>";
} else {
    echo "при отправке сообщения возникли ошибки";
}

?>

