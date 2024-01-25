<div id="footer">
</div>
<?php
        $ad = $_SERVER['REMOTE_ADDR'];
        $page = $_SERVER['PHP_SELF'];
        $n = date('Y-m-d H:i:s');
        $q="INSERT INTO `visitors` VALUES (null,'$n','$ad','$page')";
        mysqli_query($c,$q);
        mysqli_close($c);
?>