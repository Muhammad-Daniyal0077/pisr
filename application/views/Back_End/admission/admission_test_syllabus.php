<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<div class="pagetitle">
	<h1>Admission Test Syllabus</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">Admission Test Syllabus</li>
		</ol>
	</nav>
</div><!-- End Page Title -->
<section class="section">
	<div class="row">
		<div class="col-lg-12">

			<div class="card">
				<div class="card-body">
					<div class="container d-flex justify-content-between align-items-center">
						<h2 class="card-title mb-0">Admission Test Syllabus</h2>
						<a href="<?php echo base_url(); ?>admin/admission/admission-test-syllabus/create" class="btn btn-primary me-2">
							<i class="fas fa-plus"></i> Add Syllabus </a>
					</div>
					<!-- Table with stripped rows -->
					<table class="table datatable">
						<thead>
						<tr>
							<th>Sr. No.</th>
							<th><b>N</b>ame </th>
							<th>Image</th>
							<th>File</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php if (!empty($admission_test_syllabus)): ?>
							<?php $srNo = 1; // Initialize the serial number counter
							?>
							<?php foreach ($admission_test_syllabus as $rows): ?>
								<tr>
									<td><?php echo $srNo++; ?></td> <!-- Display and increment Sr. No. -->
									<td><?php echo $rows->name; ?></td>
									<td>
										<img src="<?php echo base_url();?>uploads/syllabus_image/<?php echo $rows->image; ?>" alt="<?php echo $rows->name; ?>" style="width: 50px; height: 50px;">
									</td>
									<td><?php echo $rows->file; ?></td>
									<td>    <?php echo ($rows->status == 0) ? 'Inactive' : 'Active'; ?>
									</td>

									<td>
										<div class="d-flex justify-content-start">
											<a href="<?php echo base_url('admin/admission/admission-test-syllabus/edit/' . $rows->id); ?>" class="btn btn-warning me-2">
												<i class="fas fa-pencil-alt"></i> Edit
											</a>

											<button class="btn btn-danger" onclick="removefaculty(<?php echo $rows->id; ?>)">
												<i class="far fa-trash-alt"></i>Delete
											</button>

										</div>
									</td>

								</tr>
							<?php endforeach; ?>
						<?php else: ?>
							<tr>
								<td colspan="4" class="text-center">No Our Team members found.</td>
							</tr>
						<?php endif; ?>
						</tbody>
					</table>
					<!-- End Table with stripped rows -->

				</div>
			</div>

		</div>
	</div>
</section>



<script type="text/javascript">
	function removefaculty(val) {
		var get_id = val;
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this Admission Test Syllabus!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
			.then((willDelete) => {
				if (willDelete) {
					$.ajax({
						type: 'POST',
						url: '<?php echo base_url(); ?>syllabus/remove', // Ensure this URL matches your route
						data: {
							get_id: get_id
						},
						success: function(data) {
							swal("Poof! Your Admission Test Syllabus has been deleted!", {
								icon: "success",
							}).then(() => {
								window.location.reload(); // Reload page after success message
							});
						},
						error: function(xhr, status, error) {
							swal("Error!", "There was a problem deleting the Admission Test Syllabus.", "error");
						}
					});
				} else {
					swal("Your Admission Test Syllabus is safe!");
				}
			});
	}
</script>
