<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    .slider-wrapper {
        width: 100%;
        height: 100vh;
        /* Fullscreen height */
        position: relative;
        overflow: hidden;
    }

    .slider {
        display: flex;
        transition: transform 0.8s ease;
        height: 100%;
    }

    .slide {
        min-width: 100%;
        height: 100%;
        position: relative;
    }

    .slide img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Ensures the image covers the entire slide */
    }






    .prev-btn,
    .next-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        border: none;
        font-size: 2rem;
        padding: 10px;
        cursor: pointer;
        border-radius: 50%;
        transition: background-color 0.7s ease;
    }

    .prev-btn {
        left: 20px;
    }

    .next-btn {
        right: 20px;
    }

    .prev-btn:hover,
    .next-btn:hover {
        background-color: #007bff;
    }

    .no-gutters img {
        margin: 20px;
        border-radius: 12px;
    }

    .gallery {
        background: #d6d6d6;
    }
</style>
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




<section class="slider-content-bottom">
    <div class="container">
        <div class="row sider-btm-row-inner">
            <div class="col-sm-4 content_body slide_cont_box_01">
                <div class="slider-btm-box btm-item_01">
                    <a href="<?php echo base_url(); ?>achievments/fbise"><img src="<?php echo base_url(); ?>asset/images/index/slide-bottom-01.png" alt="" class="btm-item-icon"></a>
                    <h3>ACHIEVEMENT</h3>
                </div>
            </div>

            <div class="col-sm-4 content_body slide_cont_box_02">
                <div class="slider-btm-box btm-item_02">
                    <a href="<?php echo base_url(); ?>achievments/successstories"><img src="<?php echo base_url(); ?>asset/images/index/slide-bottom-02.png" alt="" class="btm-item-icon"></a>
                    <h3>SUCCESS STORY</h3>
                </div>
            </div>

            <div class="col-sm-4 content_body slide_cont_box_03">
                <div class="slider-btm-box btm-item_03">
                    <a href="<?php echo base_url(); ?>events"><img src="<?php echo base_url(); ?>asset/images/index/slide-bottom-03.png" alt="" class="btm-item-icon"></a>
                    <h3>EVENTS / ANNOUNCEMENTS</h3>
                </div>
            </div>

        </div>
    </div>
</section>


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
                    and supportive environment for everyone.</p>
                <br>
                <p>PISR was initially established in 1966, with the strength of only six students in a rented villa
                    on Khazan Road, Riyadh. It was started by five families of Pakistan Air Force officers who were
                    keenly interested in the future of their generations. It got shut down after few months due to
                    certain legal formalities but it didn’t stop them to keep struggle going. </p>


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
                <h2>Take a Tour EduRead Campus</h2>
            </div><!-- ends: .section-header -->
        </div>
    </div>
</section>
<!-- ./ End Video Area section -->

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
                        <div><img src="<?php echo base_url(); ?>asset/images/1.jpeg" alt="1" class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/2.jpeg" alt="2" class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/3.jpeg" alt="3" class="img-responsive img-circle"></div>
                        <div><img src="<?php echo base_url(); ?>asset/images/teachars/teachar-06.jpg" alt="4" class="img-responsive img-circle"></div>
                    </div>
                </div>

                <!-- Text Slider (slider-for) -->
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="carousel-text slider-for">
                        <div class="single-box">
                            <p>“ PISR does an excellent job of recognizing each student as an individual learner.”</p>
                            <h3>Kamran Qureshi</h3>
                            <span>Site Engineer</span>
                        </div>
                        <div class="single-box">
                            <p>“ PISR provides a well-rounded education that includes not only core subjects but also development of the whole child.”</p>
                            <h3>Kamran Qureshi</h3>
                            <span>Site Engineer</span>
                        </div>
                        <div class="single-box">
                            <p>“ The school is shifting from cramming to conceptual base learning.”</p>
                            <h3>Husnain Raza</h3>
                            <span>Revenue Manager</span>
                        </div>
                        <div class="single-box">
                            <p>“ The school is shifting from cramming to conceptual base learning.”</p>
                            <h3>Husnain Raza</h3>
                            <span>Revenue Manager</span>
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
                <img src="https://pisr.org/v2/wp-content/uploads/2023/12/image-min-150x150.jpg" alt="Conference Image 1" width="230px">
            </a>
            <a href="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2429-min-683x1024.jpg" target="_blank">
                <img src="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2429-min-150x150.jpg" alt="Conference Image 2" width="230px">
            </a>
            <a href="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2417-min-1024x683.jpg" target="_blank">
                <img src="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2417-min-150x150.jpg" alt="Conference Image 3" width="230px">
            </a>
            <a href="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2440-min-1024x683.jpg" target="_blank">
                <img src="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2440-min-150x150.jpg" alt="Conference Image 4" width="230px">
            </a>
            <a href="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2445-min-1024x683.jpg" target="_blank">
                <img src="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2445-min-150x150.jpg" alt="Conference Image 5" width="230px">
            </a>
            <a href="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2455-min-1024x683.jpg" target="_blank">
                <img src="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2455-min-150x150.jpg" alt="Conference Image 6" width="230px">
            </a>
            <a href="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2483-min-1024x683.jpg" target="_blank">
                <img src="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2483-min-150x150.jpg" alt="Conference Image 7" width="230px">
            </a>
            <a href="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2480-min-1024x692.jpg" target="_blank">
                <img src="https://pisr.org/v2/wp-content/uploads/2023/12/IMG_2480-min-150x150.jpg" alt="Conference Image 8" width="230px">
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
                        <img src="<?php echo base_url(); ?>asset/images/test.png" alt=""
                            class="img-responsive" style="padding: 45px;"></a>
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

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include Slick.js -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>