<script src="https://cdn.jsdelivr.net/npm/@srexi/purecounterjs/dist/purecounter_vanilla.js"></script>
<style>
    .custom-slider-wrapper {
        width: 100%;
        height: 100vh; /* Set height to 100% of the viewport */
        margin: 0;
        position: relative;
        overflow: hidden;
    }

    .custom-slider {
        display: flex;
        width: 100%;
        height: 100%;
    }

    .custom-slide {
        min-width: 100%;
        height: 100%;
        position: relative;
    }

    video {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Make the video cover the entire container */
        position: absolute;
        top: 0;
        left: 0;
    }
    @media (max-width: 768px) {
	.custom-slide {
	  margin-left: 0 !important; /* Remove margin for smaller screens */
	  margin-top: 80px;
	}
  }
  
  @media (max-width: 576px) {
	.custom-slide {
	  max-height: 60vh; /* Reduce max height for very small screens */
	}
  }

</style>

<!-- Counter -->
<div class="custom-slider-wrapper">
    <div class="custom-slider" id="videoSlider">
        <!-- Single Video -->
        <div class="custom-slide">
            <video  src="<?php echo base_url(); ?>asset/video/long.mp4" autoplay muted></video>
        </div>
    </div>
</div>





<!-- Principle Area section -->
<section class="Welcome-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-header-box">
                <div class="section-header section-header-l">
                    <h2>Welcome <span style="color: #0632ff;">To PISR</span></h2>

                </div><!-- ends: .section-header -->
            </div>
            <div class="col-sm-6 event-info img-fluid mt-4">
                <p class="div-sm-7 event-info ">
                    PISR is a proficient and contemporary school with years of experience and knowledge in grooming of children. We provide experienced teachers and supportive environment for everyone. </p>

                <p> PISR was initially established in 1966, with the strength of only six students in a rented villa on Khazan Road, Riyadh. It was started by five families of Pakistan Air Force officers who were keenly interested in the future of their generations. It got shut down after few months due to certain legal formalities but it didn’t stop them to keep struggle going.</p>


            </div>
            <div class="col-sm-6">
                <img src="<?php echo base_url(); ?>asset/images/second_background.jpeg" alt="" class="imgs">
            </div><!-- Ends: . -->
        </div>
    </div>
</section><!-- Ends: . -->

<!-- Principle Area section -->
<section class="Welcome-area" style="margin-top: 10px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-header-box">
                <div class="section-header section-header-l">
                    <h2>Principle <span style="color: #0632ff;">Message</span></h2>

                </div><!-- ends: .section-header -->
            </div>
            <div class="col-sm-6">
                <img src="<?php echo base_url(); ?>asset/images/principle.jpg" alt="not"
                    class="img-responsive-principle" class="imgs">
            </div><!-- Ends: . -->
            <div class="col-sm-6 event-info img-fluid">
                <h4>Dear Parents & Students,
                </h4>
                <p class="div-sm-7 event-info ">
                    As the Principal of our esteemed institution, it is my honor to extend a warm welcome to you on our
                    school website. We are grateful for your visit and hope to provide you with insightful information
                    about our school and the diverse experiences we offer our students.
                    <br> <br>
                    At PISR, we are committed to nurturing well-rounded individuals who strive to achieve their full
                    potential in a supportive and dynamic environment. We ensure a conducive atmosphere for your
                    children, promoting a friendly, constructive, and healthy setting. Our dedicated and experienced
                    staff are passionate about the character development of our students. We highly value the feedback
                    from both parents and students and are dedicated to delivering the best possible education to our
                    future leaders—our students.
                </p>
                <h3>Mr. Raja Muhammad Irfan </h3>
                I eagerly anticipate a fantastic school year ahead.
                Warmest Regards,



            </div>
        </div>
    </div>
</section><!-- Ends: . -->

<style>
    /* Position Buttons */
    .new-prev-btn {
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        background: #e0f7fa;
        border: none;
        padding: 10px;
        border-radius: 50%;
        cursor: pointer;
        transition: background 0.3s;
    }

    .new-next-btn {
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        background: #e0f7fa;
        border: none;
        padding: 10px;
        border-radius: 50%;
        cursor: pointer;
        transition: background 0.3s;
    }

    .new-prev-btn:hover,
    .new-next-btn:hover {
        background: #b2ebf2;
    }

    /* Adjust Section Layout */
    .updates-news-section {
        position: relative;
    }

    .new-news-section {
        position: relative;
        padding-left: 50px;
    }

    .new-events-section {
        position: relative;
        padding-right: 50px;
    }
</style>


<!-- news and events -->
<section class="updates-news-section">
    <div class="container">
        <div class="updates-container">
            <!-- News Section -->
            <div class="new-news-section">
                <h4 class="section-title new-news-title">Latest News</h4>
                <!-- Prev Button at the start of Latest News -->
                <button class="new-prev-btn">
                    <i class="fas fa-arrow-left" style="font-size: 1.5rem;"></i>
                </button>
                <div class="new-news-slider">
                    <div class="new-news-content">
                        <div class="new-news-item">
                            <div class="news-text">
                                <h6 class="new-news-headline">Revision in school fees for Session 2024-2025</h6>
                                <a href="https://pisr.org/v2/wp-content/uploads/2024/06/Fee-Increase-Letter.pdf" class="new-news-date">Fee Increase Letter</a>
                            </div>
                        </div>
                        <div class="new-news-item">
                            <div class="news-text">
                                <h5 class="new-news-headline">Fee Counter Timings: 06:30 AM to 2:00 PM </h5>
                                <span class="new-news-date">(Sunday to Thursday) (Friday-Saturday off)</span>
                            </div>
                        </div>
                        <div class="new-news-item">
                            <div class="news-text">
                                <h5 class="new-news-headline">Nursery/KG/Play Group has no uniform dress code </h5>
                                <span class="new-news-date">Students can come in outfits of their choice.</span>
                            </div>
                        </div>
                        <div class="new-news-item">
                            <div class="news-text">
                                <h5 class="new-news-headline">Main Office building shifted </h5>
                                <span class="new-news-date">From Nasiriyah to Al Washam Building</span>
                            </div>
                        </div>
                        <div class="new-news-item">
                            <div class="news-text">
                                <h5 class="new-news-headline">For Admission Queries</h5>
                                <span class="new-news-date">Please WhatsApp 0580793894.</span>
                            </div>
                        </div>
                        <div class="new-news-item">
                            <div class="news-text">
                                <h5 class="new-news-headline">There is no change in the uniform </h5>
                                <span class="new-news-date">Design/ pattern..</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Events Section -->
            <div class="new-events-section">
                <h4 class="section-title new-events-title">Upcoming Events</h4>
                <div class="new-events-slider">
                    <div class="new-events-content">
                        <div class="new-event-item">
                            <div class="event-text">
                                <h5 class="new-event-headline">No Records Found</h5>
                                <span class="new-event-date">Null</span>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Next Button at the end of Upcoming Events -->
                <button class="new-next-btn">
                    <i class="fas fa-arrow-right" style="font-size: 1.5rem;"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const newsContent = document.querySelector('.new-news-content');
        const eventsContent = document.querySelector('.new-events-content');
        const prevBtn = document.querySelector('.new-prev-btn');
        const nextBtn = document.querySelector('.new-next-btn');

        let currentIndex = 0;
        const maxIndex = newsContent.childElementCount - 1;

        const updateSlider = (direction) => {
            currentIndex += direction;
            if (currentIndex < 0) currentIndex = maxIndex;
            if (currentIndex > maxIndex) currentIndex = 0;

            newsContent.scrollTo({
                left: currentIndex * newsContent.clientWidth,
                behavior: 'smooth'
            });

            eventsContent.scrollTo({
                left: currentIndex * eventsContent.clientWidth,
                behavior: 'smooth'
            });
        };

        prevBtn.addEventListener('click', () => updateSlider(-1));
        nextBtn.addEventListener('click', () => updateSlider(1));

        setInterval(() => updateSlider(1), 3000);
    });
</script>



<style>
    /* General styling */
    .high-achievers-section {
        text-align: center;
        padding: 40px 20px;
        background-color: #f7f7f7;
    }

    .high-achievers-title {
        font-size: 2em;
        margin-bottom: 20px;
        color: #333;
    }

    /* Swiper container styling */
    .custom-swiper-container {
        max-width: 100%;
        margin: 0 auto;
        position: relative;
        padding-bottom: 40px;
        /* Space for pagination */
        overflow: hidden;
        /* Prevent slides from extending beyond container */
        box-sizing: border-box;
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
    }

    .high-achiever-card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        width: 100%;
        max-width: 270px;
        text-align: center;
        margin: 0 auto;
        transition: transform 0.3s;
    }

    .high-achiever-card:hover {
        transform: translateY(-4px);
    }

    .high-achiever-card-image img {
        width: 40%;
        height: auto;
        object-fit: cover;
        border-radius: 16px;
        border-bottom: 2px solid #ffb606;
        max-height: 247px;
        padding: 4px;
        background: cadetblue;
        margin-top: 6px;
    }

    .high-achiever-card-content {
        padding: 4px;
    }

    .high-achiever-name {
        font-size: 1.2em;
        color: #333;
        margin-top: 10px;
        font-weight: bold;
    }

    .high-achiever-card-content h4 {
        margin: 5px 0;
        color: #555;
        font-weight: 200;
    }

    .high-achiever-card-content p {
        margin: 10px 0;
        color: #777;
        font-size: 0.9em;
    }

    /* Swiper navigation buttons */
    .custom-swiper-button-next,
    .custom-swiper-button-prev {
        font-size: 6px;
        background-color: #fff;
        padding: 10px;
        border-radius: 50%;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        cursor: pointer;
    }

    .swiper-button-next:after,
    .swiper-button-prev:after {
        font-size: 20px;
        /* Adjust this value as needed */
    }



    .custom-swiper-button-next {
        right: 0px;
    }

    .custom-swiper-button-prev {
        left: 0px;
    }

    /* Swiper pagination styling */
    .custom-swiper-pagination {
        position: absolute;
        bottom: 10px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        gap: 8px;
    }

    .swiper-pagination-bullet {
        width: 12px;
        height: 12px;
        background-color: #bbb;
        opacity: 1;
        transition: background-color 0.3s;
    }

    .swiper-pagination-bullet-active {
        background-color: #ffb606;
    }
</style>

<!-- Top studetns -->
<section class="high-achievers-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-header-box">
                <div class="section-header section-header-l">
                    <h2>Our Top <span style="color: #0632ff;">Students</span></h2>

                </div><!-- ends: .section-header -->
            </div>
        </div>

        <div class="custom-swiper-container swiper-container">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="high-achiever-card" id="">
                        <div class="high-achiever-card-image">
                            <img src="<?php echo base_url(); ?>asset/images/Students/01.png" alt="EMAN BINT E RAHEEL">
                        </div>
                        <div class="high-achiever-card-content">
                            <h1 class="high-achiever-name">EMAN BINT E RAHEEL</h1>
                            <h4>Marks: 1062</h4>
                            <h4>Grade: A-1</h4>
                            <p>SSC ANNUAL EXAMINATION - 2024</p>
                            <a href="<?php echo base_url(); ?>achievments/fbise" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="high-achiever-card">
                        <div class="high-achiever-card-image">
                            <img src="<?php echo base_url(); ?>asset/images/Students/02.png" alt="FAIZA USMAN">
                        </div>
                        <div class="high-achiever-card-content">
                            <h1 class="high-achiever-name">FAIZA USMAN</h1>
                            <h4>Marks: 1043</h4>
                            <h4>Grade: A-1</h4>
                            <p>SSC ANNUAL EXAMINATION - 2024</p>
                            <a href="<?php echo base_url(); ?>achievments/fbise" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="high-achiever-card">
                        <div class="high-achiever-card-image">
                            <img src="<?php echo base_url(); ?>asset/images/Students/03.png" alt="AIMAN HARIS">
                        </div>
                        <div class="high-achiever-card-content">
                            <h1 class="high-achiever-name">AIMAN HARIS</h1>
                            <h4>Marks: 1036</h4>
                            <h4>Grade: A-1</h4>
                            <p>SSC ANNUAL EXAMINATION - 2024</p>
                            <a href="<?php echo base_url(); ?>achievments/fbise" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="high-achiever-card">
                        <div class="high-achiever-card-image">
                            <img src="<?php echo base_url(); ?>asset/images/Students/04.png" alt="HIBA SIDDIQUEI">
                        </div>
                        <div class="high-achiever-card-content">
                            <h1 class="high-achiever-name">HIBA SIDDIQUEI</h1>
                            <h4>Marks: 1032</h4>
                            <h4>Grade: A-1</h4>
                            <p>HSSC ANNUAL EXAMINATION - 2024</p>
                            <a href="<?php echo base_url(); ?>achievments/fbise" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination and Navigation -->
            <div class="custom-swiper-pagination swiper-pagination"></div>
            <div class="custom-swiper-button-next swiper-button-next"></div>
            <div class="custom-swiper-button-prev swiper-button-prev"></div>
        </div>
    </div>
</section>



<!-- Counter Section -->
<section class="counter-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-0 counters">
                <div class="row">
                    <div class="col-sm-6 counters-item">
                        <div class="section counter-box">
                            <img src="<?php echo base_url(); ?>asset/images/index/counter-icon-01.png" alt="">
                            <div class="project-count counter">
                                <h1 data-purecounter-start="0" data-purecounter-end="4219" data-purecounter-duration="1" class="purecounter"></h1>
                            </div>
                            <span>Active students</span>
                        </div>
                    </div>

                    <div class="col-sm-6 counters-item">
                        <div class="section counter-box">
                            <img src="<?php echo base_url(); ?>asset/images/index/counter-icon-02.png" alt="">
                            <div class="project-count counter">
                                <h1 data-purecounter-start="0" data-purecounter-end="200" data-purecounter-duration="1" class="purecounter"></h1>
                            </div>
                            <span>FACULTY</span>
                        </div>
                    </div>
                    <div class="col-sm-6 counters-item">
                        <div class="section counter-box">
                            <img src="<?php echo base_url(); ?>asset/images/index/counter-icon-03.png" alt="">
                            <div class="project-count counter">
                                <h1 data-purecounter-start="0" data-purecounter-end="98" data-purecounter-duration="1" class="purecounter"></h1>
                            </div>
                            <span>Year of history</span>
                        </div>
                    </div>
                    <div class="col-sm-6 counters-item">
                        <div class="section counter-box">
                            <img src="<?php echo base_url(); ?>asset/images/index/counter-icon-04.png" alt="">
                            <div class="project-count counter">
                                <h1 data-purecounter-start="0" data-purecounter-end="70" data-purecounter-duration="1" class="purecounter"></h1>
                            </div> <span>Awards</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-sm-offset-0 counter-text-bottom">
                <div class="counter-text-box">
                    <div class="counter-text">
                        <div class="row">
                            <div class="col-sm-12 section-header-box">
                                <div class="section-header">
                                    <h2>Get Started Today</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="counter-btn">
                        <a href="#">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    /* Add a gap and enhance card styling */
    #school-levels .card {
        border: 1px solid #ddd;
        /* Light border for the card */
        border-radius: 8px;
        /* Rounded corners */
        overflow: hidden;
        /* Ensures child elements don’t overflow */
        transition: transform 0.3s, box-shadow 0.3s;
        /* Smooth hover effects */
    }

    #school-levels .card:hover {
        transform: scale(1.05);
        /* Slightly enlarge on hover */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        /* Emphasize shadow */
    }

    #school-levels .card-img-top {
        max-height: 200px;
        /* Restrict image height */
        object-fit: cover;
        /* Keep aspect ratio */
    }

    #school-levels .card-title {
        font-size: 1.25rem;
        /* Increase title size */
        font-weight: bold;
    }

    #school-levels .btn-primary {
        background-color: #0632ff;
        /* Match section header color */
        border-color: #0632ff;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    #school-levels .btn-primary:hover {
        background-color: #0056e0;
        /* Slightly darker blue on hover */
        transform: scale(1.05);
        /* Slight enlarge effect */
    }
</style>

<section id="school-levels" class="py-5 bg-light">
    <div class="container">
        <div class="row py-4" style="margin-bottom: 12px;">
            <div class="col-sm-12 section-header-box">
                <div class="section-header section-header-l ">
                    <h2>School <span style="color: #0632ff;">Sections</span></h2>
                </div>
            </div>
        </div>
        <div class="row g-4"> <!-- Use Bootstrap’s gap utility -->
            <!-- Pre-School Card -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center shadow-sm h-100">
                    <img src="<?php echo base_url(); ?>asset/images/sections/Play_Group.jpg" class="card-img-top" alt="Pre-School">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Pre-School</h5>
                        <p class="card-text">Engaging activities and nurturing environment for young learners.</p>
                        <a href="<?php echo base_url(); ?>acadimics/curriculum" class="btn btn-primary mt-auto">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Junior School Card -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center shadow-sm h-100">
                    <img src="<?php echo base_url(); ?>asset/images/sections/junior_boys.jpg" class="card-img-top" alt="Junior School">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Junior School</h5>
                        <p class="card-text">Building foundational skills through interactive learning.</p>
                        <a href="<?php echo base_url(); ?>acadimics/curriculum" class="btn btn-primary mt-auto">Read More</a>
                    </div>
                </div>
            </div>
            <!-- Middle School Card -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center shadow-sm h-100">
                    <img src="<?php echo base_url(); ?>asset/images/sections/Middle_Boys.avif" class="card-img-top" alt="Middle School">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Middle School</h5>
                        <p class="card-text">Preparing students with advanced knowledge and critical thinking skills.</p>
                        <a href="<?php echo base_url(); ?>acadimics/curriculum" class="btn btn-primary mt-auto">Read More</a>
                    </div>
                </div>
            </div>
            <!-- High School Card -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center shadow-sm h-100">
                    <img src="<?php echo base_url(); ?>asset/images/sections/Senior_Boys.avif" class="card-img-top" alt="High School">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">High School</h5>
                        <p class="card-text">Focused on academic excellence and career preparation.</p>
                        <a href="<?php echo base_url(); ?>acadimics/curriculum" class="btn btn-primary mt-auto">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .gallery {
        padding: 50px 0;
        margin-top: 30px;
        border-radius: 15px;
    }

    .gallery h1 {
        font-size: 2.5rem;
        color: #333;
        font-weight: bold;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .gallery-item {
        padding: 2px 10px;
    }

    .gallery-item img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        cursor: pointer;
    }

    /* Custom Prev and Next buttons */
    .custom-slick-prev,
    .custom-slick-next {
        position: absolute;
        top: 45%;
        transform: translateY(-50%);
        background-color: #007bff;
        color: #fff;
        border: none;
        font-size: 24px;
        padding: 10px;
        cursor: pointer;
        z-index: 1;
        border-radius: 50%;
    }

    .custom-slick-prev {
        left: -40px;
    }

    .custom-slick-next {
        right: -40px;
    }

    .s:hover,
    .custom-slick-next:hover {
        background-color: #0056b3;
    }

    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1050;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.8);
    }

    .modal-content {
        position: relative;
        margin: auto;
        padding: 0;
        max-width: 700px;
        width: 90%;
    }

    .modal img {
        width: 100%;
        border-radius: 10px;
    }

    .close {
        position: absolute;
        top: 10px;
        right: 20px;
        color: white;
        font-size: 30px;
        cursor: pointer;
    }

    .prev,
    .next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: white;
        font-size: 30px;
        cursor: pointer;
        padding: 10px;
        z-index: 2;
    }

    .prev {
        left: 20px;
    }

    .next {
        right: 20px;
    }
</style>

<section class="gallery">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Photo Gallery</h1>
        <div class="gallery-slider">
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/01.jpg" alt="Image 1"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/02.jpg" alt="Image 2"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/03.jpg" alt="Image 2"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/22.jpg" alt="Image 2"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/05.jpg" alt="Image 2"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/06.jpg" alt="Image 3"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/07.jpg" alt="Image 3"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/08.jpg" alt="Image 3"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/09.jpg" alt="Image 3"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/10.jpg" alt="Image 3"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/11.jpg" alt="Image 4"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/12.jpg" alt="Image 5"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/15.jpg" alt="Image 6"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/14.jpg" alt="Image 7"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/13.jpg" alt="Image 7"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/20.jpg" alt="Image 7"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/17.jpg" alt="Image 7"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/16.jpg" alt="Image 7"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/19.jpg" alt="Image 7"></div>
            <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/Gallery/04.jpg" alt="Image 7"></div>
        </div>
        <style>
    .custom-slick-prev, .custom-slick-next {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    font-size: 24px;
    line-height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0.8;
    transition: opacity 0.3s, transform 0.3s;
    z-index: 1000; /* Ensure buttons appear above other elements */
}

.custom-slick-prev:hover, .custom-slick-next:hover {
    opacity: 1;
    transform: scale(1.1); /* Slightly enlarge on hover */
}

.custom-slick-prev {
    left: -20px;
    top: 50%;
    transform: translateY(-50%);
}

.custom-slick-next {
    right: -20px;
    top: 50%;
    transform: translateY(-50%);
}

@media (max-width: 768px) {
    .custom-slick-prev, .custom-slick-next 
    {
        width: 40px;
        height: 40px;
        font-size: 18px;
    }
}

@media (max-width: 576px) {
    .custom-slick-prev, .custom-slick-next {
        width: 30px;
        height: 30px;
        font-size: 16px;
        margin: 21px;
    }
}

        </style>
        <button class="custom-slick-prev">&#10094;</button>
        <button class="custom-slick-next">&#10095;</button>
    </div>
</section>

<!-- Modal -->
<div id="imageModal" class="modal">
    <span class="close">&times;</span>
    <span class="prev">&#10094;</span>
    <span class="next">&#10095;</span>
    <div class="modal-content">
        <img id="modalImage" src="" alt="Image Preview">
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize Slick Slider
        $('.gallery-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            dots: true,
            arrows: false,
            rows: 2,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });

        // Custom navigation buttons
        $('.custom-slick-prev').on('click', function() {
            $('.gallery-slider').slick('slickPrev');
        });

        $('.custom-slick-next').on('click', function() {
            $('.gallery-slider').slick('slickNext');
        });

        // Modal Functionality
        var modal = $('#imageModal');
        var modalImage = $('#modalImage');
        var currentIndex = 0;

        // Open Modal on Image Click
        $('.gallery-item img').on('click', function() {
            currentIndex = $(this).closest('.gallery-item').index();
            showImageInModal(currentIndex);
            modal.show();
        });

        // Show Image in Modal
        function showImageInModal(index) {
            var src = $('.gallery-item').eq(index).find('img').attr('src');
            modalImage.attr('src', src);
        }

        // Close Modal
        $('.close').on('click', function() {
            modal.hide();
        });

        // Next and Previous Buttons for Modal
        $('.next').on('click', function() {
            currentIndex = (currentIndex + 1) % $('.gallery-item').length;
            showImageInModal(currentIndex);
        });

        $('.prev').on('click', function() {
            currentIndex = (currentIndex - 1 + $('.gallery-item').length) % $('.gallery-item').length;
            showImageInModal(currentIndex);
        });

        // Close Modal on outside click
        $(window).on('click', function(event) {
            if (event.target === modal[0]) {
                modal.hide();
            }
        });
    });
</script>



<!-- ./ End Students Say Area section -->
<section class="students-say-area" style="margin-top: 12px;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-header-box">
                <div class="section-header">
                    <h2>What Students' Parents Say</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Image Slider (slider-nav) -->
                <div class="col-sm-3 col-sm-offset-4">
                    <div class="carousel-images slider-nav">
                        <div><img src="<?php echo base_url(); ?>asset/images/Parents/001.jpg" alt="1"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/Parents/002.jpg" alt="2"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/Parents/003.jpg" alt="3"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/Parents/004.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/Parents/005.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/Parents/006.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/Parents/007.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/Parents/008.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/Parents/009.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/Parents/010.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/Parents/011.png" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/Parents/012.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/Parents/013.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/Parents/014.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/Parents/015.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                    </div>
                </div>

                <!-- Text Slider (slider-for) -->
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="carousel-text slider-for">
                        <div class="single-box">
                            <p>“ School is fantastic! The teachers not only possess exceptional qualifications but also
                                exhibit genuine concern and care for their students.”</p>
                            <h3>Muhammad Afzal Sadiq</h3>
                            <span>GIS Analyst in Sports Boulevard Foundation</span>
                        </div>
                        <div class="single-box">
                            <p>“ As a parent, I am incredibly pleased with the quality of education and the nurturing
                                environment at Pakistan International School Riyadh. The dedicated teachers and diverse
                                curriculum have significantly contributed to my child's academic growth and personal
                                development. I appreciate the school's commitment to providing a strong sense of
                                community and cultural values. I will recommend this institution to other parents
                                looking for a comprehensive education for their children with a mix of cultural values.”
                            </p>
                            <h3>Tuseef Khan</h3>

                        </div>
                        <div class="single-box">
                            <p>“ As an educator and parent, we are truly delighted with how our children are nurtured
                                and supported by the teachers, We have seen continuous improvement in our kids, Teachers
                                not only focus on the academics but also on personality, communication and public
                                speaking.”</p>
                            <h3>Abdul Basit Nawab</h3>
                            <span>E-commerce Technical Lead</span>
                        </div>
                        <div class="single-box">
                            <p>“ PISR School in Riyadh is a remarkable institution, especially cherished by the
                                Pakistani community. It follows the federal board curriculum, ensuring a high standard
                                of education.

                                The school provides an excellent environment where students can pursue modern,
                                up-to-date studies, helping them build strong careers and character.

                                The school boasts a beautiful campus, laboratories, and sports grounds. Additionally,
                                PISR actively engages students in extracurricular activities such as sports, art, and
                                spell-bee.
                                ”</p>
                            <h3>Engr. Bilal Yousf</h3>
                            <span>Projects Manager</span>
                        </div>
                        <div class="single-box">
                            <p>“ I'm Naveed Yousaf, my kids have been studying in PISR.
                                Pakistan International School, Riyadh (PISR) has been delivering quality education over
                                decades and Generations. It is a blessing for Pakistani parents who intend to equip
                                their children with our own Islamic & unique culture. Brothers & Sisters benefitted from
                                PISR are now Doctors, Engineers, Bankers, Scientists.

                                We wish PISR a continuous success in its unmet endeavors for spreading Knowledge thus
                                fulfilling Prophet’s mission. Moreover, we do hope that PISR will overcome its
                                deficiencies, if any, to perform better in the days to come.
                                ”</p>
                            <h3>Naveed Yousaf</h3>

                        </div>
                        <div class="single-box">
                            <p>“ I am incredibly pleased with the experience at my children’s school PISR. The dedicated
                                and nurturing staff create a safe and inspiring environment where students are
                                encouraged to reach their full potential. The curriculum is thoughtfully designed to
                                balance academic growth with personal development, and I love seeing how engaged and
                                excited our kids are about learning every day. Thank you for making such a positive
                                impact on their educational journey!”</p>
                            <h3>Rehan Ghafoor</h3>
                            <span>Consultant - Business Development</span>

                        </div>
                        <div class="single-box">
                            <p>“ PISR management is working hard and with full dedication to provide the quality
                                education for Paksitani community's child in abroad.We wish for PISR bright future and
                                to serve the Nation with same dedication.
                                Thanks,
                                ”</p>
                            <h3>Engineer Hafiz Shehzad Ahmad</h3>
                            <span>Plant Manager at SACHLO-Midchem </span>
                        </div>
                        <div class="single-box">
                            <p>“We are grateful for the nurturing environment at this school, which fosters our
                                children's growth both academically and personally. The strong sense of community
                                inspires collaboration, support, and the building of lasting friendships among the
                                students. We truly appreciate the dedication of the teachers who consistently go above
                                and beyond to create engaging learning experiences. This school emphasizes not only
                                academic excellence but also the importance of character building and emotional
                                intelligence. Additionally, we value the open lines of communication between parents,
                                educators, and Admin, which help us stay connected and informed about our children's
                                progress.
                                Procurement and Contracts Lead.”</p>
                        </div>
                        <div class="single-box">
                            <p>“Incredible work by the PISR Junior Wing team! Thank you to the hardworking teachers and
                                visionary school administration for creating such a positive, inspiring environment for
                                our little achievers!”</p>
                        </div>
                        <div class="single-box">
                            <p>“PISR is one of the best international school. The highly qualified and diligent PISR
                                teachers are well valued.
                                Employee of the embassy of United States of America in Riyadh KSA.
                                ”</p>

                        </div>
                        <div class="single-box">
                            <p>“The school's commitment to excellence in education is evident in its well-rounded
                                curriculum and extracurricular activities, which help students develop both academically
                                and personally. I highly recommend this school to any family looking for a quality
                                education in Riyadh!”</p>
                            <h3>Engr. Muhammad Waqas Khan</h3>
                            <span>Project Engineer, Al Rajhi Telecom Company</span>
                        </div>
                        <div class="single-box">
                            <p>“As a parent of three current students and an alum, I appreciate the strong sense of
                                community at this school. The teachers are genuinely committed to their students,
                                providing support and guidance that make a difference in their education. My kids have
                                found great friendships here and enjoy many engaging activities.
                                While there are challenges, it’s clear that the school has a lot of potential. I’m
                                hopeful that with open communication, we can work together to make it an even better
                                place for our children.
                                ”</p>
                            <h3>Syed Zaheer Ali</h3>
                            <span>Qualification: BCS</span>
                        </div>
                        <div class="single-box">
                            <p>“ISR Does an excellent job by doing great improvement in academically and the creativity
                                in classroom Activities. We are thrilled with the progress our child has made.”</p>
                            <h3>Dr. Reema Haroon</h3>
                            <span>Anesthesia Specialist, Dallah Hospital Riyadh</span>
                        </div>
                        <div class="single-box">
                            <p>“ The innovative programs offered here are outstanding and provide students with valuable
                                skills for the future! The commitment to professional growth among our staff is
                                commendable and reflects a strong desire to improve our school.
                                The positive atmosphere in our school promotes learning and collaboration. It’s a
                                wonderful place to be!
                                ”</p>
                            <h3>Muhammad imran memon</h3>

                        </div>

                        <div class="single-box">
                            <p>“ I would like to take this privilege to congratulate the school's management for its
                                endless efforts. We are proud of all the teachers, management, and the school. PISR is
                                doing excellent in all fields, especially giving children a lot of exposure. The
                                academic program is very nicely planned and organized. The school staff is always open
                                to any discussion. Good efforts by all teachers. The new school building is a remarkable
                                achievement of PISR.”</p>
                            <h3>Agha Atif Hassan

                            </h3>
                            <span>MBA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div> <!--/.container-->
</section>
<!-- ./ End Students Say Area section -->


<!-- sponsers -->
<section class="publication-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-header-box">
                <div class="section-header section-header-l">
                    <h2>Ministry of <span style="color: #0632ff;">Education</span></h2>

                </div><!-- ends: .section-header -->
            </div>
        </div>

        <div class="row" style="margin-top:20px;box-shadow: -9px 14px 12px -5px #888888;border: 2px solid #dee2e6; margin-bottom: 32px; padding: 28px;">

            <div class="col-sm-6 col-md-4  single-book">
                <div class="publication-single-item">
                    <img width="105px"
                        src="https://pisr.org/v2/wp-content/uploads/2021/06/WhatsApp-Image-2021-06-08-at-11.24.19-e1623228452483-300x136.jpeg"
                        alt="" style="width: 200px;padding: 5px;">
                </div>
            </div>

            <div class="col-sm-6 col-md-4  single-book">
                <div class="publication-single-item">
                    <img width="105px" src="https://pisr.org/v2/wp-content/uploads/2021/03/image6-1-150x150.png" style="width: 100px;padding: 5px;" alt="">


                </div>
            </div>


            <div class="col-sm-6 col-md-4  single-book">
                <div class="publication-single-item">
                    <img width="105px" src="https://pisr.org/v2/wp-content/uploads/2021/06/MOE_of_KSA.png" alt="" style="width: 200px;padding: 5px;">

                </div>
            </div>

        </div>
    </div>
</section>

<!-- sticky social icons -->
<section class="sticky">
    <style>
        /* Wrapper for sticky social icons */
        .sticky-social-icons-wrapper {
            position: fixed;
            top: 50%;
            right: 0;
            transform: translateY(-50%);
            z-index: 9999;
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        /* Individual social icon styling */
        .sticky-social-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            /* Larger for better touch targets */
            height: 40px;
            background-color: #333;
            color: white;
            font-size: 16px;
            /* Adjust for readability */
            border-radius: 50%;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        /* Hover effect */
        .sticky-social-icon:hover {
            background-color: #007bff;
            transform: scale(1.1);
            text-decoration: none;
        }

        /* Social media specific colors */
        .sticky-facebook {
            background-color: #3b5998;
        }

        .sticky-twitter {
            background-color: #1DA1F2;
        }

        .sticky-instagram {
            background-color: #E4405F;
        }

        .sticky-linkedin {
            background-color: #0077B5;
        }

        .sticky-youtube {
            background-color: #FF0000;
        }

        /* Responsive styling */
        @media (max-width: 768px) {
            .sticky-social-icons-wrapper {
                top: auto;
                bottom: 0;
                right: 0;
                left: 0;
                flex-direction: row;
                /* Arrange icons horizontally */
                justify-content: center;
                padding: 10px;
                background-color: rgba(0, 0, 0, 0.8);
                /* Semi-transparent background */
                gap: 12px;
                /* Slightly larger gap */

            }

            .sticky-social-icon {
                width: 30px;
                /* Adjusted for mobile */
                height: 30px;
                font-size: 14px;
                /* Smaller font size */
            }
        }
    </style>

    <!-- Sticky Social Media Icons -->
    <div class="sticky-social-icons-wrapper">
        <a href="https://www.facebook.com/PISR.official.page/" target="_blank" class="sticky-social-icon sticky-facebook">
            <i class="fab fa-facebook-f fa-sm"></i>

        </a>
        <a href="https://twitter.com/PISRSchool" target="_blank" class="sticky-social-icon sticky-twitter">
            <i class="fab fa-twitter fa-sm"></i>
        </a>
        <a href="https://www.instagram.com/pisr.official.page/" target="_blank" class="sticky-social-icon sticky-instagram">
            <i class="fab fa-instagram fa-sm"></i>
        </a>
        <a href="https://www.linkedin.com/company/pisr/" target="_blank" class="sticky-social-icon sticky-linkedin">
            <i class="fab fa-linkedin-in fa-sm"></i>
        </a>
        <a href="https://www.youtube.com/channel/UC0LdbY6woH_qfAPkPmgC1Gw/featured" target="_blank" class="sticky-social-icon sticky-linkedin">
            <i class="fab fa-youtube youtube fa-sm"></i>
        </a>
    </div>
</section>

<script>
    // for counter values
    new PureCounter();
</script>
<!-- for what student parents says -->
<!-- Bootstrap Lightbox & Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


<script>
    // images slider
    let currentIndex = 0;

    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    function showSlide(index) {
        const slider = document.querySelector('.slider');
        if (index >= totalSlides) {
            currentIndex = 0;
        } else if (index < 0) {
            currentIndex = totalSlides - 1;
        } else {
            currentIndex = index;
        }
        slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    // Move to the next or previous slide
    function moveSlide(direction) {
        showSlide(currentIndex + direction);
    }

    // Automatically cycle through slides every 5 seconds
    setInterval(() => {
        moveSlide(1);
    }, 5000);


    $(document).ready(function() {
        // Initialize text slider (slider-for)
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });

        // Initialize image slider (slider-nav)
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            centerMode: true,
            focusOnSelect: true,
            prevArrow: '<button class="slick-prev">Previous</button>',
            nextArrow: '<button class="slick-next">Next</button>'
        });
    });
</script>


<!-- Swiper JS (Include before closing body tag) -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper-container', {
        loop: true,
        spaceBetween: 20,
        slidesPerView: 1,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.custom-swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.custom-swiper-button-next',
            prevEl: '.custom-swiper-button-prev',
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        }
    });
</script>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Slick.js -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>