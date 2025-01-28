    <!-- Page Title -->
    <div class="pic">
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url(<?php echo base_url();?>asset/images/downloads/background.png);">
            <div class="background-overlay"></div> <!-- Overlay div for dull effect -->
            <div class="container">
                <h1 class="animated-title">Careers</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                        <li class="current">Careers</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Careers Section -->
    <div class="container py-5" style="margin-top: 36px;">
        <div class="text-center m-5">
            <h2 class=" text-primary">Job Opportunities at PISR</h2>
            <span style="margin-top: 16px;">Join a team of innovators and achievers. Discover opportunities to advance your career!</span>
        </div>
        <?php foreach ($job_listing as $rows): ?>
            <div class="row align-items-center" style="margin: 60px 2px;">
                <!-- Left Column: Image Content -->
                <div class="col-lg-4"> 
                    <div class="position-relative overflow-hidden rounded shadow">
                        <img src="<?php echo base_url();?>uploads/jobListing/<?php echo $rows->image;  ?>" class="img-fluid rounded" width="300px" alt="Career Opportunities">

                    </div>
                </div>

                <!-- Right Column: Text Content -->
                <div class="col-lg-8">
                    <div class="bg-white border rounded shadow p-5">
                        <h1 class="mb-4"><?php echo $rows->job_title; ?></h1>
                        <span class="text-muted">
                        <?php echo $rows->job_details; ?>
                        </span>
                        <a href="<?php echo base_url(); ?>careers/form" class="btn btn-primary" style="margin-top: 14px;" >Apply Now</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <style>
        .card {
            border-radius: 15px;
        }

        .card-body {
            text-align: left;
        }

        .card-title {
            font-weight: bold;
            font-size: 1.5rem;
        }

        .card-text {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        .btn-primary {
            background: #0069d9;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background: #0056b3;
        }

        .modal {
            z-index: 1050;
            /* Ensure modal appears on top */
        }

        .modal-backdrop {
            z-index: 1040;
            /* Ensure backdrop stays below modal */
        }
    </style>