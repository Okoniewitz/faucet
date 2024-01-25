<html>
    <head>
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/register.css">
        <title>Metaincome-Register</title>
        <script src="https://kit.fontawesome.com/fc2a39b32a.js" crossorigin="anonymous"></script>
    </head>
    <body>
    <?php include 'parts/header.php' ?>

        <div id="register">Register</div>
        <form method="post"><div id="buttons">
            Login:<br><input type="text" name="login"><br>
            Email:<br><input type="text" name="mail"><br>
            Password:<br><input type="password" name="password"><br>
            Confirm Password:<br><input type="password" name="password2"><br>
            <input style="margin: 0 5 0 25; width: 20; height: 20; font-size: 4;" type="checkbox" name="TOS" value="true"> I accept Terms of Service
            <input style="margin: 40 0 0 0; font-size: 30; height: 50;" type="submit" name="submit" value="Register">
        </form>
        <?php
            if(isset($_POST["submit"]))
            {
                $login = $_POST["login"];
                $mail = $_POST["mail"];
                $password = $_POST["password"];
                $password2 = $_POST["password2"];

                $AcceptedTOS = false;
                $SamePW = false;
                $checkPW = false;
                $LoginSet = false;
                $MailSet = false;

                //checkIfLoginSet
                if(strlen($login)>=3)
                {
                    $LoginSet = true;
                }
                //checkIfMailSet
                if(strlen($mail)>=3)
                {
                    $MailSet = true;
                }

                //compare PW
                if($password == $password2)
                {
                    $SamePW = true;
                }
                //checkPasswordRules
                if(strlen($password)>8)
                {
                    $checkPW = true;
                }
                //accepted TOS
                if(isset($_POST["TOS"])) $AcceptedTOS=true;
                //is in database?
                $avaible = true;
                $q="select login from users where login='$login'";
                $r = mysqli_query($c,$q);
                while($row = mysqli_fetch_array($r))
                {
                    $avaible=false;
                }
                $q="select email from users where email='$mail'";
                $r = mysqli_query($c,$q);
                while($row = mysqli_fetch_array($r))
                {
                    $avaible=false;
                }
                
                if($avaible && $SamePW && $AcceptedTOS && $checkPW && $LoginSet && $MailSet) 
                {
                    //add to DB
                    $password = sha1($password);
                    $q = "INSERT INTO `users`(`login`,`email`, `password`) VALUES ('$login','$mail','$password')";
                    echo "<center>Account created!</center>";
                    sleep(1);
                    header("Location: index.php");        
                    mysqli_query($c,$q);
                }
                else
                {
                    echo "<ul>";
                    if(!$avaible && $mail!="" && $login!="") echo "<li>Username or email already used</li>";
                    if(!$LoginSet) echo "<li>Username not set</li>";
                    if(!$MailSet) echo "<li>Email not set</li>";
                    if(!$SamePW) echo "<li>Password aren't matching</li>";
                    if(!$checkPW) echo "<li>Password doesn't meet the requirements</li>";
                    if(!$AcceptedTOS) echo "<li>TOS isn't accepted</li>";
                    echo "</ul>";
                }
            }
        ?></div>
        <?php include 'parts/footer.php' ?>
    </body>
</html>