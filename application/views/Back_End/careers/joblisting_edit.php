<div class="pagetitle">
	<h1>Add Job Edit</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">Job Edit</li>
		</ol>
	</nav>
</div><!-- End Page Title -->

<section class="section">
	<div class="row">
		<div class="col-lg-10">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Job</h5>
					<?php
					foreach ($job_listing_edit->result() as $rows) {
					?>
						<form class="row g-3" enctype="multipart/form-data" method="post"
							accept-charset="utf-8">
							<div class="col-md-12">
								<input type="hidden" name="edit_id" value="<?php echo $rows->id; ?>" />
								<label for="name" class="form-label">Job Title</label>
								<input type="text" class="form-control" value="<?php echo $rows->job_title; ?>" id="job_title" name="job_title" required>
							</div>
							<div class="col-md-12">
								<label for="url" class="form-label">Job Url</label>
								<input type="text" class="form-control" value="<?php echo $rows->url; ?>" id="url" name="url">
							</div>
							<div class="col-md-12">
								<label for="job_details" class="form-label">Job Details</label>
								<textarea class="form-control" name="job_details" rows="5" id="job_details">
   								 <?php echo $rows->job_details; ?>
								</textarea>
								<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
								<script>
									CKEDITOR.replace('job_details');
								</script>

							</div>
							<div class="col-md-6">
								<label for="image" class="col-form-label">Upload Image</label>
								<input class="form-control" type="file" id="image" name="image">
							</div>
							<div class="col-md-6 d-flex align-items-center">
								<?php if (!empty($rows->image)): ?>
									<img src="<?php echo base_url(); ?>uploads/jobListing/<?php echo $rows->image; ?>" alt="Image" class="img-thumbnail ms-3" width="150" style="max-height: 100px; object-fit: cover;">
								<?php endif; ?>
							</div>

							<div class="col-sm-6 col-md-4">
								<label for="Status">Status</label>

								<select class="form-select" id="Status" name="status" required>
									<option value="1" <?php echo ($rows->status == '1') ? 'selected' : ''; ?>>Published</option>
									<option value="0" <?php echo ($rows->status == '0') ? 'selected' : ''; ?>>Unpublished</option>
								</select>

							</div>
							<div class="text-center mt-4">
								<button type="submit" class="btn btn-success">Updated</button>
								<a href="<?php echo base_url(); ?>admin/careers/job-listing" class="btn btn-secondary">Back</a>
							</div>
						</form>
					<?php } ?>
				</div>
			</div>

		</div>
	</div>
</section>