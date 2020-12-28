<html>
	<title>SPK</title>
	<link rel="stylesheet" href='assets/bootstrap/css/bootstrap.min.css'>
	<script src='assets/bootstrap/js/jquery.js'></script>
	<script src='assets/bootstrap/js/jquery.min.js'></script>
	<nav class="navbar navbar-default">
		<div class="navbar-header">
			<a href="#" class='navbar-brand'>SISTEM PENDUKUNG KEPUTUSAN</a>
		</div>
	</nav>
	
	<body>
	<div class="container">
		<?php
			include('config/database.config.php');
			$mod = (isset($_GET['mod'])) ? $_GET['mod'] : 'dashboard';
			$act = (isset($_GET['act'])) ? $_GET['act'] : 'index';
			
			$filename = "module/".$mod."/".$act.".php";
			if(file_exists($filename)){
				require_once($filename);
			}else{
				echo "NO MODULE";
			}
		?>
	</div>
	</body>
</html>