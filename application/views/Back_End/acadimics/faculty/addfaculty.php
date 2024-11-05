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
              <input type="text" class="form-control" id="faculty_designation" name="faculty_designation" required>
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
            <div class="text-center mt-4">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form>




        </div>
      </div>

    </div>
  </div>
</section>