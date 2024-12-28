<div class="pagetitle">
	<h1>Add Our Team</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>academics/faculty">Home</a></li>
			<li class="breadcrumb-item active">Our Team</li>
		</ol>
	</nav>
</div><!-- End Page Title -->

<section class="section">
	<div class="row">
		<div class="col-lg-10">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Our Team</h5>

					<form class="row g-3" action="<?php echo base_url('admin/our_team/create'); ?>" method="post" enctype="multipart/form-data">
						<div class="col-md-12">
							<label for="name" class="form-label">Name</label>
							<input type="text" class="form-control" id="name" name="name" required>
						</div>
						<div class="col-md-12">
							<label for="faculty_designation" class="form-label">Designation</label>
							<select  class="form-select" id="faculty_designation" name="designation"  required="required" style="width:100%;">
								<?php
								foreach ($designation_type->result() as $row) {
									?>
									<option value="<?php echo $row->id; ?>" ><?php echo $row->staff_type; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="col-md-12">
							<textarea class="form-control" rows="5" id="about"></textarea>
						</div>
						<div class="col-md-6">
							<label for="image" class="col-form-label">Upload Image</label>
							<input class="form-control" type="file" id="image" name="image" required>
						</div>

						<div class="col-sm-6 col-md-4">
							<label for="Status">Status</label>

							<select class="form-select" id="Status"  name="status" required>
									<option selected="selected">Select Status</option>
									<option value="1">Published</option>
									<option value="0">Unpublished</option>
								</select>

						</div>
						<div class="text-center mt-4">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="<?php echo base_url();?>admin/our_team/" class="btn btn-secondary">Back</a>
						</div>
					</form>

				</div>
			</div>

		</div>
	</div>
</section>
