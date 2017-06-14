
<?php

$link = mysqli_connect( //link建立連線
		'localhost',//MySQL主機名稱
		'root',     //使用者名稱
		'123456', //密碼
		'php2017'); //預設使用的資料庫名稱
	
if($link){
	echo "DB Connected!";
}else{
	echo "DB Connected Failed";
}

$username=@$_GET["username"];
$gender=@$_GET["gender"];
$bir=@$_GET["bir"];
$phone=@$_GET["phone"];
$address=@$_GET["address"];
$email=@$_GET["email"];
$poster=@$_GET["poster"];
$friends=@$_GET["friends"];
$internet=@$_GET["internet"];
$facebook=@$_GET["facebook"];

$mysql= "INSERT INTO w4hw(Name,Gender,Birthday,Phone,Address,Email,Message) VALUES ('$username','$gender','$bir','$phone','$address' , '$email' , '$poster' '$facebook' '$friends' )";
$result=mysqli_query($link,$mysql); //丟資料
$result=mysqli_query($link,"SELECT * FROM w4hw" );
echo "<table border=2>";
while($row=mysqli_fetch_assoc($result)){
	echo "<tr/>";
	echo "<td>";
	echo @$row["Name"];
	echo "</td><td>";
	echo @$row["Gender"];
	echo "</td><td>";
	echo @$row["Birthday"];
	echo "</td><td>";
	echo @$row["Phone"];
	echo "</td><td>";
	echo @$row["Address"];
	echo "</td><td>";
	echo @$row["Email"];
	echo "</td><td>";
	echo @$row["Message"];
	echo "</td></tr>";
}
echo "</table>";
mysqli_close($link);
?>
