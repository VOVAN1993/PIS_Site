<?php
if ($_POST["name"] == "vova" and $_POST["pass"]== "vova"){
    $_SESSION['isadmin'] = true;
    echo "1";
}else{
    $_SESSION['isadmin'] = false;
    echo "2";
}
header ('Location: e2.php');
die();
?>