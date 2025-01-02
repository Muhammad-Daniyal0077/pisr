<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<div class="pagetitle">
	<h1>FBISE</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">FBISE</li>
		</ol>
	</nav>
</div><!-- End Page Title -->
<section class="section">
	<div class="row">
		<div class="col-lg-12">

			<div class="card">
				<div class="card-body">
					<div class="container d-flex justify-content-between align-items-center">
						<h2 class="card-title mb-0">FBISE</h2>
						<a href="<?php echo base_url(); ?>admin/wall-of-fame/fbise/create" class="btn btn-primary me-2">
							<i class="fas fa-plus"></i> Add FBISE </a>
					</div>

					<!-- Table with stripped rows -->
					<table class="table datatable">

						<thead>
						<tr>
							<th>Sr. No.</th>
							<th>Title</th>
							<th>Head</th>
							<th>Image</th>
							<th>Status</th>
							<th>Action</th>
							<!-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th> -->
						</tr>
						</thead>
						<tbody>
						<?php if (!empty($fbise)): ?>
							<?php $srNo = 1; // Initialize the serial number counter
							?>
							<?php foreach ($fbise as $row): ?>
								<tr>
									<td><?php echo $srNo++; ?></td> <!-- Display and increment Sr. No. -->
									<td><?php echo $row->title; ?></td>
									<td><?php echo $row->head; ?></td>
									<td>
										<img src="<?php echo base_url();?>uploads/fbise/<?php echo $row->image; ?>" alt="<?php echo $row->title; ?>" style="width: 50px; height: 50px;">
									</td>
									<td>    <?php echo ($row->status == 0) ? 'Inactive' : 'Active'; ?>
									</td>
									<td>
										<div class="d-flex justify-content-start">
											<a href="<?php echo base_url('admin/wall-of-fame/fbise/edit/' . $row->id); ?>" class="btn btn-warning me-2">
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
								<td colspan="4" class="text-center">No FBISE found.</td>
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
			text: "Once deleted, you will not be able to recover this FBISE!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
			.then((willDelete) => {
				if (willDelete) {
					$.ajax({
						type: 'POST',
						url: '<?php echo base_url(); ?>fbise/remove', // Ensure this URL matches your route
						data: {
							get_id: get_id
						},
						success: function(data) {
							swal("Poof! Your FBISE has been deleted!", {
								icon: "success",
							}).then(() => {
								window.location.reload(); // Reload page after success message
							});
						},
						error: function(xhr, status, error) {
							swal("Error!", "There was a problem deleting the FBISE.", "error");
						}
					});
				} else {
					swal("Your FBISE is safe!");
				}
			});
	}
</script>
