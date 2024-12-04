
<!-- Page Title -->
<div class="pic">
	<div class="page-title dark-background" data-aos="fade" 
    style="background-image: url(<?php echo base_url(); ?>asset/images/downloads/background.png);">
    <div class="background-overlay"></div> <!-- Overlay div for dull effect -->
		<div class="container">
			<h1 class="animated-title">Admin Staff</h1>
			<nav class="breadcrumbs">
				<ol>
					<li><a href="<?php echo base_url(); ?>home">Home</a></li>
					<li class="current">Staff</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<style>
.events-list-03 {
    background-color: #f8f9fa; /* Light background for contrast */
}

.card {
    border-radius: 15px; /* Rounded corners */
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden; /* Ensure images don't overflow */
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3); /* Deeper shadow on hover */
}

.card img {
    width: 80%; /* Adjust image size */
    height: auto; /* Maintain aspect ratio */
    margin: 20px auto; /* Center the image */
    border: 4px solid #007bff; /* Border around the image */
}

.card-body {
    background-color: #ffffff; /* White background for card body */
    padding: 20px; /* Padding inside the card */
}

.card-title {
    font-size: 1.60rem; /* Slightly larger font size */
    font-weight: bold; /* Make title bold */
    color: #007bff; /* Primary color for the title */
}

.card-text {
    font-size: 1.5rem; /* Normal size for text */
    color: #555; /* Dark grey for contrast */
}


</style>

<!-- Teachers Area section -->
<!-- Board Members Section -->
<section class="events-list-03 py-5 bg-light">
    <div class="container">
        <h2 style="margin: 30px;" class="text-center text-primary mb-5">Our Staff</h2>
        <div class="row justify-content-center dropdown-content-custom ">
            <div class="col-md-4 mb-4">
                <div class="card text-center shadow-lg rounded border-0">
                    <img src="<?php echo base_url(); ?>asset/images/profile1.jpg" class="card-img-top rounded-circle img-fluid" alt="Board Member 1">
                    <div class="card-body">
                        <h5 class="card-title text-info">Mr. John Smith</h5>
                        <h6 class="card-text text-muted">Human Resource</h6>
                        <h5 class="mt-3">"Uploads Soon".</h5>
                        <p style="margin: 10px;" class="btn btn-primary">Contact:</p> <span>xyz.it@pisr.org</span>


                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center shadow-lg rounded border-0">
                    <img src="<?php echo base_url(); ?>asset/images/profile2.jpeg" class="card-img-top rounded-circle img-fluid" alt="Board Member 2">
                    <div class="card-body">
                        <h4 class="card-title text-info">Mrs. Sadia Khalid</h4>
                        <h5 class="card-text text-muted">IT Manager</h5>
                        <h5 class="mt-3">"Being an assistant to the organization involved in the making of our scholars is the most rewarding part of my job. I am here to contribute and serve in the progression of my community".</h5>
                        <p style="margin: 10px;" class="btn btn-primary">Contact:</p> <span>manager.it@pisr.org</span>
                  
                    </div>
                </div>  
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center shadow-lg rounded border-0">
                    <img src="<?php echo base_url(); ?>asset/images/profile1.jpg" class="card-img-top rounded-circle img-fluid" alt="Board Member 3">
                    <div class="card-body">
                        <h4 class="card-title text-info">Mr. Adeel Hussain</h4>
                        <h5 class="card-text text-muted">Admissions Officer</h5>
                        <h5 class="mt-3">"I am here to facilitate you in every step of the admission process. I like helping people and assisting them with their queries."</h5>
                        <p style="margin: 10px;" class="btn btn-primary">Contact:</p>
                        <span>adeel@pisr.org</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Additional CSS for Styling */
    .card {
        transition: transform 0.2s;
    }

    .card:hover {
        transform: scale(1.05); /* Slight zoom effect on hover */
    }

    .bg-light {
        background-color: #f8f9fa !important; /* Light background for contrast */
    }

    .text-info {
        color: #007bff !important; /* Primary color for names */
    }

    .text-muted {
        color: #6c757d; /* Muted color for roles */
    }

    .shadow-lg {
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important; /* Enhanced shadow */
    }
</style>







<!-- ./ End Teachers Area section -->
<script>
	AOS.init();
</script>