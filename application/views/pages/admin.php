<!-- SIDEBAR -->
<div class="container">
  

	<!-- MAIN -->
    <div class="col-sm-9 col-md-12 main">
      <h1 class="page-header">Dashboard</h1>
      <div class="row placeholders">
		
      </div>

      <h2 class="sub-header">Section title</h2>
      <div class="table-responsive">

		<!-- Start of the table. -->
        <table class="table table-striped">
			
				<!-- Table header displaying the column headers. -->
					<thead>
						<tr>
							<?php
							/*
								Spit out all the keys from the first element of the
								alert array into the table header.
							*/
								foreach( $alerts[0] as $key => $value )
								{
									echo '<th>';
									echo $key;
									echo '</th>';
								}
							?>
						</tr>
					</thead>

					<!-- Start of the main table. -->
					<tbody>

						<?php
							/* Fill the main table with alerts. */
							foreach( $alerts as $alert )
							{	
								//open the table.
								echo '<tr>';

								foreach( $alert as $property )
								{	
									echo '<td>';
									echo $property;
									echo '</td>';
								}

								//close the table.
								echo '</tr>';
							}
						?>

					</tbody>
					<!-- End of the main table. --> 

				</table>
				<!-- End of the entire table -->

			</div>
		</div>
	</div>
</div>

<!-- admin.js -->
<script type="text/javascript" src="/js/admin.js"></script>
