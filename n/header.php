<div class="header">
            <?php
            $str= $_SERVER['REQUEST_URI'];
            if(strpos($str, "index.php") !== false)
                echo"<a href=\"#main\"><div class=\"logo\"></div></a>";
            else 
                echo "<a href=\"index.php\"><div class=\"logo\"></div></a>";
            ?>
            <div class="buttonsHeader">
                <?php
                if(isset($_COOKIE['login']))
                {
                    $login= $_COOKIE['login'];
                    echo "
                    <a href=\"main.php\"><div class=\"buttonHeader\">$login</div></a>
                    <a href=\"logout.php\"><div class=\"buttonHeader\">Logout &nbsp&nbsp<i class=\"fa-solid fa-arrow-right-from-bracket\"></i></div></a>
                    ";
                } else
                echo "
                    <a href=\"login.php\"><div class=\"buttonHeader\">Login &nbsp&nbsp<i class=\"fa-solid fa-arrow-right-to-bracket\"></i></div></a>
                    <a href=\"register.php\"><div class=\"buttonHeader\">Register &nbsp&nbsp <i class=\"fa-solid fa-user-plus\"></i></div></a>
                    "; ?>
                </div></a>
            </div>
</div>

<script>
    function scrollFunction() {
        var scrollTop = window.scrollY;
        var Height= window.innerHeight;
        if(scrollTop>5/100*Height)
        {
            document.getElementsByClassName("header")[0].classList.add("headerActive");
            document.getElementsByClassName("buttonsHeader")[0].classList.add("buttonsHeaderActive");
            document.getElementsByClassName("buttonHeader")[0].classList.add("buttonHeaderActive");
            document.getElementsByClassName("buttonHeader")[1].classList.add("buttonHeaderActive");
            document.getElementsByClassName("logo")[0].classList.add("logoActive");

        } else {
            document.getElementsByClassName("header")[0].classList.remove("headerActive");
            document.getElementsByClassName("buttonsHeader")[0].classList.remove("buttonsHeaderActive");
            document.getElementsByClassName("buttonHeaderActive")[0].classList.remove("buttonHeaderActive");
            document.getElementsByClassName("buttonHeaderActive")[0].classList.remove("buttonHeaderActive");
            document.getElementsByClassName("logo")[0].classList.remove("logoActive");
        }
    }
</script>