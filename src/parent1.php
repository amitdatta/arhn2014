<div id='parent-container-1' class='parent-container'>
	<?php include 'socialset.php'; ?>
	<div class='wrapper'>
		<div class='aarohan-header'><img src='img/aarohan.png' /></div>
		<div class='updates'>
			<img class='update-icon' src='img/updates.png' />
			<?php include 'articles/updates.php'; ?>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$('.update-effect-loop').textEffectLoop({timeout:3000});
	});
</script>