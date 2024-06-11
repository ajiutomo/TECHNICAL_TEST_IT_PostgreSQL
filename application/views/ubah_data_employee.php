<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Employee Data</h1>
</div>
          
<div class="card shadow mb-4">
	<div class="card-header py-3">		
		<h6 class="m-0 font-weight-bold text-primary">Add Data Employee</h6>
	</div>
	<div class="card-body">
		<form class="form-row" action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $employee_data['id'] ?>" required="required">
		<div class="form-group col-md-6">
			<label for="employee_id">Employee ID</label>
			<input type="text" class="form-control" value="<?= $employee_data['employee_id'] ?>" placeholder="Employee ID . . ." name="employee_id">
			<small class="form-text text-danger danger"><?= form_error('employee_id'); ?></small>
		</div>
		<div class="form-group col-md-6">
			<label for="employee_name">Employee Name</label>
			<input type="text" class="form-control" value="<?= $employee_data['employee_name'] ?>" placeholder="Employee Name . . ." name="employee_name">
			<small class="form-text text-danger danger"><?= form_error('employee_name'); ?></small>
		</div>
		<div class="form-group col-md-6">
			<label for="email">Email</label>
			<input type="email" class="form-control" value="<?= $employee_data['email'] ?>" placeholder="Email . . ." name="email">
			<small class="form-text text-danger danger"><?= form_error('email'); ?></small>
		</div>
		<div class="form-group col-md-6">
			<label for="job_title">Job Title</label>
			<input type="text" class="form-control" value="<?= $employee_data['job_title'] ?>" placeholder="Job Title . . ." name="job_title">
			<small class="form-text text-danger danger"><?= form_error('job_title'); ?></small>
		</div>
		<div class="form-group col-md-6">
			<label for="department">Department</label>
			<input type="text" class="form-control" value="<?= $employee_data['department'] ?>" placeholder="Department . . ." name="department">
			<small class="form-text text-danger danger"><?= form_error('department'); ?></small>
		</div>
	</div>
	<div class="form-group">
		<div class="col-12 pl-4 pr-4">
			<a href="<?= base_url(); ?>Home" class="btn btn-primary float-left">Back</a>
			<button name="submit" id="submit" type="submit" class="btn btn-primary float-right">Submit <i class="fas fa-arrow-circle-right"></i></button>
		</div>              
	</div>
		</form>
</div>

</div>
<!-- /.container-fluid -->