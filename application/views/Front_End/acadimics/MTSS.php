<style>
.modal-backdrop {
    z-index: 10000; /* Keeps backdrop below navbar */
}

/* Customize modal width */
.modal-dialog {
    max-width: 600px; /* Adjust width to your preference */
    margin: 30px auto; /* Center it properly */
}

.modal-content {
    border-radius: 12px; /* Optional for a smoother look */
}
</style>

<!-- Page Title -->
<div class="pic">
	<div class="page-title dark-background" data-aos="fade"
		style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
		<div class="background-overlay"></div> <!-- Overlay div for dull effect -->
		<div class="container">
			<h1 class="animated-title">Academic Support Programs-MTSS</h1>
			<nav class="breadcrumbs">
				<ol>
					<li><a href="<?php echo base_url(); ?>home">Home</a></li>
					<li class="current">MTTS</li>
				</ol>
			</nav>
		</div>
	</div>
</div>


<!-- MTTs Area section -->
<section class="events-list-03">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-6 text-center" style="margin-top: 50px;">
				<!-- Image with click event to show the modal -->
				<img src="<?php echo base_url(); ?>asset/images/downloads/chartmtts.png" alt="PISR History Image" class="img-fluid" style="border-radius: 12px;" height="200" width="300" id="imageModalTrigger" data-toggle="modal" data-target="#imageModal">
			</div>

			<div class="col-md-6">
				<h3 class="text-secondary text-center mb-3">Academic Support Programs-MTSS</h3>
				<div class="card shadow p-4">
					<p>
						Teachers play a crucial role in identifying when students are struggling with core academic skills through the
						<strong>MTSS-Multi Tiered System of Support</strong>. They serve as the first line of defense in recognizing when
						additional support and intervention may be needed. By being keenly observant and attentive to student progress,
						teachers can help guide students towards success in their learning journey through the implementation of
						<strong>Two Academic Support programs</strong>.
					</p>
				</div>
			</div>
		</div>

		<div class="row" style="margin-top: 30px;">
			<!-- Academic Reinforcement Program -->
			<div class="col-md-6">
				<div class="card shadow p-4">
					<h4 class="text-primary text-center mb-3">Academic Reinforcement Program</h4>
					<p>
						Where students are given one-to-one attention and extra reinforcement of concepts and to fill any learning gaps
						in various ways such as zero lessons, home tasks, online quizzes, review sheets, etc.
					</p>
				</div>
			</div>

			<!-- Academic Enrichment Program -->
			<div class="col-md-6">
				<div class="card shadow p-4">
					<h4 class="text-primary text-center mb-3">Academic Enrichment Program</h4>
					<p>
						Where students are given extra tasks to enhance their core concepts, problem-solving skills, and critical thinking
						skills in various ways by solving Higher Order Thinking questions/tasks.
					</p>
				</div>
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-md-12">
				<p>
					It is important for teachers to create a safe and supportive environment where students feel comfortable expressing
					their challenges and seeking help. By fostering open communication and building trusting relationships with their
					students, teachers can better understand their individual needs and provide personalized support to address any
					academic difficulties that may arise.
				</p>
				<p>
					Through collaboration with parents, administrators, and other educational stakeholders, teachers can work together
					to develop effective strategies and interventions to support students in overcoming academic challenges. By working
					as a team and utilizing a variety of resources and tools, educators can empower students to achieve their full potential
					and succeed in their academic pursuits.
				</p>
			</div>
		</div>
	</div>

	<!-- Modal for image and content -->
	<div class="modal" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="imageModalLabel">Academic Support Programs - MTSS</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<img src="<?php echo base_url(); ?>asset/images/downloads/chartmtts.png" alt="PISR History Image" class="img-fluid mb-3" style="border-radius: 12px; max-width: 100%;">
					<p>
						Teachers play a crucial role in identifying when students are struggling with core academic skills through the
						<strong>MTSS-Multi Tiered System of Support</strong>. They serve as the first line of defense in recognizing when
						additional support and intervention may be needed. By being keenly observant and attentive to student progress,
						teachers can help guide students towards success in their learning journey through the implementation of
						<strong>Two Academic Support programs</strong>.
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

</section>

<!-- ./ End Teachers Area section -->

<script>
	AOS.init();
</script>
<!-- Include Bootstrap JS (if not already included in your project) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>