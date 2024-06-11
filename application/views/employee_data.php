<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>
          
<div class="">
	<div class="card shadow mb-4">
		<div class="card-header py-3">		
			<h6 class="m-0 font-weight-bold text-primary">Manage Data Employee</h6>
		</div>
		<div class="card-body">
			<?= $this->session->flashdata('flash');  ?>
			<div class="mb-3" style="float: left;">	
				<a class="btn btn-primary float-right" href="<?php echo base_url(); ?>Home/add_employee_data" style="color:black"><i class="fas fa-plus"></i> <b>Add New Employee Data</b></a>
			</div>
			<div class="table-responsive">
				<table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead class="thead-light">
						<tr>
							<th style="white-space:nowrap;" class="text-center"><b>No</b></th>
							<th style="white-space:nowrap;" class="text-center"><b>Employee ID</b></th>
							<th style="white-space:nowrap;" class="text-center"><b>Employee Name</b></th>
							<th style="white-space:nowrap;" class="text-center"><b>Email</th>
							<th style="white-space:nowrap;" class="text-center"><b>Job Title</th>
							<th style="white-space:nowrap;" class="text-center"><b>Departement</th>
							<th style="white-space:nowrap;" class="text-center"><b>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php if ($employee_data != null) : ?>
						<?php $i = 1;
							foreach ($employee_data as $item) { ?>	
						<tr>
							<td scope="row" align=center style="white-space:nowrap;"><?= $i++; ?></td>
							<td style="white-space:nowrap;" class="text-center"><?= $item['employee_id'] ?></td>
							<td style="white-space:nowrap;" class="text-center"><?= $item['employee_name'] ?></td>
							<td style="white-space:nowrap;" class="text-center"><?= $item['email'] ?></td>
							<td style="white-space:nowrap;" class="text-center"><?= $item['job_title'] ?></td>
							<td style="white-space:nowrap;" class="text-center"><?= $item['department'] ?></td>
							<td style="white-space:nowrap;" class="text-center">
								<a class="btn btn-info btn-sm m-1" href="<?php echo base_url() ?>Home/ubah/<?= $item['id'] ?>" style="color: black"><i class="fas fa-solid fa-pencil-alt"></i></a>
								<a href="<?= base_url() ?>Home/deleteEmployeeData/<?= $item['id'] ?>" onclick="return confirm('Hapus?');" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
							</td>
						<?php } ?>
						<?php endif; ?> 
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

</div>
<!-- /.container-fluid -->