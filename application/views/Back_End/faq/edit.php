<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<div class="pagetitle">
	<h1>Edit FAQ</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/faqs">Home</a></li>
			<li class="breadcrumb-item active">FAQ</li>
		</ol>
	</nav>
</div><!-- End Page Title -->

<section class="section">
	<div class="row">
		<div class="col-lg-10">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Edit FAQ Details</h5>
					<?php
					foreach ($faqs_edit->result() as $rows) {
						?>
						<form class="row g-3" enctype="multipart/form-data" method="post"
							  accept-charset="utf-8">
							<input type="hidden" name="edit_id" value="<?php echo $rows->id; ?>" />

							<div class="col-md-12">
								<label for="question" class="form-label">Question</label>
								<input type="text" class="form-control" id="question" name="question" value="<?php echo $rows->question;?>" required>
							</div>
							<div class="col-md-12">
								<label for="answer" class="form-label">Answer</label>
								<input type="text" class="form-control" id="answer" name="answer" value="<?php echo $rows->answer;?>" required>
							</div>

							<div class="col-sm-12 col-md-12">
								<label for="gender" class="form-label">Status</label>
								<div class="form-floating"><select class="form-select" id="Status"  name="status" required>
										<option selected="selected">Select Status</option>
										<option value="1" <?php echo ($rows->status == '1') ? 'selected' : ''; ?>>Published</option>
										<option value="0" <?php echo ($rows->status == '0') ? 'selected' : ''; ?>>Unpublished</option>
									</select>
									<label for="Status">Status</label>
								</div>
							</div>
							<div class="text-center mt-4">
								<button type="submit" class="btn btn-success">
									<i class="fas fa-save"></i> Update Now
								</button>
								<a href="<?php echo base_url();?>admin/faqs" class="btn btn-secondary">Back</a>
							</div>
						</form>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>
