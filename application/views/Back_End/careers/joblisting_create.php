<div class="pagetitle">
	<h1>Add Job Listing</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">Job Listing</li>
		</ol>
	</nav>
</div><!-- End Page Title -->

<section class="section">
	<div class="row">
		<div class="col-lg-10">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Job</h5>

					<form class="row g-3" action="<?php echo base_url('admin/careers/job-listing-create'); ?>" method="post" enctype="multipart/form-data">
						<div class="col-md-12">
							<label for="name" class="form-label">Job Title</label>
							<input type="text" class="form-control" id="job_title" name="job_title" required>
						</div>
						<div class="col-md-12">
							<label for="url" class="form-label">Job Url</label>
							<input type="text" class="form-control" id="url" name="url">
						</div>
						<div class="col-md-12">
							<label for="job_details" class="form-label">Job Details</label>
							<textarea class="form-control" name="job_details" rows="5" id="job_details">
    						
						</textarea>
							<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
							<script>
								CKEDITOR.replace('job_details');
							</script>

						</div>
						<div class="col-md-6">
							<label for="image" class="col-form-label">Upload Image</label>
							<input class="form-control" type="file" id="image" name="image" required>
						</div>

						<div class="col-sm-6 col-md-4">
							<label for="Status">Status</label>

							<select class="form-select" id="Status" name="status" required>
								<option value="1">Published</option>
								<option value="0">Unpublished</option>
							</select>

						</div>
						<div class="text-center mt-4">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="<?php echo base_url(); ?>admin/careers/job-listing" class="btn btn-secondary">Back</a>
						</div>
					</form>

				</div>
			</div>

		</div>
	</div>
</section>