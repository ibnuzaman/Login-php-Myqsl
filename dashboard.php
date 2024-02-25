<?php 

session_start();
if (isset($_POST["logout"])) {
        session_unset();
        session_destroy();
        header("Location: index.php");
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
    
        
<?php  include "layout/header.html"; ?>
<main>Selamat Datang! <?= $_SESSION['username'] ?> 
<?php  include "layout/footer.html"; ?>
    
    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout">Logout</button>
    </form>

    
</body>
</html>