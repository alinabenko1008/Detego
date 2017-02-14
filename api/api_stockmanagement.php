<?php
	include('database_connect.php');	  
	//execute the SQL query and return records
	$result = mysql_query("SELECT * FROM tb_overall_stock");
	
	//fetch tha data from the database
	while ($row = mysql_fetch_array($result)) {
		$stockrate=$row{'stockrate'};
		$onfloorrate=$row{'onfloorrate'};
	}
	mysql_close($link);
	$stockrate_rest=100-$stockrate;
	$onfloorrate_rest=100-$onfloorrate;

	$script = '<script>var stockrate='.$stockrate.';</script>';
	echo $script;
	$script = '<script>var stockrate_rest='.$stockrate_rest.';</script>';
	echo $script;
	$script = '<script>var onfloorrate='.$onfloorrate.';</script>';
	echo $script;
	$script = '<script>var onfloorrate_rest='.$onfloorrate_rest.';</script>';
	echo $script;
?>