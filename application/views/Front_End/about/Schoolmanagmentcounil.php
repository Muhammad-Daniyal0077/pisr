<style>
    .about-pISR-title {
        font-size: 2.5em;
        /* Increased font size for the title */
        font-weight: bold;
        /* Bold text for emphasis */
        color: #2c3e50;
        /* Dark color for the title */
        margin-bottom: 15px;
        /* Space below the title */

    }

    .about-pISR-description {
        font-size: 1.2em;
        /* Font size for better readability */
        color: #34495e;
        /* Darker text color */
        line-height: 1.6;
        /* Improved line height for spacing */
        margin-bottom: 20px;
        /* Space below the paragraph */
        padding: 0 15px;
        /* Padding for mobile view */
    
        /* Justify text for better alignment */
    }

    .about-pISR-scm-title {
        font-size: 2em;
        /* Increased font size for the SMC title */
        color: #27ae60;
        /* Green color for the SMC title */
        margin: 20px 0 10px;
        /* Space around the title */

    }

    .about-pISR-scm-list {
        list-style: none;
        /* Remove default list styling */
        padding: 0;
        /* Remove default padding */
    }

    .about-pISR-scm-list li {
        font-size: 1.2em;
        /* Font size for the list items */
        color: #2c3e50;
        /* Color for the list items */
        margin: 5px 0;
        /* Space between list items */
        transition: transform 0.2s;
        /* Smooth transition for hover effect */
    }

    .about-pISR-scm-list li:hover {
        transform: scale(1.05);
        /* Slightly increase size on hover */
    }

    .about-pISR-contact {
        font-size: 1.2em;
        /* Font size for contact information */
        color: #34495e;
        /* Dark color for the contact info */
        text-align: center;
        /* Center the contact info */
        margin-top: 20px;
        /* Space above the contact info */
    }

    .about-pISR-contact a {
        color: #2980b9;
        /* Link color */
        text-decoration: none;
        /* Remove underline from link */
        font-weight: bold;
        /* Bold the link */
    }

    .about-pISR-contact a:hover {
        text-decoration: underline;
        /* Underline on hover */
    }
</style>
<!-- Page Title -->
<div class="pic">
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
        <div class="background-overlay"></div> <!-- Overlay div for dull effect -->
        <div class="container">
            <h1 class="animated-title">Principle Message</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                    <li class="current">Principle Message</li>
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

            <!-- Add PISR Information -->
            <div class="col-sm-12 events-full-box">
                <div class="events-single-box">
                    <div class="col-sm-12 dropdown-content-custom">
                        <h2 class="animate__animated animate__fadeInUp about-pISR-title">
                            About PISR
                        </h2>
                        <p >
                            "PISR is a community school registered under the Ministry of Education (MoE) License No. G25. The Patron-in-Chief is the Ambassador of the Islamic Republic of Pakistan. The school is governed through policies set forth by the parents-based board of directors officially known as the "School Management Council" or "SMC," according to the MoE Regulations for the Community Schools (2006). The Principal is the chief executive of Academic, Administrative, and Financial affairs of the school."
                        </p>
                        <h3 class="animate__animated animate__fadeInUp about-pISR-scm-title">
                            SMC Members:
                        </h3>
                        <ul class="animate__animated animate__fadeInUp about-pISR-scm-list">
                            <li>Engr. Syed Mustafa Pasha (Chairman)</li>
                            <li>Dr. Tahir Nawaz</li>
                            <li>Mr. Tanveer Ahmed</li>
                            <li>Mr. Asad Muhammad Khan</li>
                            <li>Mr. Sheikh Abubakar</li>
                            <li>Engr. Mohammad Waqas</li>
                        </ul>
                        <p class="about-pISR-contact">
                            Parents’ comments and suggestions to improve the school standard are welcomed at the following email: <a href="mailto:smc@pisr.org">smc@pisr.org</a>
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- ./ End Teachers Area section -->
<script>
    AOS.init();
</script>