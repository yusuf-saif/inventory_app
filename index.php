<?php 
session_start();
include('inc/header.php');
include 'Inventory.php';
$inventory = new Inventory();
$inventory->checkLogin();
?>
<title>Inventory Management System</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/common.js"></script>
<?php include('inc/container.php');?>
<div class="container">		
	<h2>Inventory Management System with Ajax</h2>	
	<?php include("menus.php"); ?> 
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
						<h3 class="panel-title">Current Inventory</h3>
					</div>						
				</div>
			</div>
                  <div class="panel-body">
				<div class="row"><div class="col-sm-12 table-responsive">
					<table id="inventoryDetails" class="table table-bordered table-striped">
						<thead><tr>
							<th>Product</th>      
							<th>Product Code</th>	
							<th>Starting Inventory</th> 
							<th>Inventory Recieved</th> 									
							<th>Inventory Shipped</th>
							<th>Inventory on Hand</th>								
						</tr></thead>
					</table>
				</div></div>
			</div>
		</div>
	</div>
</div>


