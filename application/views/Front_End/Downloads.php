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
			<div class="col-md-4">
				<h2>Admission Information</h2>
				<ul class="admission-links">
					<li>
						<a class="btn btn-primary" href="https://pisr.org/v2/wp-content/uploads/2024/02/ADMISSION-REQUIRED-DOCUMENT-FINAL.pdf">
							<i class="fa fa-download"></i> Admission-Form
						</a>
					</li>

					<li>
						<a class="btn btn-primary" href="https://pisr.org/v2/wp-content/uploads/2024/01/Age-critera.jpeg">
							<i class="fa fa-download"></i>Age-Critera
						</a>
					</li>

					<li>
						<a class="btn btn-primary" href="https://pisr.org/v2/wp-content/uploads/2024/02/PISR-FEE-RATE-2024-1.pdf">
							<i class="fa fa-download"></i> PISR-Fee-Rate
						                        </a>
					</li>

					<li>
						<a class="btn btn-primary" href="https://pisr.org/v2/wp-content/uploads/2024/03/Qualified-list-ALL-Wing-Test-date-26-03-2024-updated.pdf">
							<i class="fa fa-download"></i>Test 2024-2025
						</a>
					</li>
                    
				</ul>
			</div>
            


			<div class="col-md-4">
				<h2>Forms</h2>
				<ul class="admission-links">
					<li>
						<a class="btn btn-primary" href="https://pisr.org/v2/wp-content/uploads/2021/06/character-certificate.pdf">
							<i class="fa fa-download"></i> Character Certificate
						</a>
					</li>
				
					<li>
						<a class="btn btn-primary" href="https://pisr.org/v2/wp-content/uploads/2021/06/Bonafide-form.pdf">
							<i class="fa fa-download"></i>Bonified Certificate
						</a>
					</li>
				
					<li>
						<a class="btn btn-primary" href="https://pisr.org/v2/wp-content/uploads/2021/07/withdrawal-form.pdf">
							<i class="fa fa-download"></i> School Leaving Certificate
						</a>
					</li>
				
					<li>
						<a class="btn btn-primary" href="https://pisr.org/v2/wp-content/uploads/2021/06/SECURITY-REFUND-FORM-I.T-05-12-2016.pdf">
							<i class="fa fa-download"></i> Security Refund
						</a>
					</li>
				
					<li>
						<a class="btn btn-primary" href="">
							<i class="fa fa-download"></i> Provisional Certificate
						</a>
					</li>
				
				
				</ul>

			</div>

			<div class="col-md-4">
				<h2>Acadimics</h2>
				<ul class="admission-links">
					<li>
						<a class="btn btn-secondary" href="https://drive.google.com/drive/folders/1QtTqrWs17c0YikNcs5N5YAkWu0RnGQ0W">
							<i class="fa fa-link"></i> Sallybus
						</a>
					</li>
					
					<li>
						<a class="btn btn-secondary" href="https://drive.google.com/drive/folders/1wMhqyVnkJ3Z-C-5L14eLc3EwxGl4a_wr">
							<i class="fa fa-link"></i> Summer Task
						</a>
					</li>
					<li>
						<a class="btn btn-secondary" href="https://drive.google.com/drive/folders/1P7B6zSNybgP9Bd8eygAc7bk98K1fmzJ6">
							<i class="fa fa-link"></i> Date Sheet
						</a>
					</li>
					<li>
						<a class="btn btn-secondary" href="https://drive.google.com/drive/folders/1BEYP8oWSd6U1YMKqnyMmSEt9TiNiFTGf">
							<i class="fa fa-link"></i> School Uniform
						</a>
					</li>
					<li>
						<a class="btn btn-primary" href="https://pisr.org/v2/wp-content/uploads/2024/03/Academic-Calendar-2024-25-scaled.jpg">
							<i class="fa fa-download"></i> Academic-Calendar-2024-25
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