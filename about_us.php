<?php
require('top.inc.php');
?>

<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-header"><strong>About</strong> <small> Us</small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   
								
								<div class="form-in">
									<label for="categories" class=" form-control-label">Information</label>
									<textarea name="description" placeholder="Enter Information" class="form-control" required></textarea>
								</div>
								
								
							   <button  name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span>Submit</span>
							   </button>
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