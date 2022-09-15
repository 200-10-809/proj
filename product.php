
<?php
require('top.inc.php');

if(isset($_GET['type']) && $_GET['type']!=''){
	$type=get_safe_value($conn,$_GET['type']);
	if($type=='status'){
		$operation=get_safe_value($conn,$_GET['operation']);
		$id=get_safe_value($conn,$_GET['id']);
		if($operation=='active'){
			$status='1';
		}
		else{
			$status='0';
		}
		$update_status_sql="update products set status='$status' where id='$id'";
		mysqli_query($conn,$update_status_sql);
	}

	if($type=='delete'){
		$id=get_safe_value($conn,$_GET['id']);
		$delete_sql="delete from products where id='$id'";
		mysqli_query($conn,$delete_sql);
	}
}


$sql="select * from products order by id desc";
$res=mysqli_query($conn,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Product</h4>
				   <h4 class="box-link"><a href="manage_product.php">Add Products</a> </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th>ID</th>
							   <th>categories_id</th>
							   <th>name</th>
							   <th>mrp</th>
							   <th>price</th>
							   <th>qty</th>
							   <th>image</th>
							   <th>description</th>
							   <th>meta_title</th>
							   <th>Status</th>
							  
							</tr>
						 </thead>
						 <tbody>
							<?php 
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['categories_id']?></td>
							   <td><?php echo $row['name']?></td>
							   <td><?php echo $row['mrp']?></td>
							   <td><?php echo $row['price']?></td>
							   <td><?php echo $row['qty']?></td>
							   <td><img src="../media/product<?php echo $row['image']?>"/></td>
							   <td><?php echo $row['description']?></td>
							   <td><?php echo $row['meta_title']?></td>
							   
							   <td>
								<?php
									if($row['status']==1)
									{
										echo " <span class='badge badge-complete'><a href='?type=status&operation=deactive&id=".$row['id']."'>Active</a></span>&nbsp;";
									}
									else
									{
										echo "<span class='badge badge-pending'><a href='?type=status&operation=active&id=".$row['id']."'>Dective</a></span>&nbsp;";
									}
										echo "&nbsp;<span class='badge badge-edit'><a href='manage_product.php ?id=".$row['id']."'>Edit</a></span>&nbsp;";
										echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								?>
							</td>
							</tr>
							<?php } ?>
						 </tbody>
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
<?php
require('footer.inc.php');
?>