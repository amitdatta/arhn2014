<!DOCTYPE html>
<html>
<head>
	<title>Website | Test</title>
	<script src='js/jquery-1.10.2.min.js'></script>
	<script src='js/disablescroll.js'></script>
	<script src='js/jquery.simplemodal.js'></script>
	<script src='js/texteffects.min.js'></script>
	<link href='templates/base.css' rel='stylesheet' />

	<script>
		$(document).ready(function (){
			disable_scroll();
			$("#main-menu-1").click(function (){
                    $('html, body').animate({ scrollTop: $("#parent-container-1").offset().top }, 1000);
            });
            $("#main-menu-2").click(function (){
                    $('html, body').animate({ scrollTop: $("#parent-container-2").offset().top }, 1000);
            });
            $("#main-menu-3").click(function (){
                    $('html, body').animate({ scrollTop: $("#parent-container-3").offset().top }, 1000);
            });
            $("#main-menu-4").click(function (){
                    $('html, body').animate({ scrollTop: $("#parent-container-4").offset().top }, 1000);
            });
            $("#main-menu-5").click(function (){
                    $('html, body').animate({ scrollTop: $("#parent-container-5").offset().top }, 1000);
            });
            $("#main-menu-6").click(function (){
                    $('html, body').animate({ scrollTop: $("#parent-container-6").offset().top }, 1000);
            });
            $("#main-menu-7").click(function (){
                    $('html, body').animate({ scrollTop: $("#parent-container-7").offset().top }, 1000);
            });
            $("#main-menu-8").click(function (){
                    $('html, body').animate({ scrollTop: $("#parent-container-8").offset().top }, 1000);
            });
        });
	</script>

	
</head>
	<body>
	<div class='stars'></div>

	<?php include 'sitetips.php'; ?>
	<?php include 'menu.php'; ?>
	<?php include 'parent1.php'; ?>
	<?php include 'parent2.php'; include 'parent3.php'; include 'parent4.php'; ?>
	<div id='parent-container-5' class='parent-container'></div>
	<div id='parent-container-6' class='parent-container'></div>
	<?php include 'parent7.php'; include 'parent8.php'; ?>
	
	<script src='js/jquery.scrollbar.min.js'></script>
	<script>	
		(function($){
			$(window).load(function(){
				$(".content").mCustomScrollbar({
					scrollButtons:{
						enable:true
					},
					theme: 'dark',
				});
			});
		})(jQuery);
	</script>
</body>
</html>