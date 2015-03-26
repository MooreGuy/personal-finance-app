<div class="container user_profile_wrapper">

		<!-- Edit Category info Modal -->
		<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		      	<div class="modal-content">
		        	<div class="modal-header">
		        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        		<h4 class="modal-title" id="editModalLabel">Car</h4>
		      		</div>
		      		
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
		      		
		      		<div class="modal-footer">
	        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        			<button type="button" class="btn btn-primary">Save changes</button>
	      			</div>
		    	</div>
		  	</div>
		</div>
		 
<!-- Add Category Modal -->

	<div class="modal fade" id="addCatModal" tabindex="-1" role="dialog" aria-labelledby="addCatModal" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
		    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		    		<div class="container">
		    			<div class="row">
								<div class="col-md-6">
								<br />
		    					<h2 class="modal-title" id="addCatModal">Add A Category</h2>
		    				</div>
		    			</div>
		    		</div>
		      			<div class="container">
							<div class="row">
								<div class="col-md-6">
										<div class="input-group">
										<input type="text" class="form-control" placeholder= "Category Title" aria-describedby="amount-addon">
										</div>
								</div>
							</div>	
						</div>
					
					<div class="container">
						<h3>Expense</h3>
						<a><h4>New Expense</h4></a>
					</div>
					<div class="container">
						<div class="row">

								<div class="col-md-2">
								<form class="edit-modal-form">
								  	<div class="form-group">
								    	<div class="input-group">
											<input type="text" class="form-control" placeholder="Title" aria-describedby="amount-addon">
										</div>
								  	</div>
								</form>
								</div>
							
							<div class="col-md-2">
								<form class="edit-modal-form">
								  	<div class="form-group">
								    	<div class="input-group">
											<span class="input-group-addon" id="amount-addon">$</span>
									  		<input type="text" class="form-control" placeholder="Amount" aria-describedby="amount-addon">
										</div>
								  	</div>
								</form>
							</div>

							<div class="col-md-2">
								<form class="edit-modal-form">
								  	<div class="form-group">
								    	<div class="input-group">
											<select class="form-control">
												<option value="one" disabled selected>Recurrence</option> <!-- what can be inserted in this option so it is not blank and selects for nothing? --> 
									  			<option value="two">Daily</option>
									  			<option value="three">Weekly</option>
									  			<option value="four">Biweekly</option>
									  			<option value="five">Monthly</option>
									  			<option value="six">Yearly</option>
									  		</select>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div> <!-- closes container for 3 categories row -->
			 
			      	
		      		<div class="modal-footer">
	        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        			<button type="button" class="btn btn-success">Add</button>

					</div>
	    </div><!-- closes modal-content --> 
	</div> 
</div>
</div>
		<div class="col-md-4">

			<!-- User Profile Information Section -->
			<div class="panel panel-default">
			  	<div class="panel-body profile-info-section">

			    	<h2>Mister Sprinkles</h2>
			    	<hr>s

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

			<!-- User Category Add & Delete Section -->
			<div class="panel panel-default category-affix" data-spy='affix'>
			  	<div class="panel-body category-controls-section">

			    	<h4>Category Controls</h4>
			    	<hr>

			    	<button type="button" class="btn btn-success category-add" data-toggle="modal" data-target="#addCatModal">Add Category</button>
			    	<button type="button" class="btn btn-danger category-delete">Delete Category</button>
			  	</div>
			</div>
		</div>


		<!-- User Profile Data Section -->
		<div class="col-md-8">
			<div class="continer">

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
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
 								  <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name total-name col-md-6">Total</span><span class="expense-cost total-cost col-md-3">$10,000.00</span><span class="expense-orrurance total-occurance col-md-2">Yearly</span><span class="delete-expense-item"></span></li>
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
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
 								  <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name total-name col-md-6">Total</span><span class="expense-cost total-cost col-md-3">$10,000.00</span><span class="expense-orrurance total-occurance col-md-2">Yearly</span><span class="delete-expense-item"></span></li>
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
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
 								  <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name total-name col-md-6">Total</span><span class="expense-cost total-cost col-md-3">$10,000.00</span><span class="expense-orrurance total-occurance col-md-2">Yearly</span><span class="delete-expense-item"></span></li>
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
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
 								  <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name col-md-6">Bootply</span><span class="expense-cost col-md-3">$43.00</span><span class="expense-orrurance col-md-2">Monthly</span><span class="delete-expense-item"></span></li>
						          <li class="list-group-item row"><span class="expense-name total-name col-md-6">Total</span><span class="expense-cost total-cost col-md-3">$10,000.00</span><span class="expense-orrurance total-occurance col-md-2">Yearly</span><span class="delete-expense-item"></span></li>
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