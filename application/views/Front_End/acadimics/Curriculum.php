<!-- Page Title -->
<div class="pic">
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
        <div class="background-overlay"></div> <!-- Overlay div for dull effect -->
        <div class="container">
            <h1 class="animated-title">Curriculum Overview</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                    <li class="current">Curriculum Overview</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

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
            <h1 class="mb-4 text-primary text-center">Pre School</h1>
            <p class="d-block p-3 mb-4 bg-light rounded shadow-sm">
                Our pre-school program, which encompasses classes from PG Nursery KG through grade 1, is designed with the primary goal of nurturing the leaders of tomorrow through a combination of high-quality education and the development of crucial social skills. We are committed to instilling 21st Century skills in our young learners by creating engaging and interactive lessons that incorporate hands-on activities and project-based learning. Through a variety of weekly activities and competitions, we prepare our students for success in the world beyond our walls, ensuring that they emerge as confident leaders and exemplary individuals. Through STEAM activities, both students and teachers are able to engage in a dynamic learning experience that promotes the achievement of lesson objectives while fostering a love for learning. Following the esteemed Oxford Curriculum, we deliver the necessary knowledge to our students in a fun and engaging manner, utilizing a range of activities and expertly crafted lesson plans to foster a love for learning and academic success.
            </p>

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


    <section class="events-list-03">
        <div class="container">
            <div class="grid">
                <!-- Pre School Section -->
                <article class="article">
                    <figure class="article__figure" style="height: 400px;">
                        <img class="article__cover" src="<?php echo base_url(); ?>asset/images/downloads/pre1.jpg" />
                        <figcaption class="article__caption">
                            <h4 class="article__title">Pre School</h4>
                            <p class="article__info">
                                Our pre-school program, which encompasses classes from PG Nursery KG through grade 1, is designed with the primary goal of nurturing the leaders of tomorrow through a combination of high-quality education and the development of crucial social skills. We are committed to instilling 21st Century skills in our young learners by creating engaging and interactive lessons that incorporate hands-on activities and project-based learning. Through a variety of weekly activities and competitions, we prepare our students for success in the world beyond our walls, ensuring that they emerge as confident leaders and exemplary individuals. Through STEAM activities, both students and teachers are able to engage in a dynamic learning experience that promotes the achievement of lesson objectives while fostering a love for learning. Following the esteemed Oxford Curriculum, we deliver the necessary knowledge to our students in a fun and engaging manner, utilizing a range of activities and expertly crafted lesson plans to foster a love for learning and academic success.
                            </p>
                        </figcaption>
                    </figure>
                    <h3 class="text-center text-primary" style="margin-top: 10px;">Pre School</h3>
                </article>

                <!-- Junior School Section -->
                <article class="article">
                    <figure class="article__figure" style="height: 400px;">
                        <img class="article__cover" src="<?php echo base_url(); ?>asset/images/downloads/juniorschool/1.jpeg" />
                        <figcaption class="article__caption">
                            <h4 class="article__title">Junior School</h4>
                            <p class="article__info">
                                Our <strong>JS program</strong> for students in <strong>Grade 2-Grade 4</strong> focuses on developing <strong>leaders</strong> of tomorrow by combining high-quality education with essential <strong>social skills</strong>. Through <strong>interactive lessons</strong>, <strong>hands-on activities</strong>, and <strong>project-based learning</strong>, we foster <strong>creativity</strong> and <strong>critical thinking</strong>. We are committed to preparing students for success in the <strong>21st Century</strong> by instilling <strong>confidence</strong> and <strong>leadership qualities</strong> through <strong>weekly activities</strong> and <strong>competitions</strong>.
                                <br><br>
                                The program emphasizes <strong>STEAM activities</strong> and promotes the achievement of lesson objectives while creating a passion for <strong>learning</strong>. We provide a <strong>supportive learning environment</strong> and focus on developing <strong>critical thinking</strong> skills. With the introduction of <strong>Robotics</strong> and <strong>Microbit Education</strong> using <strong>microbit chips</strong>, our students gain hands-on experience in <strong>programming</strong> and <strong>robotics</strong>, empowering them to become tech-savvy problem-solvers. Our goal is to prepare students to face the challenges of the future with the skills and knowledge they need to succeed.
                            </p>

                        </figcaption>
                    </figure>
                    <h3 class="text-center text-primary" style="margin-top: 10px;">Junior School</h3>

                </article>

                <!-- Middle School Section -->
                <article class="article">
                    <figure class="article__figure" style="height: 400px;">
                        <img class="article__cover" src="<?php echo base_url(); ?>asset/images/downloads/middleschool/1.jpeg" />
                        <figcaption class="article__caption">
                            <h4 class="article__title">Middle School</h4>
                            <p class="article__info">
                                At <strong>Middle School</strong>, we focus on ensuring students excel academically while developing essential <strong>life skills</strong> such as <strong>research</strong>, <strong>analytical</strong>, and <strong>reasoning skills</strong> to help them approach challenges with a <strong>critical mindset</strong>.

                                Our emphasis on <strong>leadership development</strong>, <strong>organizational skills</strong>, and <strong>effective communication</strong> empowers students to take on leadership roles and communicate confidently with peers and colleagues. These skills are crucial in both <strong>personal</strong> and <strong>professional</strong> settings, preparing students to make a positive impact on society.

                                We provide a <strong>supportive learning environment</strong> that encourages <strong>independence</strong> and critical thinking. By fostering a culture of <strong>curiosity</strong> and <strong>growth</strong>, students develop the confidence to take ownership of their learning journey.

                                Our focus on <strong>STEAM activities</strong> ensures a dynamic learning experience. Through engaging lessons and <strong>expertly crafted lesson plans</strong>, we promote a <strong>passion for education</strong>, helping students thrive and reach their full potential.
                            </p>

                        </figcaption>
                    </figure>
                    <h3 class="text-center text-primary" style="margin-top: 10px;">Middle School</h3>

                </article>

                <!-- High School Section -->
                <article class="article">
                    <figure class="article__figure" style="height: 400px;">
                        <img class="article__cover" src="<?php echo base_url(); ?>asset/images/downloads/highschool/1.jpeg" />
                        <figcaption class="article__caption">
                            <h4 class="article__title">High School</h4>
                            <p class="article__info">
                                At <strong>High School</strong>, we focus on equipping students with essential <strong>life skills</strong> to prepare them for the challenges of the modern world. Affiliated with the <strong>Federal Board Islamabad</strong>, we emphasize <strong>planning</strong> and <strong>organizational skills</strong> to help students effectively manage their time and tasks, ensuring success in both academic and professional endeavors. Through <strong>hands-on learning</strong> and <strong>interactive workshops</strong>, students gain the tools to thrive in the fast-paced <strong>21st century</strong>.

                                We foster a culture of <strong>continuous learning</strong> by encouraging students to stay adaptable, expand their knowledge, and develop a passion for <strong>lifelong learning</strong>. A variety of educational programs and events provide opportunities for students to engage with diverse perspectives and explore new subject areas.

                                Our commitment to preparing students for the <strong>job market</strong> goes beyond theoretical knowledge. Through <strong>hands-on activities</strong>, <strong>internships</strong>, <strong>career counseling</strong>, <strong>university roadshows</strong>, and networking, we help students apply their learning in meaningful ways. By providing <strong>practical experience</strong>, we equip students with the skills needed to succeed in their future careers and confidently navigate the <strong>professional world</strong>.
                            </p>

                        </figcaption>
                    </figure>
                    <h3 class="text-center text-primary" style="margin-top: 10px;">High School</h3>
                </article>


            </div>
        </div>
    </section>

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