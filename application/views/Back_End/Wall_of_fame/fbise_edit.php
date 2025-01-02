<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<div class="pagetitle">
	<h1>Edit FBISE</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="">Home</a></li>
			<li class="breadcrumb-item active">FBISE</li>
		</ol>
	</nav>
</div><!-- End Page Title -->

<section class="section">
	<div class="row">
		<div class="col-lg-10">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Edit FBISE Details</h5>
					<?php
					foreach ($fbise_edit->result() as $rows) {
						?>
						<form class="row g-3" enctype="multipart/form-data" method="post"
							  accept-charset="utf-8">
							<input type="hidden" name="edit_id" value="<?php echo $rows->id; ?>" />

							<div class="col-md-12">
								<label for="title" class="form-label">Title</label>
								<input type="text" class="form-control" id="title" name="title" value="<?php echo $rows->title;?>" required>
							</div>

							<div class="col-md-12">
								<label for="head" class="form-label">Head</label>
								<select  class="form-select" id="head" name="head"  required="required" style="width:100%;">
									<option value="HSSC" <?php echo ($rows->head == 'HSSC') ? 'selected' : ''; ?>>HSSC</option>
									<option value="SSC" <?php echo ($rows->head == 'SSC') ? 'selected' : ''; ?>>SSC</option>
								</select>
							</div>


							<label for="faculty_img" class="col-form-label me-2" style="white-space: nowrap;">Upload Image</label>
							<input class="form-control me-3" type="file" id="image" name="image" style="flex: 1;">


							<div class="col-md-6 d-flex align-items-center">
								<?php if (!empty($rows->image)): ?>
									<img src="<?php echo base_url(); ?>uploads/fbise/<?php echo $rows->image; ?>" alt="Image" class="img-thumbnail ms-3" width="150" style="max-height: 100px; object-fit: cover;">
								<?php endif; ?>
							</div>
							<div class="col-sm-12 col-md-12">
								<label for="gender" class="form-label">Status</label>
								<div class="form-floating"><select class="form-select" id="Status"  name="status" required>
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