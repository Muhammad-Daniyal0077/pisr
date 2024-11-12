<div class="slider-wrapper">
    <div class="slider">
        <div class="slide">
            <img src="<?php echo base_url(); ?>asset/images/downloads/s1.jpg" alt="Slide 1">

        </div>
        <div class="slide">
            <img src="<?php echo base_url(); ?>asset/images/downloads/s2.jpg" alt="Slide 2">

        </div>
        <div class="slide">
            <img src="<?php echo base_url(); ?>asset/images/downloads/s3.jpg" alt="Slide 3">

        </div>
        <div class="slide">
            <img src="<?php echo base_url(); ?>asset/images/downloads/s4.jpg" alt="Slide 4">

        </div>
    </div>
    <!-- Navigation Buttons -->
    <button class="prev-btn" onclick="moveSlide(-1)">&#10094;</button>
    <button class="next-btn" onclick="moveSlide(1)">&#10095;</button>
</div>



<!-- Success stories -->
<section class="slider-content-bottom">
    <div class="container">
        <div class="row sider-btm-row-inner">
            <div class="col-sm-4 content_body slide_cont_box_01">
                <div class="slider-btm-box btm-item_01">
                    <a href="<?php echo base_url(); ?>achievments/fbise"><img
                            src="<?php echo base_url(); ?>asset/images/index/slide-bottom-01.png" alt=""
                            class="btm-item-icon"></a>
                    <h3>ACHIEVEMENT</h3>
                </div>
            </div>

            <div class="col-sm-4 content_body slide_cont_box_02">
                <div class="slider-btm-box btm-item_02">
                    <a href="<?php echo base_url(); ?>achievments/successstories"><img
                            src="<?php echo base_url(); ?>asset/images/index/slide-bottom-02.png" alt=""
                            class="btm-item-icon"></a>
                    <h3>SUCCESS STORY</h3>
                </div>
            </div>

            <div class="col-sm-4 content_body slide_cont_box_03">
                <div class="slider-btm-box btm-item_03">
                    <a href="<?php echo base_url(); ?>events"><img
                            src="<?php echo base_url(); ?>asset/images/index/slide-bottom-03.png" alt=""
                            class="btm-item-icon"></a>
                    <h3>EVENTS / ANNOUNCEMENTS</h3>
                </div>
            </div>

        </div>
    </div>
</section>



<!-- Principle Area section -->
<section class="Welcome-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-header-box">
                <div class="section-header section-header-l">
                    <h2>Principle <span style="color: #ffb606;">Message</span></h2>

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
                    <i class="fas fa-arrow-left"></i>
                </button>
                <div class="new-news-slider">
                    <div class="new-news-content">
                        <div class="new-news-item">
                            <img src="<?php echo base_url(); ?>asset/images/downloads/s1.jp" alt="News Image" height="200" width="400">
                            <div class="news-text">
                                <h6 class="new-news-headline">New Campus Facilities Opened</h6>
                                <span class="new-news-date">Aug 10, 2023</span>
                            </div>
                        </div>
                        <div class="new-news-item">
                            <img src="https://via.placeholder.com/60" alt="News Image">
                            <div class="news-text">
                                <h5 class="new-news-headline">Earth Day Celebrations</h5>
                                <span class="new-news-date">Apr 20, 2023</span>
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
                            <img src="https://via.placeholder.com/60" alt="Event Image">
                            <div class="event-text">
                                <h5 class="new-event-headline">Charity Run</h5>
                                <span class="new-event-date">Sep 15, 2023</span>
                            </div>
                        </div>
                        <div class="new-event-item">
                            <img src="https://via.placeholder.com/60" alt="Event Image">
                            <div class="event-text">
                                <h5 class="new-event-headline">Student Conference</h5>
                                <span class="new-event-date">Oct 1, 2023</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Next Button at the end of Upcoming Events -->
                <button class="new-next-btn">
                    <i class="fas fa-arrow-right"></i>
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

<!-- Start Welcome Area section -->
<section class="Welcome-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 Welcome-area-text">
                <div class="row">
                    <div class="col-sm-12 section-header-box">
                        <div class="section-header section-header-l">
                            <h2>Welcome To <span style="color: #ffb606;">PISR</span></h2>

                        </div><!-- ends: .section-header -->
                    </div>
                </div>
                <p>PISR is a proficient and contemporary school
                    with years of experience and knowledge in grooming of children. We provide experienced teachers
                    and supportive environment for everyone.
                    <br> <br>
                    PISR was initially established in 1966, with the strength of only six students in a rented villa
                    on Khazan Road, Riyadh. It was started by five families of Pakistan Air Force officers who were
                    keenly interested in the future of their generations. It got shut down after few months due to
                    certain legal formalities but it didn’t stop them to keep struggle going.
                </p>


            </div><!-- Ends: . -->

            <div class="col-sm-6">
                <img src="<?php echo base_url(); ?>asset/images/second_background.jpeg" alt="" class="imgs">
            </div><!-- Ends: . -->
        </div>
    </div>
</section><!-- Ends: . -->
<!-- ./ End Welcome Area section -->

<!-- Start Video Area Section -->
<section class="video-main-area video">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 video-play-btn">
                <a href="https://www.youtube.com/watch?v=uXFUl0KcIkA" class="video-iframe"><i
                        class="fa fa-play"></i></a>
            </div>

            <div class="video-content">
                <h2>Take a Tour of PISR</h2>
            </div><!-- ends: .section-header -->
        </div>
    </div>
</section>
<!-- ./ End Video Area section -->

<!-- Top studetns -->
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
<section class="high-achievers-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-header-box">
                <div class="section-header section-header-l">
                    <h2>Our Top <span style="color: #ffb606;">Students</span></h2>

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
                            <h4>MARKS: 1062</h4>
                            <h4>GRADE: A-1</h4>
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
                            <h4>MARKS: 1043</h4>
                            <h4>GRADE: A-1</h4>
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
                            <h4>MARKS: 1036</h4>
                            <h4>GRADE: A-1</h4>
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
                            <h4>MARKS: 1032</h4>
                            <h4>GRADE: A-1</h4>
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



<style>
    .card {
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s;
    }

    .card:hover {
        transform: scale(1.05);
        list-style: none;
        text-decoration: none;
    }

    .card a {
        text-decoration: none;
        color: inherit;
    }

    .card a:hover {
        text-decoration: none;
        /* Prevents underline */
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        padding: 15px;
    }

    .card-title {
        font-weight: bold;
        color: #0056b3;
    }

    .card-text {
        color: #333;
    }

    .section-header h2 {
        margin-bottom: 30px;
    }
</style>

<!-- School Sections Information -->
<section class="container my-5">
    <div class="row">
        <div class="col-sm-12 section-header-box">
            <div class="section-header section-header-l text-center">
                <h2>School <span style="color: #ffb606;">Sections</span></h2>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Pre School -->
        <div class="col-md-4 mb-4">
            <a href="#">
                <div class="card shadow-sm">
                    <img src="<?php echo base_url(); ?>asset/images/sections/Play_Group.jpg" alt="Pre School">
                    <div class="card-body">
                        <h5 class="card-title">Pre School</h5>
                        <p class="card-text">Play Group to Grade-1</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Junior Girls Section -->
        <div class="col-md-4 mb-4">
            <a href="#">
                <div class="card shadow-sm">
                    <img src="<?php echo base_url(); ?>asset/images/sections/junior_girls.jpg" alt="Junior Girls Section">
                    <div class="card-body">
                        <h5 class="card-title">Junior Girls Section</h5>
                        <p class="card-text">Grade-2 to Grade-4</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Junior Boys Section -->
        <div class="col-md-4 mb-4">
            <a href="#">
                <div class="card shadow-sm">
                    <img src="<?php echo base_url(); ?>asset/images/sections/junior_boys.jpg" alt="Junior Boys Section">
                    <div class="card-body">
                        <h5 class="card-title">Junior Boys Section</h5>
                        <p class="card-text">Grade-2 to Grade-4</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Middle Girls Section -->
        <div class="col-md-4 mb-4">
            <a href="#">
                <div class="card shadow-sm">
                    <img src="<?php echo base_url(); ?>asset/images/sections/Middle_Girls.jpg" alt="Middle Girls Section">
                    <div class="card-body">
                        <h5 class="card-title">Middle Girls Section</h5>
                        <p class="card-text">Grade-5 to Grade-8</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Middle Boys Section -->
        <div class="col-md-4 mb-4">
            <a href="#">
                <div class="card shadow-sm">
                    <img src="<?php echo base_url(); ?>asset/images/sections/Middle_Boys.jpg" alt="Middle Boys Section">
                    <div class="card-body">
                        <h5 class="card-title">Middle Boys Section</h5>
                        <p class="card-text">Grade-5 to Grade-8</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Senior Girls Section -->
        <div class="col-md-4 mb-4">
            <a href="#">
                <div class="card shadow-sm">
                    <img src="<?php echo base_url(); ?>asset/images/sections/Senior_Girls.jpg" alt="Senior Girls Section">
                    <div class="card-body">
                        <h5 class="card-title">Senior Girls Section</h5>
                        <p class="card-text">Grade-9 to Grade-12</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Senior Boys Section -->
        <div class="col-md-4 mb-4">
            <a href="#">
                <div class="card shadow-sm">
                    <img src="<?php echo base_url(); ?>asset/images/sections/Senior_Boys.jpg" alt="Senior Boys Section">
                    <div class="card-body">
                        <h5 class="card-title">Senior Boys Section</h5>
                        <p class="card-text">Grade-9 to Grade-12</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>



<!-- ./ End Students Say Area section -->
<section class="students-say-area">
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
                        <div><img src="<?php echo base_url(); ?>asset/images/parents/001.jpg" alt="1"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/parents/002.jpg" alt="2"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/parents/003.jpg" alt="3"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/parents/004.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/parents/005.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/parents/006.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/parents/007.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/parents/008.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/parents/009.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/parents/010.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/parents/011.png" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/parents/012.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/parents/013.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/parents/014.jpg" alt="4"
                                class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/parents/015.jpg" alt="4"
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





<section class="gallery">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Photo Gallery</h1>
        <div class="row no-gutters">
            <a href="https://pisr.org/v2/wp-content/uploads/2023/12/image-min-1024x683.jpg" target="_blank">
                <img src="https://pisr.org/v2/wp-content/uploads/2023/12/image-min-150x150.jpg" alt="Conference Image 1"
                    width="230px">
            </a>
            <a href="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2429-min-683x1024.jpg" target="_blank">
                <img src="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2429-min-150x150.jpg"
                    alt="Conference Image 2" width="230px">
            </a>
            <a href="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2417-min-1024x683.jpg" target="_blank">
                <img src="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2417-min-150x150.jpg"
                    alt="Conference Image 3" width="230px">
            </a>
            <a href="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2440-min-1024x683.jpg" target="_blank">
                <img src="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2440-min-150x150.jpg"
                    alt="Conference Image 4" width="230px">
            </a>
            <a href="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2445-min-1024x683.jpg" target="_blank">
                <img src="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2445-min-150x150.jpg"
                    alt="Conference Image 5" width="230px">
            </a>
            <a href="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2455-min-1024x683.jpg" target="_blank">
                <img src="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2455-min-150x150.jpg"
                    alt="Conference Image 6" width="230px">
            </a>
            <a href="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2483-min-1024x683.jpg" target="_blank">
                <img src="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2483-min-150x150.jpg"
                    alt="Conference Image 7" width="230px">
            </a>
            <a href="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2480-min-1024x692.jpg" target="_blank">
                <img src="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2480-min-150x150.jpg"
                    alt="Conference Image 8" width="230px">
            </a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</section>



<section class="publication-area">
    <div class="container">


        <div class="row">
            <div class="col-sm-6 col-md-3 single-book">
                <div class="publication-single-item">
                    <a href="https://east.education/pre-primary-syllabus-pakistan/">
                        <img src="<?php echo base_url(); ?>asset/images/test.png" alt="" class="img-responsive"
                            style="padding: 45px;"></a>
                    <div class="publication-text">
                        <h3><a href="">Curriculum</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3  single-book">
                <div class="publication-single-item">
                    <a href="https://oup.com.pk/school-textbooks.html"><img
                            src="https://pisr.org/v2/wp-content/uploads/2021/06/WhatsApp-Image-2021-06-08-at-11.24.19-e1623228452483-300x136.jpeg"
                            alt="" class="img-responsive"></a>
                    <div class="publication-text">
                        <h3><a href="">Curriculum</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3  single-book">
                <div class="publication-single-item">
                    <a href="https://www.fbise.edu.pk/">
                        <img src="https://pisr.org/v2/wp-content/uploads/2021/03/image6-1-150x150.png" alt=""
                            class="img-responsive" style="height: 146px;
								width: 144px;
								margin-left: 57px;
								padding-top: 18px;"></a>
                    <div class="publication-text">
                        <h3><a href="">Affiliation</a></h3>
                    </div>
                </div>
            </div>


            <div class="col-sm-6 col-md-3  single-book">
                <div class="publication-single-item">
                    <a href="https://www.moe.gov.sa/en/Pages/default.aspx">
                        <img src="https://pisr.org/v2/wp-content/uploads/2021/06/MOE_of_KSA.png" alt=""
                            class="img-responsive"></a>
                    <div class="publication-text">
                        <h3><a href="">Supervised By</a></h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


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