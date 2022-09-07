<?php

session_start();
if(isset($_SESSION['username'])){
    echo "<h1>ini halaman user</h1>";
    echo $_SESSION["username"];
}