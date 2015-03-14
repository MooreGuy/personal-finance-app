
<div class="container" >

	<div class="row title">
		<div class="col-md-12">	
			<h1 class="page-header">Community Forums</h3>	
		</div>

		<div class="col-md-12">
			<p>Welcome to the Community Forums. Here you will find user posts that you can comment on. </p>
		</div>
	</div> <!-- END row -->

	<div class="row tags">
		<div class="col-md-12">	
			<!-- Categories list -->
			<h3 class>Categories</h3>	
			<ul class="nav nav-tabs" role="tablist">
			  <li role="presentation" class="active"><a href="#transport" role="tab" data-toggle="tab">Transport</a></li>
			  <li role="presentation"><a href="#food" role="tab" data-toggle="tab">Food</a></li>
			  <li role="presentation"><a href="#phone" role="tab" data-toggle="tab">Phone</a></li>
			  <li role="presentation"><a href="#entertainment" role="tab" data-toggle="tab">Entertainment</a></li>
			  <li role="presentation"><a href="#housing" role="tab" data-toggle="tab">Housing</a></li>
			  <li role="presentation"><a href="#utilities" role="tab" data-toggle="tab">Utilities</a></li>
			  <li role="presentation"><a href="#travel" role="tab" data-toggle="tab">Travel</a></li>
			  <li role="presentation"><a href="#general" role="tab" data-toggle="tab">General</a></li>
			  <button class="btn btn-success pull-right add-new-post-btn" data-toggle="modal" data-target="#addForumPostModal">Add new post</button>
			</ul>
		</div>

		<div class="col-md-12 tab-content">

			<!-- Panel group that holds all of the panels for each post. This group of panels should switch when the active category tag switches-->
			<!-- Begin Transport Tab-->
			<div class="panel-group tab-pane active" aria-multiselectable="true" id="transport" role="tabpanel">

				<div class="container">

					<!-- Each Row contains a post-->
					<div class="row" data-post='1'>
						<!-- Wrapper for the up/down vote box-->
						<div class="col-md-1 post-vote-wrapper">
							<div class="row up-vote-row">
								<!-- The data-post should be the id of the post -->
								<div class="col-md-1 up-vote-wrapper" data-post='1'>
									<span class="glyphicon glyphicon-chevron-up vote-neutral"></span>
								</div>
							</div>

							<div class="row vote-count-row" data-post='1'>
								<div class="col-md-1 positive-count-wrapper">
									<span class="positive-vote-count">2145</span>
								</div>
							</div>

							<div class="row down-vote-row">
								<div class="col-md-1 down-vote-wrapper" data-post='1'>
									<span class="glyphicon glyphicon-chevron-down vote-neutral"></span>
								</div>
							</div>
						</div>

						<!-- Post Wrapper-->
						<div class="col-md-11 post-wrapper">
						  	<!-- Post Panel -->
							<div class="panel panel-default forums-panel">

						    	<div class="panel-heading" role="tab">
						      		<h4 class="panel-title">
						      			<!-- data-post of the link should be the id of the post in the DB-->
						        		<a class="header-link-collapse" aria-expanded="true" data-post="1">Bus tricket prices dropped!</a>

						        		<span class="badge pull-right">3</span>

						        		<a href="#" class="edit-post pull-right" data-toggle="modal" data-target="#editForumPostModal" data-post="1">Edit Post</a>
						      		</h4>
						    	</div>

						    	<!-- Add the id of the post as data-post on the panel-body -->
						    	<div class="panel-collapse closed-panel" role="tabpanel" data-post="1">
						      		<div class="panel-body" data-post="1">Soon buses will be powered by electricity.</div>
						    	</div>
						  	</div><!-- END Post Panel-->
						</div><!-- END Post Wrapper-->
					</div><!-- END Row-->


					<!-- Each Row contains a post-->
					<div class="row" data-post='2'>
						<!-- Wrapper for the up/down vote box-->
						<div class="col-md-1 post-vote-wrapper">

							<div class="row up-vote-row">
								<div class="col-md-1 up-vote-wrapper" data-post='2'>
									<span class="glyphicon glyphicon-chevron-up vote-neutral"></span>
								</div>
							</div>

							<div class="row vote-count-row" data-post='2'>
								<div class="col-md-1 positive-count-wrapper">
									<span class="positive-vote-count">213</span>
								</div>
							</div>

							<div class="row down-vote-row">
								<div class="col-md-1 down-vote-wrapper" data-post='2'>
									<span class="glyphicon glyphicon-chevron-down vote-neutral"></span>
								</div>
							</div>
						</div>

						<!-- Post Wrapper-->
						<div class="col-md-11 post-wrapper">
							<!-- Post Panel -->
							<div class="panel panel-default forums-panel">

						    	<div class="panel-heading" role="tab">
						      		<h4 class="panel-title">
						      			<!-- data-post of the link should be the id of the post in the DB-->
						        		<a class="header-link-collapse" aria-expanded="true" data-post="2">How riding my bike to work saved me hundreds on gas last year!</a>

						        		<span class="badge pull-right">3</span>

						        		<a href="#" class="edit-post pull-right" data-toggle="modal" data-target="#editForumPostModal" data-post="2">Edit Post</a>
						      		</h4>
						    	</div>

						    	<!-- Add the id of the post ass a data-post in the body-->
						    	<div class="panel-collapse closed-panel" role="tabpanel" data-post="2">
						      		<div class="panel-body" data-post="2">Gas is expensive. Ride your bike to work instead</div>
						    	</div>
						  	</div><!-- END Post Panel-->
						</div><!-- END Post Wrapper-->
					</div><!-- END Row-->

				</div><!-- END Container-->
			</div><!-- END Panel Group-->

			<!-- Begin Food Tab-->
			<div class="panel-group tab-pane" aria-multiselectable="true" id="food" role="tabpanel">

				<div class="container">

					<!-- Each Row contains a post-->
					<div class="row" data-post='3'>
						<!-- Wrapper for the up/down vote box-->
						<div class="col-md-1 post-vote-wrapper">

							<div class="row up-vote-row">
								<div class="col-md-1 up-vote-wrapper" data-post='3'>
									<!-- For the voting icons: Load from the users -->
									<span class="glyphicon glyphicon-chevron-up vote-neutral"></span>
								</div>
							</div>

							<div class="row vote-count-row" data-post='3'>
								<div class="col-md-1 positive-count-wrapper">
									<span class="positive-vote-count">45</span>
								</div>
							</div>

							<div class="row down-vote-row">
								<div class="col-md-1 down-vote-wrapper" data-post='3'>
									<span class="glyphicon glyphicon-chevron-down vote-neutral"></span>
								</div>
							</div>
						</div>

						<!-- Post Group Wrapper-->
						<div class="col-md-11 post-wrapper">
						  	<!-- Post Panel -->
							<div class="panel panel-default forums-panel">

						    	<div class="panel-heading" role="tab">
						      		<h4 class="panel-title">
						      			<!-- data-post of the link should be the id of the post in the DB-->
						        		<a class="header-link-collapse" aria-expanded="true" data-post="3">There should be an In n Out in SLO!</a>

						        		<span class="badge pull-right">3</span>

						        		<a href="#" class="edit-post pull-right" data-toggle="modal" data-target="#editForumPostModal" data-post="3">Edit Post</a>
						      		</h4>
						    	</div>

						    	<!-- Add the id of the post ass a data-post in the body -->
						    	<div class="panel-collapse closed-panel" role="tabpanel" data-post="3">
						      		<div class="panel-body" data-post="3">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						      			Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
						    	</div>
						  	</div><!-- END Post Panel-->
						</div><!-- END Post Group Wrapper-->
					</div><!-- END Row-->

				</div><!-- END Container-->
			</div>

			<!-- Begin Phone Tab-->
			<div class="panel-group tab-pane" aria-multiselectable="true" id="phone" role="tabpanel">
			</div>

			<!-- Begin Entertainment Tab-->
			<div class="panel-group tab-pane" aria-multiselectable="true" id="entertainment" role="tabpanel">
			</div>

			<!-- Begin Housing Tab-->
			<div class="panel-group tab-pane" aria-multiselectable="true" id="housing" role="tabpanel">
			</div>

			<!-- Begin Utilities Tab-->
			<div class="panel-group tab-pane" aria-multiselectable="true" id="utilities" role="tabpanel">
			</div>

			<!-- Begin Travel Tab-->
			<div class="panel-group tab-pane" aria-multiselectable="true" id="travel" role="tabpanel">
			</div>

			<!-- Begin General Tab-->
			<div class="panel-group tab-pane" aria-multiselectable="true" id="general" role="tabpanel">
			</div>
		</div>
	</div> <!-- END row -->
</div><!-- END container-->

<!-- community_board_forums.js -->
<script type="text/javascript" src="/js/community_board_forums.js"></script>
