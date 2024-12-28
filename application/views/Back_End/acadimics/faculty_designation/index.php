<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="pagetitle">
	<h1>Academics Faculty Designation</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">Faculty Designation</li>
		</ol>
	</nav>
</div><!-- End Page Title -->
<section class="section">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
					<div class="container d-flex justify-content-between align-items-center">
						<h2 class="card-title mb-0">Faculty Designation</h2>
						<!-- Add Faculty Designation Button (Triggers Modal) -->
						<a href="#" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#addFacultyDesignationModal">
							<i class="fas fa-plus"></i> Add Faculty Designation
						</a>
					</div>

					<!-- Table with stripped rows -->
					<table class="table datatable">
						<thead>
						<tr>
							<th>Sr. No.</th>
							<th>Designation</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php if (!empty($designation_type)): ?>
							<?php $srNo = 1; ?>
							<?php foreach ($designation_type as $rows): ?>
								<tr>
									<td><?php echo $srNo++; ?></td>
									<td><?php echo $rows->staff_type; ?></td>
									<td>
										<div class="d-flex justify-content-start">
											<a href="<?php echo base_url('academics/faculty-designation/edit/' . $rows->id); ?>" class="btn btn-warning me-2">
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
								<td colspan="4" class="text-center">No faculty members found.</td>
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

<!-- Modal HTML -->
<div class="modal fade" id="addFacultyDesignationModal" tabindex="-1" aria-labelledby="addFacultyDesignationModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addFacultyDesignationModalLabel">Add Faculty Designation</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<!-- Add Faculty Designation Form -->
				<form action="<?php echo base_url('academics/faculty-designation'); ?>" method="POST">
					<div class="mb-3">
						<label for="designation" class="form-label">Designation Name</label>
						<input type="text" class="form-control" id="designation" name="designation" required>
					</div>
					<button type="submit" class="btn btn-primary">Save Designation</button>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap Bundle with Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<script type="text/javascript">
	function removefaculty(val) {
		var get_id = val;
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this designation!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
			.then((willDelete) => {
				if (willDelete) {
					$.ajax({
						type: 'POST',
						url: '<?php echo base_url(); ?>designation/remove', // Ensure this URL matches your route
						data: {
							get_id: get_id
						},
						success: function(data) {
							swal("Poof! Your Staff has been deleted!", {
								icon: "success",
							}).then(() => {
								window.location.reload(); // Reload page after success message
							});
						},
						error: function(xhr, status, error) {
							swal("Error!", "There was a problem deleting the staff.", "error");
						}
					});
				} else {
					swal("Your designation is safe!");
				}
			});
	}
</script>
