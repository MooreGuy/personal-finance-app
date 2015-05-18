
<!-- Delete Category info Modal -->
<div class="modal fade" id="deleteCatModal" tabindex="-1" role="dialog" aria-labelledby="deleteCatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      	<div class="modal-content">
        	<div class="modal-header">
        		<h2 class="modal-title" id="deleteCatModalLabel">Delete category and expenses</h2>
      		</div>
      		
        	<div class="modal-body">
        		<div class="contianer">
        			<div class="row">
        				<div class="col-md-12 deleteCatExpenseText">
        					<label>Category:</label>
        					<p class="deleteCategoryTitle"></p>

        				
        					<ul class="list-group delete-category-list" data-category="">
								<li class="list-group-item row">
									<label class='col-md-6'>Expense</label><label class='col-md-2 expenseCostTitle'>Cost</label><label class='col-md-3 expenseOccurenceTitle'>Occurence</label>
								</li>

							</ul>
					
        				</div>
        			</div>
        		</div>

        	</div>
      		
      		<div class="modal-footer">
    			<button type="button" class="btn btn-default pull-left deleteCat" data-dismiss="modal">Close</button>
    			<button type="button" class="btn btn-danger">Delete</button>
  			</div>
    	</div>
  	</div>
</div>

<!-- Edit Category info Modal -->
<div class="modal fade" id="editCatModal" tabindex="-1" role="dialog" aria-labelledby="editCatModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      	<div class="modal-content">
        	<div class="modal-header">
        		
        		<h2 class="modal-title" id="editCatModalLabel">Edit a Category</h2>
      		</div>
      		
        		<div class="container">
							<h4>Category:</h4>
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" class="form-control" placeholder= "" id="edit-category-title" aria-describedby="edit-category-title">
									</div>
								</div>
							</div>	
						</div>
					
					<div class="container expense-container">
						<h4 class="editCatExpense">Expenses:</h4><label class="error" id="editExpenseTitle-error" for="title"></label>
					
						
						<div class='row'>
							<div class="col-md-6">
								//List of expenses
							</div>
						</div>
						
					</div>
      		
      		<div class="modal-footer">
    			<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
    			<button type="button" class="btn btn-primary">Save</button>
  			</div>
    	</div>
  	</div>
</div>
		 
<!-- Add Category Modal -->
<div class="modal fade" id="addCatModal" tabindex="-1" role="dialog" aria-labelledby="addCatModal" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="addCatForm">
				<div class="modal-header">
					
					<h2 class="modal-title" id="addCatModalTitle">Add a Category</h2>
				</div>

						<div class="container">
							<h4>Category:</h4>
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" class="form-control" placeholder= "Category" id="category-title" aria-describedby="category-title">
									</div>
								</div>
							</div>	
						</div>
					
					<div class="container expense-container">
						<h4 class="addCatExpense">Expenses:</h4><label class="error" id="addExpenseTitle-error" for="title"></label>
						<span class="glyphicon glyphicon-plus addExpenseToForm"></span>
						
						<div class='row'>
							<div class="col-md-6 newExpenseForCat">
								
							</div>
						</div>
						
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default pull-left closeAddCat" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-success addCatAndExpenses">Add</button>
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



		
<div class="container user_profile_wrapper">

		<div class="col-md-4">

			<!-- User Profile Information Section -->
			<div class="panel panel-default">
			  	<div class="panel-body profile-info-section">

			    	<?php echo '<span id="usersFirstName">' . $user_data[0]['first_name'] . ' </span> <span id="usersLastName">' . $user_data[0]['last_name'] . '</span>'; ?>
			    	<?php echo '<span><a id="editUserProfileData" class="pull-right" data-toggle="modal" data-target="#editUserProfileModal">Edit</a></span>'; ?>
			    	<hr class='profile-info-hr'>

					<?php	
					//Fill in the rest of the user data.

					//remove the first and last name from the array since we already displayed those.
					unset($user_data[0]['first_name'], $user_data[0]['last_name']);
					
					

					foreach ($user_data[0] as $key => $user) {
						if($key != 'account_creation_date'){
							echo '<label for=' . $key . '>' . ucfirst($key) . ':</label>';
							echo '<p id="' . $key .'">' . $user . '</p>';
						}else{
							echo '<label for=' . $key . '>Account creation date:</label>';
							echo '<p id="' . $key . '">' . $user . '</p>';
						}
						
					}
					?>

			  	</div>
			</div>
		</div>


		<!-- User Profile Data Section -->
		
		<div class="col-md-8">
			<!--<div class="container">-->
			<h1 class="expense-title">Expenses</h1><button type="button" class="btn btn-success category-add" data-toggle="modal" data-target="#addCatModal">Add Category</button>
			<hr class="expense-hr">

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
					echo '<a class="categoryTitle" ';
						echo 'data-category="' .$expense[0]->type_id . '"';
						echo 'data-toggle="collapse" ';
						echo 'data-parent="#accordian' . $x . '" ';
						echo 'href="#collapseListGroup' . $x . '" ';
						echo 'aria-expanded="true" ';
						echo 'aria-controls="collapseListGroup' . $x . '">';

					//Header data here.
					echo ucfirst($key);

					echo '</a>';
					//Delete
					echo '<span class="glyphicon glyphicon-trash category-delete pull-right" data-toggle="modal" data-target="#deleteCatModal" data-category="'.$expense[0]->type_id.'"></span>';
					//Edit
					echo '<span class="pull-right"><a href="" data-toggle="modal" data-target="#editCatModal" data-category="'.$expense[0]->type_id.'">Edit</a></span>';
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

					//echo "<div class='container'>";
						//echo "<div class='row'>";
							//echo "<label class='col-md-3'>Title</label><label class='col-md-3'>Cost</label><label class='col-md-3'>Occurense</label>";
						//echo "</div>";
					//echo "</div>";

					echo '<ul class="list-group category-list container" data-category="'.$expense[0]->type_id.'">';
						echo '<li class="list-group-item row">';
							echo "<label class='col-md-6'>Expense</label><label class='col-md-2 expenseCostTitle'>Cost</label><label class='col-md-3 expenseOccurenceTitle'>Occurence</label>";
						echo "</li>";
					foreach( $expense as $item )
					{
						echo '<li class="list-group-item row" data-expenseId="'. $item->id .'">';

						//The name of the expense.
						echo '<span class="expense-name col-md-6">';
						//THIS IS WHAT THIS SHOULD BE NOT, TYPE. echo $item->name;
						echo ucfirst($item->title);
						echo '</span>';

						//The cost of the expense.
						echo '<span class="expense-cost col-md-3">';
						echo $item->cost;
						echo '</span>';

						//The interval of the expense
						echo '<span class="expense-interval col-md-3">';
						echo $item->interv; //This needs to be pretefied.
						echo '</span>';
						//echo $item->total_cost;
						echo '</li>';
					}
						//echo '<li class="list-group-item row">';
							//echo "<label class='col-md-6'>Total Cost:</label><label class='col-md-2 catTotalCost'>";
							//echo $expenses[$key]->total_cost;
							//echo "</label><label class='col-md-3 expenseOccurenceTitle'>Yearly</label>";
						//echo "</li>";
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

<script id="addExpenseTemplate" type="text/addExpenseTemplate">
<div class="expenseWrapper" data-expense=''>
	<form class="addCatExpenseForm" id="">
		
		<div class='col-md-4 title-col form-group'>
				<!--<label class="error" id="addExpenseTitle-error" for="title"></label>-->
				<input name='title' id="" type='text' class='form-control' placeholder='Title' data-expense='' value="">
		</div>

		<div class="col-md-4 form-group">
			<div class=' input-group'>
				<!--<label class="error" id="addExpenseAmount-error" for="amount"></label>-->
				<span class="input-group-addon" id="amount-addon">$</span>
				<input name='amount' id="" type='text' class='form-control' placeholder='Amount' data-expense='' value="">
			</div>
		</div>

		<div class='col-md-3 occurence-col form-group'>
			<!--<label class="error" id="addExpenseOccurence-error" for="occurence"></label>-->
			<select class='form-control' name='' id="" data-expense='' value="">
				<option selected disabled>Occurence</option>
				<option value='daily'>Daily</option>
				<option value='weekly'>Weekly</option>
				<option value='biweekly'>Bi-weekly</option>
				<option value='monthly'>Monthly</option>
				<option value='yearly'>Yearly</option>
			</select>	
		</div>
	</form>

	<div class='col-md-1 trash-col'>
		<span class="glyphicon glyphicon-trash deleteExpenseFromCat" data-expense=''></span>
	</div>
</div>
</script>

<script id="editExpenseTemplate" type="text/editExpenseTemplate">
<div class="expenseWrapper" data-expense=''>
	<form class="editCatExpenseForm" id="">
		
		<div class='col-md-4 title-col form-group'>
			<!--<label class="error" id="editExpenseTitle-error" for="title"></label>-->
			<input name='title' id="" type='text' class='form-control' placeholder='Title' data-expense='' value="">
		</div>

		<div class="col-md-4 form-group">
			<div class=' input-group'>
				<!--<label class="error" id="editExpenseAmount-error" for="amount"></label>-->
				<span class="input-group-addon" id="amount-addon">$</span>
				<input name='amount' id="" type='text' class='form-control' placeholder='Amount' data-expense='' value="">
			</div>
		</div>

		<div class='col-md-3 occurence-col form-group'>
			<!--<label class="error" id="editExpenseOccurence-error" for="occurence"></label>-->
			<select class='form-control' name='' id="" data-expense='' value="">
				<option selected disabled>Occurence</option>
				<option value='daily'>Daily</option>
				<option value='weekly'>Weekly</option>
				<option value='biweekly'>Bi-weekly</option>
				<option value='monthly'>Monthly</option>
				<option value='yearly'>Yearly</option>
			</select>	
		</div>
	</form>
	
	<div class='col-md-1 trash-col'>
		<span class="glyphicon glyphicon-trash deleteExpenseFromCat" data-expense=''></span>
	</div>
</div>
</script>

<script id="deleteCatTemplate" type="text/deleteCatTemplate">


	<li class="list-group-item row deleteCatRow" data-expenseId="">

					
		<span class="expense-name col-md-6"></span>

						
		<span class="expense-cost col-md-2"></span>

						
		<span class="expense-interval delete-expense-interv col-md-3"></span>
						
	</li>
				
						
</script>
<!-- user_profile.js -->
<script type="text/javascript" src="/js/user_profile.js"></script>
