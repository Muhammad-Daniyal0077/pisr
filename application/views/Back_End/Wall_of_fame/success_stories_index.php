<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<div class="pagetitle">
	<h1>Success Stories</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">Success Stories</li>
		</ol>
	</nav>
</div><!-- End Page Title -->
<section class="section">
	<div class="row">
		<div class="col-lg-12">

			<div class="card">
				<div class="card-body">
					<div class="container d-flex justify-content-between align-items-center">
						<h2 class="card-title mb-0">Success Stories</h2>
						<a href="<?php echo base_url(); ?>admin/wall-of-fame/success-stories/create" class="btn btn-primary me-2">
							<i class="fas fa-plus"></i> Add Success Stories </a>
					</div>

					<!-- Table with stripped rows -->
					<table class="table datatable">

						<thead>
						<tr>
							<th>Sr. No.</th>
							<th>Name</th>
							<th>Title</th>
							<th>Image</th>
							<th>About</th>
							<th>Status</th>
							<th>Action</th>
							<!-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th> -->
						</tr>
						</thead>
						<tbody>
						<?php if (!empty($success_stories)): ?>
							<?php $srNo = 1; // Initialize the serial number counter
							?>
							<?php foreach ($success_stories as $row): ?>
								<tr>
									<td><?php echo $srNo++; ?></td> <!-- Display and increment Sr. No. -->
									<td><?php echo $row->name; ?></td>
									<td><?php echo $row->title; ?></td>
									<td>
										<img src="<?php echo base_url();?>uploads/success_stories/<?php echo $row->image; ?>" alt="<?php echo $row->title; ?>" style="width: 50px; height: 50px;">
									</td>
									<td><?php echo $row->about; ?></td>
									<td>    <?php echo ($row->status == 0) ? 'Inactive' : 'Active'; ?>
									</td>
									<td>
										<div class="d-flex justify-content-start">
											<a href="<?php echo base_url('admin/wall-of-fame/success-stories/edit/' . $row->id); ?>" class="btn btn-warning me-2">
												<i class="fas fa-pencil-alt"></i> Edit
											</a>

											<button class="btn btn-danger" onclick="removefaculty(<?php echo $row->id; ?>)">
												<i class="far fa-trash-alt"></i>Delete
											</button>

										</div>
									</td>

								</tr>
							<?php endforeach; ?>
						<?php else: ?>
							<tr>
								<td colspan="4" class="text-center">No Success Stories found.</td>
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
			text: "Once deleted, you will not be able to recover this Success Stories!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
			.then((willDelete) => {
				if (willDelete) {
					$.ajax({
						type: 'POST',
						url: '<?php echo base_url(); ?>success_stories/remove', // Ensure this URL matches your route
						data: {
							get_id: get_id
						},
						success: function(data) {
							swal("Poof! Your Success Stories has been deleted!", {
								icon: "success",
							}).then(() => {
								window.location.reload(); // Reload page after success message
							});
						},
						error: function(xhr, status, error) {
							swal("Error!", "There was a problem deleting the Success Stories.", "error");
						}
					});
				} else {
					swal("Your Success Stories is safe!");
				}
			});
	}
</script>
