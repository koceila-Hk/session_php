<?php

var_dump($_FILES);
$avatar = $_FILES['avatar']["name"];
$type=$_FILES['avatar']["type"];
$avata=$avatar .'.' . $type;
echo $avata;