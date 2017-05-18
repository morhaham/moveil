<?php

$name = $_POST['fullname'];
$email = $_POST['email'];
$content = $_POST['content'];
echo "Thank you ".$name."!";
header('refresh: 5; url= ./contact-us.html');
