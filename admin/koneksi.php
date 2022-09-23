<?php
    $koneksi = mysqli_connect("localhost","root","","baby_needs");

    if(mysqli_connect_errno()){
    	echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>