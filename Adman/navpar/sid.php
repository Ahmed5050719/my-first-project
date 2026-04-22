<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="
			  
                      <?php
					    
						if($status=="dashpoard"){
							echo "active";

						}

					 
					 ?>

			">
				
			
			<a href="dashpoard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			
			</li><li class="
			
			      <?php
					    
						if($status=="products"){
							echo "active";

						}

					 
					 ?>
			
			
			"><a href="products.php"><em class="fa fa-dashboard">&nbsp;</em> products</a></li>

			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

            
		</ul>
	</div><!--/.sidebar-->