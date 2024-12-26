<style>
	/* Specific styles for dropdown */
	.dropdown-custom {
		border: 1px solid #ddd;
		border-radius: 8px;
		background: #fff;
		margin-bottom: 10px;
		transition: all 0.3s ease;
	}

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

	.dropdown-header-custom:hover {
		background-color: #337ab7;
	}

	.dropdown-icon-custom {
		transition: transform 0.3s ease;
	}

	.dropdown-body-custom {
		max-height: 0;
		overflow: hidden;
		transition: max-height 0.5s ease-in-out, padding 0.5s ease-in-out;
		padding: 0;
	}

	.dropdown-custom.active .dropdown-body-custom {
		max-height: 600px;
		padding: 15px;
	}

	.dropdown-custom.active .dropdown-icon-custom {
		transform: rotate(45deg);
	}

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

	.container-custom {
		max-width: 1000px;
		margin: 0 auto;
		padding: 20px;
	}

	h2 {
		padding: 10px 0;
		margin: 10px 0;
		border-bottom: 2px solid #509999;
		font-size: 24px;
	}

	.wpb_wrapper {
		max-width: 600px;
		margin: 20px auto;
		padding: 20px;
		background-color: #f9f9f9;
		border-radius: 10px;
		box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
	}

	h4 {
		margin-bottom: 20px;
		font-size: 24px;
		color: #333;
	}

	.form-control {
		width: 100%;
		padding: 12px;
		margin: 10px 0;
		border: 1px solid #ccc;
		border-radius: 5px;
		font-size: 16px;
		transition: border-color 0.3s ease;
	}

	.form-control:focus {
		border-color: #509999;
		outline: none;
	}

	textarea.form-control {
		resize: vertical;
	}

	.submit-button {
		background-color: #509999;
		color: #fff;
		border: none;
		padding: 12px 20px;
		font-size: 16px;
		border-radius: 5px;
		cursor: pointer;
		transition: background-color 0.3s ease;
	}

	.submit-button:hover {
		background-color: #337ab7;
	}

	.admission-links a {
		display: flex;
		align-items: center;
		justify-content: flex-start;
		padding: 14px 15px;
		width: 100%;
		font-size: 16px;
		border-radius: 5px;
		text-decoration: none;
		color: #fff;
		margin: 10px 4px;
	}

	.admission-links .btn-primary {
		background-color: #007bff;
		border-color: #007bff;
		width: 460px;
	}
</style>
<!-- Page Title -->
<div class="pic">
	<div class="page-title dark-background" data-aos="fade"
		style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
		<div class="background-overlay"></div> <!-- Overlay div for dull effect -->
		<div class="container">
			<h1 class="animated-title">FAQs</h1>
			<nav class="breadcrumbs">
				<ol>
					<li><a href="<?php echo base_url(); ?>home">Home</a></li>
					<li class="current">FAQS</li>
				</ol>
			</nav>
		</div>
	</div>
</div>



<section class="events-list-03">
	<div class="container-custom">
		<div class="row">
			<div class="col-md-6">
				<h2>FAQS</h2>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
						Admissions are open <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>PISR's Admissions are open all year round (12 Months)</p>
						</div>
					</div>
				</div>

				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
						Session Period <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>PISR’s session starts from April.</p>
						</div>
					</div>
				</div>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
						Can I get my kids admission on visit visa? <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>No, visit visa is not eligible for admission in PISR .</p>
						</div>
					</div>
				</div>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
						Can I get my kids admission on expire Iqama? <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>No, for admission you need to have valid iqama.</p>
						</div>
					</div>
				</div>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
						Where can I view the School Uniform options and where do I purchase it from? <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>It can be found on School Website under Academics tab. You can purchase it from anywhere.</p>
						</div>
					</div>
				</div>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
						Do PISR have age criteria for admission in certain class? <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>PISR have age criteria against every class.</p>
						</div>
					</div>
				</div>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
					How can we pay fees after admission confirmation? <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>Once you successfully enrolled in PISR you can pay fees monthly, quarterly or annually depend on your level of convenience.</p>
						</div>
					</div>
				</div>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
					Can we pay fees online? <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>No, PISR collect fees physically in the main office</p>
						</div>
					</div>
				</div>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
					Where do I go if I want to contact the school? <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>For any enquires; information; student absences and feedback please visit the School Website and under the Contact us Tab you will see</p>
						</div>
					</div>
				</div>

				<div class="admission-links m-s ">
					<a class="btn btn-primary" href="https://pisr.org/v2/wp-content/uploads/2021/05/Admission-Required-Document.pdf">
						<i class="fa fa-download"></i> Required Documents for Admission?
					</a>
				</div>

				<div class="admission-links">
					<a class="btn btn-primary" href="https://pisr.org/v2/wp-content/uploads/2021/06/fee-structure.pdf">
						<i class="fa fa-download"></i>School Fee Structure for New Admission?
					</a>
				</div>







			</div>


			<div class="col-md-6">
				<h2>FAQS</h2>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
						Why we pay fees from April <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>Every student must pay the full academic session fee.</p>
						</div>
					</div>
				</div>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
						Where can I find Student timings <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>It can be found on School Website under Academics tab.</p>
						</div>
					</div>
				</div>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
						Do PISR admission open throughout the year? <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>PISR academic year start in every April 202x - March admission are open when there is availability of seat.</p>
						</div>
					</div>
				</div>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
						How often should I check the School Website? <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>You may check the website weekly for updates.</p>
						</div>
					</div>
				</div>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
						Where can I find the School Calendar? <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>On School Website under the Downloads Tab.</p>
						</div>
					</div>
				</div>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
						Where can I find Student Timetables? <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>It can be found on School Website under ACADEMICS Tab / School Timing.</p>
						</div>
					</div>
				</div>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
						Where can I get admission without clearing the entry test? <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>No, you need to clear entry test for getting admission in PISR. If you fail to clear entry test 1st attempt then PISR give you one more chance for test clearance. If student fails to clear retest then he/she need to restart his admission process from start.</p>
						</div>
					</div>
				</div>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
						Where can I get admission without clearing the entry test? <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>No, you need to clear entry test for getting admission in PISR. If you fail to clear entry test 1st attempt then PISR give you one more chance for test clearance. If student fails to clear retest then he/she need to restart his admission process from start.</p>
						</div>
					</div>
				</div>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
						How can I get my kids admission if they are coming from other boards? <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>
								If students are coming from other boards they need to submit the following documents. <br>
								o Original SLC. <br>
								o Original result card. <br>
								o Migration certificate. <br>
								o For Cambridge need to submit equivalent certificate

							</p>
						</div>
					</div>
				</div>
				<div class="dropdown-custom">
					<div class="dropdown-header-custom" role="button">
					Where do I find my child’s assignments? <span class="dropdown-icon-custom">+</span>
					</div>
					<div class="dropdown-body-custom">
						<div class="dropdown-content-custom">
							<p>
								If students are coming from other boards they need to submit the following documents. <br>
								o Original SLC. <br>
								o Original result card. <br>
								o Migration certificate. <br>
								o For Cambridge need to submit equivalent certificate

							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




	<div class="wpb_wrapper">
		<div class="thim-contact-faqs text-center">
			<h4>Didn't find the answer?</h4>
			<div role="form" class="wpcf7" id="wpcf7-f6295-p91-o1" lang="en-US" dir="ltr">
				<form action="/v2/?page_id=91#wpcf7-f6295-p91-o1" method="post" class="wpcf7-form init"
					novalidate="novalidate">
					<p>
						<span class="wpcf7-form-control-wrap your-name">
							<input type="text" name="your-name" class="form-control" placeholder="Name *" required>
						</span>
					</p>
					<p>
						<span class="wpcf7-form-control-wrap your-email">
							<input type="email" name="your-email" class="form-control" placeholder="Email *" required>
						</span>
					</p>
					<p>
						<span class="wpcf7-form-control-wrap your-familycode">
							<input type="text" name="your-familycode" class="form-control" placeholder="Family Code *"
								required>
						</span>
					</p>
					<p>
						<span class="wpcf7-form-control-wrap your-mobilenumber">
							<input type="text" name="your-mobilenumber" class="form-control"
								placeholder="Mobile Number *" required>
						</span>
					</p>
					<p>
						<span class="wpcf7-form-control-wrap your-subject">
							<input type="text" name="your-subject" class="form-control" placeholder="Subject *"
								required>
						</span>
					</p>
					<p>
						<span class="wpcf7-form-control-wrap your-message">
							<textarea name="your-message" class="form-control" placeholder="Message *"
								required></textarea>
						</span>
					</p>

					<input type="submit" value="Submit" class="submit-button">

				</form>
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