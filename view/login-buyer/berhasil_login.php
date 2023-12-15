<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login Successful</title>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-email">
            <?php echo "<h1>Welcome, " . $_SESSION['username'] ."!". "</h1>"; ?>
             
            <div class="input-group">
            <a href="logout.php" class="btn">Login</a>
            </div>
        </form>
    </div>
</body>
</html>