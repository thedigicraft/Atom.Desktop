<?php
############################################################
## Setup
############################################################
error_reporting(0);

include('config/conn.php'); // Connection File
include('functions/preload.php'); // Preloaded Functions Functions
include('config/globals.php'); // Global Variables & Constants

## Functions:
include('functions/sandbox.php'); // Sandbox Functions

## Initialization:
$page['title'] = 'Home'; // Page Title
if (!$_GET['page']) { $_GET['page'] = 'board'; } // Default Page

$user = data_user($dbc, 2); // Logged in User.

if($_GET['page'] == 'board') {
	
	if(isset($_GET['workspace'])){
		$workspace = $_GET['workspace'];		
	} else {
		$workspace = 1;
	}
	
	if($_GET['workspace'] == ''){

		$workspace = 1;
	}	
	
}

?>