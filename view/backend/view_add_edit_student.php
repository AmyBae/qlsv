<div class="row justify-content-center">
	<div class="col-md-12">
		<!-- card -->		
		<div class="card  border-primary">
			<div class="card card-header bg-primary text-white">Add edit student</div>
			<div class="card-body">
				<form method="post" action="<?php echo $form_action; ?>">
					
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Mã sinh viên</div>
							<div class="col-md-10">
							<input type="text" name="ma_sv" value="<?php echo isset($arr->ma_sv) ? $arr->ma_sv : ""; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Tên sinh viên</div>
							<div class="col-md-10">
							<input type="text" name="st_name" value="<?php echo isset($arr->st_name) ? $arr->st_name : ""; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Giới tính</div>
							<div class="col-md-10">
							<input type="text" name="st_sex" value="<?php echo isset($arr->st_sex) ? $arr->st_sex : ""; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Ngày sinh</div>
							<div class="col-md-10">
							<input type="text" name="st_db" value="<?php echo isset($arr->st_db) ? $arr->st_db : ""; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Quê quán</div>
							<div class="col-md-10">
							<input type="text" name="st_hometown" value="<?php echo isset($arr->st_hometown) ? $arr->st_hometown : ""; ?>" required class="form-control">
							</div>
						</div>
					</div>
					<!-- end form group -->
					<!-- form group -->
					<div class="form-group">
						<div class="row">
							<div class="col-md-2 text-right">Lớp</div>
							<div class="col-md-10">
							<input type="text" name="cl_id" value="<?php echo isset($arr->cl_id) ? $arr->cl_id : ""; ?>" required class="form-control">
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