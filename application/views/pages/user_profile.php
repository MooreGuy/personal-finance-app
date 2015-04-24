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
				<div class="modal-header">
		    		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h2 class="modal-title" id="addCatModal">Add A Category</h2>
				</div>

		    			<div class="container">
		    				<h3>Title</h3>
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
	        	</div>
	        </div>
		</div>
	</div>
</div>

		<div class="col-md-4">

			<!-- User Profile Information Section -->
			<div class="panel panel-default">
			  	<div class="panel-body profile-info-section">

			    	<h2><?php echo $user_data[0]['first_name'] . ' ' . $user_data[0]['last_name'];?></h2>
			    	<hr>

					<?php	
					//Fill in the rest of the user data.

					//remove the first and last name from the array since we already displayed those.
					unset($user_data[0]['first_name'], $user_data[0]['last_name']);
					
					foreach( $user_data[0] as $key => $value )
					{
						echo '<label for="' . $key . '">' . ucfirst($key) . ':</label>';

						echo '<div id="' . $key . '">' . $value . '</div>';

					}
					?>

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
		<h1>User Expenses</h1>
		<div class="col-md-8">
			<!--<div class="container">-->
			

			<?php
			$x = 0;
			
			//Check to make sure there are expenses.
			if( !empty($expenses) )
			{
				foreach( $expenses as $key => $expense )
				{

					//Create a row for every two columns.
					if( $x % 2 == 0 )
					{
						echo '<div class="row">';
					}
					echo '<div class="col-md-6">';
					echo '<div class="panel-group" id="accordian' . $x . '" role="tablist" aria-multiselectable="true">';

					//Panel info header.
					echo '<div class="panel panel-info">';
					echo '<div class="panel-heading category-heading" role="tab" id="collapseListGroupHeading' . $x . '">';
					echo '<h4 class="panel-title">';
					echo '<a class="" ';
						echo 'data-toggle="collapse" ';
						echo 'data-parent="#accordian' . $x . '" ';
						echo 'href="#collapseListGroup' . $x . '" ';
						echo 'aria-expanded="true" ';
						echo 'aria-controls="collapseListGroup' . $x . '">';

					//Header data here.
					echo ucfirst($key);

					echo '</a>';
					//Edit
					echo '<span class="pull-right"><a href="" data-toggle="modal" data-target="#editModal">Edit</a></span>';
					echo '</h4>';
					echo '</div>'; //Panel-heading
				
					/*
						Echo out expenses in an unordered list.
					*/
					echo '<div id="collapseListGroup' . $x . '" ';
						echo 'class="panel-collapse category-list-collapse collapse in" ';
						echo 'role="tabpanel" ';
						echo 'aria-labeldby="collapseListGroupHeading' . $x . '" ';
						echo 'aria-expanded="true">';

					echo '<ul class="list-group category-list container">';

					foreach( $expense as $item )
					{
						echo '<li class="list-group-item row">';

						//The name of the expense.
						echo '<span class="expense-name col-md-6">';
						//THIS IS WHAT THIS SHOULD BE NOT, TYPE. echo $item->name;
						echo ucfirst($item->type);
						echo '</span>';

						//The cost of the expense.
						echo '<span class="expense-cost col-md-3">';
						echo $item->cost;
						echo '</span>';

						//The interval of the expense
						echo '<span class="expense-interval col-md-2">';
						echo $item->interv; //This needs to be pretefied.
						echo '</span>';
						
						//HIDDEN
						echo '<span class="delete-expense-item">X</span>';
					
						echo '</li>';
					}

					echo '</ul>';
					echo '</div>'; //Panel-info header

					echo '</div>'; //trying random things. TODO: Find who this silly div belongs to.

					
					echo '</div>'; //Panel-group
					echo '</div>'; //column 6
					

					//Close the row every other column..
					if( $x % 2 == 1 )
					{
						echo '</div>';
						echo '<!-- closing row -->';
					}

					//Increment x for next panel.
					$x++;
					
				}
			}
			else
			{
				echo '<div class="alert alert-info" role="alert">';
				echo '<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>';
				echo ' You don\'t have any expenses, go ahead and add one.';
				echo '</div>';
			}
			?> 
				
			<?php //</div><!-- /.container -->?>
		</div>

</div><!-- /.container -->

<!-- user_profile.js -->
<script type="text/javascript" src="/js/user_profile.js"></script>
