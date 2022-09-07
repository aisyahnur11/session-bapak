<?php

session_start();

if(!isset($_SESSION["username"])){
    header("location:form.php");
}
?>
<marquee behavior="" direction=""><h1>SELAMAT DATANG DIBERANDA</h1></marquee>
<h1>halaman beranda</h1>
<button><a href="user.php">halaman user</a></button>
<button><a href="hapus.php">wes metu wae</a></button>