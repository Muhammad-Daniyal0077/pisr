<div class="pagetitle">
	<h1>Review Worksheets Edit</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">Review Worksheets Edit</li>
		</ol>
	</nav>
</div><!-- End Page Title -->

<section class="section">
	<div class="row">
		<div class="col-lg-10">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Review Worksheets</h5>
					<?php
					foreach ($download_form_edit->result() as $rows) {
						?>
						<form class="row g-3" enctype="multipart/form-data" method="post"
							  accept-charset="utf-8">
							<div class="col-md-12">
								<input type="hidden" name="edit_id" value="<?php echo $rows->id; ?>" />
								<label for="title" class="form-label">Title</label>
								<input type="text" class="form-control" value="<?php echo $rows->title; ?>" id="title" name="title" required>
							</div>
							<div class="col-sm-12 col-md-12">
								<label for="head" class="col-form-label">Select Head</label>
								<select class="form-control" id="head"  name="head" required>
									<option value="Nursery" <?php echo ($rows->head == 'Nursery') ? 'selected' : ''; ?>>Nursery</option>
									<option value="KG" <?php echo ($rows->head == 'KG') ? 'selected' : ''; ?>>KG</option>
									<option value="Grade 1" <?php echo ($rows->head == 'Grade 1') ? 'selected' : ''; ?>>Grade 1</option>
								</select>
							</div>
							<div class="col-md-12">
								<label for="url" class="form-label">Url</label>
								<input type="text" class="form-control" value="<?php echo $rows->url; ?>" id="url" name="url" >
							</div>

							<div class="col-md-6">
								<label for="file" class="col-form-label">Upload Image</label>
								<input class="form-control" type="file" id="file" name="file">
							</div>
							<div class="col-md-6 d-flex align-items-center">
								<?php if (!empty($rows->file)): ?>
									<a href="<?php echo base_url(); ?>uploads/download_form/<?php echo $rows->file; ?>" download class="btn btn-primary ms-3">
										Download
									</a>
								<?php endif; ?>
							</div>
							<div class="col-md-6 d-flex align-items-center">
								<?php if (!empty($rows->image)): ?>
									<img src="<?php echo base_url(); ?>uploads/jobListing/<?php echo $rows->image; ?>" alt="Image" class="img-thumbnail ms-3" width="150" style="max-height: 100px; object-fit: cover;">
								<?php endif; ?>
							</div>

							<div class="col-sm-12 col-md-12">
								<label for="Status"  class="col-form-label">Status</label>

								<select class="form-select" id="Status"  name="status" required>
									<option value="1" <?php echo ($rows->status == '1') ? 'selected' : ''; ?>>Published</option>
									<option value="0" <?php echo ($rows->status == '0') ? 'selected' : ''; ?>>Unpublished</option>
								</select>

							</div>
							<div class="text-center mt-4">
								<button type="submit" class="btn btn-success">Updated</button>
								<a href="<?php echo base_url();?>admin/academics/review-worksheets" class="btn btn-secondary">Back</a>
							</div>
						</form>
					<?php } ?>
				</div>
			</div>

		</div>
	</div>
</section>
