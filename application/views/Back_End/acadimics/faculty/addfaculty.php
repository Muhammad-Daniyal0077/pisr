<div class="pagetitle">
  <h1>Add Faculty</h1>
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

          <form class="row g-3" action="<?php echo base_url('academics/addfaculty'); ?>" method="post" enctype="multipart/form-data">
            <div class="col-md-12">
              <label for="faculty_name" class="form-label">Faculty Name</label>
              <input type="text" class="form-control" id="faculty_name" name="faculty_name" required>
            </div>
            <div class="col-md-12">
              <label for="faculty_designation" class="form-label">Faculty Designation</label>
				<select  class="form-select" id="faculty_designation" name="faculty_designation"  required="required" style="width:100%;">
					<?php
					foreach ($designation_type->result() as $row) {
						?>
						<option value="<?php echo $row->id; ?>" ><?php echo $row->staff_type; ?></option>
					<?php } ?>
				</select>
            </div>
            <div class="col-md-6">
              <label for="faculty_img" class="col-form-label">Upload Image</label>
              <input class="form-control" type="file" id="faculty_img" name="faculty_img" required>
            </div>
            <div class="col-md-6">
              <label for="gender" class="form-label">Gender</label>
              <select id="gender" name="gender" class="form-select" required>
                <option value="Male" selected>Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
			<div class="col-sm-6 col-md-4">
				<label for="gender" class="form-label">Status</label>
				  <div class="form-floating"><select class="form-select" id="Status"  name="status" required>
						  <option selected="selected">Select Status</option>
						  <option value="1">Published</option>
						  <option value="0">Unpublished</option>
					  </select>
					  <label for="Status">Status</label>
				  </div>
			</div>
            <div class="text-center mt-4">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a href="<?php echo base_url();?>academics/faculty" class="btn btn-secondary">Back</a>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>
</section>
