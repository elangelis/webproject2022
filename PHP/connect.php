<?php
//database connection using function
require 'config.php';

$dsn ="mysql:host=$db_host;dbname=$db_name;charset=UTF8";


function connect($db_host,$db_name,$db_user,$db_password)
{
    $dsn ="mysql:host=$db_host;dbname=$db_name;charset=UTF8";
    try{
        $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    
        $conn = new PDO($dsn,$db_user,$db_password,$options);
        if ($conn){
            echo "Connected to the $db_name database succesfully!!";
        }
    }
    catch(PDOEXCEPTION $e){
        echo $e->getMessage();
    }
}

return connect($db_host,$db_name,$db_user,$db_password);

?>