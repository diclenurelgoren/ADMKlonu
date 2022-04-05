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
      
			
        overflow: auto;
        position:relative;
		width:600px;
		height:380px;
		float:left;
		color:#FFF;
		font-size:17px;
		text-align:left;		
		border:2px solid #FFF;
		margin-left:80px;
		margin-top:5px;
		margin-right:10px;
      }
	  		.duyurut
	  {
	        width:875px;
			height:400px;
			float:left;
			background-color:#D91515;
			padding-bottom:10px;
				padding:30px;
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


<div class="duyurut">
<div class="duyurudivi">
<div class="duyurur"></div>
<div class="menumo">
<ul class="menuo">
<li ><a href="duyuru.php">GENEL</a></li>
<li class="aktif3"><a href="tazminat.php">TAZMİNAT ÖDEMELERİ</a></li>
</ul>
</div>
</div>
<div class="container4">
<p><b><font size="5"><center>Ticari Kalite Bildirimi</center></font></b>
<div class="tazresim"></div>
<hr />
<p><b><font size="5"><center>Ticari Kalite Tazminat Ödemeleri</center></font></b>
<div class="tazresim2"></div>
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
