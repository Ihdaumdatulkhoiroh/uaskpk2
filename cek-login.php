<?php
    include("koneksi.php");
    $email= "";
    $password= "";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email= $_POST['email'];
    $password= md5($_POST['password']);

    if(!empty($email) && !empty($password)){
        $sql = "SELECT * FROM hasil WHERE (email='$email' AND password='$password')";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                session_start();
                $_SESSION['email']=$row['email'];
                $_SESSION['email']=$row['email'];
                $_SESSION['nama']=$row['nama'];
                header('Location: masuk.php');
            }
        } else {
            header('Location: index.php');
            echo "Nama Akun atau Kata Sandi Salah";
        }  
    }
}
