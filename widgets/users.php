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

			
			<form role="form">
			
			<div class="row">
				
				

				
			  	<div class="col-sm-6 form-group">
			    	<label for="users-first">First Name</label>
			    	<input name="first" type="text" class="form-control" id="users-first" placeholder="First Name">
			  	</div>				
				

				
				<div class="col-sm-6 form-group">
				    <label for="users-last">Last Name</label>
					<input name="last" type="text" class="form-control" id="users-last" placeholder="Last Name">
				</div>				
				
				
				
				
			</div>
			
			<div class="row">
				
				
				<div class="col-sm-12 form-group">
			    	<label for="users-email">Email</label>
			    	<input name="email" type="text" class="form-control" id="users-email" placeholder="Email Address">
			  	</div>			
				
				
			</div>
			
			<div class="row">
				
				
				<div class="col-sm-6 form-group">
			    	<label for="users-password1">Password</label>
			    	<input name="password1" type="password" class="form-control" id="users-password1" placeholder="Password">
				</div>
				<div class="col-sm-6 form-group">
			    	<label for="users-password2">Retype Password</label>
			    	<input name="password2" type="password" class="form-control" id="users-password2" placeholder="Retype Password">
				</div>				
				
				
			</div>						
			
			<div class="row">
				
			  <div class="col-sm-12 form-group">
			    <label for="exampleInputFile">Avatar</label>
			    <input type="file" id="exampleInputFile">
			    <p class="help-block">Upload your avatar image</p>
			  </div>				
				
				
			</div>

			<div class="row">
				<div class="col-sm-12 form-group">
					<button type="submit" class="btn btn-default pull-right">Add User</button>
				</div>	
			</div>
			  			  			  


			  
			</form>			
			
			
			
		</div>		
		
		
	</div>
      


      
