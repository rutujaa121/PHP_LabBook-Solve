<?php
    setcookie("username", "abc", time()+60*60);
?>
<html>
    <body>
        <?php
            if(isset($_COOKIE["username"]))
                {
                    echo "Cookie is set with value: ".$_COOKIE["username"];
                }
            else
                {
                    echo "Cookie is not set";
                }
        ?>
    </body>
</html>