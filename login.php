<html>
    <head>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/register.css">
    <title>Metaincome-Login</title>
    <script src="https://kit.fontawesome.com/fc2a39b32a.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php include 'parts/header.php' ?>
    <div id="register">Login</div>
        <form method="post"><div id="buttons">
            Login or Email:<br><input type="text" name="login"><br>
            Password:<br><input type="password" name="password">
            <input style="margin: 40 0 0 0; font-size: 30; height: 50;" type="submit" name="submit" value="Login">
        </form>
        <?php
        $logged="0";
            if(isset($_POST["submit"]))
            {
                $login = $_POST["login"];
                $password = sha1($_POST["password"]);

                $q = "select password from users where login='$login' or email='$login'";
                $r = mysqli_query($c,$q);
                while($row = mysqli_fetch_array($r))
                {
                    $p2=$row[0];
                    if($row[0] == $password) $logged="1"; else echo "Account doesn't exist!";

                }
            }
            if($logged!="0")
            { 
                echo $login;
                echo "
            zalogowane
            ";
            setcookie("login",$login, time()+3600);
            sleep(1);
            header("Location: index.php");    
            }
        ?></div>
        <?php include 'parts/footer.php' ?>
    </body>
</html>