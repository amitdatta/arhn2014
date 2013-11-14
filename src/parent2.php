<div id='parent-container-2' class='parent-container'>
	<div class='bridge'><img src='img/aboutaarohan.png' /></div>
	<div class='wrapper'>
		<div class='history-menu'>
			<ul>
				<li id='history-of-aarohan'>
					<div class='primary-text'>The History of AAROHAN</div>
					<div class='secondary-text'>In 2012, AAROHAN completed a decade of its celebrations. AAROHAN is the second-largest techno-management fest in eastern India.</div>
					<div class='footer-text'>>> Read more</div>
				</li>
				<li id='aarohan-2014'>
					<div class='primary-text'>AAROHAN 2014</div>
					<div class='secondary-text'>In 2012, AAROHAN completed a decade of its celebrations. AAROHAN is the second-largest techno-management fest in eastern India.</div>
					<div class='footer-text'>>> Read more</div>
				</li>
			</ul>
		</div>
	</div>
</div>

<?php include 'articles/history-of-aarohan.php'; ?>
<?php include 'articles/aarohan-2014.php'; ?>

<script>
	jQuery(function ($) {
		$('#history-of-aarohan').click(function (e) { $('#history-of-aarohan-modal').modal(); return false; });
		$('#aarohan-2014').click(function (e) { $('#aarohan-2014-modal').modal(); return false; });
	});

</script>