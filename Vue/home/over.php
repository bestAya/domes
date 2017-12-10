<?php
include 'db.php';
session_start();
$uid=$_SESSION['uid'];
$cname=$_SESSION['cname'];
//$sql="select cid from WHERE `cname` = '$cname'";
//$cid=$mysql->query($sql)->fetch_assoc()['cid'];
$sql1="select * from (select * from papre where `cname`= '$cname' ) as lb where pid not in (select distinct pid from over where user='$uid')";
$data=$mysql->query($sql1)->fetch_all(1);
echo json_encode($data);