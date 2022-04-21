<?php
require '../../helpers/functions.php';
$id = $_GET['id'];



$BlockedOp = doQuery("insert into blocked_users (user_id) values ($id)");


if($BlockedOp){
    $_SESSION['Message'] = 'User Blocked';

    header("location: ../index.php");
}




