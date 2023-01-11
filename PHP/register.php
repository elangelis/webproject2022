<?php

    echo session_id();
    require_once "connection.php";


    $reg_user="";
    $reg_pass= "";
    $reg_email= "";
    $reg_confirm_password= "";
    $success_register = false;
    $password_conditions = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.* )(?=.*[^a-zA-Z0-9]).{8,}$/m';
        

    if(isset($_POST["Register_button"])){
        if(isset($_SESSION['user'])){

            header('location:/webproject2022/PHP/Main_Page.php');

        }else
        {
            if($_POST['reg_user'] != "" || $_POST['reg_pass'] != "" || $_POST['reg_email'] != "" || $_POST['reg_conf_pass'] != ""){

                $reg_user = $_POST['reg_user'];
                $reg_pass = $_POST['reg_pass'];
                $reg_email = $_POST['reg_email'];
                $reg_confirm_password = $_POST['reg_conf_pass'];

                if($reg_pass == $reg_pass){

                    if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,}$/', $reg_pass)) {
                        
                        echo 'Password,user,email,confirmation password are correct. Wait to see if they are available!';


                        $success_register=true;
                        $user_taken=false;
                        $password_taken=false;
                        $email_taken=false;


                        $sql_check_user = 'SELECT COUNT(id) FROM user WHERE username=:reg_user';
                        $count_user= $pdo->prepare($sql_check_user);
                        $count_user->bindParam(':reg_user',$reg_user,PDO::PARAM_STR_CHAR);
                        $count_user->execute();

                        $user_exists= $count_user->fetchColumn();
                        if ($user_exists<>0){
                            
                            echo 'User is already taken';
                            $user_taken=true;
                            $success_register=false;
                        }


                        $sql_check_pass = 'SELECT COUNT(id) FROM user WHERE password=:reg_pass';
                        $count_pass= $pdo->prepare($sql_check_pass);
                        $count_pass->bindParam(':reg_pass',$reg_pass,PDO::PARAM_STR_CHAR);
                        $count_pass->execute();
                        $pass_exists= $count_pass->fetchColumn();
                        if ($pass_exists<>0){

                            echo 'Password is already taken';
                            $password_taken=true;
                            $success_register=false;
                        }


                        $sql_check_email = 'SELECT COUNT(*) as total_1 FROM user WHERE email=:reg_email';
                        $count_email= $pdo->prepare($sql_check_email);
                        $count_email->bindParam(':reg_email',$reg_pass,PDO::PARAM_STR_CHAR);
                        $count_email->execute();
                        $email_exists= $count_email->fetchColumn();
                        if ($email_exists<>0){

                            $email_taken=true;
                            echo 'Email is already taken';
                            $success_register=false;
                        }
                        

                        if($success_register==true){
                            try{
                                $sql_register= 'CALL User_creation(:reg_user, :reg_pass, :reg_email)';
                                $statement = $pdo->prepare($sql_register);
                                $statement->bindParam(':reg_user',$reg_user,PDO::PARAM_STR_CHAR);
                                $statement->bindParam(':reg_pass',$reg_pass,PDO::PARAM_STR_CHAR);
                                $statement->bindParam(':reg_email',$reg_pass,PDO::PARAM_STR_CHAR);
                                $statement->execute();

                                echo 'Account created sucesfully, you will be redirected to Main Page automatically';
                                session_regenerate_id();
                                header('location:/webproject2022/PHP/Main_Page.php');
                            }
                            catch(PDOException $e){
                                echo $e->getMessage();
                                
                            }
                            $_SESSION['message']=array("text"=>"User successfully created.","alert"=>"info");
                        
                        }elseif($success_register==false){
                            if ($user_taken==true){
                                echo'User is already taken';
                            }
                            if ($password_taken==true){
                                echo'Passowrd is already taken';    
                            }
                            if ($email_taken==true){
                                echo'Email is already taken';    
                            }
                        }
                        
                    }else{
                        echo 'Password must contain 1 Capital letter, 1 Number and any of those "  @ # $ %  " symbols and more than 8 Characters';
                    }
                }
                else{
                    echo 'Confirmation Password should match Password';
                }
            }
            else{
                echo 'Please provide your Registration credentials';
                echo "
                <script>alert('Please fill up the required field!')</script>
                <script>window.location = 'registration.php'</script>
                ";
            }
        }
    }

?>
