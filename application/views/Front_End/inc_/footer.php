<!-- Footer Area section -->
<footer>
    <div class="container">
        <div class="row">
            <div class=" col-sm-12 footer-content-box">
                <div class="col-sm-4">
                    <img class="alignnone size-full wp-image-10"
                        src="https://pisr.org/v2/wp-content/uploads/2021/06/PISR-e1623144368927.png"
                        style="width: 112px; height: 46px;">
                    <p   class="mt-4">We are Educatios, creat your passion and inspiration. And hope success will come
                        for your
                        dream. Please send email and get latest news.</p>
                    <ul class="list-unstyled">
                        <li><span><i class="fa fa-phone footer-icon"></i></span>+966114414428</li>
                        <li><span><i class="fa fa-envelope footer-icon"></i></span>support_team@pisr.org</li>
                        <li><span><i class="fa fa-map-marker footer-icon"></i></span>PO Box 3797 - Riyadh 11481 - Kingdom of Saudi Arabia</li>
                    </ul>
                </div>


                <div class="col-sm-2 m-2">
                    <h3>Links</h3>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo base_url(); ?>about/principlemessage"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Principlemessaage</a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>gallery"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Gallery</a></li>
                        <li><a href="<?php echo base_url(); ?>achievments/successstories"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Successstories</a>
                        </li>  
                        <li><a href="<?php echo base_url(); ?>events"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Events</a>
                        </li>  
                        <li><a href="<?php echo base_url(); ?>about/faqs"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>FAQS</a>
                        </li>  
                                         
                        <li><a href="<?php echo base_url(); ?>contact"><span><i class="fa fa-long-arrow-right footer-icon"></i></span>Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-3">
                    <h3>Get in touch</h3>
                    <a href="https://pisr.org/v2/wp-content/uploads/2022/10/PISR-VAT-certificate.pdf"><img
                            loading="lazy" decoding="async" class="aligncenter wp-image-7127"
                            src="https://pisr.org/v2/wp-content/uploads/2022/10/WhatsApp-Image-2022-10-16-at-3.39.46-PM-2-e1665988024285.jpeg"
                            alt="" width="110" height="100"></a>
                </div>
                <style>
                    /* The Modal (background) */


                </style>

                <div class="col-sm-2">
                    <h3>Events Calender</h3>
                    <div class="col-lg-6 my-4">
                        <img id="image-zoom" src="https://pisr.org/v2/wp-content/uploads/2024/03/Academic-Calendar-2024-25-791x1024.jpg" alt="Academic Calendar" height="200" width="200" style="cursor:pointer;">
                    </div>
                </div>

                <!-- Modal -->
                <div id="imageModal" class="modal" style="display:none;">
                    <span class="close">&times;</span>
                    <img class="modal-content" id="zoomedImage">
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <div class="row">
                    <div class="col-md-6 col-sm-12 footer-no-padding">
                        <span style="color:white">&copy; Copyright 2019 PISR | All rights reserved</span>
                    </div>
                    <div class="col-md-6 col-sm-12 footer-no-padding">
                        <ul class="list-unstyled footer-menu text-right">
                            <li>Follow us:</li>
                            <li><a href="https://www.facebook.com/PISR.official.page/"><i class="fab fa-facebook facebook"></i></a></li>
<li><a href="#"><i class="fab fa-twitter twitter"></i></a></li>
<li><a href="https://www.instagram.com/pisr.official.page/"><i class="fab fa-instagram instagram"></i></a></li>
<li><a href="#"><i class="fab fa-google-plus google"></i></a></li>
<li><a href="#"><i class="fab fa-skype skype"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ./ End footer-bottom -->
</footer><!-- ./ End Footer Area-->

<script>
    $(document).ready(function(){
    // Get the modal
    var modal = $('#imageModal');

    // Get the image and insert it inside the modal
    var img = $('#image-zoom');
    var modalImg = $('#zoomedImage');
    
    img.click(function(){
        modal.css("display", "block");
        modalImg.attr('src', this.src);
    });

    // Get the <span> element that closes the modal
    var span = $('.close');

    // When the user clicks on <span> (x), close the modal
    span.click(function() {
        modal.css("display", "none");
    });
});

</script>