<?php

## Clean a string for database INSERT:
function clean($dbc, $value) {
    $value = mysqli_real_escape_string($dbc, stripslashes($value));
    return $value;
}

## User Data:
function data_user($dbc, $id) {
    $q = "SELECT * FROM users WHERE id = $id LIMIT 1";
    $r = mysqli_query($dbc, $q);
    $data = mysqli_fetch_assoc($r);
    return $data;
}

## User Data:
function load_workspaces($dbc, $user) {
    $q = "SELECT * FROM workspaces WHERE user = $user";
    $r = mysqli_query($dbc, $q);
    while($workspace = mysqli_fetch_assoc($r)) { ?>
        
		<li><a href="?workspace=<?php echo $workspace['id']; ?>"><?php echo $workspace['name']; ?></a></li>
        
    <?php }
 
}

## Widget Content:
function load_widgets_content($dbc, $workspace = 1) {
    $q = "SELECT * FROM widgets";
    $r = mysqli_query($dbc, $q);
    while($widget = mysqli_fetch_assoc($r)) {
        
		include('widgets/'.$widget['name'].'.php');
        
    }
 
}

## Widget Data:
function load_widgets($dbc, $workspace = 1) {
    $q = "SELECT * FROM widgets WHERE workspace = $workspace";
    $r = mysqli_query($dbc, $q);
    while($widget = mysqli_fetch_assoc($r)) {
        
        build_widget(
            $widget['name'],
            $widget['x'],
            $widget['y'],
            $widget['w'],
            $widget['h'],
            $widget['state'],
            $workspace
        );
        
    }
 
}

## Widget:
function build_widget($name, $x, $y, $w, $h, $state, $workspace) {
  switch (WGT_STATE) {
      case 1: $state = 'close'; break; // All Widgets Closed
      case 2: $state = 'open'; break; // All Widgets Opened
      case 3: $state = $state; break; // Rely on user defined state
  }   
  if (!is_numeric($x)) { $x = "'".$x."'"; }
  if (!is_numeric($y)) { $y = "'".$y."'"; }  
    
	if($state == 'open') { $autoOpen = 'true'; } else { $autoOpen = 'false'; }
	
    ?>

	// Updates
    // ----------------------------------------------------------------------------------------
    	
	$("#update").click(function(){

	  
		var x_<?php echo $name; ?> = $("#dialog-<?php echo $name; ?>").offset().left;
	 	var y_<?php echo $name; ?> = $("#dialog-<?php echo $name; ?>").offset().top - 26.125;
	  
		var w_<?php echo $name; ?> = $("#dialog-<?php echo $name; ?>").width();
		var h_<?php echo $name; ?> = $("#dialog-<?php echo $name; ?>").height();
	  
		var z_<?php echo $name; ?> = $("#update-z-<?php echo $name; ?>").val();
		var state_<?php echo $name; ?> = $("#update-state-<?php echo $name; ?>").val();
	  
	  
		$("#update-x-<?php echo $name; ?>").val(x_<?php echo $name; ?>);
	  	$("#update-y-<?php echo $name; ?>").val(y_<?php echo $name; ?>);
		$("#update-w-<?php echo $name; ?>").val(w_<?php echo $name; ?>);
		$("#update-h-<?php echo $name; ?>").val(h_<?php echo $name; ?>);
		//$("#update-state-<?php echo $name; ?>").val(x);
		
		
	  	//var loadedstory = $(this).attr('alt');
	    $("#update-report").load("ajax/workspace.php?name=<?php echo $name; ?>&x="
	    +x_<?php echo $name; ?>+"&y="
	    +y_<?php echo $name; ?>+"&z="
	    +z_<?php echo $name; ?>+"&w="
	    +w_<?php echo $name; ?>+"&h="
	    +h_<?php echo $name; ?>+"&state="
	    +state_<?php echo $name; ?>);
		
		
	});	

	$( "#dialog-<?php echo $name; ?>" ).on( "dialogclose", function( event, ui ) {
		
		// Update the Reporting tools:
		$("#update-state-<?php echo $name; ?>").val('close'); // Set Hidden text field to 'close'
		$("#table-state-<?php echo $name; ?>").html('close'); // Set Table cell to 'close'

		var state_<?php echo $name; ?> = $("#update-state-<?php echo $name; ?>").val();	

		// Update the State of the Dialog:
	    $("#update-report").load("ajax/workspace.php?workspace=<?php echo $workspace; ?>&mode=state&name=<?php echo $name; ?>&state="+state_<?php echo $name; ?>);
		
	} );
	
	
	$( "#dialog-<?php echo $name; ?>" ).on( "dialogopen", function( event, ui ) {
	
		// Update the Reporting tools:
		$("#update-state-<?php echo $name; ?>").val('open'); // Set Hidden text field to 'open'
		$("#table-state-<?php echo $name; ?>").html('open'); // Set Table cell to 'open'
	
		var state_<?php echo $name; ?> = $("#update-state-<?php echo $name; ?>").val();	
	
		// Update the State of the Dialog:
	    $("#update-report").load("ajax/workspace.php?workspace=<?php echo $workspace; ?>&mode=state&name=<?php echo $name; ?>&state="+state_<?php echo $name; ?>);
		
	} );	
	
	$( "#dialog-<?php echo $name; ?>" ).on( "dialogdragstop", function( event, ui ) {
	
		var x_<?php echo $name; ?> = $("#dialog-<?php echo $name; ?>").offset().left;
	 	var y_<?php echo $name; ?> = $("#dialog-<?php echo $name; ?>").offset().top - 26.125;

	
		$("#update-x-<?php echo $name; ?>").val(x_<?php echo $name; ?>);
	  	$("#update-y-<?php echo $name; ?>").val(y_<?php echo $name; ?>);
	  	
		$("#table-x-<?php echo $name; ?>").html(x_<?php echo $name; ?>);
		$("#table-y-<?php echo $name; ?>").html(y_<?php echo $name; ?>);		

		// Update the Position of the Dialog:
	    $("#update-report").load("ajax/workspace.php?workspace=<?php echo $workspace; ?>&mode=move&name=<?php echo $name; ?>&x="+x_<?php echo $name; ?>+"&y="+y_<?php echo $name; ?>);
		
	} );
	
	
	
	$( "#dialog-<?php echo $name; ?>" ).on( "dialogdrag", function( event, ui ) {
	
		var x_<?php echo $name; ?> = $("#dialog-<?php echo $name; ?>").offset().left;
	 	var y_<?php echo $name; ?> = $("#dialog-<?php echo $name; ?>").offset().top - 26.125;

	
		$("#update-x-<?php echo $name; ?>").val(x_<?php echo $name; ?>);
	  	$("#update-y-<?php echo $name; ?>").val(y_<?php echo $name; ?>);
	  	
		$("#table-x-<?php echo $name; ?>").html(x_<?php echo $name; ?>);
		$("#table-y-<?php echo $name; ?>").html(y_<?php echo $name; ?>);		

		
	} );		
	
	
	$( "#dialog-<?php echo $name; ?>" ).on( "dialogresize", function( event, ui ) {
			  
		var w_<?php echo $name; ?> = $("#dialog-<?php echo $name; ?>").width();
		var h_<?php echo $name; ?> = $("#dialog-<?php echo $name; ?>").height();
	  
	
		$("#update-w-<?php echo $name; ?>").val(w_<?php echo $name; ?>);
		$("#update-h-<?php echo $name; ?>").val(h_<?php echo $name; ?>);
		$("#table-w-<?php echo $name; ?>").html(w_<?php echo $name; ?>);
		$("#table-h-<?php echo $name; ?>").html(h_<?php echo $name; ?>);		


		
	} );	
	
	$( "#dialog-<?php echo $name; ?>" ).on( "dialogresizestop", function( event, ui ) {
			  
		var w_<?php echo $name; ?> = $("#dialog-<?php echo $name; ?>").width();
		var h_<?php echo $name; ?> = $("#dialog-<?php echo $name; ?>").height();
	  
	
		$("#update-w-<?php echo $name; ?>").val(w_<?php echo $name; ?>);
		$("#update-h-<?php echo $name; ?>").val(h_<?php echo $name; ?>);
		$("#table-w-<?php echo $name; ?>").html(w_<?php echo $name; ?>);
		$("#table-h-<?php echo $name; ?>").html(h_<?php echo $name; ?>);		

		// Update the Size of the Dialog:
	    $("#update-report").load("ajax/workspace.php?workspace=<?php echo $workspace; ?>&mode=resize&name=<?php echo $name; ?>&w="+w_<?php echo $name; ?>+"&h="+h_<?php echo $name; ?>);

		
	} );	

    // Dialog - <?php echo $name; ?>
    // ----------------------------------------------------------------------------------------
	//$("#dialog-<?php echo $name; ?>").dialog("<?php echo $state; ?>") ;
    $( "#dialog-<?php echo $name; ?>" ).dialog({
    	autoOpen: <?php echo $autoOpen; ?>,
        position:{ my: "left top", at: "left+<?php echo $x; ?> top+<?php echo $y; ?>", of: "body"}, 
        width: <?php echo $w; ?>,
        height: <?php echo $h; ?>,

    }).parents('.ui-dialog')
        .draggable({ snap: true, grid: [ 5,5 ] })
        .resizable({ grid: [ 5,5 ] });

    // Dialog | Close Button - <?php echo $name; ?>
    // ----------------------------------------------------------------------------------------
    // Open Dialog and Change Button State:
    $( "#dialog-<?php echo $name; ?>" ).on( "dialogclose", function( event, ui ) {
    	
    	$("#btn-<?php echo $name; ?>").switchClass( "btn-taskbar-active", "btn-taskbar", 5 );
    	
    } );
    
    $( "#dialog-<?php echo $name; ?>" ).on( "dialogopen", function( event, ui ) {
    	
    	$("#btn-<?php echo $name; ?>").switchClass( "btn-taskbar", "btn-taskbar-active", 5 ) ;
    	
    } );
    
        


    // Taskbar | Button - <?php echo $name; ?>
    // ----------------------------------------------------------------------------------------
        // Initial State:
        
        ($("#dialog-<?php echo $name; ?>").dialog("isOpen") == false) ? 
            $("#btn-<?php echo $name; ?>").switchClass( "btn-taskbar-active", "btn-taskbar", 5 ) : 
            $("#btn-<?php echo $name; ?>").switchClass( "btn-taskbar", "btn-taskbar-active", 5 ) ;
            
               
        // Open Dialog and Change Button State:
         
        $( "#btn-<?php echo $name; ?>" ).on( "click", function( event, ui ) {
        	
        	
            ($("#dialog-<?php echo $name; ?>").dialog("isOpen") == false) ? 
                $("#dialog-<?php echo $name; ?>").dialog("open") : 
                $("#dialog-<?php echo $name; ?>").dialog("close") ;
      
        });
        
       


<?php
}

?>