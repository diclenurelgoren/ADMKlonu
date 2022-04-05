
<?php
$kadi=@$_POST["kadi"];
$sifre=@$_POST["sifre"];
if (isset ($_POST["oturumac"])&& $kadi=="dicle.elgoren" && $sifre="bl12a")
{
	echo "GİRİŞ YAPILDI,YÖNLENDİRİLİYORSUNUZ";
	header("refresh:2;url=listele.php");
}
else
{
	echo"KULLANICI ADI VEYA ŞİFRE YANLIŞ.";
	header("refresh:2;url=oturumac.php");
}
?>