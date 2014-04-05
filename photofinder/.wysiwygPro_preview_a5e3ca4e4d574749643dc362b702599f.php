<?php
if ($_GET['randomId'] != "ygWenxGQBHemU7Ysx4WeiMVAgiWJ147IqherGcaxiDmNfaTuEcFRuZXuXMDWoOez") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
