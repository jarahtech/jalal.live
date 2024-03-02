<?php
@session_start();
$session = $_GET['session'];
$refresh_hotspot_user_id = $_GET['refresh-hotspot-user'];
$username = $_GET['username'];
// get cookie id
$getcookie = $API->comm("/ip/hotspot/cookie/print", array(
    "?user" => "$username",
));
$ck = $getcookie[0]['.id'];
// remove cookie
$API->comm("/ip/hotspot/cookie/remove", array(
    ".id" => "$ck",
));
// get active id
$getactive = $API->comm("/ip/hotspot/active/print", array(
    "?user" => "$username",
));
$ac = $getactive[0]['.id'];
// remove user active
$API->comm("/ip/hotspot/active/remove", array(
    ".id" => "$ac",
));
$a=$API->comm("/ip/hotspot/user/set", array(
	".id" => "$refresh_hotspot_user_id",
	"mac-address" => "00:00:00:00:00:00"    
));
//reset
$API->comm("/ip/hotspot/user/set", array(
	".id" => "$refresh_hotspot_user_id", "limit-uptime" => "0"
));
$API->comm("/ip/hotspot/user/reset-counters", array(
	".id" => "$refresh_hotspot_user_id",
));

$getsname = $API->comm("/system/scheduler/print", array(
	"?name" => "$username",
));
$removesch = $getsname[0]['.id'];

$API->comm("/system/scheduler/remove", array(
	".id" => "$removesch",
));
echo "<script>alert('Voucher reset successfully!');window.location='./?hotspot=users&profile=all&session=" . $session . "'</script>";
//var_dump($a);
