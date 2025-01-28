<!-- Page Title -->
<div class="pic">
	<div class="page-title dark-background" data-aos="fade"
		style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
		<div class="background-overlay"></div> <!-- Overlay div for dull effect -->
		<div class="container">
			<h1 class="animated-title">Downloads</h1>
			<nav class="breadcrumbs">
				<ol>
					<li><a href="<?php echo base_url(); ?>home">Home</a></li>
					<li class="current">Downloads</li>
				</ol>
			</nav>
		</div>
	</div>
</div>

<style>
	h2 {
		padding: 10px 0;
		/* Padding for the headings */
		margin: 10px 0;
		/* Margin for spacing */
		border-bottom: 2px solid #509999;
		/* Underline effect */
		font-size: 24px;
		/* Font size for headings */
	}

	.admission-links {
		list-style: none;
		/* Remove default list styling */
		padding: 0;
		/* Remove default padding */
	}

	.admission-links li {
		margin-bottom: 10px;
		/* Add spacing between list items */
	}

	.admission-links a {
		display: flex;
		align-items: center;
		justify-content: flex-start;
		padding: 10px 15px;
		width: 100%;
		font-size: 16px;
		border-radius: 5px;
		text-decoration: none;
		color: #fff;
	}

	.admission-links .btn-primary {
		background-color: #007bff;
		border-color: #007bff;
	}

	.admission-links .btn-secondary {
		background-color: #6c757d;
		border-color: #6c757d;
	}

	.admission-links a i {
		margin-right: 10px;
		/* Space between icon and text */
		font-size: 18px;
		/* Increase icon size */
	}
</style>

<section class="events-list-03">
	<div class="container-custom">
		<div class="row">
			<!-- Admission Information -->
			<?php if (!empty($admission_info)): ?>
				<div class="col-md-4">
					<h2>Admission Information</h2>
					<ul class="admission-links">
						<?php foreach ($admission_info as $admission): ?>
							<li>
								<?php if (!empty($admission->url)): ?>
									<!-- Display URL if it exists -->
									<a class="btn btn-secondary" href="<?php echo $admission->url; ?>">
										<i class="fa fa-link"></i> <?php echo $admission->title; ?>
									</a>
								<?php elseif (!empty($admission->file)): ?>
									<!-- Display File if URL doesn't exist -->
									<a class="btn btn-primary" href="<?php echo base_url(); ?>uploads/download_form/<?php echo $admission->file; ?>">
										<i class="fa fa-download"></i> <?php echo $admission->title; ?>
									</a>
								<?php endif; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>

			<!-- Character Certificate -->
			<?php if (!empty($forms)): ?>
				<div class="col-md-4">
					<h2>Forms</h2>
					<ul class="admission-links">
						<?php foreach ($forms as $certificate): ?>
							<li>
								<?php if (!empty($certificate->url)): ?>
									<!-- Display URL if it exists -->
									<a class="btn btn-secondary" href="<?php echo $certificate->url; ?>">
										<i class="fa fa-link"></i> <?php echo $certificate->title; ?>
									</a>
								<?php elseif (!empty($certificate->file)): ?>
									<!-- Display File if URL doesn't exist -->
									<a class="btn btn-primary" href="<?php echo base_url(); ?>uploads/download_form/<?php echo $certificate->file; ?>">
										<i class="fa fa-download"></i> <?php echo $certificate->title; ?>
									</a>
								<?php endif; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>

			<!-- academics_data -->
			<?php if (!empty($academics_data)): ?>
				<div class="col-md-4">
					<h2>Academic</h2>
					<ul class="admission-links">
						<?php foreach ($academics_data as $academics_data): ?>
							<li>
								<?php if (!empty($academics_data->url)): ?>
									<!-- Display URL if it exists -->
									<a class="btn btn-secondary" href="<?php echo $academics_data->url; ?>">
										<i class="fa fa-link"></i> <?php echo $academics_data->title; ?>
									</a>
								<?php elseif (!empty($academics_data->file)): ?>
									<!-- Display File if URL doesn't exist -->
									<a class="btn btn-primary" href="<?php echo base_url(); ?>uploads/download_form/<?php echo $academics_data->file; ?>">
										<i class="fa fa-download"></i> <?php echo $academics_data->title; ?>
									</a>
								<?php endif; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>
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