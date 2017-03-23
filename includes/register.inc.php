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

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

if(empty($uid)) {
    header('Location: ../signup.php?username=empty');
    exit();
} else {
    
    $sqll = "SELECT * FROM user WHERE uid=$uid";
    $re = $conn->query($sqll);
    $uid = mysqli_num_rows($re);
    
    if ($re > 0) {
        header('Location: ../signup.php?username=same');
        exit();
    }

    $sql = "INSERT INTO user (first, last, uid, password) VALUES ('$first', '$last', '$uid', '$pwd')";

    $result = $conn->query($sql);

    header("Location: ../index.php");

}