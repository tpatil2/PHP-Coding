<?php
    session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Register and login </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>
    <br><br>
<form action="login.php" method="post">
    <input type="text" name="uid" placeholder="UserID"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button>Login</button>
</form>
    
    <br>
<?php
    
    if(isset($_SESSION['id'])){
        echo $_SESSION['id'];
        echo "Success";

    }else{
        echo "Not logged in yet";
    }
    
?>
    <br><br><br>

    
<form action="signup.php" method="post">
    <input type="text" name="first" placeholder="Firstname"><br>
    <input type="text" name="last" placeholder="Lastname"><br>
    <input type="text" name="uid" placeholder="UserID"><br>
    <input type="password" name="pwd" placeholder="Password"><br>
    <button>Sign Up</button>
</form>
    
    <br><br><br>

<form action="logout.php" method="post">
    <button>Logout</button>
</form>
    
</body> 

</html>