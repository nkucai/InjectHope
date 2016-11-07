<script>
	$(function() {
		$('#btnHealthAlert').bind('click', function () {
			alert('Warning: elephant tranquilizer has been identified as an added chemical to heroin – this chemical makes heroin usage extremely dangerous.');
		});

		$('#btnOdAlert').bind('click', function () {
			if (confirm('An overdose has been reported nearby!  Would you like to view the details?')) {
				document.location = "odDetails.php"
			}
		});
	});
</script>

<div data-role="panel" data-position="left" data-position-fixed="false" data-display="reveal" id="nav-panel" data-theme="b">
	<ul data-role="listview" data-theme="a" data-divider-theme="a" style="margin-top:-16px;" class="nav-list">
		<li data-icon="delete" style="background-color:#111;" data-theme="b">
			<a href="#" data-rel="close">Close menu</a>
		</li>
		<li data-filtertext="Map" data-theme="b">
			<a href="map.php" rel="external">Map</a>
		</li>
		<li data-filtertext="Naloxone Delivery" data-theme="b">
			<a href="naloxoneDelivery.php" rel="external">Naloxone Delivery</a>
		</li>
		<li data-filtertext="Help!" data-theme="b">
			<a href="help.php" rel="external">Help!</a>
		</li>
		<li data-filtertext="News" data-theme="b">
			<a href="news.php" rel="external">News</a>
		</li>
		<li data-filtertext="Where to get Help" data-theme="b">
			<a href="whereToGetHelp.php" rel="external">Where to get Help</a>
		</li>
		<li data-filtertext="FAQ" data-theme="b">
			<a href="faq.php" rel="external">FAQ</a>
		</li>
		<li data-filtertext="Location" data-theme="b">
			<a href="location.php" rel="external">Location</a>
		</li>
		<li data-filtertext="About" data-theme="b">
			<a href="about.php" rel="external">About</a>
		</li>
		<li data-filtertext="Simulate Health Alert" data-theme="a">
			<a id="btnHealthAlert" href="" rel="external">Simulate Health Alert</a>
		</li>
		<li data-filtertext="Simulate OD Alert" data-theme="a">
			<a id="btnOdAlert" href="" rel="external">Simulate OD Alert</a>
		</li>
	</ul>
</div>
