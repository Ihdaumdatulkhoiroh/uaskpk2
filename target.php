<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anda</title>
    <link rel="stylesheet" href="tugas.css">
    <link rel="stylesheet" href="index.js">

    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap" rel="stylesheet">
</head>
<body>
        <?php
        include("koneksi.php");
                    $email="";
                    $password="";
                    $nama ="";
                    $alamat ="";
                    

                    if($_SERVER["REQUEST_METHOD"]=="POST")
                    {
                        $email= $_POST['email'];
                        $password= md5($_POST['password']);
                        $nama = $_POST['nama'];
                        $alamat = $_POST['alamat'];
                        
                    }
                    if ($email!="" || $password!="" || $nama!="" || $alamat!="" ){
                        $sql = "INSERT INTO hasil(email,password,nama,alamat)
                        values ('$email','$password','$nama', '$alamat')";
                        if($conn->query($sql)===TRUE){
                            echo "success";
                        }else{
                            echo "error".$sql."<br>".$conn->error;
                        }
                    }
                    ?>
                <div class="regform1"><h1>DATA ANDA</h1></div>
                <div class="satuu">
                <table border=1>
                        <thead>
                            <tr>
                                <th>Nama Pengguna</th>
                                <th>Kata Sandi</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <?php echo"
                                <td>$email</td>
                                <td>$password</td>
                                <td>$nama</td>
                                <td>$alamat</td>
                                "?>
                                <!-- <td></td> -->
                            </tr>
                        </tbody>
                    </table>
                    <h3 class="btn1" align="center"><a href="index.php">SELESAI <br> (Silakan Masuk Kembali)</a></h3>
                </div>
</body>
</html>