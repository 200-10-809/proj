<?php
require('top.inc.php');
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>Product Form</strong></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   <div class="form-in">
									<label for="categories" class=" form-control-label">Categories</label>
									<select class="form-control" name="categories_id" id="categories_id" onchange="get_sub_cat('')" required>
										<option>Select Category</option>
									</select>
								</div>
								
								<div class="form-in">
									<label for="categories" class=" form-control-label">Sub Categories</label>
									<select class="form-control" name="sub_categories_id" id="sub_categories_id">
										<option>Select Sub Category</option>
									</select>
								</div>
								
								<div class="form-in">
									<label for="categories" class=" form-control-label">Product Name</label>
									<input type="text" name="name" placeholder="Enter product name" class="form-control" required value="">
								</div>
								
								<div class="form-in">
									<label for="categories" class=" form-control-label">MRP</label>
									<input type="text" name="mrp" placeholder="Enter product mrp" class="form-control" required value="">
								</div>
								
								<div class="form-in">
									<label for="categories" class=" form-control-label">Price</label>
									<input type="text" name="price" placeholder="Enter product price" class="form-control" required value="">
								</div>
								
								<div class="form-in">
									<label for="categories" class=" form-control-label">Qty</label>
									<input type="text" name="qty" placeholder="Enter qty" class="form-control" required value="">
								</div>
								
								<div class="form-in">
									<label for="categories" class=" form-control-label">Image</label>
									<input type="file" name="image" class="form-control" >
								</div>
								
								<div class="form-in">
									<label for="categories" class=" form-control-label">Short Description</label>
									<textarea name="short_desc" placeholder="Enter product short description" class="form-control" required></textarea>
								</div>
								
								<div class="form-in">
									<label for="categories" class=" form-control-label">Description</label>
									<textarea name="description" placeholder="Enter product description" class="form-control" required></textarea>
								</div>
								
								<div class="form-in">
									<label for="categories" class=" form-control-label">Meta Title</label>
									<textarea name="meta_title" placeholder="Enter product meta title" class="form-control"></textarea>
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">Submit</span>
							   </button>
							   <div class="field_error"></div>
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

