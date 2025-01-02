<div class="pic">
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
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
<!-- Gallery Section -->
<section class="container">
    <h2 class="section-heading" style="margin: 30px;">Gallery Section of PISR</h2>
    <?php foreach ($gallery as $index => $row): ?>
        <h3><?php echo $row->img_head; ?></h3>
        <div class="gallery-slider slider-<?php echo $index; ?>">
            <?php 
            // Decode the JSON-encoded array of image paths
            $images = json_decode($row->img, true);

            // Check if decoding was successful
            if (!empty($images)) {
                foreach ($images as $imagePath): ?>
                    <div class="gallery-item">
                        <img src="<?php echo base_url('uploads/gallery/' . trim($imagePath)); ?>" alt="Gallery Image">
                    </div>
                <?php endforeach;
            } else {
                echo "<p>No images available</p>";
            }
            ?>
        </div>
    <?php endforeach; ?>
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

<!-- Styles -->
<style>
    /* Modal Styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        align-items: center;
        justify-content: center;
        margin-top: 150px;
    }

    .modal-content img {
    width: 400px;
        margin: auto;
        display: block;
    }

    .close {
        position: absolute;
        top: 20px;
        right: 35px;
        color: #fff;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
    }

    .prev, .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        color: white;
        font-size: 50px;
        padding: 10px;
    }

    .prev {
        left: 10px;
    }
    .next {
        right: 10px;
    }
    /* Gallery Slider Styles */
    .gallery-slider .gallery-item img {
        width: 100%;
        border-radius: 8px;
        padding: 6px;
        transition: transform 0.3s;
        cursor: pointer;
    }

    .gallery-slider .gallery-item img:hover {
        transform: scale(1.1);
    }
</style>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function () {
        // Initialize each gallery slider
        <?php foreach ($gallery as $index => $row): ?>
        $('.slider-<?php echo $index; ?>').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2500,
            dots: true,
            arrows: true,
            prevArrow: '<button class="custom-slick-prev">&#10094;</button>',
            nextArrow: '<button class="custom-slick-next">&#10095;</button>',
            responsive: [
                { breakpoint: 1024, settings: { slidesToShow: 3 } },
                { breakpoint: 768, settings: { slidesToShow: 2 } },
                { breakpoint: 480, settings: { slidesToShow: 1 } }
            ]
        });
        <?php endforeach; ?>

        // Modal functionality
        const modal = $('#imageModal');
        const modalImage = $('#modalImage');
        let currentImageIndex = 0;

        // Open Modal
        $('.gallery-item img').on('click', function () {
            const slider = $(this).closest('.gallery-slider');
            currentImageIndex = slider.find('.gallery-item img').index(this);
            const src = $(this).attr('src');
            modalImage.attr('src', src);
            modal.fadeIn();
        });

        // Close Modal
        $('.close').on('click', function () {
            modal.fadeOut();
        });

        // Next Image
        $('.next').on('click', function () {
            const slider = $('.gallery-slider:has(img[src="' + modalImage.attr('src') + '"])');
            const images = slider.find('.gallery-item img');
            currentImageIndex = (currentImageIndex + 1) % images.length;
            modalImage.attr('src', images.eq(currentImageIndex).attr('src'));
        });

        // Previous Image
        $('.prev').on('click', function () {
            const slider = $('.gallery-slider:has(img[src="' + modalImage.attr('src') + '"])');
            const images = slider.find('.gallery-item img');
            currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
            modalImage.attr('src', images.eq(currentImageIndex).attr('src'));
        });

        // Close Modal on Outside Click
        $(window).on('click', function (e) {
            if ($(e.target).is(modal)) {
                modal.fadeOut();
            }
        });
    });
</script>
