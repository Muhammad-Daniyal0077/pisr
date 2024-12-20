<!-- Page Title -->
<div class="pic">
	<div class="page-title dark-background" data-aos="fade"
		style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
		<div class="background-overlay"></div> <!-- Overlay div for dull effect -->
		<div class="container">
			<h1 class="animated-title">Worksheet</h1>
			<nav class="breadcrumbs">
				<ol>
					<li><a href="<?php echo base_url(); ?>home">Home</a></li>
					<li class="current">Worksheet</li>
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
			<div class="col-md-4">
				<h2>Nursery</h2>
				<ul class="admission-links">
					<li>
						<a class="btn btn-primary" href="https://drive.google.com/file/d/1-vtwZMNDamnyk8mfKGv3LNR7T5M3jlP-/view">
							<i class="fa fa-download"></i> Revision Week-2 Worksheet
						</a>
					</li>

					<li>
						<a class="btn btn-primary" href="https://drive.google.com/file/d/1PWvu5WB5P9Yc5CmaxCDpWtbP6rsiSqH6/view">
							<i class="fa fa-download"></i>Revision Week-1 Worksheet
						</a>
					</li>

					<li>
						<a class="btn btn-primary" href="https://pisr.org/v2/wp-content/uploads/2021/06/KG-Math-Worksheet-1st-semester-2021-2022.pdf">
							<i class="fa fa-download"></i>Maths
						                        </a>
					</li>

					
                    
				</ul>
			</div>
            


			<div class="col-md-4">
				<h2>KG</h2>
				<ul class="admission-links">
					<li>
						<a class="btn btn-primary" href="https://pisr.org/v2/wp-content/uploads/2021/06/KG-English-1st-semester-worksheets.pdf">
							<i class="fa fa-download"></i> English
						</a>
					</li>
				
				
				</ul>

			</div>

			<div class="col-md-4">
				<h2>Grade 1</h2>
				<ul class="admission-links">
					
					
					<li>
						<a class="btn btn-primary" href="https://pisr.org/v2/wp-content/uploads/2021/06/G1-S.Std-Worksheet-1st-semester-2021-2022.pdf">
							<i class="fa fa-download"></i>Social Studies
						</a>
					</li>
				</ul>

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