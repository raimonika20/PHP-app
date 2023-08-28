<?php

$conn = mysqli_connect('localhost', 'admin', '5AzmLmnls9Eh', 'property_app_db');
if (!$conn) {
    echo 'connection error: ' . mysqli_connect_error();
}
