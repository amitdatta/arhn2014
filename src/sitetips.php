<div class='sitetips'>
	<img src='img/sitetips1.png' height='300px' class='sitetip1' />
	<img src='img/sitetips2.png' height='180px' class='sitetip2' />
	<div class='tipbuttons'>OK. I get it!</div>
	<div class='skipbutton'>I'm feeling lucky.</div>
</div>
<script>
	var count = 1;
	var total = 2;
	$(".tipbuttons").click(function() {
		if(count==total) {
			$('.sitetips').fadeOut("slow");
		}
		var togglename1 = '.sitetip'+count;
		var togglename2 = '.sitetip'+(count+1);
		if(count<total) {
			$(togglename1).animate({ opacity: 0.2 }, 500, function() { /*Animation complete*/ });
			$(togglename2).animate({ opacity: 1 }, 500, function() { /*Animation complete*/ });
	  		count++;
		}	
	});
	$(".skipbutton").click(function() {
		$('.sitetips').fadeOut("slow");
	});
</script>