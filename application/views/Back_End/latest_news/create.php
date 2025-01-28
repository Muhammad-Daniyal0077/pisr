<div class="pagetitle">
	<h1>Add Latest News</h1>
	<nav>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active">Latest News</li>
		</ol>
	</nav>
</div><!-- End Page Title -->

<section class="section">
	<div class="row">
		<div class="col-lg-10">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">Latest News</h5>

					<form class="row g-3" action="<?php echo base_url('admin/latest-news-create'); ?>" method="post" enctype="multipart/form-data">
						<div class="col-md-12">
							<label for="title" class="form-label">Title</label>
							<input type="text" class="form-control" id="title" name="title" required>
						</div>
						<div class="col-md-12">
							<label for="details" class="form-label">Details</label>
							<input type="text" class="form-control" id="details" name="details" required>
						</div>
						<div class="col-sm-12 col-md-12">
							<label for="Status">Status</label>

							<select class="form-select" id="Status"  name="status" required>
								<option value="1">Published</option>
								<option value="0">Unpublished</option>
							</select>

						</div>
						<div class="text-center mt-4">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="<?php echo base_url();?>/admin/latest-news" class="btn btn-secondary">Back</a>
						</div>
					</form>

				</div>
			</div>

		</div>
	</div>
</section>
