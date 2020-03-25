<meta charset="utf-8">
<?php

$name=$_POST["name"];
$member_name=$_POST["member_name"];
$gender=$_POST["gender"];
$bday=$_POST["birth"];
$ID=$_POST["id"];
$number=$_POST["number"];
$urgent_name=$_POST["urgent_name"];
$urgent_relationship=$_POST["urgent_relationship"];
$urgent_number=$_POST["urgent_number"];
$address=$_POST["address"];
$mail=$_POST["email"];
$school=$_POST["school"];
$size=$_POST["size"];
$food=$_POST["food"];
$habbit=$_POST["habbit"];
$ill=$_POST["ill"];
$come=$_POST["come"];
$back=$_POST["back"];
$how_to_know=$_POST["how_to_know"];
$full_join=$_POST["full_join"];
$introduction=$_POST["introduction"];

echo "您的姓名:".$name."<br/>";
echo "您的團報同學姓名:".$member_name."<br/>";
echo "您的性別:".$gender."<br/>";
echo "您的生日:".$bday."<br/>";
echo "您的身分證字號:".$ID."<br/>";
echo "您的連絡電話:".$number."<br/>";
echo "您的緊急連絡人:".$urgent_name."<br/>";
echo "您與緊急聯絡人的關係:".$urgent_relationship."<br/>";
echo "您的緊急連絡人電話:".$urgent_number."<br/>";
echo "您的通訊地址:".$address."<br/>";
echo "您的信箱:".$mail."<br/>";
echo "您的就讀學校:".$school."<br/>";
echo $size."<br/>";
for($i=0;$i<$size;$i++)
{
	echo "您的營服尺寸:".$size[$i]."<br/>";
}
echo "您的飲食:".$food."<br/>";
echo "您的特殊飲食習慣:".$habbit."<br/>";
echo "您的特殊疾病:".$ill."<br/>";
echo "您前來營隊的方法:".$come."<br/>";
echo "您的離開方法:".$back."<br/>";
echo "您如何得知本營隊:".$how_to_know."<br/>";
echo "您是否全程參與:".$full_join."<br/>";
echo "您的自我介紹/期許:".nl2br($introduction)."<br/>";


?>