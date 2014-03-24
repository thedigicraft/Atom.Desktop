<?php

## Clean a string for database INSERT:
function clean($dbc, $value) {
    $value = mysqli_real_escape_string($dbc, stripslashes($value));
    return $value;
}



