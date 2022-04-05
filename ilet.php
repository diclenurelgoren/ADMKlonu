<html>
<head>
	<style type="text/css">

	input[type=radio] {
    background-color: #FF6600;
	color:#FFF;
    border: none;
    color: white;
    padding: 14px 40px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
.ahref{
    background-color: #FF6600;
	color:#0d0000;
    border: none;
    color: white;
    padding: 14px 40px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    font-size: 13px;
}

	</style>
<form action="" method="post">

AD SOYAD:<input type="text" name="adsoyad" />
TC KİMLİK NO:<input type="text" name="tc" />
DOĞUM TARİHİ:<input type="date" name="dogumt" />
DOĞUM YERİ:<input type="text" name="dogumy" />
CİNSİYET:<br><br>KADIN
<input type="radio" name="cinsiyet" value="Kadın"/>ERKEK<input type="radio" name="cinsiyet" value="Erkek"/><br><br>
E-POSTA:<input type="text" name="posta" />
TELEFON:<input type="text" name="tel" />
ADRES:<input type="text" name="adres"/>
MESAJ:<textarea placeholder="mesajı yazınız..." name="mesaj"></textarea>

<input type="submit" name="gonder" value="GÖNDER" />&nbsp;<input type="submit" name="sil" value="SİL" />&nbsp;
<a href="oturumac.php" class="ahref">LİSTELE</a>
</form>




<?php
include("ayar.php");
if(isset($_POST["gonder"]))
{
	$adsoyad=@$_POST["adsoyad"];
$tc=@$_POST["tc"];
$dogumt=@$_POST["dogumt"];
$dogumy=@$_POST["dogumy"];
$mesaj=@$_POST["mesaj"];
$cinsiyet=@$_POST["cinsiyet"];
$posta=@$_POST["posta"];
$tel=@$_POST["tel"];
$adres=@$_POST["adres"];
	if (isset ($_POST["gonder"])&& $adsoyad=="")
	{
    	echo"ADI SOYADI BOŞ BIRAKILAMAZ!";
	}
	elseif(isset ($_POST["gonder"])&& $tel=="")
	{
		echo "TELEFON BOŞ BIRAKILAMAZ!";
	}
	elseif(isset ($_POST["gonder"])&& $dogumt=="")
	{
		echo "DOĞUM TARİHİ NUMARASI BOŞ BIRAKILAMAZ!";
	}
	elseif(isset ($_POST["gonder"])&& $posta=="")
	{
		echo "E-MAİL BOŞ BIRAKILAMAZ!";
	}
 else{
 		$ekle=mysql_query("insert into kariyer (sno,adsoyad,tc,dogumt,dogumy,cinsiyet,posta,tel,adres,mesaj) values('','$adsoyad','$tc','$dogumt','$dogumy','$cinsiyet','$posta','$tel','$adres','$mesaj') ");
 }
}
if(isset($_POST["listele"])){
$sec=mysql_query("select * FROM kariyer ");
echo'<table border="1"><tr>';
echo"<th>Sno</th><th>Adı Soyadı</th><th>TC Kimlik No</th><th>Doğum Tarihi</th><th>Doğum Yeri</th><th>Cinsiyet</th><th>E-Mail</th><th>Telefon</th><th>Adres</th><th>Mesaj</th><th>Sil</th><th>Güncelle</th>";
while($dizi=mysql_fetch_array($sec))
{
	echo"<tr><td>".$dizi['sno']."</td>";
	echo"<td>".$dizi['adsoyad']."</td>";
	echo"<td>".$dizi['tc']."</td>";
	echo"<td>".$dizi['dogumt']."</td>";
	echo"<td>".$dizi['dogumy']."</td>";
	echo"<td>".$dizi['cinsiyet']."</td>";
	echo"<td>".$dizi['posta']."</td>";
	echo"<td>".$dizi['tel']."</td>";
	echo"<td>".$dizi['adres']."</td>";
	echo"<td>".$dizi['mesaj']."</td>";
	echo '<td><a href="sil.php?id='.$dizi["sno"].'";>Sil</a></td>';
	echo '<td><a href="guncelle.php?id='.$dizi["sno"].'";>Güncelle</a></td></tr>';

}	
echo"</table>";	
}
?>