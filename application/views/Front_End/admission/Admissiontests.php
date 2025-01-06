<!-- Page Title -->
<div class="pic">
	<div class="page-title dark-background" data-aos="fade" style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
		<div class="background-overlay"></div> <!-- Overlay div for dull effect -->
		<div class="container">
			<h1 class="animated-title">ADMISSION TEST SYLLABUS</h1>
			<nav class="breadcrumbs">
				<ol>
					<li><a href="<?php echo base_url(); ?>home">Home</a></li>
					<li class="current">ADMISSION TEST SYLLABUS</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<!-- Add Styles for Portfolio Section -->
<style>
    .vc_row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        padding: 20px;
        background-color: #f5f5f5;
    }

    .vc_col-sm-3 {
        flex: 0 0 22%;
        text-align: center;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
        overflow: hidden;
    }

    .vc_col-sm-3:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    }

    .vc_col-sm-3 img {
        width: 70%;
        height: auto;
        transition: transform 0.3s;
        padding-top: 6px;
        border-bottom: 2px solid #ddd;
    }

    .vc_col-sm-3:hover img {
        transform: scale(1.05);
    }

    .vc_col-sm-3 p {
        margin: 10px 0;
        font-size: 16px;
        color: #333;
        font-weight: bold;
    }

    .vc_col-sm-3 a {
        text-decoration: none;
        color: inherit;
        display: block;
    }

    .vc_col-sm-3 a:hover p {
        color: #007BFF;
    }
    .section-heading {
    background-color: #509999; /* Light blue background */
    color: #ffffff; /* White text */
    padding: 15px 20px; /* Padding for spacing */
    text-align: center; /* Center align text */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); /* Subtle shadow for depth */
    font-family: 'Arial', sans-serif; /* Clean font */
    font-size: 24px; /* Larger font size */
    letter-spacing: 1px; /* Slightly spaced letters */
    margin: 20px; /* Space below the heading */
  }
</style>

<section class="container" style="margin-top: 20px;" >
<h2 class="section-heading">Admission Test Syllabus for Different Grades</h2>

    <div class="vc_row">
        <?php foreach ($admission_test_syllabus as $rows): ?>
        <div class="vc_col-sm-3">
             
            <a href="<?php echo base_url(); ?>uploads/syllabus_file/<?php echo $rows->file; ?>" target="_blank">
                <img src="<?php echo base_url();?>uploads/syllabus_image/<?php echo $rows->image; ?>" alt="PG, Nursery, KG">
                <p><?php echo $rows->name; ?></p>
            </a>
        </div>
        <?php endforeach; ?>
    
    </div>
</section>
