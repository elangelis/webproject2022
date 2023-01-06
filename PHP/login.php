<!DOCTYPE html>
<?php
    session_start();
?>
<html>
    <head>
        <meta hhtp-equiv="Content-Type" content="text/html; charset=iso-8859-7"/>
    </head>
    <body>
        <?php
            if(isset($_SESSION['session_username']))
            {
                echo "Έχεις κάνει ήδη login <b>" .$_SESSION[ 'session_username' ] . "</b>! Μία φορά αρκεί. ";
                echo "<br><a href='logoff.php'>Log off </a>";
            }
            else
            {
                if(strlen($_POST['username'])<6 && strlen($_POST['password']) < 6)
                {
                    echo "<h2>Δεν έχετε δώσει τα σωστά δεδομένα!</h2>";
                    echo "<br /><a href='login_form.php'><img src='meme.png'; /></a>";
                    
                }
                else
                {
                    $_SESSION['session_username'] = $_POST['username'];
                    echo "Welcome <b> ".$_SESSION['session_username'];
                    echo "<br><a href='logoff.php'>Log off</a>";
                }
            }
        ?>
    </body> 
</html>
