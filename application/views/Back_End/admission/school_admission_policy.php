<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<div class="pagetitle">
	<h1>Edit School Admission Policy</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="">Home</a></li>
			<li class="breadcrumb-item active">School Admission Policy</li>
		</ol>
	</nav>
</div><!-- End Page Title -->

<section class="section">
	<div class="row">
		<div class="col-lg-10">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">School Admission Policy Details</h5>
					<?php
					foreach ($school_admission_policy->result() as $rows) {
						?>
						<form class="row g-3" enctype="multipart/form-data" method="post"
							  accept-charset="utf-8">
							<div class="col-md-12">
								<label for="question" class="form-label">Fee Policy URL</label>
								<input type="text" class="form-control" id="fee_policy" name="fee_policy" value="<?php echo $rows->fee_policy;?>" required>
							</div>
							<div class="col-md-12">
								<label for="answer" class="form-label">Admission Policy</label>
								<input type="text" class="form-control" id="admission_policy" name="admission_policy" value="<?php echo $rows->admission_policy;?>" required>
							</div>

							<div class="text-center mt-4">
								<button type="submit" class="btn btn-success">
									<i class="fas fa-save"></i> Update Now
								</button>
							</div>
						</form>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
