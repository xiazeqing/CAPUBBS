<?php
include("../lib/mainfunc.php");
$sex=@$_POST['sex'];
$ip=@$_SERVER['REMOTE_ADDR'];
$qq=@$_POST['qq'];
$icon=@$_POST['icon'];
$mail=@$_POST['email'];
$intro=@$_POST['intro'];
$hobby=@$_POST['hobby'];
$place=@$_POST['place'];
$sig1=@$_POST['sig1'];
$sig2=@$_POST['sig2'];
$sig3=@$_POST['sig3'];
$result=mainfunc(array(
"ask"=>"edituser",
"sex"=>$sex,
"ip"=>$ip,
"qq"=>$qq,
"sig1"=>$sig1,
"sig2"=>$sig2,
"sig3"=>$sig3,
"icon"=>$icon,
"mail"=>$mail,
"intro"=>$intro,
"hobby"=>$hobby,
"place"=>$place
));

$result=$result[0];
#echo(json_encode($result));
if($result['code']=="0"){
	header("Location: ../index");
	echo("Succeed.");
}else{
	echo($result['msg']);
}
?>
