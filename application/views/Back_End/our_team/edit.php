<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<div class="pagetitle">
	<h1>Edit Our Team</h1>
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
					<h5 class="card-title">Edit Our Team Details</h5>
					<?php
					foreach ($our_team_edit->result() as $rows) {
						?>
						<form class="row g-3" enctype="multipart/form-data" method="post"
							  accept-charset="utf-8">
							<input type="hidden" name="edit_id" value="<?php echo $rows->id; ?>" />

							<div class="col-md-12">
								<label for="faculty_name" class="form-label">Faculty Name</label>
								<input type="text" class="form-control" id="name" name="name" value="<?php echo $rows->name;?>" required>
							</div>

							<div class="col-md-12">
								<label for="faculty_designation" class="form-label">Faculty Designation</label>
								<select name="designation" class="form-select" id="designation" required>
									<?php
									foreach ($designation_type->result() as $row) {
										?>
										<option value="<?php echo $row->id; ?>" <?php echo ($row->id == $rows->designation) ? 'selected' : ''; ?>>
											<?php echo $row->staff_type; ?>
										</option>
									<?php } ?>
								</select>
							</div>
							<div class="col-md-12">
								<textarea class="form-control" rows="5" name="about" id="about"><?php echo $rows->about; ?></textarea>
							</div>

							<label for="faculty_img" class="col-form-label me-2" style="white-space: nowrap;">Upload Image</label>
							<input class="form-control me-3" type="file" id="image" name="image" style="flex: 1;">


							<div class="col-md-6 d-flex align-items-center">
								<?php if (!empty($rows->image)): ?>
									<img src="<?php echo base_url(); ?>uploads/our_team/<?php echo $rows->image; ?>" alt="Image" class="img-thumbnail ms-3" width="150" style="max-height: 100px; object-fit: cover;">
								<?php endif; ?>
							</div>
							<div class="col-sm-12 col-md-12">
								<label for="gender" class="form-label">Status</label>
								<div class="form-floating"><select class="form-select" id="Status"  name="status" required>
										<option selected="selected">Select Status</option>
										<option value="1" <?php echo ($rows->status == '1') ? 'selected' : ''; ?>>Published</option>
										<option value="0" <?php echo ($rows->status == '0') ? 'selected' : ''; ?>>Unpublished</option>
									</select>
									<label for="Status">Status</label>
								</div>
							</div>
							<div class="text-center mt-4">
								<button type="submit" class="btn btn-success">
									<i class="fas fa-save"></i> Update Now
								</button>
								<a href="<?php echo base_url();?>admin/our-team/" class="btn btn-secondary">Back</a>
							</div>
						</form>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
