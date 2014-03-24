<?php

## User Data:
function data_user($dbc, $id) {
    $q = "SELECT * FROM users WHERE id = $id LIMIT 1";
    $r = mysqli_query($dbc, $q);
    $data = mysqli_fetch_assoc($r);
    return $data;
}

## Get User Type Data:
function get_user_type($dbc, $type, $return = 'echo') {
	
	switch ($type) {
		case 1:
			$name = 'Standard';
		break;
		case 2:
			$name = 'Editor';
		break;
		case 3:
			$name = 'Moderator';
		break;
		case 4:
			$name = 'Administrator';
		break;
		case 5:
			$name = 'Super Administrator';
		break;								
		
		default:
			$name = 'Standard';
		break;
	}
	
	if($return == 'return') {
		return $name;
	}else{
		echo $name;
	}

}

## Get User Type Data:
function get_user_status($dbc, $status, $return = 'echo') {
	
	switch ($status) {
		case 0:
			$name = 'Inactive';
		break;
		case 1:
			$name = 'Active';
		break;
	}
	
	if($return == 'return') {
		return $name;
	}else{
		echo $name;
	}

}
?>