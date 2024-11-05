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
                    <h5 class="card-title">Total Faculty</h5>
                    <?php if (!empty($faculty)): ?>
                        <form class="row g-3" action="<?php echo base_url('updatefaculty/' . $faculty->id); ?>" method="post" enctype="multipart/form-data">
                            <div class="col-md-12">
                                <label for="faculty_name" class="form-label">Faculty Name</label>
                                <input type="text" class="form-control" id="faculty_name" name="faculty_name" value="<?php echo set_value('faculty_name', $faculty->faculty_name); ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="faculty_designation" class="form-label">Faculty Designation</label>
                                <input type="text" class="form-control" id="faculty_designation" name="faculty_designation" value="<?php echo set_value('faculty_designation', $faculty->faculty_designation); ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label for="gender" class="form-label">Gender</label>
                                <select id="gender" name="gender" class="form-select" required>
                                    <option value="Male" <?php echo ($faculty->gender == 'Male') ? 'selected' : ''; ?>>Male</option>
                                    <option value="Female" <?php echo ($faculty->gender == 'Female') ? 'selected' : ''; ?>>Female</option>
                                </select>
                            </div>
                            <label for="faculty_img" class="col-form-label me-2" style="white-space: nowrap;">Upload Image</label>
                            <input class="form-control me-3" type="file" id="faculty_img" name="faculty_img" style="flex: 1;">
                            <input type="hidden" name="existing_image" value="<?php echo $faculty->faculty_img; ?>"> <!-- Hidden field for existing image -->
                            <div class="col-md-6 d-flex align-items-center">
                                <?php if (!empty($faculty->faculty_img)): ?>
                                    <img src="<?php echo base_url($faculty->faculty_img); ?>" alt="Faculty Image" class="img-thumbnail ms-3" width="150" style="max-height: 100px; object-fit: cover;">
                                <?php endif; ?>
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