<div class="pagetitle">
	<h1>Add Admission Test Syllabus</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/admission/admission-test-syllabus">Home</a></li>
			<li class="breadcrumb-item active">Admission Test Syllabus</li>
		</ol>
	</nav>
</div><!-- End Page Title -->

<section class="section">
	<div class="row">
		<div class="col-lg-10">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Admission Test Syllabus</h5>

					<form class="row g-3" action="<?php echo base_url('admin/admission/admission-test-syllabus/create'); ?>" method="post" enctype="multipart/form-data">
						<div class="col-md-12">
							<label for="name" class="form-label">Name</label>
							<input type="text" class="form-control" id="name" name="name" required>
						</div>

						<div class="col-md-12">
							<label for="image" class="col-form-label">Upload Image</label>
							<input class="form-control" type="file" id="image" name="image" required>
						</div>
						<div class="col-md-12">
							<label for="image" class="col-form-label">Upload File</label>
							<input class="form-control" type="file" id="file" name="file" required>
						</div>

						<div class="col-sm-12 col-md-12">
							<label for="Status">Status</label>

							<select class="form-select" id="Status"  name="status" required>
								<option value="1">Published</option>
								<option value="0">Unpublished</option>
							</select>

						</div>
						<div class="text-center mt-4">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="<?php echo base_url();?>admin/admission/admission-test-syllabus/" class="btn btn-secondary">Back</a>
						</div>
					</form>

				</div>
			</div>

		</div>
	</div>
</section>
