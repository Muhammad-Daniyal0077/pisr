<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<div class="pagetitle">
    <h1>Careers</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Job-Forms</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<section class="section">
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-body">
                    <div class="container d-flex justify-content-between align-items-center">
                        <h2 class="card-title mb-0">Candidates Forms</h2>
                    </div>
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Candidate</th>
                                <th>Email Address</th>
                                <th>Number</th>
                                <th>Qualification</th>
                                <th>Highest Degree</th>
                                <th>CV</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($jobforms)): ?>
                                <?php $srNo = 1; // Initialize the serial number counter
                                ?>
                                <?php foreach ($jobforms as $rows): ?>
                                    <tr>
                                        <td><?php echo $srNo++; ?></td> <!-- Display and increment Sr. No. -->
                                        <td><?php echo $rows->Candidate_Name; ?></td>
                                        <td><?php echo $rows->Email_Address; ?></td>
                                        <td><?php echo $rows->Contact_Number; ?></td>
                                        <td><?php echo $rows->Qualification; ?></td>
                                        <td><?php echo $rows->Highest_Degree; ?></td>
                                        <td><a href="<?php echo base_url(); ?>uploads/syllabus_file/<?php echo $rows->Candidate_CV; ?>" target="_blank">
                                                <p><?php echo $rows->Candidate_Name , " CV";?></p>
                                            </a></td>
                                        <td>
                                            <div class="d-flex justify-content-start">
                                                <button class="btn btn-danger" onclick="removefaculty(<?php echo $rows->id; ?>)">
                                                    <i class="far fa-trash-alt"></i>Delete
                                                </button>

                                            </div>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="4" class="text-center">No Our Team members found.</td>
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
    function removefaculty(val) {
        var get_id = val;
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this Admission Test Syllabus!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url(); ?>syllabus/remove', // Ensure this URL matches your route
                        data: {
                            get_id: get_id
                        },
                        success: function(data) {
                            swal("Poof! Your Admission Test Syllabus has been deleted!", {
                                icon: "success",
                            }).then(() => {
                                window.location.reload(); // Reload page after success message
                            });
                        },
                        error: function(xhr, status, error) {
                            swal("Error!", "There was a problem deleting the Admission Test Syllabus.", "error");
                        }
                    });
                } else {
                    swal("Your Admission Test Syllabus is safe!");
                }
            });
    }
</script>