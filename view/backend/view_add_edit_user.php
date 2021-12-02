<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->		
		<div class="card  border-primary">
			<div class="card card-header bg-primary text-white">Add edit user</div>
			<div class="card-body">
				<form method="post" action="<?php echo $form_action; ?>">
					
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">username</div>
							<div class="col-md-10">
								<input <?php if(isset($arr->us_name)) { ?> disabled <?php } ?> required type="text" name="us_name" value="<?php echo isset($arr->us_name) ? $arr->us_name:""; ?>" class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Password</div>
							<div class="col-md-10">
<input type="password" name="us_password" <?php if(isset($arr->us_name)) { ?> placeholder="Nhập password mới nếu muốn đổi password" <?php }else{ ?> required <?php } ?>  class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right"></div>
							<div class="col-md-10">
								<input type="submit" value="Process" class="btn btn-primary"> <input type="reset" value="Reset" class="btn btn-danger">
							</div>
						</div>
					</div>
					<!-- end form group -->
				</form>
			</div>
		</div>
		<!-- end card -->
	</div>
</div>