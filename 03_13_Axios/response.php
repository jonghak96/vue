<?php

// DB Connect //

$userId = $_POST['userId'];
$userPw = $_POST['userPw'];
$userEmail = $_POST['userEmail'];

// SQL //

$txt .= $userId;
$txt .= $userPw;
$txt .= $userEmail;

// echo $userId.$userPw.$userEmail;
echo $txt;

?>