<html>
<head>
	<style type="text/css"> 
		 input[type=text] {
    width: 300px;
    padding: 10px 15px;
    margin: 8px 0;
    box-sizing: border-box;
	border: 2px solid ;
    border-radius: 4px;
    background-color: #f8f8f8;
     height: 40px;
}
input[type=date] {
    width: 300px;
    padding: 10px 15px;
    margin: 8px 0;
    box-sizing: border-box;
	border: 2px solid ;
    border-radius: 4px;
    background-color: #f8f8f8;
    height: 40px;
}



select {
    width: 300px;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    background-color: #f1f1f1;
	border: 2px solid ;
	 height: 40px;
}
textarea {
    width: 300px;
    height: 100px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid ;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
	border: 2px solid ;
}
textarea:focus
{
	
 border: 3px solid #555;	
	
}input[type=submit] {
    background-color: #0b6c6c;
	color:#0d0000;
    border: none;
    color: white;
    padding: 10px 40px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    font-family:arial;
}
 table {
border-collapse: collapse;
width: 100%;
}
 td,th {
border: 1px solid #ddd;
padding: 8px;
}
  tr:nth-child(even){background-color: #f2f2f2;}
 
 tr:hover {
background-color: #5e97a2;
color:#fff;
}
 
 th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #2c3e50;
color: white;
}
</style>
</head>

<?php
include("ayar.php");
$sec=mysql_query("select * FROM kariyer ");
echo'<table border="1" class="tablo"><tr>';
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
echo"<tr><td colspan='12' align='center'><a href='oturumac.php'>SAYFAYA GERİ DÖN...</a></td></table>";	
?>