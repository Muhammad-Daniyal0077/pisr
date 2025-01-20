<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<div class="pagetitle">
	<h1>Careers Job Listing</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">Job Listing</li>
		</ol>
	</nav>
</div><!-- End Page Title -->
<section class="section">
	<div class="row">
		<div class="col-lg-12">

			<div class="card">
				<div class="card-body">
					<div class="container d-flex justify-content-between align-items-center">
						<h2 class="card-title mb-0">Job Listing</h2>
						<a href="<?php echo base_url(); ?>admin/careers/job-listing-create" class="btn btn-primary me-2">
							<i class="fas fa-plus"></i> Add Job </a>
					</div>
					<!-- Table with stripped rows -->
					<table class="table datatable">
						<thead>
						<tr>
							<th>Sr. No.</th>
							<th>Job Title</th>
							<th>Job Details</th>
							<th>Image</th>
							<th>URL</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
						</thead>
						<tbody>
						<?php if (!empty($job_listing)): ?>
							<?php $srNo = 1; // Initialize the serial number counter
							?>
							<?php foreach ($job_listing as $rows): ?>
								<tr>
									<td><?php echo $srNo++; ?></td> <!-- Display and increment Sr. No. -->
									<td><?php echo $rows->job_title; ?></td>
									<td><?php echo $rows->job_details; ?></td>
									<td><?php echo $rows->image; ?></td>
									<td><?php echo $rows->url; ?></td>
									<td><?php echo ($rows->status == 0) ? 'Inactive' : 'Active'; ?></td>

									<td>
										<div class="d-flex justify-content-start">
											<a href="<?php echo base_url('admin/careers/job-listing/edit/' . $rows->id); ?>" class="btn btn-warning me-2">
												<i class="fas fa-pencil-alt"></i> Edit
											</a>
											<button class="btn btn-danger" onclick="removecandiadate(<?php echo $rows->id; ?>)">
												<i class="far fa-trash-alt"></i>Delete
											</button>

										</div>
									</td>

								</tr>
							<?php endforeach; ?>
						<?php else: ?>
							<tr>
								<td colspan="8" class="text-center">No Job Listing found.</td>
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
	function removecandiadate(val) {
		var get_id = val;
		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this Job Listing!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
			.then((willDelete) => {
				if (willDelete) {
					$.ajax({
						type: 'POST',
						url: '<?php echo base_url(); ?>jobListing/remove', // Ensure this URL matches your route
						data: {
							get_id: get_id
						},
						success: function(data) {
							swal("Poof! Your Job Listing  has been deleted!", {
								icon: "success",
							}).then(() => {
								window.location.reload(); // Reload page after success message
							});
						},
						error: function(xhr, status, error) {
							swal("Error!", "There was a problem deleting the Job Listing.", "error");
						}
					});
				} else {
					swal("Your Job Listing  is safe!");
				}
			});
	}
</script>
