<div id="dialog-update" class="dialog-soundbank list-group" title="Debug - Update">
	
	<table class="table table-striped">
		
		<thead>
			<tr style="font-size:11px;">
				
				<th>Name</th>
				<th>X Pos</th>
				<th>Y Pos</th>
				<th>Z Pos</th>
				<th>Width</th>
				<th>Height</th>
				<th>State</th>
				
			</tr>
		</thead>
		<tbody>
		
	<?php

		$q = "SELECT * FROM widgets WHERE workspace = $workspace";
	    $r = mysqli_query($dbc, $q);
	    while($widget = mysqli_fetch_assoc($r)) {

			?>

					
				<tr style="font-size:11px;">
					
					<td><?php echo $widget['name']; ?></td>
					<td id="table-x-<?php echo $widget['name']; ?>"><?php echo $widget['x']; ?></td>
					<td id="table-y-<?php echo $widget['name']; ?>"><?php echo $widget['y']; ?></td>
					<td id="table-z-<?php echo $widget['name']; ?>"><?php echo $widget['z']; ?></td>
					<td id="table-w-<?php echo $widget['name']; ?>"><?php echo $widget['w']; ?></td>
					<td id="table-h-<?php echo $widget['name']; ?>"><?php echo $widget['h']; ?></td>
					<td id="table-state-<?php echo $widget['name']; ?>"><?php echo $widget['state']; ?></td>
					
				</tr>
					

				

					
					
				
				
					
					<input type="hidden" id="update-x-<?php echo $widget['name']; ?>" class="col-md-2" name="x" value="<?php echo $widget['x']; ?>">
					<input type="hidden" id="update-y-<?php echo $widget['name']; ?>" class="col-md-2" name="y" value="<?php echo $widget['y']; ?>">
					<input type="hidden" id="update-z-<?php echo $widget['name']; ?>" class="col-md-2" name="z" value="<?php echo $widget['z']; ?>">
					
				<!--</div>
				
				<div class="row">	-->
					
					<input type="hidden" id="update-w-<?php echo $widget['name']; ?>" class="col-md-2" name="w" value="<?php echo $widget['w']; ?>">
					<input type="hidden" id="update-h-<?php echo $widget['name']; ?>" class="col-md-2" name="h" value="<?php echo $widget['h']; ?>">
									
					<input type="hidden" id="update-state-<?php echo $widget['name']; ?>" class="col-md-2" name="state" value="<?php echo $widget['state']; ?>">
					
							
				
			
			<?php
	        
	    }
	
	?>
	</tbody>	
	</table>
	
</div>