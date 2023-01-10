<?php

    session_start();
    echo session_id();

    $pdo = require "connection.php";
    var_dump($pdo);


    $reg_user="";
    $reg_pass= "";
    $reg_email= "";
    $reg_confirm_password= "";
    $success = false;
    $password_conditions = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,}$/m';
        

    if(isset($_POST["Register_button"])){
        if(isset($_SESSION['user'])){

            header("location:C:\\xampp\\htdocs\\webproject2022\\HTML_CSS_JAVASCRIPT\\2.Main_Page\\Main_Page.php");
    
        }else
        {
            if($_POST['reg_user'] != "" || $_POST['reg_pass'] != "" || $_POST['reg_email'] != "" || $_POST['reg_conf_pass'] != ""){
                if($_POST['reg_pass']=$_POST['reg_conf_pass']){
                    if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $_POST['reg_pass'] )) {
                        
                        echo 'Password,user,email,confirmation password are correct. Wait to see if they are available!';
                        $sucess=true;

                        $reg_user =$_POST(['reg_user']);
                        $reg_pass =$_POST['reg_pass'];
                        $reg_email=$_POST(['reg_email'],FILTER_SANITIZE_EMAIL);
                        $reg_confirm_password=$_POST['reg_conf_pass'];
                        

                        $sql_check_user = 'SELECT COUNT(*) as total_1 FROM user WHERE :reg_user=user;';
                        $count_user= $pdo->prepare($sql_check_user);
                        $count_user->bindParam(':reg_user',$reg_user,PDO::PARAM_STR_CHAR);
                        $count_user->execute();
                        if ($count_user<>0){
                            
                            echo 'User is already taken';
                            $sucess=false;
                        }


                        $sql_check_pass = 'SELECT COUNT(*) as total_2 FROM user WHERE :reg_pass=pass';
                        $count_pass= $pdo->prepare($sql_check_pass);
                        $count_pass->bindParam(':reg_pass',$reg_pass,PDO::PARAM_STR_CHAR);
                        $count_pass->execute();
                        if ($count_pass<>0){

                            echo 'Password is already taken';
                            $sucess=false;
                        }


                        $sql_check_email = 'SELECT COUNT(*) as total_1 FROM user WHERE :reg_pass=pass';
                        $count_email= $pdo->prepare($sql_check_email);
                        $count_email->bindParam(':reg_email',$reg_pass,PDO::PARAM_STR_CHAR);
                        $count_email->execute();
                        if ($count_email<>0){
                            
                            echo 'Email is already taken';
                            $sucess=false;
                        }
                        
                        
                        if($sucess=true){
                            $sql_register= 'CALL User_creation(:reg_user, :reg_pass, :reg_email)';
                            $statement = $pdo->prepare($sql_register);
                            $statement->bindParam(':reg_user',$reg_user,PDO::PARAM_STR_CHAR);
                            $statement->bindParam(':reg_pass',$reg_pass,PDO::PARAM_STR_CHAR);
                            $statement->bindParam(':reg_email',$reg_pass,PDO::PARAM_STR_CHAR);
                            $statement->execute();
                            echo 'Account created sucesfully';
                        }
                    }
                    else{
                        echo 'Password must contain 1 Capital letter, 1 Number and any of those "@#$%" symbols and more than 8 Characters';
                    }
                }else{
                    echo 'Confirmation Password should match Password';
                }
            }else{
                echo 'Please provice your registration credentials';
            }
        }
    }
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