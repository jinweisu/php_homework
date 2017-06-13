
<?php

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





echo "姓名:" .$username."<br/>";
echo "<br/>";
echo "性別:" .$gender."<br/>";
echo "<br/>";
echo "生日:"  . $bir."<br/>";
echo "<br/>";
echo "電話:" .$phone. "<br/>";
echo "<br/>";
echo "住址:" .$address."<br/>";
echo "<br/>";
echo "訊息來源:".$poster;
echo $facebook=="" ? "":"&".$facebook;
echo $friends=="" ? "":"&".$friends;
echo "<br/>";
echo "電子郵件:" .$email. "<br/>";
echo "<br/>";
?>
