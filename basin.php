<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


	<script type="text/javascript" src="assets/scripts/jquery.min.js"></script>
    <script type="text/javascript" src="assets/scripts/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/scripts/custom.js"></script>


    <!-- Add jQuery assetsrary -->
	<script type="text/javascript" src="assets/scripts/jquery-1.10.1.min.js"></script>

	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="assets/scripts/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="assets/source/jquery.fancybox.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/source/jquery.fancybox.css" media="screen" />

	<!-- Add Button helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="assets/source/helpers/jquery.fancybox-buttons.css" />
	<script type="text/javascript" src="assets/source/helpers/jquery.fancybox-buttons.js"></script>

	<!-- Add Thumbnail helper (this is optional) -->
	<link rel="stylesheet" type="text/css" href="assets/source/helpers/jquery.fancybox-thumbs.css" />
	<script type="text/javascript" src="assets/source/helpers/jquery.fancybox-thumbs.js"></script>

	<!-- Add Media helper (this is optional) -->
	<script type="text/javascript" src="assets/source/helpers/jquery.fancybox-media.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.php',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
	</script>
    <script type="text/javascript">
    $(function() {
        $("#top").click(function() {
            $("html,body").stop().animate({ scrollTop: "0" }, 200);
        });
    });
    $(window).scroll(function() {
        var uzunluk = $(document).scrollTop();
        if (uzunluk > 300) $("#top").fadeIn(500);
        else { $("#top").fadeOut(500); }
    });
</script>
<style type="text/css">
#top {
    bottom: 5px;
    bottom: 20px;
    display: none;
    height: 100px;
    position: fixed;
    right: 20px;
	
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADM Elektrik Dağıtım A.Ş.</title>
<link href="css/sitil.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="top">
    <br />
    <img width="50" height="50" src="img/yukaricik.png" />
</div>
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

<div class="menum">
<ul class="menu2">
<li><a href="medya.php">Bültenler</a></li>
<li class="akfit"><a href="basin.php"><font color="#FFFFFF">Basında ADM</font></a></li>
</ul>
</div>
<hr />
<div class="basdivi">
<div class="conta" >
<p><font size="5" ><b><div align="center">Aydın Hedef Gazetesi</div></b></font>
</p>
<div class="bas1"><a href="medya/Aydın_Hedef.jpg" class="fancybox" data-fancybox-group="galeri"><img src="medya/Aydın_Hedef_FIKdFRT.jpg" /></a>
</div>
</div>

<div class="conta">
<p><font size="5" ><b><div align="center">Batı Akdeniz Gazetesi</div></b></font>
</p>
<div class="bas2"><a href="medya/Batı_Akdeniz.jpg" class="fancybox" data-fancybox-group="galeri"><img src="medya/Batı_Akdeniz_qIDKaNM.jpg" /></a></div>
</div>

<div class="basdivi1">

<div class="conta">
<p><font size="5" ><b><div align="center">Denizli Gazetesi</div></b></font>
</p>
<div class="bas3"><a href="medya/Denizli.jpg" class="fancybox" data-fancybox-group="galeri"><img src="medya/Denizli_c8RYjJ1.jpg" /></a></div>
</div>

<div class="conta">
<p><font size="5" ><b><div align="center">Fethiye Dost Gazetesi</div></b></font>
</p>
<div class="bas4"><a href="medya/Fethiye_Dost.jpg" class="fancybox" data-fancybox-group="galeri"><img src="medya/Fethiye_Dost_p3PhWpK.jpg" /></a></div>
</div>
</div>

</div>
</body>
</html>
