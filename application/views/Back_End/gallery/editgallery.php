<div class="pagetitle">
    <h1>Update Gallery Images</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>academics/faculty">Home</a></li>
            <li class="breadcrumb-item active">Gallery</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Gallery Images</h5>
					<?php foreach ($gallery->result() as $gallery): ?>
						<form class="row g-3" action="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
							<div class="col-md-12">
								<label for="img_head" class="form-label">Gallery Header</label>
								<input type="hidden" name="id" value="<?php echo $gallery->id; ?>">
								<input type="text" class="form-control" id="img_head" name="img_head" value="<?php echo $gallery->img_head; ?>" required>
							</div>
							<div class="col-sm-12 col-md-12">
								<label for="gender" class="form-label">Status</label>
								<div class="form-floating"><select class="form-select" id="Status"  name="status" required>
										<option selected="selected">Select Status</option>
										<option value="1" <?php echo ($gallery->status == '1') ? 'selected' : ''; ?>>Published</option>
										<option value="0" <?php echo ($gallery->status == '0') ? 'selected' : ''; ?>>Unpublished</option>
									</select>
									<label for="Status">Status</label>
								</div>
							</div>

							<div class="col-md-12">
								<label for="img" class="col-form-label">Upload Gallery Images</label>
								<input type="hidden" value="" id="removeimg" name="removeimg">
								<input class="form-control me-3" type="file" id="images" name="images[]" multiple style="flex: 1;">

								<!-- Hidden field to keep track of existing images -->
								<?php if (!empty($gallery->img)): ?>
									<?php foreach (json_decode($gallery->img) as $existing_img): ?>
										<input type="hidden" name="existing_image[]" value="<?php echo $existing_img; ?>">
									<?php endforeach; ?>
								<?php endif; ?>
							</div>

							<!-- Display existing images -->
							<div class="col-12 col-md-12 mt-4 row">
								<?php
								$array_data = json_decode($gallery->img);
								$index = 1;
								foreach ($array_data as $item): ?>
									<div class="col-xl-4" id="removediv<?php echo $index ?>">
										<!-- Remove button that triggers imgremove function -->
										<a class="btn btn-sm btn-danger remove-image-btn" onclick='imgremove("<?php echo $item ?>", "<?php echo $index ?>");'>X</a>
										<img src="<?php echo base_url(); ?>uploads/gallery/<?php echo $item ?>" width="150" alt="properties" />
									</div>
									<?php $index++; endforeach; ?>
							</div>

							<div class="text-center mt-4">
								<button type="submit" class="btn btn-success">
									<i class="fas fa-save"></i> Update Now
								</button>
								<a href="<?php echo base_url();?>admin/gallery" class="btn btn-phoenix-primary px-5">Back</a>
							</div>
						</form>
					<?php endforeach; ?>





				</div>
            </div>

        </div>
    </div>
</section>

<script type="text/javascript">
	var removeimglist = [];

	// Function to handle image removal
	function imgremove(val, id) {
		var getimg = val; // Image file name to remove
		var getid = id; // ID of the div to hide

		// Confirm removal before proceeding
		if (confirm("Are you sure you want to remove this image?")) {
			// Hide the div containing the image with a fade-out effect
			$("#removediv" + getid).fadeOut();

			// Add the image file to the removal list
			removeimglist.push(getimg);

			// Update the hidden input field with the JSON-encoded list of removed images
			$('#removeimg').val(JSON.stringify(removeimglist));

			console.log(removeimglist); // Debugging: log the list of removed images
		}
	}

</script>
