<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Example of a login in system, created by Alan E. Lopez">
    <title>Login</title>
   <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <header>
        <nav>
        
            <ul class="topnav">
            <li span="" style="float: left;">
                    <a href="http://localhost:8888/login_reg/index.php">
                    <img src="img/logo.png" alt="logo">
                    </a>
</li>
                <li><a href="">About</a></li>
                <li><a href="">Products</a></li>
                <li><a href="">Contacts</a></li>
            </ul>
            </nav>

            <div class="content container">
                
            <form action="includes/login.inc.php" method="post">
                <p>
                <input type="text" name="mailUserid" placeholder="Username/E-mail..."><br>
                </p>
                <p>
                <input type="password" name="pwd" placeholder=" Password...">
                </p>
                <p>
                <button type="submit" name="login-submit">Login</button>
                </p>
            </form>
            </p>

            <p>
            <a href="signup.php">Signup</a>

            <form action="includes/logout.inc.php" method="post"></form>
    
            <button type="submit" name="logout-submit">Logout</button>
            </form>
            </p>
        </div>
     
        </header>
