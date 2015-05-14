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
    			<button type="button" class="btn btn-primary">Save</button>
  			</div>
    	</div>
  	</div>
</div>
		 
<!-- Add Category Modal -->
<div class="modal fade" id="addCatModal" tabindex="-1" role="dialog" aria-labelledby="addCatModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?php echo base_url(); ?>/user_profile/add_category_form" method="post">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h2 class="modal-title" id="addCatModal">Add A Category</h2>
				</div>

						<div class="container">
							<h3>Title</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" class="form-control" placeholder= "OLD Category Title" aria-describedby="amount-addon">
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
								<div class="form-group">
									<div class="input-group">
										<input name="title" type="text" class="form-control" placeholder="Title" aria-describedby="amount-addon">
									</div>
								</div>
							</div>
							
							<div class="col-md-2">
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon" id="amount-addon">$</span>
										<input name="amount" type="text" class="form-control" placeholder="Amount" aria-describedby="amount-addon">
									</div>
								</div>
							</div>

							<div class="col-md-2">
								<div class="form-group">
									<div class="input-group">
										<select class="form-control" name="occurrence">
											<option value="daily">Daily</option>
											<option value="weekly">Weekly</option>
											<option value="biweekly">Biweekly</option>
											<option value="monthly">Monthly</option>
											<option value="yearly">Yearly</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- closes container for 3 categories row -->
			 
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-success">Add</button>
					</div>
				</div>
			</form>
        </div>
	</div>
</div>

<!-- Edit User Profile Info Modal-->
<div class="modal fade" id="editUserProfileModal" tabindex="-1" role="dialog" aria-labelledby="editUserProfileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      	<div class="modal-content">
        	<div class="modal-header">
        		
        		<div class="container">
        			<div class="row">
        				<div class="col-md-6 modal-col">
        					<h2 class="modal-title" id="editUserProfileModalLabel">Edit Profile Information</h2>
        				</div>
        			</div>
        		</div>
        		
      		</div>
      		
      		<div class="modal-body">
      			<div class="container">
					<div class="row">
		      			<div class="col-md-6 modal-col">
							<form id="editUserProfile-modal-form">
								<div class="form-group col-md-12 modal-col firstLast-name-formGroup">
							    	<div class="name-container pull-left">
								  		<label for="editUserFirstName">First Name:</label> <label id="editUserFirstName-error" class="error" for="editUserFirstName"></label>
								  		<input type="text" class="form-control" id="editUserFirstName" name="editUserFirstName" value="">
									</div>
							  	
							    	<div class="name-container pull-right">
								  		<label for="editUserLastName">Last Name:</label> <label id="editUserLastName-error" class="error" for="editUserLastName"></label>
								  		<input type="text" class="form-control" id="editUserLastName" name="editUserLastName" value="">
									</div>
							  	</div>

							  	<div class="form-group"> 
								  	<label for="editUserEmail">Email:</label> <label id="editUserEmail-error" class="error" for="editUserEmail"></label>
								  	<input type="text" class="form-control" id="editUserEmail" name="editUserEmail" value="">
							  	</div>

							  	<div class="form-group">
							  		<label for="editUserUsername">Username:</label> <label id="editUserUsername-error" class="error" for="editUserUsername"></label>
							    	<input type="text" class="form-control" id="editUserUsername"  name="editUserUsername" value="">
							  	</div>

							  	<div class="form-group">
							  		<label for="editUserPassword">New Password:</label> <label id="editUserPassword-error" class="error" for="editUserPassword"></label>
							  		<input type="password" class="form-control" id="editUserPassword"  name="editUserPassword" value="">						  		
							  	</div>

							  	<div class="form-group">
							  		<label for="currentUserPassword">Current Password:</label> <label id="currentUserPassword-error" class="error" for="currentUserPassword"></label>
							  		<input type="password" class="form-control" id="currentUserPassword"  name="currentUserPassword" value="">
							  	</div>
							</form>
		      			</div>	
		      		</div>
	      		</div>
      		</div>
      		
      		
        		
      		
      		<div class="modal-footer">
    			<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
    			<button type="button" class="btn btn-primary editUserProfileInfo">Save</button>
  			</div>
    	</div>
  	</div>
</div>

<!-- Success alert for when the user successfully updates thier profile information -->
<div class="update-profile-success-wrapper">
	<div class="well well-sm" id="update-profile-success">
		<span class="text-info success-text-info">Your profile has successfully been updated.</span>
	</div>
</div>

<!-- error alert for when the user fails updates thier profile information -->
<div class="update-profile-error-wrapper">
	<div class="well well-sm" id="update-profile-error">
		<span class="text-info error-text-info">Opps. Something went wrong. Please try again later.</span>
	</div>
</div>

<div class="container user_profile_wrapper">

		


		<div class="col-md-4">

			<!-- User Profile Information Section -->
			<div class="panel panel-default">
			  	<div class="panel-body profile-info-section">

			    	<?php echo '<span id="usersFirstName">' . $user_data[0]['first_name'] . ' </span> <span id="usersLastName">' . $user_data[0]['last_name'] . '</span>'; ?>
			    	<?php echo '<span><a id="editUserProfileData" class="pull-right" data-toggle="modal" data-target="#editUserProfileModal">Edit</a></span>'; ?>
			    	<hr>

					<?php	
					//Fill in the rest of the user data.

					//remove the first and last name from the array since we already displayed those.
					unset($user_data[0]['first_name'], $user_data[0]['last_name']);
					
					

					foreach ($user_data[0] as $key => $user) {
						if($key != 'account_creation_date'){
							echo '<label for=' . $key . '>' . ucfirst($key) . ':</label>';
							echo '<p id="' . $key .'">' . $user . '</p>';
						}else{
							echo '<label for=' . $key . '>Account cration date:</label>';
							echo '<p id="' . $key . '">' . $user . '</p>';
						}
						
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
		
		<div class="col-md-8">
			<!--<div class="container">-->
			<h1>Expenses</h1>
			<hr>

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
