<?php

// Get the user id 
$user_id = $_REQUEST['golongan_id'];

// Database connection
include_once("./config/koneksi.php");

if ($user_id !== "") {

    // Get corresponding first name and 
    // last name for that user id    
    $query = mysqli_query($con, "SELECT tunjangan,gapok,potongan FROM golongan WHERE Golongan_ID='$user_id'");

    $row = mysqli_fetch_array($query);
    $potongan = $row['potongan'];
    // Get the first name
    $first_name = $row['tunjangan'];
    $gapok = $row['gapok'];
    // Get the first name
    $total = ($gapok + $first_name) - $potongan;
}

// Store it in a array
$result = array("$first_name", "$gapok", "$total", "$potongan");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
