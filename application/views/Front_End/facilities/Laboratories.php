<!-- Page Title -->
<div class="pic">
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
        <div class="background-overlay"></div> <!-- Overlay div for dull effect -->
        <div class="container">
            <h1 class="animated-title">Laboratories</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                    <li class="current">Laboratories</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<style>
    /* Reset */
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    /* Page Title */
    .page-title {
        position: relative;
        background-size: cover;
        background-position: center;
        padding: 50px 0;
        color: #fff;
    }

    .page-title .background-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        /* Dark overlay */
    }

    h1 {
        text-align: center;
    }

    /* Container */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    /* Title Styles */
    h1.animated-title {
        font-family: 'Arial', sans-serif;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 3rem;
        text-align: center;
        color: #003366;
        animation: fadeInUp 1s ease-out;

    }

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

    /* Hover Effects */
    .center-heading:hover {
        color: #ff6347;
        text-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transform: scale(1.1);
    }

    .center-paragraph:hover {
        color: #3498db;
        transform: translateY(-5px);
    }

    /* Animations */
    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .center-heading,
    .center-paragraph {
        animation: ease-in-out;
    }

    .center-paragraph {
        animation-delay: 0.3s;
    }

    .img-responsive-principle {
        width: 98%;
        height: auto;
        border-radius: 12px;
        object-fit: cover;
        margin-top: 35px;
    }

    .events-list-03 {

        padding: 2px 0;
        background-color: #f9f9f9;
        font-family: 'Arial', sans-serif;
    }
</style>



<div class="wpb_wrapper">
    <h1 class="center-heading">Educational Facilities</h1>
    <p class="center-paragraph">The School caters to boys and girls of the Pakistani community in Riyadh from Play
        Group to Class XII. It maintains a high standard of education and provides a variety of curricular and
        co-curricular activities for the development of a wholesome and balanced personality of the students. The
        School is producing excellent results in School and Board Examinations.</p>
</div>

<div class="info">


    <h2 class="container section-heading ">Laboratories</h2>
    <section class="events-list-03">
        <div class="container">
            <div class="row event-body-content">
                <div class="col-sm-12 events-full-box ">
                    <div class="events-single-box">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?php echo base_url(); ?>asset/images/Facilities/013.jpg" alt="not"
                                    class="img-responsive-principle">
                            </div>

                            <div class="col-sm-6 event-info img-fluid">
                                <h4>COMPUTER LABORATORIES
                                </h4>
                                <p class="div-sm-7 event-info " style="margin-top: 60px;">
                                    As the Principal of our esteemed institution, it is my honor to The School is
                                    equipped with five fully functional Computer Laboratories; each equipped with latest
                                    technology including smart board, high tech computers, projectors and an internet
                                    connection on every computer. </p>



                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="events-list-03">
        <div class="container">
            <div class="row event-body-content">
                <div class="col-sm-12 events-full-box ">
                    <div class="events-single-box">
                        <div class="row">
                            

                            <div class="col-sm-6 event-info img-fluid">
                                <h4>Chemistry, Physics & Biology Laboratories

                                </h4>
                                <p class="div-sm-7 event-info " style="margin-top: 19px;">
                                    Well equipped and maintained Chemistry, Physics and Biology Laboratories have been
                                    established in SBW-I and SGW-I for academic activities. These laboratories are
                                    updated with apparatus, chemicals and tools necessary for conducting science
                                    practicals.

                                    Multimedia systems, smart boards and internet connection have also been provided to
                                    assist in delivering lectures using modern techniques.</p>



                            </div>
                            <div class="col-md-6">
                                <img src="<?php echo base_url(); ?>asset/images/Facilities/13.webp" alt="not"
                                    class="img-responsive-principle">
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
</div>