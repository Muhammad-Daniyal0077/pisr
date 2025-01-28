    <!-- Page Title -->
    <div class="pic">
        <div class="page-title dark-background" data-aos="fade"
            style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
            <div class="background-overlay"></div> <!-- Overlay div for dull effect -->
            <div class="container">
                <h1 class="animated-title">Job-Form</h1>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                        <li class="current">Careers</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <style>
        .form-label{
            font-size: 20px;
        }
    </style>
<!-- Job Form Section -->
<div class="container py-5" style="margin-top: 20px;">
    <h2 class="text-primary text-center mb-4">Submit Your Application</h2>
    <p class="text-center mb-5">We are excited to have you apply for a position with us. Fill out the form below and attach your resume.</p>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <form action="<?php echo base_url('careers/form'); ?>" method="post" enctype="multipart/form-data">
                        <!-- Candidate Name -->
                        <div class="form-group mb-4">
                            <label for="Candidate_Name" class="form-label fw-bold">Candidate Name</label>
                            <input type="text" class="form-control" id="Candidate_Name"  name="Candidate_Name" placeholder="Enter your full name" required>
                        </div>

                        <!-- CV/Resume Upload -->
                        <div class="form-group mb-4">
                            <label for="candidateCV" class="form-label fw-bold">Upload CV/Resume</label>
                            <input type="file" class="form-control" id="Candidate_CV" name="Candidate_CV" accept=".pdf, .doc, .docx" required>
                        </div>

                        <!-- Email -->
                        <div class="form-group mb-4">
                            <label for="email" class="form-label fw-bold">Email Address</label>
                            <input type="email" class="form-control" id="Email_Address" name="Email_Address" placeholder="Enter your email" required>
                        </div>

                        <!-- Contact Number -->
                        <div class="form-group mb-4">
                            <label for="contactNumber" class="form-label fw-bold">Contact Number</label>
                            <input type="tel" class="form-control" id="Contact_Number" name="Contact_Number" placeholder="Enter your contact number" required>
                        </div>

                        <!-- Qualification -->
                        <div class="form-group mb-4">
                            <label for="qualification" class="form-label fw-bold">Qualification</label>
                            <input type="text" class="form-control" id="Qualification" name="Qualification" placeholder="Enter your qualification" required>
                        </div>

                        <!-- Highest Degree -->
                        <div class="form-group mb-4">
                            <label for="highestDegree" class="form-label fw-bold">Highest Degree</label>
                            <input type="text" class="form-control" id="Highest_Degree" name="Highest_Degree" placeholder="Enter your highest degree" required>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary px-5 py-2">Submit Application</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>

    .card {
        border-radius: 15px;
        background: #f9f9f9;
    }

    .card-body {    
        padding: 3rem;
    }s

    .form-group label {
        font-size: 18px;
        color: #333;
    }

    .form-control {
        border-radius: 10px;
        padding: 10px 15px;
        font-size: 1rem;
    }

    .form-control:focus {
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    .form-select {
        border-radius: 10px;
        padding: 10px 15px;
        font-size: 1rem;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 30px;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }

    .fw-bold {
        font-weight: bold;
    }
</style>
