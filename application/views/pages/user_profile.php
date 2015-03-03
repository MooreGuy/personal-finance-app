<div class="container user_profile_wrapper">

		<!-- Edit Category info Modal -->
		<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		      	<div class="modal-content">
		        	<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        		<h4 class="modal-title" id="editModalLabel">Car</h4>
		      		</div>
		      		<div class="modal-body">
		        		<form class="edit-modal-form">
						  	<div class="form-group">
						    	<div class="input-group">
							  		<span class="input-group-addon" id="amount-addon">$</span>
							  		<input type="text" class="form-control" placeholder="Amount" aria-describedby="amount-addon">
								</div>
						  	</div>

						  	<div class="form-group">
						    	<label for="exampleInputPassword1">Password</label>
						    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						  	</div>
						</form>
		      		</div>
		      		<div class="modal-footer">
	        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        			<button type="button" class="btn btn-primary">Save changes</button>
	      			</div>
		    	</div>
		  	</div>
		</div>
		
		<div class="col-md-4">
			<!-- User Profile Information Section -->
			<!-- TODO: Affix this panel -->
			<div class="panel panel-default">
			  	<div class="panel-body profile-info-section">

			    	<h2>Mister Sprinkles</h2>
			    	<hr>

			    	<label for="user-email">Email:</label> 
			    	<div id="user-email"> sprinkles@gmail.com</div>
			    	<br>
			    	<label for="user-name">User Name:</label> 
			    	<div id="user-name">Mister Sprinkles</div>
			    	<br>
			    	<label for="user-password">Password:</label> 
			    	<div id="user-password">********</div>
			  	</div>
			</div>
		</div>


		<!-- User Profile Data Section -->
		<div class="col-md-8">
			<div class="continer">

				<!-- Controls for the user profile -->
				<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default userProf-control-panel">
							<div class="panel-body">
								Something
							</div>
						</div>
					</div>
				</div>

				<!-- Each row can hold up to 2 categories-->
				<div class="row">
					
					<!-- A single category -->
					<div class="col-md-6">
						<div class="panel-group" id="accordian1" role="tablist" aria-multiselectable="true">
						    <div class="panel panel-info">
						      <div class="panel-heading category-heading" role="tab" id="collapseListGroupHeading1">

						      	<!-- Title of category and Edit link -->
						        <h4 class="panel-title">
						          <a class="" data-toggle="collapse" data-parent="#accordian1" href="#collapseListGroup1" aria-expanded="true" aria-controls="collapseListGroup1">
						            Car
						          </a> 
						          <span class="pull-right"><a href="#" data-toggle="modal" data-target="#editModal">Edit</a></span>
						        </h4>
						      </div>
						      <div id="collapseListGroup1" class="panel-collapse category-list-collapse collapse in" role="tabpanel" aria-labelledby="collapseListGroupHeading1" aria-expanded="true">
					      	
					      		<!-- List of expences in the category -->
						        <ul class="list-group category-list container">
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
 								  <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						        </ul>
						        
						      </div>
						    </div>
						</div>	
					</div>

					<!-- A single category -->
					<div class="col-md-6">
						<div class="panel-group" id="accordian2" role="tablist" aria-multiselectable="true">
						    <div class="panel panel-info">
						      <div class="panel-heading category-heading" role="tab" id="collapseListGroupHeading2">
						        <h4 class="panel-title">
						          <a class="" data-toggle="collapse" data-parent="#accordian2" href="#collapseListGroup2" aria-expanded="true" aria-controls="collapseListGroup2">
						            Car
						          </a> 
						          <span class="pull-right"><a href="#">Edit</a></span>
						        </h4>
						      </div>
						      <div id="collapseListGroup2" class="panel-collapse category-list-collapse collapse in" role="tabpanel" aria-labelledby="collapseListGroupHeading2" aria-expanded="true">
					      	
						        <ul class="list-group category-list container">
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
 								  <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						        </ul>
						        
						      </div>
						    </div>
						</div>	
					</div>

					
				</div><!-- /.row -->

				<!-- Each row can hold up to 2 categories-->
				<div class="row">
					<!-- A single category -->
					<div class="col-md-6">
						<div class="panel-group" id="accordian3" role="tablist" aria-multiselectable="true">
						    <div class="panel panel-info">
						      <div class="panel-heading category-heading" role="tab" id="collapseListGroupHeading3">

						      	<!-- Title of category and Edit link -->
						        <h4 class="panel-title">
						          <a class="" data-toggle="collapse" data-parent="#accordian3" href="#collapseListGroup3" aria-expanded="true" aria-controls="collapseListGroup3">
						            Car
						          </a> 
						          <span class="pull-right"><a href="#">Edit</a></span>
						        </h4>
						      </div>
						      <div id="collapseListGroup3" class="panel-collapse category-list-collapse collapse in" role="tabpanel" aria-labelledby="collapseListGroupHeading3" aria-expanded="true">
					      	
					      		<!-- List of expences in the category -->
						        <ul class="list-group category-list container">
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
 								  <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						        </ul>
						        
						      </div>
						    </div>
						</div>	
					</div>

					<!-- A single category -->
					<div class="col-md-6">
						<div class="panel-group" id="accordian4" role="tablist" aria-multiselectable="true">
						    <div class="panel panel-info">
						      <div class="panel-heading category-heading" role="tab" id="collapseListGroupHeading4">

						      	<!-- Title of category and Edit link -->
						        <h4 class="panel-title">
						          <a class="" data-toggle="collapse" data-parent="#accordian4" href="#collapseListGroup4" aria-expanded="true" aria-controls="collapseListGroup4">
						            Car
						          </a> 
						          <span class="pull-right"><a href="#">Edit</a></span>
						        </h4>
						      </div>
						      <div id="collapseListGroup4" class="panel-collapse category-list-collapse collapse in" role="tabpanel" aria-labelledby="collapseListGroupHeading4" aria-expanded="true">
					      	
					      		<!-- List of expences in the category -->
						        <ul class="list-group category-list container">
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
 								  <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-7">Bootply</span><span class="expense-cost col-md-2">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						        </ul>
						        
						      </div>
						    </div>
						</div>	
					</div>
					
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div>

</div><!-- /.container -->

<!-- user_profile.js -->
<script type="text/javascript" src="/js/user_profile.js"></script>