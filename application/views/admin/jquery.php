<!--   Core JS Files   -->
<script src="<?=public_url('admin')?>/assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?=public_url('admin')?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=public_url('admin')?>/assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?=public_url('admin')?>/assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="<?=public_url('admin')?>/assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="<?=public_url('admin')?>/assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?=public_url('admin')?>/assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?=public_url('admin')?>/assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?=public_url('admin')?>/assets/js/demo.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		// Javascript method's body can be found in assets/js/demos.js
		demo.initDashboardPageCharts();


	});
	$(document).ready(function () {
		$("select[name='province']").change(function () {
			//alert("------------------");
			var province = $(this).val();
			alert("<?=base_url()?>" + "index.php/admin/table/form/ajax");
			jQuery.ajax({
				type: "POST",
				url: "<?=base_url()?>" + "index.php/admin/table/form/ajax",
				dataType: "json",
				data: {prov: province},
				success: function (res) {
					//alert("--------");
					var state = $('select[name="state"]');
					state.empty();
					state.append('<option value="0" selected="selected">Choose..</option>');
					if (res) {
						//alert("-------");
						$.each(res, function (key, value) {
							state.append('<option value="'+ key +'">'+ value +'</option>');
						});
					}
				}
			});
		});
	})
</script>

</html>
