<?php

$sucess_login=false;
$login_username = "";
$login_password = "";
$login_email = "";

    if(isset($_POST["Login Button"])){
        if(isset($_SESSION['login_user'])){

            header("location:C:\\xampp\\htdocs\\webproject2022\\HTML_CSS_JAVASCRIPT\\2.Main_Page\\Main_Page.php");
            echo 'You have already logged in, you will be redirected to Main Page automatically';

        }else
        {
            if($_POST['login_user'] != "" || $_POST['login_pass'] != "" || $_POST['login_email'] != ""){    

                
                $sql_login_check = 'SELECT COUNT(*) FROM user WHERE :login_user=user AND :login_pass=password AND :login_email=email;';
                $check_login = $pdo->prepare($sql_login_check);
                $check_login->bindParam(':login_user',$login_username,PDO::PARAM_STR_CHAR);
                $check_login->bindParam(':login_pass',$login_password,PDO::PARAM_STR_CHAR);
                $check_login->bindParam(':login_mail',$login_email,PDO::PARAM_STR_CHAR);
                $check_login->execute();

                if($check_login<>0){
                    try{
                        echo 'Log in was sucesful, you will be redirected to Main Page automatically!';

                        header("location:C:\\xampp\\htdocs\\webproject2022\\HTML_CSS_JAVASCRIPT\\2.Main_Page\\Main_Page.php");
                        session_start();
                        session_regenerate_id();
                        echo session_id();
                    }catch(ErrorException $e){
                        echo $e->getMessage();
                    }
                }else{
                    echo 'User,Pass,or Email are incorrect. Please Enter your correct Credentials';
                    echo 'Do you want to Register first?';
                }
            }
            else{
                echo 'Please provide your Log in credentials';
                echo "
                <script>alert('Please fill up the required field!')</script>
                <script>window.location = 'registration.php'</script>
                ";
            }
        }
    }
?>