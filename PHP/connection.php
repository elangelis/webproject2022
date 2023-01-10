<?php

$db_host = 'webproject.localhost';
$db_user = 'ilias';
$db_password = "1234";
$db_name = "webproject2022";

try{
    $db = new PDO("mysql:host={$db_host};dbname={$db_name};",$db_user,$db_password);
    echo " connection echo ";
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e){
    echo $e->getMessage();
}


?>