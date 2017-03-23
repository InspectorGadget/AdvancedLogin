<?php

include 'header.php';

?>

<body>

<?php
        
/* @var $_SESSION type */
    if(isset($_SESSION['id'])) {
           echo "<script> window.alert('Welcome!'); </script>";
    } else {
          
    }
        
?>
        
    </body>
</html>
