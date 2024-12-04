<style>
/* Admission Drop down css */
 /* Container for the admission dropdown */
 .admission-dropdown {
    position: relative;
  }
  
  /* Dropdown menu styling specific to admission */
  .admission-dropdown-menu {
    display: none;
    position: absolute;
    top: 0;
    left: 100%; /* Position to the right of the parent */
    background-color: #fff;
    padding: 10px;
    list-style: none;
    border: 1px solid #ccc;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    z-index: 1000; /* To ensure it appears above other elements */
    width: 182px;
      border-radius: 4px;
      border-top-color: yellow;
  }
  
  /* Show the dropdown on hover */
  .admission-dropdown:hover .admission-dropdown-menu {
    display: block;
  }
  
  /* Styling for dropdown menu items */
  .admission-dropdown-menu li {
    padding: 5px 10px;
    cursor: pointer;
  }
  
  .admission-dropdown-menu li:hover {
    background-color: yellow;
  }
  
</style>

<header id="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12 header-top-left">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone top-icon"></i> +966-11-4414428 </li>
                        <li><i class="fa fa-envelope top-icon"></i>admission@lms.pisr.org</li>
                    </ul>
                </div>
                <div class="col-sm-6 col-xs-12 header-top-right">
                    <ul class="list-unstyled">
                        <li><a href="http://parent.pisr.org/"><i class="fa fa-user-plus top-icon"></i>PARENT PORTAL</a></li>
                        <li><a href="https://alumni.pisr.org/"><i class="fa fa-lock top-icon"></i>ALUMNI RELATIONS</a></li>
                        <li><a href="<?php echo base_url(); ?>carrers/carrers"><i class="fa fa-building top-icon"></i>Apply Now</a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div><!-- Ends: .header-top -->

    <div class="header-body">
        <nav class="navbar edu-navbar">
            <div class="container">
                <div style="width: 22px;" class="navbar-header">

                    <a href="index.html" class="navbar-brand  data-scroll"><img src="images/logo.png" alt=""></a>
                </div>

                <div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a data-scroll="" href="<?php echo base_url(); ?>home">Home</a>
                        </li>
                        <li><a data-scroll="" href="#">ABOUT US</a>
                            <!-- dropdwon start -->
                            <ul class="dropdown list-unstyled">
                                <li><a href="<?php echo base_url(); ?>about/principlemessage">Principle Message</a></li>
                                <li><a href="<?php echo base_url(); ?>about/schoolvision">School Vision</a></li>
                                <li><a href="<?php echo base_url(); ?>about/schoolmission">School Mission</a></li>
                                <li><a href="<?php echo base_url(); ?>about/schoolmanagment">School Management Concil</a></li>
                                <li><a href="<?php echo base_url(); ?>about/adminstaff">Administration</a></li>
                                <li><a href="<?php echo base_url(); ?>about/rulesregulations">Rules Regulation</a></li>

                                <li><a href="<?php echo base_url(); ?>about/schoolhistory" style="color:red;">School History</a></li>
                                <li><a href="<?php echo base_url(); ?>about/accreditation" style="color:red;">Accreditation</a></li>
                            </ul>
                            <!-- dropdown end -->
                        </li>
                        <li><a data-scroll="" href="#">ACADEMICS</a>
                            <!-- dropdwon start -->
                            <ul class="dropdown list-unstyled">
                                <li><a href="<?php echo base_url(); ?>acadimics/schooltime">School Timing</a></li>





                                <li><a href="<?php echo base_url(); ?>acadimics/worksheet">Worksheet</a></li>
                                <li><a href="<?php echo base_url(); ?>acadimics/curriculum" style="color:red;">Curriculum Overview</a></li>
                                <li><a href="<?php echo base_url(); ?>acadimics/gradeslevel" style="color:red;">Grade Levels</a></li>
                                <li><a href="<?php echo base_url(); ?>acadimics/specialprograms" style="color:red;">Special Programs</a></li>
                                <li><a href="<?php echo base_url(); ?>acadimics/assesmentprogram" style="color:red;">Assessment Policy</a></li>
                                <li><a href="<?php echo base_url(); ?>acadimics/facaulty">Faculty</a></li>
                            </ul>
                            <!-- dropdown end -->
                        </li>
                        <li><a data-scroll href="#">ADMISSION</a>
                            <!-- dropdwon start -->
                            <ul class="dropdown list-unstyled">

                                <li><a href="<?php echo base_url(); ?>admission/admissionreg">Admission Registeration Forms</a></li>

                                <li class="admission-dropdown">
                                    <a href="#">School Admission Policy</a>
                                    <ul class="admission-dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>policies/feepolicy">Fee Policy</a></li>
                                        <li><a href="<?php echo base_url(); ?>policies/adpolicy">Admission Policy</a></li>
                                    </ul>
                                </li>



                                <li><a href="<?php echo base_url(); ?>admission/admissiontests">Admission Test Sallybus</a></li>
                                <li><a href="<?php echo base_url(); ?>admission/enrollementdates" style="color:red;">Enrollement Dates</a></li>
                                <li><a href="<?php echo base_url(); ?>admission/faqs">FAQS</a></li>
                            </ul>
                            <!-- dropdown end -->
                        </li>
                        <li><a data-scroll href="#">ACHIEVEMENT</a>
                            <ul class="list-unstyled dropdown">
                                <li><a href="<?php echo base_url(); ?>achievments/fbise">FBISE</a></li>
                                <li><a href="<?php echo base_url(); ?>achievments/successstories">Success Stories</a></li>
                            </ul>
                        </li>
                        <li><a data-scroll href="#">FACILITIES</a>
                            <ul class="list-unstyled dropdown">
                                <li><a href="<?php echo base_url(); ?>facilities/general">General</a></li>
                                <li><a href="<?php echo base_url(); ?>facilities/libraries">Libraries </a></li>
                                <li><a href="<?php echo base_url(); ?>facilities/laboratories">Laboratories</a></li>
                                <li><a href="<?php echo base_url(); ?>facilities/extracurricular">Extra Curricular Activities</a></li>
                            </ul>
                        </li>


                        <li><a data-scroll href="<?php echo base_url(); ?>gallery">Gallery</a></li>
                        <li><a data-scroll href="<?php echo base_url(); ?>contact">Contact</a></li>
                        <li>
                            <a data-scroll href="<?php echo base_url(); ?>downloads">Downloads
                                <i class="fa fa-download"></i>
                            </a>
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
    </div>


</header>
<!--  End header section-->