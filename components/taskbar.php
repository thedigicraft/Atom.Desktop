<!-- Taskbar -->
<footer id="footer">

    <a id="btn-clock" class="btn btn-taskbar" href="#">
         <i class="fa fa-spinner"></i> Clock
    </a>    

    <div class="pull-right">

        <a id="btn-user" class="btn btn-taskbar" href="#"><i class="fa fa-user"></i></a>
        <a id="btn-users" class="btn btn-taskbar" href="#"><i class="fa fa-users"></i></a>
		<a id="btn-rss" class="btn btn-taskbar" href="#"><i class="fa fa-rss"></i></a>		
		<a id="btn-update" class="btn btn-taskbar" href="#"><i class="fa fa-columns"></i></a>
				
		<a id="btn-console" class="btn btn-taskbar" href="#"><i class="fa fa-terminal"></i></a>

		<div class="btn-group dropup">
			
			<a class="btn btn-taskbar dropdown-toggle" data-toggle="dropdown"><i class="fa fa-desktop"></i></a>

			<ul class="dropdown-menu pull-right">
				<li><a href="#"><i class="fa fa-desktop"></i> <strong>Workspaces</strong></a></li>
				<li class="divider"></li>
				<?php load_workspaces($dbc, $user['id']); ?>
				<li class="divider"></li>
				<li><a href="?workspace=1">Global Default</a></li>
			</ul>
		       
         </div>
     
    </div>

</footer><!-- END taskbar -->