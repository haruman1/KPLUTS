<?php

include_once('./koneksi.php');
if (isset($_POST['submit'])) {
    $NIK = mysqli_real_escape_string($con, $_POST['nik']);
    $nama = mysqli_real_escape_string($con, $_POST['nama']);
    $jk =  $_POST['jk'];
    $gaji =  mysqli_real_escape_string($con, $_POST['gapok']);
    $tunjangan =  $_POST['tunjangan'];
    $potongan = mysqli_real_escape_string($con, $_POST['potongan']);
    $golongan = mysqli_real_escape_string($con, $_POST['golbtn']);
    $total = mysqli_real_escape_string($con, $_POST['total']);

    $query =  "INSERT INTO `karyawan` (`Nik`, `Nama`, `JenisKelamin`, `Golongan`, `Gapok`, `tunjangan`, `potongan`, `total`) VALUES ('$NIK', '$nama', '$jk', '$golongan', '$gaji', '$tunjangan', '$potongan', '$total');";
    $query .= "INSERT INTO gajikaryawan(nik,golongan,gajiditerima) values ('$NIK','$golongan','$total')";
    if (mysqli_multi_query($con, $query)) {

        echo ("<script language='javascript'>
            window.alert('Succesfully Updated');
            window.location.href='../index.php';
             </script>");
    } else {
        echo "Data Gagal Disimpan karena = " . "<br> " . $query  . mysqli_error($con);
    }
}
