<?php
	include('database_connect.php');
	//execute the SQL query and return records
	$result = mysql_query("SELECT * FROM tb_inbound_hitrate");
	
	//fetch tha data from the database
	while ($row = mysql_fetch_array($result)) {
		$inboundrate=$row{'inbound'};
		$hitrate=$row{'hitrate'};
	}
	mysql_close($link);
	$inboundrate_rest=100-$inboundrate;
	$hitrate_rest=100-$hitrate;

	$script = '<script>var inboundrate='.$inboundrate.';</script>';
	echo $script;
	$script = '<script>var inboundrate_rest='.$inboundrate_rest.';</script>';
	echo $script;
	$script = '<script>var hitrate='.$hitrate.';</script>';
	echo $script;
	$script = '<script>var hitrate_rest='.$hitrate_rest.';</script>';
	echo $script;
	
?>