<!-- Page Title -->
<div class="pic">
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
        <div class="background-overlay"></div> <!-- Overlay div for dull effect -->
        <div class="container">
            <h1 class="animated-title">Middle School</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                    <li class="current">Curriculum Overview</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<section class="events-list-03">
    <div class="container">
        <div class="row event-body-content">
            <div class="col-sm-12 events-full-box ">
                <h2 class="text-center">PISR Middle-School
                </h2>
                <div class="events-single-box">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?php echo base_url(); ?>asset/images/downloads/middleschool/1.jpeg" alt="not" class="img-responsive-principle">
                        </div>

                        <div class="col-sm-6 event-info img-fluid">
                            <p class="div-sm-7 event-info">
                                At <strong>Middle School</strong>, we focus on ensuring students excel academically while developing essential <strong>life skills</strong> such as <strong>research</strong>, <strong>analytical</strong>, and <strong>reasoning skills</strong> to help them approach challenges with a <strong>critical mindset</strong>.

                                Our emphasis on <strong>leadership development</strong>, <strong>organizational skills</strong>, and <strong>effective communication</strong> empowers students to take on leadership roles and communicate confidently with peers and colleagues. These skills are crucial in both <strong>personal</strong> and <strong>professional</strong> settings, preparing students to make a positive impact on society.
                            </p>
                            <p class="div-sm-7 event-info">
                                We provide a <strong>supportive learning environment</strong> that encourages <strong>independence</strong> and critical thinking. By fostering a culture of <strong>curiosity</strong> and <strong>growth</strong>, students develop the confidence to take ownership of their learning journey.

                                Our focus on <strong>STEAM activities</strong> ensures a dynamic learning experience. Through engaging lessons and <strong>expertly crafted lesson plans</strong>, we promote a <strong>passion for education</strong>, helping students thrive and reach their full potential.
                            </p>
                        </div>



                    </div>
                </div>
            </div>
        </div>
</section>

<style>
    h2.section-heading {
        background-color: #509999;
        color: #ffffff;
        padding: 15px 20px;
        font-size: 24px;
        margin: 20px auto;
        text-align: center;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    }

    /* Paragraph Styles */
    .center-paragraph {
        font-size: 1.8rem;
        color: #34495e;
        line-height: 1.8;
        margin: 40px 120px;
        text-align: center;
        background-color: #eaf4ff;
        padding: 10px 15px;
        border-radius: 5px;
        border-left: 2px solid #007acc;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }



    .center-heading,
    .center-paragraph {
        animation: fadeInUp 1s ease-out;
        text-align: center;
    }

    .center-paragraph {
        animation-delay: 0.3s;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        grid-gap: 1rem;
    }

    @media only screen and (min-width: 767px) {
        .grid {
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 1.5rem;
            margin-bottom: 60px;
        }
    }

    .article {
        position: relative;
        cursor: pointer;
    }

    .article:hover:before {
        opacity: 1;
    }

    .article:hover .article__cover {
        transform: translateX(-2rem) scale(1.05);
    }

    .article:hover .article__title,
    .article:hover .article__info {
        opacity: 1;
        transform: translateX(0);
    }

    .article:hover .article__title {
        transition-delay: 0s;
    }

    .article:hover .article__info {
        transition-delay: 0.1s;
    }

    .article:before {
        content: "";
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        box-shadow: 0 0 10px 4px rgba(0, 0, 0, 0.47);
        transition: opacity 0.3s ease-in-out;
    }

    .article__figure {
        position: relative;
        overflow: hidden;
        margin: 0;
        height: 0;
        padding-bottom: 100%;
    }

    @media only screen and (min-width: 500px) {
        .article__figure {
            padding-bottom: 70%;
        }
    }


    @media only screen and (min-width: 767px) {
        .article__figure {
            padding-bottom: 66.6%;
        }



    }

    .article__title,
    .article__info {
        opacity: 0;
        max-width: 70rem;
        padding: 0.85rem 1rem;
        transform: translateX(50%);
        transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        color: #eaf4ff;

    }


    .article__info {
        background-color: rgba(51, 51, 51, 0.7);
        font-weight: 80;
        letter-spacing: 2px;
        font-size: 1rem;
    }




    @media only screen and (min-width: 767px) {
        .container {
            padding-inline: 2rem;
        }
    }


    .article {
        position: relative;
        cursor: pointer;
    }

    .article:hover:before {
        opacity: 1;
    }

    .article:hover .article__cover {
        transform: translateX(-2rem) scale(1.05);
    }

    .article:hover .article__title,
    .article:hover .article__info {
        opacity: 1;
        transform: translateX(0);
    }

    .article:hover .article__title {
        transition-delay: 0s;
    }

    .article:hover .article__info {
        transition-delay: 0.1s;
    }

    .article:before {
        content: "";
        opacity: 0;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        box-shadow: 0 0 10px 4px rgba(0, 0, 0, 0.47);
        transition: opacity 0.3s ease-in-out;
    }

    .article__figure {
        position: relative;
        overflow: hidden;
        margin: 0;
        height: 0;
        padding-bottom: 100%;
    }

    @media only screen and (min-width: 500px) {
        .article__figure {
            padding-bottom: 50%;
        }
    }

    @media only screen and (min-width: 767px) {
        .article__figure {
            padding-bottom: 66.6%;
        }
    }

    @media only screen and (min-width: 1200px) {
        .article__figure {
            padding-bottom: 50%;
        }
    }

    .article__cover {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: -2rem;
        width: calc(100% + 2rem);
        height: 100%;
        object-fit: cover;
        transform: translateX(0);
        transition: transform 0.55s ease-in-out;
    }

    .article__caption {
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        display: flex;
        flex-direction: column;
        max-width: 90%;
    }



    .article__title {
        background-color: rgba(51, 51, 51, 0.5);
        font-weight: 300;
        transition-delay: 0.1s;
        font-size: 2.4rem;
    }
</style>






<div class="info">
    <section class="gallery">
        <div class="container">
            <div class="row">
                <h3>Middle-School Gallery</h3>
                <div class="gallery-slider">
                    <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/downloads/preschool/1.JPG" alt="Image 1"></div>
                    <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/downloads/preschool/2.jpg" alt="Image 2"></div>
                    <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/downloads/preschool/3.jpg" alt="Image 2"></div>
                    <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/downloads/preschool/4.jpg" alt="Image 2"></div>
                    <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/downloads/preschool/5.jpg" alt="Image 2"></div>
                    <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/downloads/preschool/6.jpeg" alt="Image 3"></div>
                    <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/downloads/preschool/10.png" alt="Image 3"></div>
                    <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/downloads/preschool/8.jpeg" alt="Image 3"></div>
                    <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/downloads/preschool/9.png" alt="Image 3"></div>
                    <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/downloads/preschool/11.png" alt="Image 3"></div>
                    <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/downloads/preschool/12.png" alt="Image 3"></div>
                    <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/downloads/preschool/13.png" alt="Image 3"></div>
                    <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/downloads/preschool/14.png" alt="Image 3"></div>
                    <div class="gallery-item"><img src="<?php echo base_url(); ?>asset/images/downloads/preschool/15.png" alt="Image 3"></div>

                </div>
                <style>
                    .custom-slick-prev,
                    .custom-slick-next {
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
                        z-index: 1000;
                        /* Ensure buttons appear above other elements */
                    }

                    .custom-slick-prev:hover,
                    .custom-slick-next:hover {
                        opacity: 1;
                        transform: scale(1.1);
                        /* Slightly enlarge on hover */
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

                        .custom-slick-prev,
                        .custom-slick-next {
                            width: 40px;
                            height: 40px;
                            font-size: 18px;
                        }
                    }

                    @media (max-width: 576px) {

                        .custom-slick-prev,
                        .custom-slick-next {
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

    <style>
        .gallery {
            padding: 50px 0;
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

    <!-- ./ End Teachers Area section -->
    <script>
        AOS.init();
    </script>
</div>