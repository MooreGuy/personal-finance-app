
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
			  <li role="presentation" class="<?php echo $transportClass ?>"><a href="<?php echo base_url(); ?>community_board_forums/loadCatTabs?tab=transport">Transport</a></li>
			  <li role="presentation" class="<?php echo $foodClass ?>"><a href="<?php echo base_url(); ?>community_board_forums/loadCatTabs?tab=food">Food</a></li>
			  <li role="presentation" class="<?php echo $communicationsClass ?>"><a href="<?php echo base_url(); ?>community_board_forums/loadCatTabs?tab=communications">Communications</a></li>
			  <li role="presentation" class="<?php echo $entertainmentClass ?>"><a href="<?php echo base_url(); ?>community_board_forums/loadCatTabs?tab=entertainment">Entertainment</a></li>
			  <li role="presentation" class="<?php echo $housingClass ?>"><a href="<?php echo base_url(); ?>community_board_forums/loadCatTabs?tab=housing">Housing</a></li>
			  <li role="presentation" class="<?php echo $utilitiesClass ?>"><a href="<?php echo base_url(); ?>community_board_forums/loadCatTabs?tab=utilities">Utilities</a></li>
			  <li role="presentation" class="<?php echo $travelClass ?>"><a href="<?php echo base_url(); ?>community_board_forums/loadCatTabs?tab=travel">Travel</a></li>
			  <li role="presentation" class="<?php echo $generalClass ?>"><a href="<?php echo base_url(); ?>community_board_forums/loadCatTabs?tab=general">General</a></li>
			  <button class="btn btn-success pull-right add-new-post-btn" data-toggle="modal" data-target="#addForumPostModal">Add new post</button>
			</ul>
		</div>

		<div class="col-md-12 tab-content" id="tabContent">

			
			
		</div><!-- END Tab Content-->
	</div> <!-- END Tags row -->
</div><!-- END container-->

<!-- community_board_forums.js -->
<script type="text/javascript" src="/js/community_board_forums.js"></script>
