<?php

    session_start();

    $pdo = require "connection.php";
    var_dump($pdo);


    $reg_user="";
    $reg_pass= "";
    $reg_email= "";
    $reg_confirm_password= "";
    $pass_conditions = false;

    if(isset($_SESSION['user'])){

        header("location:C:\\xampp\\htdocs\\webproject2022\\HTML_CSS_JAVASCRIPT\\2.Main_Page\\Main_Page.php");

    }else
    {
        while ($pass_conditions = false) {
        //Check if empty xaraktires
            //CHECK IF SWSTOI XARAKTIRES{
                // AN EINAI SWSTOI CHECK IF IT ALREADY EXISTS IN ANOTHER INSERT{
                    //IF SWSTOI XARAKTIRES KAI SELECT DOESNT EXIST THEN pass_conditions = true;{
                            //KANE INSERT STIN BASI 
        //              }
        //          }    
        //      }

        }

    }
    if(isset($_REQUEST["Register_button"])){
        
        echo "<pre>";
            print_r($_REQUEST);
        echo "<pre>";

        $reg_user =$_REQUEST(['reg_user']);
        $reg_pass =$_REQUEST['reg_pass'];
        $reg_email=$_REQUEST(['reg_email'],FILTER_SANITIZE_EMAIL);
        $reg_confirm_password=$_REQUEST['reg_conf_pass'];

        
        $sql_register= 'CALL User_creation(:reg_user, :reg_pass, :reg_email)';
        $statement = $pdo->prepare($sql_register);
        $statement->bindParam(':reg_user',$reg_user,PDO::PARAM_STR_CHAR);
        $statement->bindParam(':reg_pass',$reg_pass,PDO::PARAM_STR_CHAR);
        $statement->bindParam(':reg_email',$reg_pass,PDO::PARAM_STR_CHAR);
        $statement->execute();
    
    
    
    }
    echo "asdiajda";
var_dump($pdo);
?>

<?php
	session_start();
	require_once 'conn.php';
 
	if(ISSET($_POST['register'])){
		if($_POST['firstname'] != "" || $_POST['username'] != "" || $_POST['password'] != ""){
			try{
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$username = $_POST['username'];
				// md5 encrypted
				// $password = md5($_POST['password']);
				$password = $_POST['password'];
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO `member` VALUES ('', '$firstname', '$lastname', '$username', '$password')";
				$conn->exec($sql);
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			$_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
			$conn = null;
			header('location:index.php');
		}else{
			echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = 'registration.php'</script>
			";
		}
	}
?>
<html>

</html>