<div class="container">
	<div class="row">

		<!-- Community FAQs and Rules -->
		<div class="col-md-4">
			<div class="panel panel-default">
                 <div class="panel-body">
                 		<h2>Community Home</h2>
                 		<hr>
                             Do onto others as you would like others to do onto you.
                 </div>
             </div>
		</div>

		<!-- This column is for Announcements, User Guides, and Q&A panels -->
		<div class="col-md-8">

			<!-- Community Announcements Panel -->
			<div class="panel panel-info">
		  		<div class="panel-heading">

		  			<!-- Title and link to the Announcements page -->
		    		<h3 class="panel-title"><a href="#announcements">Community Announcements</a></h3>
		  		</div>

		  		<div class="panel-body">
		    		Right now we are working on creating the site. More specifically I am working on the community related pages!

		    		<br>
		    		<button class="btn btn-default commBtn" type="button">Announcements</button>
		    			<a class="btn btn-default commBtn" href="<?php  echo base_url(); ?>index.php/announcements/home"> role="button">Link</a>
		  		</div>
			</div>

			<!-- User Guides Panel -->
			<div class="panel panel-info">
	  			<div class="panel-heading">

	  				<!-- Title and link to the User Guides page -->
	    			<h3 class="panel-title"><a href="#community_board_user_guides">Community User Guides</a></h3>
	  			</div>

	  			<div class="panel-body">
	    			Our User Guides are full of helpful tips by other members of our community. Come check them out and learn more!

	    			<br>
	    			<button class="btn btn-default commBtn" type="button">User Guides</button>
	    			       <a class="btn btn-default commBtn" href="<?php  echo base_url(); ?>index.php/community_board_user_guides/guides"> role="button">Link</a>
	  			</div>
	  		</div>

	  		<!-- Q & A Panel -->o
	  		<div class="panel panel-info">
	  			<div class="panel-heading">

	  				<!-- Title and link to the Q & A page -->
	    			<h3 class="panel-title"><a href="#community_board_forum">Community Q &amp; A Forums</a></h3>
	  			</div>

		  		<div class="panel-body">
		    		The Community Q &amp; A Forums are a great place to ask questions and get answers from people in the community.

		    		<br>
		    		<button class="btn btn-default commBtn" type="button">Q &amp; A Forums</button>
		    				<a class="btn btn-default" href="<?php  echo base_url(); ?>index.php/community_board_home_forums/forums"> role="button">Link</a>
		  		</div>
		  	</div>
		</div>

	</div><!-- /.row -->
</div><!-- /.container -->
		
		
<!-- community_board_home.js -->
<script type="text/javascript" src="/js/community_board_home.js"></script>