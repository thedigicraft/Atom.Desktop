<!-- Taskbar -->
<footer id="taskbar">

	<div id="taskbar-tasks">
		
	    <a id="btn-clock" class="btn btn-taskbar" href="#">
	         <i class="fa fa-clock-o"></i> Clock
	    </a>	
		
	</div>

    

    <div class="pull-right">

        <a id="btn-user" class="btn btn-taskbar" href="#"><i class="fa fa-user"></i></a>
        <a id="btn-users" class="btn btn-taskbar" href="#"><i class="fa fa-users"></i></a>
		<a id="btn-rss" class="btn btn-taskbar" href="#"><i class="fa fa-rss"></i></a>		
		<a id="btn-update" class="btn btn-taskbar" href="#"><i class="fa fa-columns"></i></a>
				
		<a id="btn-console" class="btn btn-taskbar" href="#"><i class="fa fa-terminal"></i></a>


     
    </div>

</footer><!-- END taskbar -->

<div id="taskbar-user">
	
	<div class="btn-group dropup">
		
		<a class="btn btn-taskbar dropdown-toggle" data-toggle="dropdown">
			<img class="img-thumbnail" src="uploads/avatars/<?php echo $user['avatar']; ?>">
		</a>
	
		<ul class="dropdown-menu dropdown-menu-left">
			<li><a href="#"><i class="fa fa-desktop"></i> <strong>Workspaces</strong></a></li>
			<li class="divider"></li>
			<?php load_workspaces($dbc, $user['id']); ?>
			<li class="divider"></li>
			<li><a href="?workspace=1">Global Default</a></li>
		</ul>
	       
	 </div>	
	
</div>
