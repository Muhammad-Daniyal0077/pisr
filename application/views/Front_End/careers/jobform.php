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
<!-- Job Form Section -->
<div class="container py-5" style="margin-top: 20px;">
    <h2 class="text-primary text-center mb-4">Submit Your Application</h2>
    <p class="text-center mb-5">We are excited to have you apply for a position with us. Fill out the form below and attach your resume.</p>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0">
                <div class="card-body">
                    <form>
                        <!-- Full Name -->
                        <div class="form-group mb-4">
                            <label for="name" class="form-label fw-bold">Full Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your full name">
                        </div>
                        <!-- Email -->
                        <div class="form-group mb-4">
                            <label for="email" class="form-label fw-bold">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        
                        <!-- Applied For -->
                        <div class="form-group mb-4">
                            <label for="designation" class="form-label fw-bold">Applied For</label>
                            <select class="form-select" id="designation">
                                <option selected disabled>Select a designation</option>
                                <option value="1">Software Engineer</option>
                                <option value="2">Web Developer</option>
                                <option value="3">Graphic Designer</option>
                                <option value="4">Project Manager</option>
                                <option value="5">Data Analyst</option>
                                <option value="6">HR Specialist</option>
                            </select>
                        </div>

                        <!-- Resume Upload -->
                        <div class="form-group mb-4">
                            <label for="resume" class="form-label fw-bold">Upload Resume</label>
                            <input type="file" class="form-control" id="resume">
                        </div>
                        <!-- Message -->
                        <div class="form-group mb-4">
                            <label for="message" class="form-label fw-bold">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Write your message here..."></textarea>
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
    }

    .form-group label {
        font-size: 1rem;
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
