<?php 

    include "service/database.php";
    session_start();

    $login_message = "";

    if (isset($_SESSION['is_login'])) {
        header("Location: dashboard.php");
    }

    if (isset($_POST['login'])) {
        $username = ($_POST['username']);
        $password = ($_POST['password']);

        $sql = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            $data = $result->fetch_assoc();
            $_SESSION['username'] = $data['username'];
            $_SESSION['is_login'] = true;
            // echo "Username " . $data['username']; 
            // echo "Password " . $data['password'];
            header ("Location:dashboard.php");
            
        }else{            
            $login_message = "Gagal Login";
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
        LOGIN
</h3>

    <i><?= $login_message ?></i>

    <form action="login.php" method="POST">   
        
        <input type="text" placeholder="username" name="username" />
        <input type="password" placeholder="password" name="password" />
        <button type="submit" name="login">submit</button>

    </form>



    <?php include "layout/footer.html" ?>


</body>
</html>