<!-- Page Title -->
<div class="pic">
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
        <div class="background-overlay"></div> <!-- Overlay div for dull effect -->
        <div class="container">
            <h1 class="animated-title">Gallery</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                    <li class="current">Gallery</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<style>
    .section-heading {
        background-color: #509999;
        /* Light blue background */
        color: #ffffff;
        /* White text */
        padding: 15px 20px;
        /* Padding for spacing */
        text-align: center;
        /* Center align text */
        border-radius: 10px;
        /* Rounded corners */
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
        /* Subtle shadow for depth */
        font-family: 'Arial', sans-serif;
        /* Clean font */
        font-size: 24px;
        /* Larger font size */
        letter-spacing: 1px;
        /* Slightly spaced letters */
        margin: 40px 0px;
        /* Space below the heading */
    }

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

<!-- Education Conference Section -->
<section class="container">
    <h2 class="container section-heading">Gallery Section of PISR</h2>
    <h3>PISR Education Conference 2023</h3>

    <div class="container mt-5">
        <div id="conferenceSlider" class="gallery-slider">
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
        <button class="custom-slick-prev conference-prev">&#10094;</button>
        <button class="custom-slick-next conference-next">&#10095;</button>
    </div>

    <!-- Modal for Conference Slider -->
    <div id="conferenceModal" class="modal">
        <span class="close">&times;</span>
        <span class="prev">&#10094;</span>
        <span class="next">&#10095;</span>
        <div class="modal-content">
            <img id="conferenceModalImage" src="" alt="Image Preview">
        </div>
    </div>
</section>

<!-- Independence Day Section -->
<section class="container">
    <h3>Pakistan Independence Day Celebration</h3>

    <div class="container mt-5">
        <div id="independenceSlider" class="gallery-slider">
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
        <button class="custom-slick-prev independence-prev">&#10094;</button>
        <button class="custom-slick-next independence-next">&#10095;</button>
    </div>

    <!-- Modal for Independence Slider -->
    <div id="independenceModal" class="modal">
        <span class="close">&times;</span>
        <span class="prev">&#10094;</span>
        <span class="next">&#10095;</span>
        <div class="modal-content">
            <img id="independenceModalImage" src="" alt="Image Preview">
        </div>
    </div>
</section>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
   $(document).ready(function () {
    // Initialize Slick Slider for Conference Slider
    $('#conferenceSlider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        dots: true,
        arrows: false,
        rows: 2,
        responsive: [
            { breakpoint: 1024, settings: { slidesToShow: 3 } },
            { breakpoint: 768, settings: { slidesToShow: 2 } },
            { breakpoint: 480, settings: { slidesToShow: 1 } }
        ]
    });

    // Custom navigation buttons for Conference Slider
    $('.conference-prev').on('click', function () {
        $('#conferenceSlider').slick('slickPrev');
    });

    $('.conference-next').on('click', function () {
        $('#conferenceSlider').slick('slickNext');
    });

    // Initialize Slick Slider for Independence Slider
    $('#independenceSlider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2500,
        dots: true,
        arrows: false,
        rows: 2,
        responsive: [
            { breakpoint: 1024, settings: { slidesToShow: 3 } },
            { breakpoint: 768, settings: { slidesToShow: 2 } },
            { breakpoint: 480, settings: { slidesToShow: 1 } }
        ]
    });

    // Custom navigation buttons for Independence Slider
    $('.independence-prev').on('click', function () {
        $('#independenceSlider').slick('slickPrev');
    });

    $('.independence-next').on('click', function () {
        $('#independenceSlider').slick('slickNext');
    });

    // Function to handle modal display
    function setupModal(sliderId, modalId, modalImageId) {
        const modal = $(modalId);
        const modalImage = $(modalImageId);
        let currentIndex = 0;

        // Open Modal on Image Click
        $(sliderId + ' .gallery-item img').on('click', function () {
            currentIndex = $(this).closest('.gallery-item').index();
            showImageInModal(currentIndex);
            modal.show();
        });

        // Show Image in Modal
        function showImageInModal(index) {
            const src = $(sliderId + ' .gallery-item').eq(index).find('img').attr('src');
            modalImage.attr('src', src);
        }

        // Close Modal
        $(modalId + ' .close').on('click', function () {
            modal.hide();
        });

        // Next and Previous Buttons for Modal
        $(modalId + ' .next').on('click', function () {
            currentIndex = (currentIndex + 1) % $(sliderId + ' .gallery-item').length;
            showImageInModal(currentIndex);
        });

        $(modalId + ' .prev').on('click', function () {
            currentIndex = (currentIndex - 1 + $(sliderId + ' .gallery-item').length) % $(sliderId + ' .gallery-item').length;
            showImageInModal(currentIndex);
        });

        // Close Modal on outside click
        $(window).on('click', function (event) {
            if (event.target === modal[0]) {
                modal.hide();
            }
        });
    }

    // Setup modals for each slider
    setupModal('#conferenceSlider', '#conferenceModal', '#conferenceModalImage');
    setupModal('#independenceSlider', '#independenceModal', '#independenceModalImage');
});

</script>