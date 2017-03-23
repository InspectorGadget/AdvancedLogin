<?php
    session_start();
?>

<!DOCTYPE html>
<!--
Copyright (C) 2017 RTG

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Login Form </title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <header>
        <a>
            RTGNetwork &copy;
        </a>
    </header>
    
    <body>
        
        <?php
                    
                if(isset($_SESSION['id'])) {
                            
                    echo "<form action='includes/logout.inc.php'>
                                <button type='submit'> LOGOUT </button>
                            </form>";
                            
                } else {
                            
                    echo "<form method='POST' action='includes/login.inc.php'>
            
                        <input type='text' name='uid' placeholder='Enter your Username!'><br>
                        <input type='password' name='pwd' placeholder='Enter your Password!'><br>
                        <button type='submit'> LOGIN </button>
            
                        </form>";
                            
                }
                
                    
        ?>
        
        <button>
        <a href="signup.php">Click me to sign up!</a>
        </button>
        
    </body>
    
    <footer>
        <?php
            echo "Data collected from: http://localhost".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        ?>
    </footer>
</html>