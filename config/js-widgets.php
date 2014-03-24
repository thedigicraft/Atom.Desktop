<script type="text/javascript" language="JavaScript">

	$(document).ready(function(){
		// Build Widgets:
		<?php load_widgets($dbc, $workspace); ?> 
	});	
	
	$(document).ready(function() {
		// Icons:
		$( ".icon" ).draggable({ 
			containment: "#wrap",
			snap: ".icon", 
			snapMode: "outer"
			//grid: [ 10, 10 ]
		});
	});
  
</script>