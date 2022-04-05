<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADM Elektrik Dağıtım A.Ş.</title>
<link href="css/sitil.css" rel="stylesheet" type="text/css" />
<link href="perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
 <script src="perfect-scrollbar/dist/perfect-scrollbar.js"></script>
<style type="text/css"> 
    
    .container5 {
      
			
        overflow: auto;
        position:relative;
		width:455px;
		height:340px;
		margin-top:30px;
		float:left;
		border:1px inset #000;
		padding-bottom:30px;
		padding-top:30px;
		padding-left:30px;
		padding-right:30px;
		}
		
		 input[type=submit], input[type=reset] {
    background-color: #FF6600;
	color:#FFF;
    border: none;
    color: white;
    padding: 14px 40px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}
 .kariyer
	  {
		width:930px;
		height:30px;
		clear:both;
		line-height:30px;
        text-align:center;
		font-size:35px;  
		 margin-top:20px;
		 color:#F90;
		 font-weight:bold;  
      }
.kariyerre
{
	width:400px;
		height:400px;
		float: right;
		background-image:url('img/ik.jpg');
		margin-top: 30px;
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
<li class="akfit"><a href="kariyer.php"><font color="#FFFFFF">Kariyer</font></a></li>
<li><a href="iletisim.php">İletişim</a></li>
<li><a href="oturumac.php">Oturum Aç</a></li>
</ul>
</div>

<div class="kariyer">İŞ BAŞVURUSU</div>
<hr />
<div class="container5">
<?php
include("ilet.php");
?>
</div>
<script>
    var $ = document.querySelector.bind(document);

    var ps = new PerfectScrollbar('.container5');

    $('#redraw').addEventListener('click', function () {
      var oldHtml = $('.container5').innerHTML;
      $('.container5').innerHTML = '';

      setTimeout(function () {
        $('.container5').innerHTML = oldHtml;
        ps.update();
      }, 500);
    });
    </script>
<div class="kariyerre"></div>
</body>
</html>
