    <head>
        <script src="https://kit.fontawesome.com/fc2a39b32a.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/x-icon" href="img/logoM.png">
        <meta charset="UTF-8">
        <title>Metaincome</title>
        <link rel="stylesheet" href="styles/style.css">
        <link rel="stylesheet" href="styles/anims.css">
    </head>
    <body onscroll="scrollFunction()">
        <?php include 'parts/header.php' ?>
        <div class="main" style="padding-bottom: 0.5%" id="main">
            <br>
            <div id="texts">
                <div id="text1">Earn Free</div>
                <div id="text2">Cryptocurrencies</div>
                <div id="text3">Would you like to receive cryptocurrencies for free? Start claiming them today.</div>
            </div>
            <div id="blocks">
                <a href="#earning"><div id="block"><i style="font-size: 4vw;" class="fa-solid fa-faucet-drip"></i><br><br>Ways of earning</div></a>
                <a href="#cryptos"><div id="block"><i style="font-size: 4vw;" class="fa-brands fa-bitcoin"></i><br><br>Cryptocurrencies</div></a>
                <a href="#features"><div id="block"><i style="font-size: 4vw;" class="fa-solid fa-fingerprint"></i><br><br>Unique features</div></a>
                <a href="#stats"><div id="block"><i style="font-size: 4vw;" class="fa-solid fa-chart-column"></i><br><br>Statistics</div></a>
            </div>
            <div id="anims">
                <img id="BTCAnim1" id="BTCAnim" src="img/btc.png">
                <img id="BTCAnim1" id="BTCAnim" style="animation-delay: 1700ms; left: 110px;" src="img/btc.png">
                <img id="BTCAnim2" id="BTCAnim" src="img/btc.png" style="left: 240;">
                <img id="BTCAnim2" id="BTCAnim" style="animation-delay: 2000ms; left: 220px;" src="img/btc.png">
                <img id="BTCAnim3" id="BTCAnim" src="img/btc.png">
                <img id="BTCAnim3" id="BTCAnim" style="animation-delay: 2400ms; left: 50px; animation-duration: 4s;" src="img/btc.png">
                <img id="BTCAnim4" id="BTCAnim" src="img/btc.png">           
                <img id="BTCAnim4" id="BTCAnim" style="animation-delay: 1900ms;left: 60px;" src="img/btc.png">     
            </div>
        </div>
        <div class="main grD" style="height: 80vh; padding-bottom: 14vh;" id="earning">
        <div id="TitleTiles">
        </div>    
        <div id="tiles">
                <div style="margin-left: -30;" id="tile">
                    <i class="fa-solid fa-faucet"></i><br>Faucet
                    <p style="font-size: 1vw;">Earn your cryptocurrencies by clicking button every 20 minutes</p>
                </div>
                <div style="margin-left: 20;" id="tile">
                    <i class="fa-solid fa-list-check"></i><br>Tasks
                    <p style="font-size: 1vw;">Complete easy tasks for a reward</p>
                </div>
                <div style="margin-left: 20;" id="tile">
                    <i class="fa-solid fa-rectangle-ad"></i><br>Video
                    <p style="font-size: 1vw;">Watch short videos for crypto</p>
                </div>
            </div>
            <div id="tiles">
                <div style="margin-left: -30;" id="tile">
                    <i class="fa-solid fa-faucet"></i><br>TBA
                    <p style="font-size: 1vw;">Coming soon</p>
                </div>
                <div style="margin-left: 20;" id="tile">
                <i class="fa-solid fa-faucet"></i><br>TBA
                    <p style="font-size: 1vw;">Coming soon</p>
                </div>
                <div style="margin-left: 20;" id="tile">
                <i class="fa-solid fa-faucet"></i><br>TBA
                    <p style="font-size: 1vw;">Coming soon</p>
                </div>
            </div>
        </div>
        <div class="main grU" id="cryptos" style="margin-top: -30vh;">
            <div id="cryptoBar"></div>
        </div>
        <div class="main grD" id="features">
            <div id="featuresPic"></div>
        </div>
        <div id="stats">
            <div class="main grU" id="statsIn">
                <?php 
                $q1 = "select count(id) from tasks";
                $q2 = "select count(id) from users";
                $q3 = "select count(id) from transactions where value<0";
                $r1= mysqli_query($c,$q1);
                $r2= mysqli_query($c,$q2);
                $r3= mysqli_query($c,$q3);
                $n1="";
                $n2="";
                $n3="";
                while($row = mysqli_fetch_array($r1))
                {
                    $n1=$row[0];
                }
                while($row = mysqli_fetch_array($r2))
                {
                    $n2=$row[0];
                }
                while($row = mysqli_fetch_array($r3))
                {
                    $n3=$row[0];
                }
                ?>
                <div class="stat tasks">
                    <i class="fa-solid fa-list-check"></i> 
                    <?php echo $n1;?>
                </div>
                <div class="stat users">
                    <i class="fa-solid fa-users"></i>
                    <?php echo $n2;?>
                </div>
                <div class="stat withdraws">
                <i class="fa-solid fa-money-bills"></i>
                <?php echo $n3;?>
                </div>
            </div>
        </div>
        <?php include 'parts/footer.php' ?>
    </body>
</html>