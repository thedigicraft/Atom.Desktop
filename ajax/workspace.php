<?php

############################################################
## Workspace Widget Locations Updater
############################################################

	## Database Connection:
	include('../config/conn.php');
	
	## Set Variables:
	$mode = $_GET['mode'];
	$name = $_GET['name'];
	$workspace = $_GET['workspace'];

	## Run Query:
	switch($mode) {
		
		case 'state':
			
			$state = $_GET['state'];
			
			$q = "UPDATE widgets SET state = '$state' WHERE name = '$name' AND workspace = $workspace";
			
		break;
		
		
		case 'move':
			
			$x = $_GET['x'];
			$y = $_GET['y'];
	
			$q = "UPDATE widgets SET x = '$x', y = '$y' WHERE name = '$name' AND workspace = $workspace";
			
		break;
		
		
		case 'resize':
			
			$w = $_GET['w'];
			$h = $_GET['h'];
			
			$q = "UPDATE widgets SET w = '$w', h = '$h' WHERE name = '$name' AND workspace = $workspace";
			
		break;		
			
	}

    $r = mysqli_query($dbc, $q);
	
	## Update the Console Widget ?>
	
	<p>#: RUN MYSQL QUERY:</p>
	
	<ul>
		
		<li><?php echo $q; ?></li>

	<?php if($r) { ?>
		
		<li> Mysql Query was successful</li>
		
	<?php } else { ?>
	
		<li><?php echo mysqli_error($dbc); ?></li>
	
	<?php } ?>

	</ul>

	<p><img src="images/cursor.gif"></p>

