<html>
<head>
	<title>CDV Statistics View 2</title>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/highcharts.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"/>
	<meta http-equiv="refresh" content="10">
	<script type="text/javascript" src="<?php echo base_url(); ?>js/loitd.cdv.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/loitd.cdv.js"></script>


</head>
<body>

<div id="wrapper">
	<div id="allchart" style="align: center; width: 100%; margin: auto;">
		<!-- 
		<div id="menu">
			<ul>
				<li><a href="http://123.29.67.148:9090/">Real-time Statistics</a></li>
				<li><a href="http://123.29.67.148:9090/index.php/chart/indexvms">Real-time Statistics VMS</a></li>
				<li><a href="http://123.29.67.148:9090/index.php/chart/chartperiod">Periodic Statistics</a></li>
				<li><a href="#">About</a></li>
			</ul>
		</div>
		-->
		<!--Div that will hold the pie chart-->
		<div id="container" style="width:100%; height:400px;"></div>
		<div id="status" class="alert alert-info" style="width:100%; text-align: center;"></div>
		<div id="container2" style="width:100%; height:400px;"></div>

		<div class="row">
			<div class="col-md-6 col-sm-6"><div id="container3" style="width:100%; height:400px;"></div> </div>
			<div class="col-md-6 col-sm-6"><div id="container4" style="width:100%; height:400px;"></div> </div>
		</div>

		<div class="row">
			<div class="col-md-6 col-sm-6"><div id="container5" style="width:100%; height:400px;"></div> </div>
			<div class="col-md-6 col-sm-6"><div id="container6" style="width:100%; height:400px;"></div> </div>
		</div>

		<div class="row">
			<div class="col-md-6 col-sm-6"><div id="container7" style="width:100%; height:400px;"></div> </div>
			<div class="col-md-6 col-sm-6"><div id="container8" style="width:100%; height:400px;"></div> </div>
		</div>

		<div id="container9" style="width:100%; height:400px;"></div>
		<div id="status2" class="alert alert-info" style="width:100%; text-align: center;"></div>
		<div id="container10" style="width:100%; height:400px;"></div>
		<div id="status3" class="alert alert-info" style="width:100%; text-align: center;"></div>
		<div class="row">
			<div class="col-md-6 col-sm-6"><div id="container11" style="width:100%; height:400px;"></div> </div>
			<div class="col-md-6 col-sm-6"><div id="container12" style="width:100%; height:400px;"></div> </div>
		</div>
		
		
	</div>

	

	
<div id="footer">
	<h2>Cong ty CP thanh toan dien tu VNPT EPAY</h2>
	<h3>Phong He Thong. Email: <a href="mailto:hethong@vnptepay.com.vn">hethong@vnptepay.com.vn</a></h3>
</div>

</div><!--Div end wrapper-->


</body>
</html>