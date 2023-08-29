<?php

$conn = mysqli_connect('sql203.infinityfree.com', 'if0_34925416', 'xr4kp6yh', 'if0_34925416_Propertydb', '3306');
if (!$conn) {
    echo 'connection error: ' . mysqli_connect_error();

}