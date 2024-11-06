<!-- Page Title -->
<div class="pic">
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
        <div class="background-overlay"></div> <!-- Overlay div for dull effect -->
        <div class="container">
            <h1 class="animated-title">Contact Us</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                    <li class="current">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Font Awesome 5 CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
    .contact-info-box {
      padding: 15px;
      text-align: center;
      background-color: #f7f7f7;
      border-radius: 5px;
      margin-bottom: 20px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    .contact-info-box i {
      font-size: 30px;
      margin-bottom: 10px;
    }
    .contact-info-box .heading__primary {
      font-size: 18px;
      margin-bottom: 5px;
      font-weight: bold;
    }
    .desc-content {
      font-size: 16px;
      color: #666;
    }
  </style>
<section>
    <div class="container mt-5 mb-2">
        <h1 class="text-center" style="margin-top: 20px; margin-bottom: 20px;">Contact Us</h1>
        <div class="row">
            <!-- Contact Information Column (col-md-6) -->
            <div class="col-md-6">
                <div class="contact-info-box">
                    <i class="fa fa-phone" style="color: #28a745;"></i> <!-- Phone Icon -->
                    <div class="heading__primary">Phone</div>
                    <div class="desc-content">+966-11-4414428</div>
                </div>

                <!-- WhatsApp Section -->
                <div class="contact-info-box">
                    <i class="fa fa-whatsapp" style="color: #81d742;"></i> <!-- WhatsApp Icon -->
                    <div class="heading__primary">WhatsApp</div>
                    <div class="desc-content">+966-580793894</div>
                </div>

                <!-- ADMISSION Section -->
                <div class="contact-info-box">
                    <i class="fa fa-envelope" style="color: #ffb606;"></i> <!-- Email Icon -->
                    <div class="heading__primary">ADMISSION</div>
                    <div class="desc-content">admission@lms.pisr.org</div>
                </div>

                <!-- FBISE Section -->
                <div class="contact-info-box">
                    <i class="fa fa-envelope" style="color: #ffb606;"></i> <!-- Email Icon -->
                    <div class="heading__primary">FBISE</div>
                    <div class="desc-content">adeel@pisr.org</div>
                </div>

                <!-- Accounts Section -->
                <div class="contact-info-box">
                    <i class="fa fa-envelope" style="color: #ffb606;"></i> <!-- Email Icon -->
                    <div class="heading__primary">Accounts</div>
                    <div class="desc-content">sajid@pisr.org</div>
                </div>

                <!-- PA Section -->
                <div class="contact-info-box">
                    <i class="fa fa-envelope" style="color: #ffb606;"></i> <!-- Email Icon -->
                    <div class="heading__primary">PA</div>
                    <div class="desc-content">info@pisr.org</div>
                </div>
            </div>

            <!-- Contact Form Column (col-md-6) -->
            <div class="col-md-6" style="margin-bottom: 20px;">
                <h3>Get In Touch</h3>
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="4" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
