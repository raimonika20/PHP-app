<?php

$conn = mysqli_connect('localhost', 'root', '', 'property_app_db', '3307');
if (!$conn) {
    echo 'connection error: ' . mysqli_connect_error();
}
