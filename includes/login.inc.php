<?php
include '../database.php';
session_start();

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

$uid = $_POST['uid'];
$password = $_POST['pwd'];

$sql = "SELECT * FROM user WHERE uid='$uid' AND password='$password'";
$result = $conn->query($sql);

if (!$row = mysqli_fetch_assoc($result)) {
    echo "<script> window.alert('Incorrect Password'); </script>";
}
else {
    echo "You are logged in!";
    
    $_SESSION['id'] = $row['id'];
    
}

header('Location: ../index.php');