<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<div class="pagetitle">
	<h1>Edit Faculty</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>academics/faculty">Home</a></li>
			<li class="breadcrumb-item active">Faculty</li>
		</ol>
	</nav>
</div><!-- End Page Title -->

<section class="section">
	<div class="row">
		<div class="col-lg-10">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Edit Faculty Details</h5>
					<?php
					foreach ($faculty_edit->result() as $staff_member) {
						?>
						<form class="row g-3" action="<?php echo base_url('updatefaculty/' . $staff_member->id); ?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="faculty_id" value="<?php echo $staff_member->id; ?>" />

							<div class="col-md-12">
								<label for="faculty_name" class="form-label">Faculty Name</label>
								<input type="text" class="form-control" id="faculty_name" name="faculty_name" value="<?php echo $staff_member->faculty_name;?>" required>
							</div>

							<div class="col-md-6">
								<label for="faculty_designation" class="form-label">Faculty Designation</label>
								<select name="faculty_designation" class="form-select" id="faculty_designation" required>
									<?php
									foreach ($designation_type->result() as $row) {
										?>
										<option value="<?php echo $row->id; ?>" <?php echo ($row->id == $staff_member->faculty_designation) ? 'selected' : ''; ?>>
											<?php echo $row->staff_type; ?>
										</option>
									<?php } ?>
								</select>
							</div>

							<div class="col-md-6">
								<label for="gender" class="form-label">Gender</label>
								<select id="gender" name="gender" class="form-select" required>
									<option value="Male" <?php echo ($staff_member->gender == 'Male') ? 'selected' : ''; ?>>Male</option>
									<option value="Female" <?php echo ($staff_member->gender == 'Female') ? 'selected' : ''; ?>>Female</option>
								</select>
							</div>

							<label for="faculty_img" class="col-form-label me-2" style="white-space: nowrap;">Upload Image</label>
							<input class="form-control me-3" type="file" id="faculty_img" name="faculty_img" style="flex: 1;">

							<input type="hidden" name="existing_image" value="<?php echo $staff_member->faculty_img; ?>">

							<div class="col-md-6 d-flex align-items-center">
								<?php if (!empty($staff_member->faculty_img)): ?>
									<img src="<?php echo base_url(); ?>uploads/faculty_images/<?php echo $staff_member->faculty_img; ?>" alt="Faculty Image" class="img-thumbnail ms-3" width="150" style="max-height: 100px; object-fit: cover;">
								<?php endif; ?>
							</div>
							<div class="col-sm-12 col-md-12">
								<label for="gender" class="form-label">Status</label>
								<div class="form-floating"><select class="form-select" id="Status"  name="status" required>
										<option selected="selected">Select Status</option>
										<option value="1" <?php echo ($staff_member->status == '1') ? 'selected' : ''; ?>>Published</option>
										<option value="0" <?php echo ($staff_member->status == '0') ? 'selected' : ''; ?>>Unpublished</option>
 									</select>
									<label for="Status">Status</label>
								</div>
							</div>
							<div class="text-center mt-4">
								<button type="submit" class="btn btn-success">
									<i class="fas fa-save"></i> Update Now
								</button>
								<a href="<?php echo base_url();?>academics/faculty" class="btn btn-secondary">Back</a>
							</div>
						</form>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
