    <!-- Page Title -->
    <div class="pic">
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
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
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="display-4 font-weight-bold text-primary">Careers At PISR</h1>
            <span class="text-muted">Be a part of a dynamic and innovative team. Explore opportunities and grow with us!</span>
        </div>
    </div>

    <div class="row align-items-center" style="margin-top:20px;">
        <!-- Left Column: Text Content -->
        <div class="col-lg-8 mb-4">
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <h3 class="card-title text-secondary">Join Our Team</h3>
                    <p>
                        We are looking for talented and passionate individuals to become part of our team. Explore the available opportunities and take the next step in your career with us.
                        <a href="<?php echo base_url(); ?>careers/form" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Column: Image Content -->
        <div class="col-lg-4 mb-4">
            <div class="card shadow-lg border-0">
                <img src="https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png" class="img-fluid"  width="200px" alt="Career Image">
            </div>
        </div>
    </div>
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
    z-index: 1050; /* Ensure modal appears on top */
}

.modal-backdrop {
    z-index: 1040; /* Ensure backdrop stays below modal */
}
</style>
