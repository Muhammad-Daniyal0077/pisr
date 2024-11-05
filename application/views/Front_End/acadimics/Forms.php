<!-- Page Title -->
<div class="pic">
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
        <div class="background-overlay"></div> <!-- Overlay div for dull effect -->
        <div class="container">
            <h1 class="animated-title">Forms</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                    <li class="current">Forms</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<style>
    .wpb_wrapper {
        max-width: 1100px;
        margin: 0 auto;
        padding: 65px;
        /* text-align: initial; */
        /* font-family: 'Arial', sans-serif; */
        border-radius: 8px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .vc_separator {
        display: flex;
        align-items: center;
        margin: 30px 0;
        position: relative;
    }

    .vc_sep_line {
        flex: 1;
        height: 3px;
        background-color: #007BFF;
        /* A bright blue color */
        margin: 0 10px;
        transition: background-color 0.3s;
    }

    .vc_sep_line:hover {
        background-color: #0056b3;
        /* Darker blue on hover */
    }

    .separator-heading {
        font-size: 15px;
        color: #333;
        text-align: center;
        margin: 0;
        padding: 6px;
        background-color: #f0f8ff;
        border-radius: 4px;
        position: relative;
        z-index: 1;
        transition: transform 0.3s;
    }

    .separator-heading:hover {
        transform: scale(1.05);
        /* Slightly enlarge on hover */
        color: #007BFF;
        /* Change text color on hover */
    }

    .separator-heading::before,
    .separator-heading::after {
        content: '';
        position: absolute;
        top: 50%;
        width: 30px;
        height: 3px;
        background-color: #007BFF;
        z-index: -1;
    }

    .separator-heading::before {
        left: -40px;
        /* Adjust as necessary */
    }

    .separator-heading::after {
        right: -40px;
        /* Adjust as necessary */
    }


    /* Dropdown Container */
    .dropdown-custom {
        max-width: 640px;
        align-items: center;
        border: 1px solid #ddd;
        border-radius: 8px;
        background: #fff;
        margin-bottom: 10px;
        transition: all 0.3s ease;
        overflow: hidden;
        /* Ensures the dropdown body doesn't overflow */
    }

    /* Dropdown Header */
    .dropdown-header-custom {
        padding: 12px;
        font-size: 18px;
        background-color: #509999;
        color: #fff;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        border-radius: 8px;
        transition: background-color 0.3s ease;
    }

    /* Header Hover Effect */
    .dropdown-header-custom:hover {
        background-color: #337ab7;
    }

    /* Dropdown Icon */
    .dropdown-icon-custom {
        transition: transform 0.3s ease;
    }

    /* Dropdown Body */
    .dropdown-body-custom {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s ease-in-out, padding 0.5s ease-in-out;
        padding: 0;
    }

    /* Active State for Dropdown */
    .dropdown-custom.active .dropdown-body-custom {
        max-height: 600px;
        /* Adjust as needed for content */
        padding: 15px;
    }

    /* Rotate Icon When Active */
    .dropdown-custom.active .dropdown-icon-custom {
        transform: rotate(45deg);
    }

    /* Dropdown Content */
    .dropdown-content-custom p {
        color: #4a4a4a;
        font-size: 15px;
        line-height: 1.7;
        background-color: #f1f8ff;
        padding: 10px 15px;
        border-radius: 5px;
        border-left: 4px solid #337ab7;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 10px;
    }
</style>
<section class="events-list-03">
    <div class="wpb_wrapper">
        <div class="vc_separator">
            <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
            <h4 class="separator-heading">CLICK ON BELOW TABS TO SEE MORE INFO</h4>
            <span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
        </div>
        <div class="vc_separator">
            <span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span>
            <h4 class="separator-heading">DOWNLOAD THE FORM ATTACH THE REQUIRED DOCUMENTS &amp; SUBMIT IN PISR MAIN OFFICE</h4>
            <span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
        </div>
    </div>


    <div style="box-shadow: none;" class="wpb_wrapper">
        <div class="dropdown-custom">
            <div class="dropdown-header-custom" role="button">
                Character Certificate <span class="dropdown-icon-custom">+</span>
            </div>
            <div class="dropdown-body-custom">
                <div class="dropdown-content-custom">
                    <p>Visit Link <a href="https://pisr.org/v2/wp-content/uploads/2021/06/character-certificate.pdf" class="form-link">here</a></p>
                </div>
            </div>
        </div>
        <div class="dropdown-custom">
            <div class="dropdown-header-custom" role="button">
                Bonified Certificate <span class="dropdown-icon-custom">+</span>
            </div>
            <div class="dropdown-body-custom">
                <div class="dropdown-content-custom">
                    <p>Visit Link <a href="https://pisr.org/v2/wp-content/uploads/2021/06/Bonafide-form.pdf" class="form-link">here</a></p>
                </div>
            </div>
        </div>
        <div class="dropdown-custom">
            <div class="dropdown-header-custom" role="button">
                School Leaving Certificate <span class="dropdown-icon-custom">+</span>
            </div>
            <div class="dropdown-body-custom">
                <div class="dropdown-content-custom">
                    <p>Visit Link <a href="https://pisr.org/v2/wp-content/uploads/2021/07/withdrawal-form.pdf">here</a></p>
                </div>
            </div>
        </div>
        <div class="dropdown-custom">
            <div class="dropdown-header-custom" role="button">
                Security Refund <span class="dropdown-icon-custom">+</span>
            </div>
            <div class="dropdown-body-custom">
                <div class="dropdown-content-custom">
                    <p>Visit Link <a href="https://pisr.org/v2/wp-content/uploads/2021/06/SECURITY-REFUND-FORM-I.T-05-12-2016.pdf">here</a></p>
                </div>
            </div>
        </div>
        <div class="dropdown-custom">
            <div class="dropdown-header-custom" role="button">
                Provisional Certificate<span class="dropdown-icon-custom">+</span>
            </div>
            <div class="dropdown-body-custom">
                <div class="dropdown-content-custom">
                    <p>Visit Link <a href="">here</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    // JavaScript for toggling dropdowns
    document.querySelectorAll('.dropdown-header-custom').forEach(header => {
        header.addEventListener('click', function() {
            const dropdown = this.closest('.dropdown-custom');
            dropdown.classList.toggle('active');
        });
    });
</script>

<script>
    AOS.init();
</script>