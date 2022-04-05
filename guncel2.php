<?php
include("ayar.php");
$guncelID=@$_GET["guncelID"];

	$adsoyad=@$_POST["adsoyad"];
$tc=@$_POST["tc"];
$dogumt=@$_POST["dogumt"];
$dogumy=@$_POST["dogumy"];
$mesaj=@$_POST["mesaj"];
$cinsiyet=@$_POST["cinsiyet"];
$posta=@$_POST["posta"];
$tel=@$_POST["tel"];
$adres=@$_POST["adres"];

$guncel2=@mysql_query("update kariyer set adsoyad='$adsoyad', tc='$tc' , dogumt='$dogumt', dogumy='$dogumy',cinsiyet='$cinsiyet' ,posta='$posta',tel='$tel'    ,adres='$adres' ,mesaj='$mesaj' WHERE sno=$guncelID");
	
if($guncel2)
{
	echo"Güncelleme İşlemi Başarıyla Tamamlandı,2 sn. sonra yönlendirileceksiniz.";
	header("refresh:2;url=listele.php");
}
else
{
	echo "Bir Sorun Oluştu Güncellenemedi...";
}
?>