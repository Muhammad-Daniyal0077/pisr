<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="pagetitle">
  <h1>Gallery</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Home</a></li>
      <li class="breadcrumb-item active">Gallery</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <div class="container d-flex justify-content-between align-items-center">
            <h2 class="card-title mb-0">Gallery</h2>
            <a href="<?php echo base_url(); ?>admin/addgallery" class="btn btn-primary me-2">
              <i class="fas fa-plus"></i> Add Gallery </a>
          </div>

          <!-- Table with stripped rows -->
          <table class="table datatable">

            <thead>
              <tr>
                <th>Sr. No.</th>
                <th>Image Header</th>
				<th>Images</th>
				<th>Status</th>
                <th>Action</th>
                <!-- <th data-type="date" data-format="YYYY/DD/MM">Start Date</th> -->
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($gallery)): ?>
                <?php $srNo = 1; // Initialize the serial number counter 
                ?>
                <?php foreach ($gallery as $row): ?>
                  <tr>
                    <td><?php echo $srNo++; ?></td> <!-- Display and increment Sr. No. -->
                    <td><?php echo $row->img_head; ?></td>
                    <td>
						<?php
						// Decode the JSON-encoded array of image paths
						$images = json_decode($row->img, true);

						// Check if decoding was successful and images array is not empty
						if (!empty($images)) {
							foreach ($images as $imagePath) {
								// Add the path before uploads/gallery/
								$fullImagePath = 'uploads/gallery/' . $imagePath;

								// Display each image with a base URL
								echo '<img src="' . base_url($fullImagePath) . '" width="50" style="margin: 5px;">';
							}
						} else {
							echo "No images available";
						}
						?>

					</td>
					  <td>    <?php echo ($row->status == 0) ? 'Inactive' : 'Active'; ?>
					  </td>
                    <td>
                      <div class="d-flex justify-content-start">
                        <a href="<?php echo base_url('updateimages/' . $row->id); ?>" class="btn btn-warning me-2">
                          <i class="fas fa-pencil-alt"></i> Edit
                        </a>
                        <button class="btn btn-danger" onclick="removeimages(<?php echo $row->id; ?>)">
                          <i class="far fa-trash-alt"></i> Delete
                        </button>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="4" class="text-center">No faculty members found.</td>
                </tr>
              <?php endif; ?>
            </tbody>

          </table>
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>
</section>



<script type="text/javascript">
  function removeimages(val) {
    var get_id = val;
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this Gallery!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>deleteimages', // Ensure this URL matches your route
            data: {
              get_id: get_id
            },
            success: function(data) {
              swal("Poof! Your Gallery has been deleted!", {
                icon: "success",
              }).then(() => {
                window.location.reload(); // Reload page after success message
              });
            },
            error: function(xhr, status, error) {
              swal("Error!", "There was a problem deleting the Gallery.", "error");
            }
          });
        } else {
          swal("Your Gallery is safe!");
        }
      });
  }
</script>

