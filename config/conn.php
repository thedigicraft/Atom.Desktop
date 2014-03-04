<?php

############################################################
## Database Connections
############################################################

## Main Database.
DEFINE ('DB_USER','dev');
DEFINE ('DB_PASSWORD','thepassword1');
DEFINE ('DB_HOST',"localhost");
DEFINE ('DB_NAME','atomdesktop');

$dbc = @mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to the datebase because: ' . mysqli_connect_error() );

?>