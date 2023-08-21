<?php
$con = mysqli_connect("localhost", "root", "", "kvc");
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
    session_start();
}
