<!-- Page Title -->
<div class="pic">
	<div class="page-title dark-background" data-aos="fade"
		style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
		<div class="background-overlay"></div> <!-- Overlay div for dull effect -->
		<div class="container">
			<h1 class="animated-title">FBISE</h1>
			<nav class="breadcrumbs">
				<ol>
					<li><a href="<?php echo base_url(); ?>home">Home</a></li>
					<li class="current">FBISE</li>
				</ol>
			</nav>
		</div>
	</div>
</div>


<style>
	.vc_tta-panels {
		margin: 20px 0;
	}

	.vc_tta-panel {
		border-radius: 8px;
		margin-bottom: 20px;
		padding: 15px;
		background-color: #fff;
	}

	.vc_tta-panel-heading {
		padding: 6px 15px;
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

	.vc_tta-panel-body {
		display: none;
		/* Initially hide the content */
	}


	/* Container styling (as in the previous answer) */
	.content-container {
		text-align: center;
		margin: 20px;
		padding: 15px;
		border-radius: 8px;
		box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
		background-color: #e1e8e8;
	}

	.content-container img {
		width: 100%;
		max-width: 500px;
		height: auto;
		border-radius: 8px;
		cursor: pointer;
		transition: transform 0.3s;
	}

	/* Modal styling */
	.modal {
		display: none;
		position: fixed;
		z-index: 1000;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		background-color: rgba(0, 0, 0, 0.8);
	}

	.modal-content {
		margin: auto;
		display: block;
		max-width: 80%;
		max-height: 80%;
	}

	.close {
		position: absolute;
		top: 15px;
		right: 25px;
		color: #fff;
		font-size: 35px;
		font-weight: bold;
		cursor: pointer;
	}

/* Styling for title text and heading when the panel is active */
.active-panel .vc_tta-title-text,
.active-panel .vc_tta-panel-heading {
    color: #e1e8e8; /* Color when active */
	background-color: #68b368;
}
/* Default state: hidden */
.active-text {
    display: none;
    color: #397a39; /* Red color for "Active" text */
    font-weight: bold;
    margin-left: 10px; /* Space between title text and "Active" label */
}

/* Show "Active" text when the panel is active */
.active-panel .active-text {
    display: inline;
    position: sticky;
    top: 0; /* Adjusts the "sticky" position within the viewport */
    background-color: white; /* Background color to ensure readability */
    padding: 2px 5px;
    border-radius: 10px;
    z-index: 10; /* Ensures the active label is visible on top */
}




</style>



<section class="container" style="margin-top: 20px; ">
	<!-- Nursery Section -->
	<div class="col-md-6 vc_tta-panel" id="nursery">
		<div class="vc_tta-panel-heading" onclick="togglePanel('nursery')">
			<h4 class="vc_tta-panel-title">
				<strong class="vc_tta-title-text">HSSC</strong>
				<span class="active-text">Active</span>
			</h4>
		</div>
		<div class=" vc_tta-panel-body">

			<div class="vc_row">
				<div class="vc_column">
					<div style="width: 1120px;">
						<div class="inner-container">
					<div class="row justify-content-center dropdown-content-custom ">
								<?php foreach ($hssc as $row): ?>
    <div class="col-md-4 mb-4">
        <div class="content-container">
            <h4 class="heading"><?php echo $row->head; ?></h4>
            <h5><?php echo $row->title; ?></h5>
            <img src="<?php echo base_url(); ?>uploads/fbise/<?php echo $row->image; ?>" 
                 alt="<?php echo $row->title; ?>" 
                 class="img-fluid image-clickable">
        </div>
    </div>
<?php endforeach; ?>

							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>



	<!-- KG Section -->
	<div class="col-md-6 vc_tta-panel" id="kg">
		<div class="vc_tta-panel-heading" onclick="togglePanel('kg')">
			<h4 class="vc_tta-panel-title">
				<strong class="vc_tta-title-text">SSC</strong>
				<span class="active-text">Active</span>
			</h4>
		</div>
		<div class=" vc_tta-panel-body">
			<div class="vc_row">
				<div class="vc_column">
					<div style="width: 1634px; margin-left: -570px;">
						<div class="inner-container" style="margin-top: 0px;">
							<div class="row justify-content-center dropdown-content-custom ">
								<?php foreach ($ssc as $row): ?>
								<div class="col-md-4 mb-4">
								  <div class="content-container">
								  	<h4 class= "heading"><?php echo $row->head ?></h2>
										<h5><?php echo $row->title; ?></h5>
										<img src="<?php echo base_url();?>uploads/fbise/<?php echo $row->image;?>"
											class="img-fluid image-clickable"
											alt="img">
									</div>
								</div>
								 <?php endforeach; ?>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>


</section>
<!-- Modal Structure -->
<div id="imageModal" class="modal">
	<span class="close">&times;</span>
	<img class="modal-content" id="modalImage">
</div>
<script>
// Get the modal and modal content
const modal = document.getElementById("imageModal");
const modalImg = document.getElementById("modalImage");
const closeModal = document.querySelector(".close");

// Function to open the modal and display the clicked image
function openModal(imageSrc) {
    modal.style.display = "block";
    modalImg.src = imageSrc;
}

// Add click event listener to each image with the class 'cimage clickable'
document.querySelectorAll(".image-clickable").forEach(image => {
    image.onclick = function() {
        openModal(this.src);
    }
});

// Close the modal when clicking the close button
closeModal.onclick = function() {
    modal.style.display = "none";
}

// Close modal when clicking outside the image
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function togglePanel(panelId) {
    // Hide all panels and remove the active class
    document.querySelectorAll('.vc_tta-panel-body').forEach(panel => {
        panel.style.display = 'none';
        panel.parentNode.classList.remove('active-panel'); // Remove active class from all panels
    });

    // Show the selected panel and add the active class
    const panelBody = document.querySelector(`#${panelId} .vc_tta-panel-body`);
    panelBody.style.display = 'block';
    panelBody.parentNode.classList.add('active-panel'); // Add active class to the clicked panel
}


</script>