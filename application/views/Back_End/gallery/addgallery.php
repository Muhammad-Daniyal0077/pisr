<div class="pagetitle">
  <h1>Add Images</h1>
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

          <form class="row g-3" action="<?php echo base_url('admin/addgallery'); ?>" method="post" enctype="multipart/form-data">
            <div class="col-md-12">
              <label for="img_head" class="form-label">Imge Header</label>
              <input type="text" class="form-control" id="img_head" name="img_head" required>
            </div>
            
            <div class="col-md-6">
              <label for="img" class="col-form-label">Upload Images</label>
              <input class="form-control" type="file" id="img" name="img[]" multiple required>
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