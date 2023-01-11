<!DOCTYPE html>
<html>

<?php
require 'connection.php';


$sql_login_check = "SELECT * FROM user;";
                $check_login = $pdo->prepare($sql_login_check);
                $check_login->execute();
                echo $check_login;

//header("location:C:\\xampp\\htdocs\\webproject2022\\HTML_CSS_JAVASCRIPT\\2.Main_Page\\Main_Page.php");

?>

</html>