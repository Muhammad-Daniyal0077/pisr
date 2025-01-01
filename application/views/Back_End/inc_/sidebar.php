  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?php echo base_url(); ?>admin/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
		<i class="bi bi-book" style="color: #007bff;"></i><span>Academics</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">

		  <li>
			  <a href="<?php echo base_url(); ?>academics/faculty-designation">
				  <i class="bi bi-circle"></i><span>Faculty Designation</span>
			  </a>
		  </li>
          <li>
            <a href="<?php echo base_url(); ?>academics/faculty">
              <i class="bi bi-circle"></i><span>Faculty</span>
            </a>
          </li>
        
        </ul>
      </li>
		<!-- End Components Nav -->
		<li class="nav-item">
			<a class="nav-link collapsed" data-bs-target="#components-nave" data-bs-toggle="collapse" href="#">
			<i class="bi bi-person-circle" style="color: #007bff;"></i><span>About Us</span><i class="bi bi-chevron-down ms-auto"></i>
			</a>
			<ul id="components-nave" class="nav-content collapse " data-bs-parent="#sidebar-nav">

				<li>
					<a href="<?php echo base_url(); ?>admin/gallery">
						<i class="bi bi-circle"></i><span>Gallery</span>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>admin/our-team">
						<i class="bi bi-circle"></i><span>Our Team</span>
					</a>
				</li>

			</ul>
		</li>

		<li class="nav-item">
			<a class="nav-link collapsed" data-bs-target="#components-navse" data-bs-toggle="collapse" href="#">
				<i class="bi bi-card-list" style=" color: #28a745;"></i><span>Admission</span><i class="bi bi-chevron-down ms-auto"></i>
			</a>
			<ul id="components-navse" class="nav-content collapse " data-bs-parent="#sidebar-nav">

				<li>
					<a href="<?php echo base_url(); ?>admin/faqs">
						<i class="bi bi-circle"></i><span>FAQ'S</span>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>admin/admission/school-admission-policy">
						<i class="bi bi-circle"></i><span>School Admission Policy</span>
					</a>
				</li>

				<li>
					<a href="<?php echo base_url(); ?>admin/admission/admission-test-syllabus">
						<i class="bi bi-circle"></i><span>Admission Test Syllabus</span>
					</a>
				</li>

			</ul>
		</li>
		<li class="nav-item">
			<a class="nav-link collapsed" data-bs-target="#components-navsse" data-bs-toggle="collapse" href="#">
				<i class="bi bi-card-list" style=" color: #28a745;"></i><span>Wall of Fame</span><i class="bi bi-chevron-down ms-auto"></i>
			</a>
			<ul id="components-navsse" class="nav-content collapse " data-bs-parent="#sidebar-nav">

				<li>
					<a href="<?php echo base_url(); ?>admin/wall-of-fame/fbise">
						<i class="bi bi-circle"></i><span>FBISE</span>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>admin/admission/school-admission-policy">
						<i class="bi bi-circle"></i><span>Success Stories</span>
					</a>
				</li>


			</ul>
		</li>


		<li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
		<i class="bi bi-envelope text-primary"></i>
          <span>Contact Us</span>
        </a>
      </li><!-- End Contact Page Nav -->




    </ul>

  </aside><!-- End Sidebar-->
