<?php 

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SELAMAT DATANG KEMBALI <?= $_SESSION['username']  ?>
        
    <?php 
        // include "layout/header.html";
        
        include "layout/footer.html";
    
    ?>

    </h1>
</body>
</html>