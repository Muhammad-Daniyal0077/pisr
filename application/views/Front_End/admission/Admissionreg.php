<!-- Page Title -->
<div class="pic">
	<div class="page-title dark-background" data-aos="fade" style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
		<div class="background-overlay"></div> <!-- Overlay div for dull effect -->
		<div class="container">
			<h1 class="animated-title">Admission Registeration Form</h1>
			<nav class="breadcrumbs">
				<ol>
					<li><a href="<?php echo base_url(); ?>home">Home</a></li>
					<li class="current">Admission Registeration Form</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<style>
        body {
            background: linear-gradient(to right, #007bff, #509999);
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 700px;
            margin: 3rem auto;
            padding: 2rem;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .form-title {
            font-size: 2rem;
            font-weight: bold;
            color: #343a40;
            text-align: center;
            margin-bottom: 1.5rem;
            text-transform: uppercase;
        }
        .form-label {
            font-weight: 500;
            color: #495057;
        }
        .form-control, .form-select {
            border-radius: 6px;
            padding: 0.75rem;
        }
        .btn-submit {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        .text-center {
            text-align: center;
        }
    </style>

<div class="container">
    <div class="form-container">
        <h2 class="form-title">PISR Admission Form</h2>
        <form>
            <!-- Personal Details Section -->
            <div class="mb-4">
                <label for="fullName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullName" placeholder="Enter your full name" required>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <label for="dob" class="form-label">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" required>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="gender" class="form-label">Gender</label>
                    <select class="form-select" id="gender" required>
                        <option selected disabled>Select gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>

            <!-- Contact Information Section -->
            <div class="mb-4">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-4">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
            </div>

            <!-- Address Section -->
            <div class="mb-4">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" placeholder="Enter your address" required>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <label for="city" class="form-label">City</label>
                    <input type="text" class="form-control" id="city" placeholder="City" required>
                </div>
                <div class="col-md-6 mb-4">
                    <label for="state" class="form-label">State</label>
                    <input type="text" class="form-control" id="state" placeholder="State" required>
                </div>
            </div>

            <!-- Academic Information Section -->
            <div class="mb-4">
                <label for="program" class="form-label">Program Applied For</label>
                <select class="form-select" id="program" required>
                    <option selected disabled>Select Program</option>
                    <option value="undergraduate">Undergraduate</option>
                    <option value="graduate">Graduate</option>
                    <option value="postgraduate">Postgraduate</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="major" class="form-label">Intended Major</label>
                <input type="text" class="form-control" id="major" placeholder="Enter your intended major" required>
            </div>

            <!-- Submit Button -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-submit">Submit Application</button>
            </div>
        </form>
    </div>
</div>	