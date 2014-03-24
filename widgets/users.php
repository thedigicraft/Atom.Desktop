<div id="dialog-users" class="dialog-tool" title="Tools - User Management">


	
	
		
		<div class="col-sm-6">

			<table class="table table-striped">
				
				<thead>
					<tr style="font-size:11px;">
						
						<th>Avatar</th>
						<th>Name</th>
						<th>Type</th>
						<th>Email</th>
						<th>Status</th>
						
					</tr>
				</thead>
				
				<tbody>
		
				<?php
				
					$q = "SELECT * FROM users ORDER BY last ASC";
					$r = mysqli_query($dbc,$q);
				
					if($r){
						while($row = mysqli_fetch_assoc($r)) { ?>       
		
							<tr>
								
							  <td>
							  	<img class="img-rounded" src="uploads/avatars/<?php echo $row['avatar']; ?>">
							  </td>
							  <td>
							  	<?php echo $row['last'].', '.$row['first']; ?>
							  </td>					  
							  <td>
							  	<?php get_user_type($dbc, $row['type'], 'echo'); ?>
							  </td>
							  <td>
							  	<?php echo $row['email']; ?>
							  </td>
							  <td>
							  	<?php get_user_status($dbc, $row['status'], 'echo'); ?>
							  </td>
				
							</tr>
										
					<?php } } else { echo mysqli_error($dbc); } ?>
								
				</tbody>
				
			</table>			
			
		</div>
		
		<div class="col-sm-6">
			
			<h1>Opened User Goes here:</h1>
			
			
		</div>		
		
		
	</div>
      


      
