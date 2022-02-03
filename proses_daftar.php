<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="wiwik_pbd";

    $conn = new mysqli($servername,$username,$password,$database);
    
    if($conn->connect_error){
        die("Koneksi Gagal!" . $conn->connect_error);
    }

    $nama_lengkap = $_POST['nama_lengkap'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $sql = "insert into member (nama_lengkap, tgl_lahir, jenis_kelamin) values 
    ('$nama_lengkap','$tgl_lahir','$jenis_kelamin')";

    if ($conn->query($sql) === TRUE) {
        echo "Alhamdulilah, pendaftaran berhasil !";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
?>