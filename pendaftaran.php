<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="tugas.css">
    <link rel="stylesheet" href="index.js">
    <link rel="stylesheet" href="tambahan.css">

    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap" rel="stylesheet">
</head>
    <title></title>
<body>
    <div id="regform"></div>
    <script>
        var i=0, text;
        text = 'FORMULIR RESELLER JASTIP MALANG';
        
        function typing()
        {
            if(i < text.length){
                document.getElementById('regform').innerHTML += text.charAt(i);
                i++;
                setTimeout(typing, 50)
            }
        }
        typing();
    </script>

    <div class="satu">
        <form action="target.php" method="POST" enctype="multipart/form-data">
        <div class="m">
            <h2 class="judul">Username</h2>
            <label for="email" class="labelpertama"> Masukkan Email</label><br>
            <input class="input" type="text" name="email" id="email" required>
        </div>
        <div class="m">
            <h2 class="judul">Nama</h2>
            <label for="nama" class="labelpertama"> Masukkan Nama Anda</label><br>
            <input class="input" type="text" name="nama" id="nama" required>
        </div>
        <div class="m">
            <h2 class="judul">Password</h2>
            <label for="password" class="labelpertama"> Masukkan Kata Sandi</label><br>
            <input class="input" type="password" name="password" id="password" required>
        </div>
        
        <div class="m">
            <h2 class="judul">Alamat</h2>
            <label for="alamat" class="labelpertama"> Masukan Alamat Anda</label><br>
            <input class="input" type="text" name="alamat" id="alamat" required>
        </div>

        <br>
        <button type="submit" class="btn1">Kumpulkan</button>
        <button type="reset" class="btn1">Bersihkan</button>
        </form> 
        <br> 
    </div>

    
</body>
</html>