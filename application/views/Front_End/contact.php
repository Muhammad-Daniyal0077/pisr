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
<style>

    h3 {
        margin-bottom: 20px;
        color: #007bff;
    }

    .contact-info p {
        font-size: 16px;
        margin-bottom: 10px;
        color: #495057;
    }

    .contact-form {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .form-control {
        border-radius: 0.25rem;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        transition: background-color 0.3s, border-color 0.3s;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #004085;
    }

    .containers {
        margin: 120px;
        position: relative;
        z-index: 2;
        /* margin-bottom: 40px; */
    }
    /* General Box Styling */
.thim-widget-icon-box {
  margin-bottom: 20px;
  display: flex;
  align-items: center;
  transition: all 0.3s ease;
}

.smicon-box {
  display: flex;
  align-items: center;
}

.boxes-icon {
  width: 40px;
  height: 40px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-right: 15px;
  transition: transform 0.3s ease;
}

.icon {
  font-size: 24px;
  line-height: 24px;
  transition: color 0.3s ease, transform 0.3s ease;
}

/* Content Styling */
.content-inner {
  flex-grow: 1;
}

.heading__primary {
  font-size: 18px;
  font-weight: bold;
  margin-bottom: 5px;
  position: relative;
  padding-bottom: 8px;
}

/* Hover Effects */
.smicon-box:hover .boxes-icon {
  transform: scale(1.2);
}

.smicon-box:hover .icon {
  color: #007bff;
  transform: rotate(10deg);
}

.contact_info:hover {
  transform: scale(1.05);
  box-shadow: 0 0 10px rgba(0, 123, 255, 0.4);
}

/* Hover Animation for the Heading (underline glow effect) */
.heading__primary::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 3px;
  background-color: #007bff;
  transition: all 0.3s ease;
  transform: scaleX(0);
  transform-origin: bottom right;
  margin:40px;
}

.heading__primary:hover::after {
  transform: scaleX(1);
  transform-origin: bottom left;
}

/* Glow effect on hover */
.contact_info:hover .heading__primary {
  color: #007bff;
  text-shadow: 0 0 10px #007bff, 0 0 15px #007bff;
}

.desc-content {
  font-size: 16px;
  color: #666;
}

/* Adjust layout */
.vc_row {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.wpb_column {
  flex: 0 0 48%;
  box-sizing: border-box;
}

@media (max-width: 768px) {
  .wpb_column {
    flex: 0 0 100%;
  }
}

</style>
<section>

    <div class="container mt-5 mb-2">
    <h1 class="text-center" style="margin-top: 20px; margin-bottom: 20px;">Contact Us</h1>
        <div class="row">
            <!-- Contact Information Column -->
            <div class="col-md-6">
            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1470926005243 vc_row-has-fill">
  <!-- First Column -->
  <div class="wpb_column vc_column_container vc_col-sm-6">
    <div class="vc_column-inner vc_custom_1470926107488">
      <div class="wpb_wrapper">
        <!-- Phone Section -->
        <div class="thim-widget-icon-box contact_info">
          <div class="smicon-box iconbox-left">
            <div class="boxes-icon">
              <i class="ion-android-call icon" style="color:#ffb606;"></i>
            </div>
            <div class="content-inner">
              <h3 class="heading__primary">Phone</h3>
              <div class="desc-content">+966-11-4414428</div>
            </div>
          </div>
        </div>
        <!-- WhatsApp Section -->
        <div class="thim-widget-icon-box contact_info">
          <div class="smicon-box iconbox-left">
            <div class="boxes-icon">
              <i class="ion-social-whatsapp icon" style="color:#81d742;"></i>
            </div>
            <div class="content-inner">
              <h3 class="heading__primary">WhatsApp</h3>
              <div class="desc-content">+966-580793894</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Second Column -->
  <div class="wpb_column vc_column_container vc_col-sm-6">
    <div class="vc_column-inner vc_custom_1470926116338">
      <div class="wpb_wrapper">
        <!-- Admission Section -->
        <div class="thim-widget-icon-box contact_info">
          <div class="smicon-box iconbox-left">
            <div class="boxes-icon">
              <i class="fa fa-envelope icon" style="color:#ffb606;"></i>
            </div>
            <div class="content-inner">
              <h3 class="heading__primary">ADMISSION</h3>
              <div class="desc-content">admission@lms.pisr.org</div>
            </div>
          </div>
        </div>
        <!-- FBISE Section -->
        <div class="thim-widget-icon-box contact_info">
          <div class="smicon-box iconbox-left">
            <div class="boxes-icon">
              <i class="fa fa-envelope icon" style="color:#ffb606;"></i>
            </div>
            <div class="content-inner">
              <h3 class="heading__primary">FBISE</h3>
              <div class="desc-content">adeel@pisr.org</div>
            </div>
          </div>
        </div>
        <!-- Accounts Section -->
        <div class="thim-widget-icon-box contact_info">
          <div class="smicon-box iconbox-left">
            <div class="boxes-icon">
              <i class="fa fa-envelope icon" style="color:#ffb606;"></i>
            </div>
            <div class="content-inner">
              <h3 class="heading__primary">Accounts</h3>
              <div class="desc-content">sajid@pisr.org</div>
            </div>
          </div>
        </div>
        <!-- PA Section -->
        <div class="thim-widget-icon-box contact_info">
          <div class="smicon-box iconbox-left">
            <div class="boxes-icon">
              <i class="fa fa-envelope icon" style="color:#ffb606;"></i>
            </div>
            <div class="content-inner">
              <h3 class="heading__primary">PA</h3>
              <div class="desc-content">info@pisr.org</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

            </div>
            <!-- Contact Form Column -->
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