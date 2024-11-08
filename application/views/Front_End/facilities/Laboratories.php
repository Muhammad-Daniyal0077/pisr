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

    /* Container and Headings */
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    h1,
    h2,
    h3 {
        text-align: center;
        color: #003366;
    }

    h1.animated-title,
    h2.section-heading {
        font-family: 'Arial', sans-serif;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .center-heading {
        font-size: 3rem;
        font-weight: bold;
    }

    .center-paragraph {
        font-size: 1.8rem;
        color: #34495e;
        line-height: 1.8;
        margin: 20px auto;
        text-align: center;
    }

    /* Hover Box Styles */
    .vc-hoverbox-wrapper {
        width: 800px;
        height: 380px;
        perspective: 1000px;
        text-align: center;
        transition: transform 0.3s ease-in-out;
        transform-style: preserve-3d;
        padding: 12px;
        border-radius: 6px;
        margin: 50px auto;
    }

    .vc-hoverbox-wrapper:hover {
        transform: scale(1.05);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }

    .vc-hoverbox {
        width: 100%;
        height: 270px;
        position: relative;
        transition: transform 0.8s ease;
        transform-style: preserve-3d;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }

    .vc-hoverbox-front,
    .vc-hoverbox-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
        border-radius: 10px;
    }

    .vc-hoverbox-front {
        background-size: cover;
        background-position: center;
        filter: brightness(70%);
    }

    .vc-hoverbox-back {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(241, 248, 255, 0.9);
        padding: 20px;
        color: #333;
        box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.1);
        font-size: 16px;
        text-align: center;
        transform: rotateY(180deg);
    }

    .vc-hoverbox-wrapper:hover .vc-hoverbox {
        transform: rotateY(180deg);
    }

    /* Section Headings */
    .section-heading {
        background-color: #509999;
        color: #ffffff;
        padding: 15px 20px;
        font-size: 24px;
        margin: 20px auto;
        text-align: center;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    }

    /* List Styling */
    ol {
        padding-left: 20px;
        font-size: 1.1rem;
    }

    ol li {
        margin-bottom: 8px;
        list-style-position: inside;
    }

    /* Paragraph Styling */
    .para {
        font-family: 'Arial', sans-serif;
        font-size: 14px;
        color: #333;
        line-height: 1.6;
        text-align: justify;
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
        animation: fadeInUp 1s ease-out;
    }

    .center-paragraph {
        animation-delay: 0.3s;
    }

    /* Hover Box Styling for down section */
    .vc-hoverbox-down {
        background-color: #f0f0f0;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        text-align: center;
        margin: 70px auto;
        width: 800px;
        padding: 20px;
        transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    }

    .vc-hoverbox-down:hover {
        background-color: #bddbf0;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }
    .container {
margin-left: 190px;
    }
</style>
</head>

<body>
    <div class="wpb_wrapper">
        <h1 class="center-heading">Educational Facilities</h1>
        <p class="center-paragraph" style="margin: 30px;">The School caters to boys and girls of the Pakistani community in Riyadh from Play
            Group to Class XII. It maintains a high standard of education and provides a variety of curricular and
            co-curricular activities for the development of a wholesome and balanced personality of the students. The
            School is producing excellent results in School and Board Examinations.</p>
    </div>

    <h2 class="container section-heading col-md-9" >Laboratories</h2>

    <div class="vc-hoverbox-wrapper" style="margin: 180px; margin-left: 250px; margin-bottom: -40px;">
        <h3><span style="color: #000080;"><strong>COMPUTER
                    LABORATORIES</strong></span></h3>
        <div class="vc-hoverbox">
            <div class="vc-hoverbox-front"
                style="background-image: url('https://pisr.org/v2/wp-content/uploads/2021/06/5-e1623149762351-300x161.jpg');">
            </div>

            <div class="vc-hoverbox-back">

                <p>The School is equipped with five fully functional Computer
                    Laboratories; each equipped with latest technology including smart
                    board, high tech computers, projectors and an internet connection on
                    every computer.
                </p>



            </div>

        </div>



    </div>
    <div class="vc-hoverbox-down">
        <h3 style="text-align: center;">
            <span style="color: #000080;"><strong>Chemistry, Physics & Biology
                    Laboratories</strong></span>
        </h3>
        <p>Well equipped and maintained Chemistry, Physics and Biology Laboratories have
            been established in SBW-I and SGW-I for academic activities. These laboratories
            are updated with apparatus, chemicals and tools necessary for conducting science
            practicals.

            Multimedia systems, smart boards and internet connection have also been provided
            to assist in delivering lectures using modern techniques..</p>

    </div>


</body>

</html>