<!-- SIDEBAR -->
<div class="container">

	<!-- MAIN -->
	<div class="col-sm-9 col-md-12 main">
		<h1 class="page-header">Dashboard</h1>

		<h2 class="sub-header">Section title</h2>

		<section class="table-responsive alerts-table-container">

		<!-- Start of the table. -->
		<table class="table table-striped alerts-table">
				
			<!-- Table header displaying the column headers. -->
			<thead>
				<tr>
					<?php
						/*
							Spit out all the keys from the first element of the
							alert array into the table header.
						*/
						foreach( $alerts[0] as $key => $value )
						{ ?>
							<th>
								<?php echo $key; ?>
							</th>
						<?php
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
					?>
						<tr>

						<?php
						foreach( $alert as $property )
						{ ?>
							<td>
								<?php echo $property;?>
							</td>
						<?php } ?>

						</tr>

					<?php } ?>

			</tbody>
			<!-- End of the main table. --> 

		</table>
		<!-- End of the entire table -->

	</section>
	<!-- End alerts-table-container -->

</div>
<!-- End of container -->

<!-- admin.js -->
<script type="text/javascript" src="/js/admin.js"></script>
