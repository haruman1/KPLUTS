<?php

$host = 'localhost';
$user = 'root';
$password = '';
$namadb = 'minumansegar';
$con  =  mysqli_connect($host, $user, $password);
mysqli_select_db($con, $namadb);
if (mysqli_connect_errno()) {
    printf("Connect Failed : %s\n", mysqli_connect_error());
    exit();
}
