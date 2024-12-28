<!-- Page Title -->
<div class="pic">
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
        <div class="background-overlay"></div> <!-- Overlay div for dull effect -->
        <div class="container">
            <h1 class="animated-title">Faculty</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                    <li class="current">Faculty</li>
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
        }

        .vc_separator h4 {
            margin: 0;
            text-align: center;
        }

        .inner-container {
            margin-top: 50px;
        }

        .text-center {
            text-align: center;
        }

        .text-primary {
            color: #007bff;
        }

        .mb-5 {
            margin-bottom: 3rem;
        }

        .mb-4 {
            margin-bottom: 1.5rem;
        }

        .card {
            padding: 12px 0px;
            background-color: #cde8ff;
            height: 226px;
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-img-top {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 5px solid #fff;
            border-radius: 50%; 
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-text {
            font-size: 1rem;
            margin-top: 10px;
            color: #6c757d;
        }

        .shadow-lg {
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.15);
        }

        .rounded {
            border-radius: 0.5rem;
        }

        .rounded-circle {
            border-radius: 50%;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        span {
            display: block;
            margin-top: 10px;
            color: #333;
            font-weight: 500;
        }

        @media (min-width: 992px) {
            .col-md-4 {
                width: 21.333333%;
            }
        }

        .mb-4 {
            margin-bottom: 3.5rem;
        }

        span {
            color: #ffffff;
        }

        /* Styling for title text and heading when the panel is active */
        .active-panel .vc_tta-title-text,
        .active-panel .vc_tta-panel-heading {
            color: #e1e8e8; 
            background-color: #68b368; 
        }

        /* Responsive CSS */
        @media (max-width: 768px) {
            .inner-container {
                margin-top: 20px; 
            }

            .col-md-4 {
                width: 28%;            }
        }
</style>



<section class="container" style="margin-top: 20px;">
    <!-- Male Section -->
    <div class="col-md-6 vc_tta-panel" id="male">
        <div class="vc_tta-panel-heading" onclick="togglePanel('male')">
            <h4 class="vc_tta-panel-title">
                <strong class="vc_tta-title-text">Male</strong>
            </h4>
        </div>
        <div class="vc_tta-panel-body">
            <div class="vc_row">
                <div class="vc_column">
                    <div style="width: 1210px;">
                        <div class="inner-container">
                            <div class="row justify-content-center dropdown-content-custom ">

                                <div class="col-md-4 mb-4">
                                    <div class="card text-center shadow-lg rounded border-0">
                                        <img src="<?php echo base_url(); ?>asset/images/teachars/01.jpeg" class="card-img-top rounded-circle img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title text-info">Mr. Waqas Muqbool
                                            </h5>
                                            <p class="card-text text-muted">M.Sc. (Chemistry)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card text-center shadow-lg rounded border-0">
                                        <img src="<?php echo base_url(); ?>asset/images/teachars/02.jpeg" class="card-img-top rounded-circle img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title text-info">Mr. Muhammad Shahzad Ahmad
                                            </h5>
                                            <p class="card-text text-muted">M.Sc. (Physics)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card text-center shadow-lg rounded border-0">
                                        <img src="<?php echo base_url(); ?>asset/images/teachars/03.jpeg" class="card-img-top rounded-circle img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title text-info">Mr. Muhammad Nazir Ali Bahader
                                            </h5>
                                            <p class="card-text text-muted">M.Sc. (Chemistry)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card text-center shadow-lg rounded border-0">
                                        <img src="<?php echo base_url(); ?>asset/images/teachars/04.jpeg" class="card-img-top rounded-circle img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title text-info">Mr. Muhammad Khurram Shahzad Qureshi
                                           </h5>
                                            <p class="card-text text-muted"> M.Phil (Chemistry), M.Ed. (Sc.)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card text-center shadow-lg rounded border-0">
                                        <img src="<?php echo base_url(); ?>asset/images/teachars/05.jpeg" class="card-img-top rounded-circle img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title text-info">Mr. Muhammad Nasim
                                            </h5>
                                            <p class="card-text text-muted">B.S. Hons. (Computer Science)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card text-center shadow-lg rounded border-0">
                                        <img src="<?php echo base_url(); ?>asset/images/teachars/06.jpeg" class="card-img-top rounded-circle img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title text-info">Mr. Javaid Mirza
                                            </h5>
                                            <p class="card-text text-muted">M.A. (English)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card text-center shadow-lg rounded border-0">
                                        <img src="<?php echo base_url(); ?>asset/images/teachars/07.jpeg" class="card-img-top rounded-circle img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title text-info">Mr. Hafiz Rizwan Ahmad
                                            </h5>
                                            <p class="card-text text-muted">M.A. (History)</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="card text-center shadow-lg rounded border-0">
                                        <img src="<?php echo base_url(); ?>asset/images/teachars/08.jpeg" class="card-img-top rounded-circle img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title text-info">Mr. Hayat Ullah
                                            </h5>
                                            <p class="card-text text-muted">M.A. (Political Science)</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Female Section -->
    <div class="col-md-6 vc_tta-panel" id="female">
        <div class="vc_tta-panel-heading" onclick="togglePanel('female')">
            <h4 class="vc_tta-panel-title">
                <strong class="vc_tta-title-text">Female</strong>
            </h4>
        </div>
        <div class="vc_tta-panel-body">
            <div class="vc_row">
                <div class="vc_column">
                    <div style="width: 1210px; margin-left:-550px">
                        <div class="inner-container">
                            <div class="row justify-content-center dropdown-content-custom ">

                            <div class="col-md-4 mb-4">
                                    <div class="card text-center shadow-lg rounded border-0">
                                        <img src="<?php echo base_url(); ?>asset/images/teachars/001.png" class="card-img-top rounded-circle img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title text-info">	Mrs Shaista Jamil</h5>
                                            <p class="card-text text-muted">MA Political(Science)</p>
                                        </div>
                                    </div>
                                </div>

                            <div class="col-md-4 mb-4">
                                    <div class="card text-center shadow-lg rounded border-0">
                                        <img src="<?php echo base_url(); ?>asset/images/teachars/001.png" class="card-img-top rounded-circle img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title text-info">Mrs. Saeeda Bano	</h5>
                                            <p class="card-text text-muted">MA (Islamic Studies)</p>
                                        </div>
                                    </div>
                                </div>

                            <div class="col-md-4 mb-4">
                                    <div class="card text-center shadow-lg rounded border-0">
                                        <img src="<?php echo base_url(); ?>asset/images/teachars/001.png" class="card-img-top rounded-circle img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title text-info">Mrs.Sadaf Abdul Aziz</h5>
                                            <p class="card-text text-muted">M.B.A</p>
                                        </div>
                                    </div>
                                </div>

                            <div class="col-md-4 mb-4">
                                    <div class="card text-center shadow-lg rounded border-0">
                                        <img src="<?php echo base_url(); ?>asset/images/teachars/001.png" class="card-img-top rounded-circle img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title text-info">	Mrs. Saadia Sayed	</h5>
                                            <p class="card-text text-muted">B.Sc-B.Ed</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-4 mb-4">
                                    <div class="card text-center shadow-lg rounded border-0">
                                        <img src="<?php echo base_url(); ?>asset/images/teachars/001.png" class="card-img-top rounded-circle img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title text-info">	Mrs. Rubina Ashraf	</h5>
                                            <p class="card-text text-muted">Islamic History</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-md-4 mb-4">
                                    <div class="card text-center shadow-lg rounded border-0">
                                        <img src="<?php echo base_url(); ?>asset/images/teachars/001.png" class="card-img-top rounded-circle img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title text-info">Mrs.Romana Qadeer	</h5>
                                            <p class="card-text text-muted">B.A</p>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-md-4 mb-4">
                                    <div class="card text-center shadow-lg rounded border-0">
                                        <img src="<?php echo base_url(); ?>asset/images/teachars/001.png" class="card-img-top rounded-circle img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title text-info">Mr. Riffat Bibi	</h5>
                                            <p class="card-text text-muted">B.A</p>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-md-4 mb-4">
                                    <div class="card text-center shadow-lg rounded border-0">
                                        <img src="<?php echo base_url(); ?>asset/images/teachars/001.png" class="card-img-top rounded-circle img-fluid" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title text-info">Mr.Rahat Hafeez		</h5>
                                            <p class="card-text text-muted">M.A(English)</p>
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
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

    function setDefaultPanel() {
        const defaultPanelId = 'male'; // Change this to the ID of the panel you want open by default
        togglePanel(defaultPanelId);
    }

    // Set default panel on page load
    window.onload = setDefaultPanel;
</script>
