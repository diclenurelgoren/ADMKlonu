<?php
include("ayar.php");
//$id=$_GET["id"];
$silinecekID=@$_GET["id"];
$sonuc=mysql_query("delete from kariyer where sno=".$silinecekID);

if($sonuc>0)
{
	echo "Başarıyla silindi ,2 sn. sonra yönlendirileceksiniz.";
	header("refresh:2;url=listele.php");
}
else{
	echo "Bir Sorun Oluştu Silinmedi...";
}
?>