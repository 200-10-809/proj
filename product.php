<?php
require('top.inc.php');
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Products </h4>
				   <h4 class="box-link"><a href="manage_product.php">Add Product</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th width="2%">ID</th>
							   <th width="10%">Categories</th>
							   <th width="30%">Name</th>
							   <th width="10%">Image</th>
							   <th width="10%">MRP</th>
							   <th width="7%">Price</th>
							   <th width="7%">Qty</th>
							   <th width="26%"></th>
							</tr>
						 </thead>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>