<a href="index.php">Home</a>
                        <?php
                    
                        if(isset($_SESSION['id'])) {
                            
                            echo "You are logged in!";
                            
                            echo "<form action='includes/logout.inc.php'>
                                <button type='submit'> LOGOUT </button>
                            </form>";
                            
                        } else {
                            
                            echo "<form method='POST' action='includes/login.inc.php'>
            
                                <input type='text' name='uid' placeholder='Enter your Username!'>
                                <input type='password' name='pwd' placeholder='Enter your Password!'>
                                <button type='submit'> LOGIN </button>
            
                            </form>";
                            
                        }
                    
                        ?>
                        <a href="signup.php">SIGNUP</a><?php

/* 
 * Copyright (C) 2017 RTG
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

