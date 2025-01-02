<div class="pagetitle">
	<h1>Add Our Top Students</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="">Home</a></li>
			<li class="breadcrumb-item active">Our Top Students</li>
		</ol>
	</nav>
</div><!-- End Page Title -->

<section class="section">
	<div class="row">
		<div class="col-lg-10">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Our Top Students</h5>

					<form class="row g-3" action="<?php echo base_url('admin/home-page-settings/our-top-students/create'); ?>" method="post" enctype="multipart/form-data">
						<div class="col-md-12">
							<label for="name" class="form-label">Name</label>
							<input type="text" class="form-control" id="name" name="name" required>
						</div>
						<div class="col-md-6">
							<label for="marks" class="form-label">Marks</label>
							<input type="text" class="form-control" id="marks" name="marks" required>
						</div>
						<div class="col-md-6">
							<label for="grade" class="form-label">Grade</label>
							<input type="text" class="form-control" id="grade" name="grade" required>
						</div>

						<div class="col-md-12">
							<label for="grade" class="form-label">Detail</label>
							<textarea class="form-control" name="detail" rows="5" id="detail"></textarea>
						</div>
						<div class="col-md-6">
							<label for="image" class="col-form-label">Upload Image</label>
							<input class="form-control" type="file" id="image" name="image" required>
						</div>

						<div class="col-sm-6 col-md-6">
							<label for="Status">Status</label>
							<select class="form-control" id="Status"  name="status" required>
								<option value="1">Published</option>
								<option value="0">Unpublished</option>
							</select>

						</div>
						<div class="text-center mt-4">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="<?php echo base_url();?>admin/home-page-settings/our-top-students" class="btn btn-secondary">Back</a>
						</div>
					</form>

				</div>
			</div>

		</div>
	</div>
</section>
