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

    .article__title,
    .article__info {
        opacity: 0;
        max-width: 48rem;
        padding: 0.85rem 1rem;
        transform: translateX(50%);
        transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        color: #eaf4ff;

    }


    .article__info {
        background-color: rgba(51, 51, 51, 0.7);
        font-weight: 100;
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

    .article__title,
    .article__info {
        opacity: 0;
        max-width: 40rem;
        padding: 0.85rem 1rem;
        transform: translateX(50%);
        transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        color: #eaf4ff;

    }

    .article__title {
        background-color: rgba(51, 51, 51, 0.5);
        font-weight: 300;
        transition-delay: 0.1s;
        font-size: 2.4rem;
    }

    .article__info {
        background-color: rgba(51, 51, 51, 0.7);
        font-weight: 100;
        letter-spacing: 2px;
        font-size: 1rem;
    }
</style>



<div class="wpb_wrapper" style="margin: 30px 33px;">
    <h1 class="center-heading">Educational Facilities</h1>

</div>


<div class="info">
<section class="events-list-03">
    <div class="container">
        <div class="grid">
            <!-- Pre School Section -->
            <article class="article">
                <figure class="article__figure">
                    <img class="article__cover" src="<?php echo base_url(); ?>asset/images/Facilities/013.jpg" />
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
                <figure class="article__figure">
                    <img class="article__cover" src="<?php echo base_url(); ?>asset/images/Facilities/13.webp" />
                    <figcaption class="article__caption">
                        <h4 class="article__title">Junior School</h4>
                        <p class="article__info">
                            Our JS program, catering to students from Grade 2-Grade 4, is dedicated to nurturing the leaders of tomorrow. By combining top-notch education with the development of essential social skills, we aim to prepare our young learners for success in the 21st Century. Through interactive lessons, hands-on activities, and project-based learning, we create a dynamic learning environment that fosters creativity and critical thinking. We are committed to equipping our students with the necessary skills to thrive in an ever-changing world. Through a range of weekly activities and competitions, we strive to instill confidence and leadership qualities in our students. By following the esteemed Oxford Curriculum and delivering engaging lessons, we ensure that our students emerge as exemplary individuals who are ready to make a positive impact on society.
                            <br><br>
                            With a focus on STEAM activities, our program encourages both students and teachers to engage in a dynamic learning experience. By promoting the achievement of lesson objectives while fostering a love for learning, we cultivate a passion for education in our students. Through expertly crafted lesson plans and a variety of activities, we create a supportive learning environment where students can thrive and reach their full potential. At JS, we are committed to providing our students with the tools they need to thrive in a rapidly advancing technological landscape. That's why we have introduced Robotics into our curriculum, along with Microbit Education and microbit chips. With these tools, our students will not only stay up to date with the latest advancements, but they will also have the opportunity to explore and create with cutting-edge technology. By incorporating Robotics into our programs, we are empowering our students to think critically, problem-solve, and collaborate in innovative ways. Through hands-on experience with microbit chips, they will learn how to program and control robots, gaining valuable skills that will serve them well in their future careers. Our goal is to inspire a new generation of tech-savvy individuals who are equipped to take on the challenges of tomorrow.
                        </p>
                    </figcaption>
                </figure>
            </article>

            <!-- Middle School Section -->
            <article class="article">
                <figure class="article__figure">
                    <img class="article__cover" src="<?php echo base_url(); ?>asset/images/Facilities/013.jpg" />
                    <figcaption class="article__caption">
                        <h4 class="article__title">Middle School</h4>
                        <p class="article__info">
                            At Middle school we prioritize ensuring that students not only excel in their academic pursuits but also develop essential life skills that will serve them well beyond the classroom. By focusing on research, analytical, and reasoning skills, students are better equipped to approach problems and challenges with a critical mindset.
                            <br><br>
                            Through our emphasis on leadership development, organizational skills, and effective communication, we empower students to take on leadership roles and communicate effectively with their peers and future colleagues. These skills are invaluable in both personal and professional settings, and we strive to cultivate them in each student we work with. By following the esteemed Oxford Curriculum and delivering engaging lessons, we ensure that our students emerge as exemplary individuals who are ready to make a positive impact on society.
                            <br><br>
                            Our supportive learning environment fosters independence and encourages students to make decisions based on critical thinking. By providing a space where students can freely explore ideas and opinions, we promote a culture of curiosity and growth. Students are encouraged to take ownership of their learning journey and develop the confidence to navigate challenges with a strong foundation of critical thinking skills.
                            <br><br>
                            With a focus on STEAM activities, our program encourages both students and teachers to engage in a dynamic learning experience. By promoting the achievement of lesson objectives while fostering a love for learning, we cultivate a passion for education in our students. Through expertly crafted lesson plans and a variety of activities, we create a supportive learning environment where students can thrive and reach their full potential.
                        </p>
                    </figcaption>
                </figure>
            </article>

            <!-- High School Section -->
            <article class="article">
                <figure class="article__figure">
                    <img class="article__cover" src="<?php echo base_url(); ?>asset/images/Facilities/13.webp" />
                    <figcaption class="article__caption">
                        <h4 class="article__title">High School</h4>
                        <p class="article__info">
                            At High School, we believe that equipping students with essential life skills is crucial in preparing them for the challenges of the modern world. Our high school is affiliated with Federal Board Islamabad and we follow the assigned curriculum by emphasizing the development of planning and organizational skills, students are empowered to effectively manage their time and tasks, leading to greater success in both academic and professional endeavors. Through hands-on learning experiences and interactive workshops, we provide students with the tools they need to thrive in the fast-paced environment of the 21st century.
                            <br><br>
                            Continuous learning is a core value that we instill in our students, as we recognize the importance of staying adaptable and open to new ideas and innovations. By fostering a culture of curiosity and growth, we empower students to expand their knowledge and skills beyond the classroom walls. Through a variety of educational programs and events, students are encouraged to explore new subject areas, engage with diverse perspectives, and develop a passion for lifelong learning.
                            <br><br>
                            Our commitment to preparing students for the job market extends beyond theoretical knowledge, as we believe in the importance of practical application in real-life contexts. Through a range of hands-on activities, internships, career counselling sessions, university roadshows and networking opportunities, we provide students with the chance to apply their learning in meaningful ways. By equipping students with the skills and experience needed to succeed in their future careers, we empower them to confidently navigate the challenges and opportunities that await them in the professional world.
                        </p>
                    </figcaption>
                </figure>
            </article>
        </div>
    </div>
</section>


    <!-- ./ End Teachers Area section -->
    <script>
        AOS.init();
    </script>
</div>