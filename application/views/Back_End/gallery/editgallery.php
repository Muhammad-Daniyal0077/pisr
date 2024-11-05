<div class="pagetitle">
    <h1>Update Images</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>academics/faculty">Home</a></li>
            <li class="breadcrumb-item active">Images</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Images</h5>
                    <?php if (!empty($gallery)): ?>

                        <form class="row g-3" action="<?php echo base_url('updateimages/' . $gallery->id); ?>" method="post" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <label for="img_head" class="form-label">Image Header</label>
                                <input type="text" class="form-control" id="img_head" name="img_head" value="<?php echo set_value('faculty_name', $gallery->img_head); ?>" required>

                            </div>

                            <div class="col-md-6">
                                <label for="img" class="col-form-label">Upload Images</label>
                                <input class="form-control me-3" type="file" id="img" name="img[]" multiple style="flex: 1;">
                                <!-- Hidden field to keep track of existing images -->
                                <?php if (!empty($gallery->img)): ?>
                                    <?php foreach (json_decode($gallery->img) as $existing_img): ?>
                                        <input type="hidden" name="existing_image[]" value="<?php echo $existing_img; ?>">
                                    <?php endforeach; ?>
                                <?php endif; ?>


                                <!-- Display existing images -->
                                <div class="col-md-6 d-flex flex-wrap align-items-center mt-2">
                                    <?php if (!empty($gallery->img)): ?>
                                        <?php foreach (json_decode($gallery->img) as $existing_img): ?>
                                            <div class="me-3 mb-2">
                                                <img src="<?php echo base_url($existing_img); ?>" alt="Gallery Image" class="img-thumbnail" width="100" style="max-height: 100px; object-fit: cover;">
                                            </div>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>

                            </div>


                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-success">
                                    <i class="fas fa-save"></i> Update Now
                                </button>
                            </div>
                        </form>
                    <?php else: ?>
                        <p>No faculty member found.</p>
                    <?php endif; ?>



                </div>
            </div>

        </div>
    </div>
</section>