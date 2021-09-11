<?php
if(isset($_POST['login'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user == "achmatim" && $pass == "123"){
        echo "<h2>login berhasil </h2>";
    }else {
        echo "<h2>login gagal </h2>";
    }
}
?>