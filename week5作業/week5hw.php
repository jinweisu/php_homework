<?php


	$input=@$_GET["input"];


	for($i=1;$i<=12;$i++){
		if($input==$i){
			echo '<img src="'.$i.'.jpg">'."<br/>";
		}
	}

	date_default_timezone_set("Asia/Taipei");
	echo "<br/>";

	$now=@mktime();
	$nowdate=getdate($now);

	echo "今天是".$nowdate["year"]."年".$nowdate["month"].$nowdate["mday"]."日";
	echo $nowdate["hours"]."時".$nowdate["minutes"]."分".$nowdate["seconds"]."秒"."，" .$nowdate["weekday"];
	echo "<br/>";
	echo "<br/>";


	$mysettime= date("2017-12-31 23:59:00");
	$nowtime = date("Y-m-d H:i:s");


	echo "現在時間" .$nowtime ."<br/>";
	echo "<br/>";

	$atime="2017-12-31 23:59:00";

	echo "距離2017年12月31日還剩下:" ;
	echo floor((strtotime($mysettime) - strtotime($nowtime))/86400)."日"; 
	echo floor((strtotime($mysettime) - strtotime($nowtime))/3600) ."小時" ; 
	echo floor((strtotime($mysettime) - strtotime($nowtime))/60 )."分鐘"; 
	echo (strtotime($mysettime) - strtotime($nowtime)) ."秒鐘"; 

?>