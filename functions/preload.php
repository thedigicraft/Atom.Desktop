<?php

############################################################
## Preload Functions (for initialization) 
############################################################

    ## Fetch a site setting.
    function get_setting ($dbc, $setting) {
        
        $q = "SELECT * FROM settings WHERE id = '$setting'";
        $r = mysqli_query($dbc, $q);        
    
        $data = mysqli_fetch_assoc($r);
        return $data['value'];  
        
    }
    
?>