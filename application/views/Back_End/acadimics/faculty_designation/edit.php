<div class="content">
	<h4 class="mb-4">Edit Designation Type</h4>
	<div class="row">
		<div class="col-xl-9">
			<?php
			$sr=1;
			foreach ($designation_type_edit->result() as $row) {
				?>


				<form action="" enctype="multipart/form-data" method="post"
					  accept-charset="utf-8" class="row g-3 mb-6">
					<div class="col-sm-12 col-md-12">
						<div class="form-floating">
							<input type="hidden" name="designation_type_id" value="<?php echo $row->id ?>">
							<input class="form-control" value="<?php echo $row->staff_type ?>" id="designation" name="designation" type="text"
								   placeholder="Designation Type" required>
							<label for="Staff">Designation Type</label>
						</div>
					</div>


					<div class="col-sm-12 col-md-12">
						<div class="row g-3 justify-content-end">
							<div class="col-auto"><a href="<?php echo base_url();?>academics/faculty-designation"
													 class="btn btn-phoenix-primary px-5">Back</a></div>
							<div class="col-auto"><button class="btn btn-success px-5 px-sm-3">Update Designation Type</button>
							</div>
						</div>
					</div>
				</form>

				<?php
			}
			?>
		</div>

	</div>
