<style>
    .page-title {
        position: relative;
        padding: 100px 0;
        color: white;
        background-size: cover;
        background-position: center;
        overflow: hidden;
    }

    .background-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* Semi-transparent overlay */
        z-index: 1;
        /* Overlay sits above the background image */
    }

    .container {
        position: relative;
        /* Ensure content stays above the overlay */
        z-index: 2;
        /* Content above overlay */
    }

    .animated-title {
        font-size: 3rem;
        /* Adjust as needed */
        font-weight: bold;
        animation: fadeIn 1.5s ease-in-out;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }

    .breadcrumbs {
        margin-top: 20px;
    }

    .breadcrumbs ol {
        list-style: none;
        padding: 0;
        display: inline-block;
    }

    .breadcrumbs li {
        display: inline;
        font-size: 1.2rem;
    }

    .breadcrumbs li a {
        color: white;
        text-decoration: none;
        transition: color 0.3s ease;
        position: relative;
        /* Ensure links are positioned correctly */
        z-index: 2;
        /* Make sure links are above the overlay */
    }

    .breadcrumbs li a:hover {
        color: #ffcc00;
        /* Change color on hover */
    }

    .breadcrumbs li.current {
        color: #ffcc00;
        /* Highlight current page */
    }

    /* Animation Keyframes */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }



    /* Event Section Styling */
    .events-list-03 {
        padding: 50px 0;
        /* Adds spacing to the section */
        background-color: #f9f9f9;
        /* Light background for contrast */
        font-family: 'Arial', sans-serif;
    }

    .event-body-content {
        display: flex;
        justify-content: center;
        align-items: flex-start;
    }

    .events-full-box {
        background-color: #fff;
        /* White background for the event box */
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        /* Subtle shadow for depth */
        border-radius: 8px;
        /* Rounded corners for a modern look */
        overflow: hidden;
        /* Ensures the content stays within the box */
        margin-bottom: 30px;
        /* Adds spacing between event cards */
    }

    .events-single-box {
        display: flex;
        flex-wrap: wrap;
        padding: 20px;
    }

    .event-info {
        padding: 20px;
    }

    .event-info h3 {
        font-size: 1.8rem;
        color: #333;
        /* Dark text for contrast */
        margin-bottom: 10px;
    }

    .events-time {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        font-size: 1rem;
        color: #777;
        margin-bottom: 15px;
    }

    .event-icon {
        margin-right: 5px;
        color: #ff6b6b;
        /* Custom color for the icons */
    }

    .event-info p {
        color: #555;
        line-height: 1.6;
    }

    .event-btn {
        display: inline-block;
        padding: 10px 20px;
        background-color: #ff6b6b;
        /* Button color */
        color: white;
        font-weight: bold;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .event-btn:hover {
        background-color: #e55555;
        /* Darken on hover */
    }

    .event-btn i {
        margin-left: 10px;
        /* Space between text and arrow */
    }

    /* Image Styling */
    .img-responsive {
        width: 100%;
        height: auto;
        border-radius: 8px;
        object-fit: cover;
        /* Ensures image covers the container */
    }

    /* Responsive Design for Smaller Screens */
    @media (max-width: 768px) {
        .event-info {
            padding: 15px;
        }

        .events-single-box {
            flex-direction: column;
            /* Stack content vertically on smaller screens */
        }
    }

    /* Event Image Animation */
    .img-responsive {
        width: 100%;
        height: auto;
        border-radius: 8px;
        object-fit: cover;
        transition: transform 0.5s ease, opacity 0.5s ease;
        /* Smooth transition for zoom effect */
        opacity: 0;
        /* Initially hidden */
        animation: fadeIn 1s forwards;
        /* Fade-in on load */
    }

    /* Zoom-in on Hover */
    .img-responsive:hover {
        transform: scale(1.1);
        /* Slightly zooms in when hovered */
    }

    /* Keyframes for Fade-In Effect */
    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
            /* Start slightly below its final position */
        }

        100% {
            opacity: 1;
            transform: translateY(0);
            /* Final position */
        }
    }

    /* Responsive Design Adjustments */
    @media (max-width: 768px) {
        .img-responsive {
            margin-bottom: 15px;
            /* Add margin for smaller screens */
        }
    }
</style>
<!-- Page Title -->
<div class="pic">
    <div class="page-title dark-background" data-aos="fade" 
    style="background-image: url(<?php echo base_url(); ?>asset/images/downloads/background.png);">
        <div class="background-overlay"></div> <!-- Overlay div for dull effect -->
        <div class="container">
            <h1 class="animated-title">School Vision & Mission</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                    <li class="current">Vision & Mission</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<!-- End Page Title -->
<!-- Teachers Area section -->
<section class="events-list-03">
    <div class="container">
        <div class="row event-body-content">
            <!-- Include Animate.css -->

            <div class="col-sm-12 events-full-box dropdown-content-custom" >
                <div class="events-single-box">
                    <div class="col-sm-12">
                        <h1 class="animate__animated animate__fadeInUp">
                            Vision
                        </h1>
                        <p> 
                            "We empower our students to acquire, articulate and demonstrate knowledge and skills in safe and supportive environment to meet the challenges of a changing world."
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <div class="container">
        <!-- Add OUR Mission and Core Values sections -->
        <div class="col-sm-12 events-full-box">
            <div class="events-single-box">
                <div class="col-sm-12 dropdown-content-custom">
                    <h1 class="animate__animated animate__fadeInUp">
                        OUR Mission
                    </h1>
                    <p>
                        "We at PISR focus on developing a global outlook among our students, molding them into responsible individuals of the future."
                    </p> 
                    <br>
                    <h3 class="animate__animated animate__fadeInUp core-values-title">
                        Core Values
                    </h3>
                    <p class="core-values-text">
                        <span class="core-value">Competence</span> |
                        <span class="core-value">Devotion</span> |
                        <span class="core-value">Excellence</span>
                    </p>

                </div>
            </div>
        </div>
    </div>
    </section>
<!-- ./ End Teachers Area section -->
<script>
    AOS.init();
</script>