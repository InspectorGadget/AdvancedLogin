<?php

include 'header.php';

?>

<?php

$url = "http://localhost".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

    if(strpos($url, 'username=empty') != FALSE) {
        echo 'Do not leave your username empty!<br>';
    }
    
    if (strpos($url, 'username=same')!= FALSE) {
        echo 'Username exits!';
    }
        
/* @var $_SESSION type */
    if(isset($_SESSION['id'])) {
           
    } else {
           echo "<script> window.alert('You are not signed in!')</script>";
    }
        
?>

<?php

/* @var $_SESSION type */
    if(isset($_SESSION['id'])) {
        
           echo "<script> window.alert('You are logged in! Please logout to sign up again!') </script>";
           
    } else {
        
           echo "<form method='POST' action='includes/register.inc.php'>
            
                    <input type='text' name='first' placeholder='Enter your First Name!'><br>
                    <input type='text' name='last' placeholder='Enter your Last Name!'><br>
                    <input type='text' name='uid' placeholder='Enter your Username!'><br>
                    <input type='password' name='pwd' placeholder='Enter your Password!'><br>
                    <button type='submit'> SIGN UP </button>
            
                </form>";
    }

?>

<br><br><br>
        
    </body>
</html>