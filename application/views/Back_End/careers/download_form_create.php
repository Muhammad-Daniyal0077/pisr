<div class="pagetitle">
	<h1>Add Download Form</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">Download Form</li>
		</ol>
	</nav>
</div><!-- End Page Title -->

<section class="section">
	<div class="row">
		<div class="col-lg-10">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Download Form</h5>

					<form class="row g-3" action="<?php echo base_url('admin/careers/download-form-create'); ?>" method="post" enctype="multipart/form-data">
						<div class="col-md-12">
							<label for="title" class="form-label">Title</label>
							<input type="text" class="form-control" id="title" name="title" required>
						</div>
						<div class="col-sm-12 col-md-12">
							<label for="head" class="col-form-label">Select Head</label>
							<select class="form-control" id="head"  name="head" required>
								<option value="Admission Information">Admission Information</option>
								<option value="Forms">Forms</option>
								<option value="Acadimics">Acadimics</option>
							</select>
						</div>
						<div class="col-md-12">
							<label for="url" class="form-label">Url</label>
							<input type="text" class="form-control" id="url" name="url" >
						</div>
						<div class="col-md-6">
							<label for="file" class="col-form-label">Upload File</label>
							<input class="form-control" type="file" id="file" name="file">
						</div>

						<div class="col-md-6">
							<label for="Status" class="col-form-label">Status</label>
							<select class="form-control" id="Status"  name="status" required>
								<option value="1">Published</option>
								<option value="0">Unpublished</option>
							</select>

						</div>
						<div class="text-center mt-4">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="<?php echo base_url();?>admin/careers/download-form" class="btn btn-secondary">Back</a>
						</div>
					</form>

				</div>
			</div>

		</div>
	</div>
</section>
