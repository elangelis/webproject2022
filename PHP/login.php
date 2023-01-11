<?php

    echo session_id();
    require_once "connection.php";


    $sucess_login=false;
    $login_username = "";
    $login_password = "";
    $login_email = "";

    if(isset($_POST["Log_In_button"])){
        if(isset($_SESSION['login_user'])){

            header('location:/webproject2022/PHP/Main_Page.php');

            echo 'You have already Logged in, you will be redirected to Main Page automatically';
        }
        else{
            if($_POST['login_user'] != "" || $_POST['login_pass'] != "" || $_POST['login_email'] != ""){    
                

                $login_username=$_POST['login_user'];
                $login_password=$_POST['login_pass'];
                $login_email=$_POST['login_email'];

                
                $sql_login_check='SELECT COUNT(id) FROM user WHERE username=:login_user AND password=:login_pass AND email=:login_email';
                $check_login= $pdo->prepare($sql_login_check);
                $check_login->execute(array(':login_user'=>$login_username,':login_pass'=>$login_password,':login_email'=>$login_email));
                
                $user_exists= $check_login->fetchColumn();
                
                if( $user_exists==1 ){
                    try{
                        echo 'Log in was sucesful, you will be redirected to Main Page automatically!';
                        session_regenerate_id();
                        echo session_id();
                        header('location:/webproject2022/HTML_CSS_JAVASCRIPT/2.Main_Page/Main_Page.php');
                    }
                    catch(ErrorException $e){
                        echo $e->getMessage();
                    }
                }
                else{

                    echo $user_exists; 
                    
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