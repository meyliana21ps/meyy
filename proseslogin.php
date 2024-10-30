<?php

// include "koneksi.php";
$host = "localhost"; 
$user = "username";  
$password = "password"; 
$dbname = "dbmey"; 


$koneksi =mysqli_connect("localhost","root","","dbmey");
//Mendapatkan Data
$gmail = $_POST["gmail"];
$password = $_POST["password"];


//Cari data berdasarkan username
$query = mysqli_query($koneksi, "select * from tbuser where gmail='$gmail'");

$jumlah_data = mysqli_num_rows($query);

// kalau datanya ada
if($jumlah_data> 0 ){
    $data = mysqli_fetch_array($query);
    //kalau password yg ada di table sama dengan password yang diinput
    //if ($data['password'])
    if(password_verify($password, $data['password'])){
        //Bisa Login 
        session_start();
        $_SESSION['id']  = $data['id'];
        $_SESSION['gmail']  = $data['gmail'];
        $_SESSION['role']  = $data['role'];

        if($data['role']=="admin"){
            
            //arahkan ke halaman admin
        }
        header("Location: index.php");
    }else{
        header("Location: login.php");
    }
}else{
    //kalau datanya tidak ada
    echo "username salah";
    // header("Location: login.php");
}
?>

