<?php
    session_start();
    include 'includes/db.php';

    if($_POST){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['user'] = $username;
            header("Location: index.php");
        }else{
            echo "<script>alert('Invalid Login')</script>";
        }
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post"> 
        <h2>Login</h2>
        <label>Username: <input type="text" name="username"></label>
        <br>
        <label>Password: <input type="password" name="password"></label>
        <br>
        <input type="submit" value="Login">
    </form>
</body>
</html>