<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADM Elektrik Dağıtım A.Ş.</title>
<link href="css/sitil.css" rel="stylesheet" type="text/css" />
<link href="perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
 <script src="perfect-scrollbar/dist/perfect-scrollbar.js"></script>
<style type="text/css"> 
      .container4 {
      width:875px;
			height:400px;
			float:left;
			background-color:#606;
			padding:30px;
        overflow: auto;
        position:relative;
		padding-bottom:10px;
		
      }
	   input[type=submit], input[type=reset] {
	background-color:#FFF;
    border: none;
    text-align:center;
    padding: 10px 70px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
	margin-bottom:20px;
}
	  </style>
</head>
<body>
<div class="govde">
<div class="logo"><a href="index.php"><img src="img/logo.fw.png" /></a></div>
<div class="menudivi">
<ul class="menu">
<li><a href="kurumsal.php">Kurumsal</a></li>
<li><a href="medya.php">Medya</a></li>
<li><a href="kariyer.php">Kariyer</a></li>
<li><a href="iletisim.php">İletişim</a></li>
<li><a href="oturumac.php">Oturum Aç</a></li>
</ul>
</div>


<div class="container4">
<div class="sorunyazi">SORUNU BİLDİRİNİZ</div>
<div class="sorunr"></div>

<div class="sorunt">
<form action="" method="">
KONU:<input type="text" name="konu" size="50"/>
ALT KONU:<input type="text" name="altkonu"  size="50" />
ADI SOYADI:<input type="text" name="adi"  size="50" />
ŞEHİR:<input type="text" name="sehir"  size="50"/>
İLÇE:<input type="text" name="ilce"  size="50"/>
AÇIKLAMA:<textarea placeholder="Açıklama yazınız..." rows="5" cols="51" name="acik"></textarea>
ADRES:<textarea placeholder="Adresi yazınız..." rows="5" cols="51" name="adres"></textarea>
<input type="submit" name="gonder" value="GÖNDER" />&nbsp;<input type="submit" name="sil" value="SİL" />

</form>
</div>
</div>
<script>
    var $ = document.querySelector.bind(document);

    var ps = new PerfectScrollbar('.container4');

    $('#redraw').addEventListener('click', function () {
      var oldHtml = $('.container4').innerHTML;
      $('.container4').innerHTML = '';

      setTimeout(function () {
        $('.container4').innerHTML = oldHtml;
        ps.update();
      }, 500);
    });
    </script>
</div>
</body>
</html>
