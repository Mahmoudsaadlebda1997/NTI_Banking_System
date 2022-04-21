<?php
require '../../helpers/functions.php';
$id = $_GET['id'];



$BlockedOp = doQuery("delete from blocked_users where user_id = $id");


if($BlockedOp){
    $_SESSION['Message'] = 'User UnBlocked';

    header("location: ../index.php");
}


