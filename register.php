<?php 

    include "service/database.php";

    if (isset($_POST["register"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";
    
        if ($db->query($sql)) {
            echo "masuk";        
        }else{

            echo "Error: " . $sql . "<br>" . $db->error;
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include "layout/header.html" ?>
    <h3>
        DAFTAR AKUN
</h3>

    <form action="register.php" method="POST">   
        
        <input type="text" placeholder="username" name="username" />
        <input type="password" placeholder="password" name="password" />
        <button type="submit" name="register">Daftar Akun </button>

    </form>



    <?php include "layout/footer.html" ?>


</body>
</html>