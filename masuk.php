<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JASTIP</title>
    <link rel="stylesheet" href="tugas.css">
    <link rel="stylesheet" href="tambahan.css">

    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Caption&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="atas">
            <?php
                session_start();
            ?>
            <?php
                if(!empty($_SESSION['email'])){
                    echo '<h3 class="btn3" align="right"><a href="logout.php">KELUAR</a></h3>';
                } else {
                    echo '<h3 class="btn3" align="right"><a href="index.php">MASUK</a></h3>';
                }
            ?>
        </div><br><br><br>
        <div id="regform"></div>
    <script>
        var i=0, text;
        text = 'WELCOME TO JASTIP MALANG';
        
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
</body>
</html>