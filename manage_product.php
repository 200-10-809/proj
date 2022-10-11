<?php
require('top.inc.php');

$categories_id='';
$name='';
$mrp='';
$price='';
$qty='';
$image='';
$description='';
$meta_title='';
$msg='';
$image_required='required';
if(isset($_GET['id']) && $_GET['id']!=''){
	$image_required='';
    $id=get_safe_value($conn,$_GET['id']);
    $res=mysqli_query($conn,"select * from products where id='$id'");
    $check=mysqli_num_rows($res);
    if($check>0){
        $row=mysqli_fetch_assoc($res);
        $categories_id=$row['categories_id'];
		$name=$row['name'];
		$mrp=$row['mrp'];
		$price=$row['price'];
		$qty=$row['qty'];
		$description=$row['description'];
		$meta_title=$row['meta_title'];
    }else{
        header('location:product.php');
        die(); 
    }
}


if(isset($_POST['submit'])){
    $categories_id=get_safe_value($conn,$_POST['categories_id']);
	$name=get_safe_value($conn,$_POST['name']);
	$mrp=get_safe_value($conn,$_POST['mrp']);
	$price=get_safe_value($conn,$_POST['price']);
	$qty=get_safe_value($conn,$_POST['qty']);
	$description=get_safe_value($conn,$_POST['description']);
	$meta_title=get_safe_value($conn,$_POST['meta_title']);

    $res=mysqli_query($conn,"select * from products where name='$name'");
    $check=mysqli_num_rows($res);
    if($check>0){
        if(isset($_GET['id']) && $_GET['id']!=''){
            $getData=mysqli_fetch_assoc($res);
            if($id==$getData['id']){

            }else{
                $msg="Product already Exist!";
            }
        }else{
            $msg="Product already Exist!!";
        }
       
    }
    if($msg==''){
            if(isset($_GET['id']) && $_GET['id']!=''){
				if($_FILES['image']['name']!=''){
					$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
					move_uploaded_file($_FILES['image']['temp_name'],'../media/product/');
					$update_sql="update products
					set categories_id='$categories_id',name='$name',mrp='$mrp',price='$price',qty='$qty',description='$description',meta_title='$meta_title',image='$image' where id='$id'";
				}else{
					$update_sql="update products 
					set categories_id='$categories_id',name='$name',mrp='$mrp',price='$price',qty='$qty',description='$description',meta_title='$meta_title' where id='$id'";
				}
                mysqli_query($conn,$update_sql);
            }else{
				$image=rand(111111111,999999999).'_'.$_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['temp_name'],'../media/product/');
                mysqli_query($conn,"insert into 
				products(categories_id,name,mrp,price,qty,description,meta_title,status,image) values('$categories_id','$name','$mrp','$price','$qty','$description','$meta_title',1,'$image')");
            }
            header('location:product.php');
            die();
    }
    
}


?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Product</strong><small> Form</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-in">
									<label for="categories" class="form-control-label">Categories</label>
									<select name="categories_id" class="form-control" id="">
										<option>Select Categories</option>

										<?php
											$res=mysqli_query($conn,"select id,cat_name from categories order by cat_name asc");
											while($row=mysqli_fetch_assoc($res))
											if($row['id']==$categories_id){
												echo "<option selected value=".$row['id'].">".$row['cat_name']."</option>";
											}else{
												echo "<option value=".$row['id'].">".$row['cat_name']."</option>";
											}
										?>
									</select>
								</div>
								<div class="form-in">
									<label for="categories" class="form-control-label">Product Name</label>
									<input type="text" name="name" placeholder="Enter Product name" class="form-control" required value="<?php echo $name ?>">
								</div>

								<div class="form-in">
									<label for="categories" class="form-control-label">MRP</label>
									<input type="text" name="mrp" placeholder="Enter Product MRP" class="form-control" required value="<?php echo $mrp ?>">
								</div>

								<div class="form-in">
									<label for="categories" class="form-control-label">Price</label>
									<input type="text" name="price" placeholder="Enter Product Price" class="form-control" required value="<?php echo $price ?>">
								</div>

								<div class="form-in">
									<label for="categories" class="form-control-label">Quantity</label>
									<input type="text" name="qty" placeholder="Enter  Product Quantity" class="form-control" required value="<?php echo $qty ?>">
								</div>

								<div class="form-in">
									<label for="categories" class="form-control-label">Image</label>
									<input type="file" name="image"  class="form-control" <?php echo $image_required?>/>
								</div>

								<div class="form-in">
									<label for="categories" class="form-control-label">Description</label>
									<textarea type="text" name="description" placeholder="Enter Product Description" class="form-control"><?php echo $description ?></textarea>
								</div>

								<div class="form-in">
									<label for="categories" class="form-control-label">Meta Title</label>
									<textarea type="text" name="meta_title" placeholder="Enter Meta Title " class="form-control"><?php echo $meta_title ?></textarea>
								</div>


							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block ">
							        <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"><?php  echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
<?php
require('footer.inc.php');
?>
