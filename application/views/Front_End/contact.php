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
</style>
<section>

    <div class="container mt-5 mb-2">
    <h1 class="text-center" style="margin-top: 20px; margin-bottom: 20px;">Contact Us</h1>
        <div class="row">
            <!-- Contact Information Column -->
            <div class="col-md-6">
                <h3>Contact Information</h3>
                <p><strong>Email:</strong>support_team@pisr.org</p>
                <p><strong>Phone:</strong> +966114414428</p>
                <p><strong>Address:</strong> 01 Central Park, NYC</p>
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