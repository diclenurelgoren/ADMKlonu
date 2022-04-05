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
    background-color: #ff0000;
	color:#0d0000;
    border: none;
    color: white;
    padding: 10px 40px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    font-family:arial;
}
a {
    background-color:  #ff0000;
	color:#fffbfb;
    border: none;
    padding: 9px 40px;
    text-decoration: none;
    margin: 4px 2px;
    font-family:arial;
    cursor: pointer;
    font-size: 15px;
}
body
	{
	
		margin-left: auto;
		margin-right: auto;
		
	}
	 table {
border-collapse: collapse;
width: 500px;
margin-left: auto;
margin-right: auto;
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
	
</head>
	</style>
</html>
<?php
include("ayar.php");
//$id=$_GET["id"];
$guncelID=@$_GET["id"];
$sonuc=mysql_query("select * from kariyer where sno=".$guncelID  );
//$sonuc=mysql_query("update istanbul set adi='' WHERE sno='35'");
 $satir= @mysql_fetch_array($sonuc);
if($satir>0)
{
	echo'
	<form action="guncel2.php?guncelID='.$guncelID.'" method="post">
	<table border="2" >
	
	<th colspan="2"><b>GÜNCELLEME YAPILACAK ALANI SEÇİNİZ...</b></th>
	
<tr><td>AD SOYAD:</td><td><input type="text" name="adsoyad" size="20" value="'.$satir["adsoyad"].'"/></td></tr>
<tr><td>TC KİMLİK NO:</td><td><input type="text"  size="20" name="tc" value="'.$satir["tc"].'"/></td></tr>
<tr><td>DOĞUM TARİHİ:</td><td><input type="date" size="20" name="dogumt" value="'.$satir["dogumt"].'" /></td></tr>
<tr><td>DOĞUM YERİ:</td><td><input type="text"  size="20" name="dogumy" value="'.$satir["dogumy"].'"/></td></tr>';}?>
<tr><td>CİNSİYET:</td><td>KADIN
<input type="radio" name="cinsiyet" value="Kadın" <?php echo ($satir["cinsiyet"]=='Kadın')?'checked':''?>/>ERKEK<input type="radio" name="cinsiyet" value="Erkek" <?php echo ($satir["cinsiyet"]=='Erkek')?'checked':''?>/></td></tr>
	<?php
	echo'

<tr><td>E-POSTA:</td><td><input type="text"  size="20" name="posta" value="'.$satir["posta"].'" /></td></tr>
<tr><td>TELEFON:</td><td><input type="text"  size="20" name="tel" value="'.$satir["tel"].'"/></td></tr>
<tr><td>ADRES:</td><td><input type="text"  size="20" name="adres" value="'.$satir["adres"].'"/></td></tr>
<tr><td>MESAJ:</td><td><textarea placeholder="mesajı yazınız..." name="mesaj">'.$satir["mesaj"].'</textarea></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="guncel" value="GÜNCELLE" /><a href="listele.php">SAYFAYA GERİ DÖN...</a></td></tr>

</table>
</form>';
?>