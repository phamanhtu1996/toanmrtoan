<!-- START SCROLL TO TOP  -->

<div class="scrollup">
	<a href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<script src="<?=public_url("frontend/assets")?>/js/vendor/jquery-1.11.2.min.js"></script>
<script src="<?=public_url("frontend/assets")?>/js/vendor/bootstrap.min.js"></script>
<!--<script src="--><?//=public_url("frontend/assets")?><!--/js/vendor/popper.js"></script>-->
<!--<script src="--><?//=public_url("frontend/assets")?><!--/js/vendor/select2.min.js"></script>-->
<!--<script src="--><?//=public_url("frontend/assets")?><!--/js/vendor/tilt.jquery.min.js"></script>-->

<script src="<?=public_url("frontend/assets")?>/js/jquery.easypiechart.min.js"></script>
<script src="<?=public_url("frontend/assets")?>/js/portfolio.jquery.js"></script>
<script src="<?=public_url("frontend/assets")?>/js/jquery.mixitup.min.js"></script>
<script src="<?=public_url("frontend/assets")?>/js/jquery.easing.1.3.js"></script>
<script src="<?=public_url("frontend/assets")?>/css/skills/inview.min.js"></script>
<script src="<?=public_url("frontend/assets")?>/css/skills/progressbar.js"></script>
<script src="<?=public_url("frontend/assets")?>/css/skills/main.js"></script>
<!--This is link only for gmaps-->
<script src="http://maps.google.com/maps/api/js"></script>
<script src="<?=public_url("frontend/assets")?>/js/gmaps.min.js"></script>
<script>
	$(document).ready(function(){
		$("a#home").click(function () {
			$.ajax({
				url: "<?=base_url('home/get_view_ajax');?>",
				dataType: 'json',
				type: 'POST',
				data: {page: 'home'},
				success: function (data) {
					$("div#wrapper").html(data);
				}
			});
		})
	});

</script>
<script src="<?=public_url("frontend/assets")?>/js/plugins.js"></script>
<script src="<?=public_url("frontend/assets")?>/js/main.js"></script>

</body>
</html>
