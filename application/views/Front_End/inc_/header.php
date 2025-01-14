<style>

</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

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
                        <li><a href="<?php echo base_url(); ?>careers/home"><i class="fa fa-building top-icon"></i>Careers</a>
                        <li>
                            <a data-scroll href="<?php echo base_url(); ?>downloads">Downloads
                                <i class="fa fa-download"></i>
                            </a>
                        </li>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div><!-- Ends: .header-top -->

    <div class="header-body">
        <nav class="navbar edu-navbar">
            <div class="container">
                <div class="navbar-header">

                    <img src="<?php echo base_url(); ?>asset/images/logoheader.png" alt="">
                </div>

                <div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1" style="width: 1200px">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a data-scroll="" href="<?php echo base_url(); ?>home">Home</a>
                        </li>
                        <li><a data-scroll="" href="#">ABOUT US <i class="bi bi-caret-down-fill" style="font-size: 16px;"></i></a>
                            <!-- dropdwon start -->
                            <ul class="dropdown list-unstyled">
                                <li><a href="<?php echo base_url(); ?>about/principlemessage">Principle Message</a></li>
                                <li><a href="<?php echo base_url(); ?>about/schoolvision">School Vision & Mission</a></li>
                                <li><a href="<?php echo base_url(); ?>about/schoolhistory">School History</a></li>
                                <li><a href="<?php echo base_url(); ?>gallery">Gallery</a></li>
                                <li><a href="<?php echo base_url(); ?>about/adminstaff">Our Team</a></li>
                            </ul>
                            <!-- dropdown end -->
                        </li>
                        <li><a data-scroll="" href="#">ACADEMICS <i class="bi bi-caret-down-fill" style="font-size: 16px;"></i></a>
                            <!-- dropdwon start -->
                            <ul class="dropdown list-unstyled">
                                <li><a href="<?php echo base_url(); ?>acadimics/curriculum">Curriculum Overview</a></li>
                                <li><a href="<?php echo base_url(); ?>acadimics/Academic-sport-program">Academic Support Programs-MTSS</a></li>
                                <li><a href="<?php echo base_url(); ?>acadimics/assesmentprogram">Assessment Policy</a></li>
                                <!-- <li><a href="<?php echo base_url(); ?>acadimics/facaulty">Faculty</a></li> -->
                                <li><a href="<?php echo base_url(); ?>acadimics/specialprograms">Review worksheets </a></li>
                            </ul>
                            <!-- dropdown end -->
                        </li>
                        <li><a data-scroll href="#">ADMISSION <i class="bi bi-caret-down-fill" style="font-size: 16px;"></i></a>
                            <!-- dropdwon start -->
                            <ul class="dropdown list-unstyled">

                                <li><a href="<?php echo base_url(); ?>admission/admissionreg">Admission Registeration Forms</a></li>

                                <li class="admission-dropdown">
                                    <a href="#" style="display: inline-flex; align-items: center; white-space: nowrap;">
                                        School Admission Policy
                                        <i class="bi bi-caret-right-fill" style="font-size: 16px;"></i></i>
                                    </a>
                                        <?php
                                        $query = $this->db->get('school_admission_policy'); // Replace 'faculty' with your actual table name
                                        $school_admission_policy = $query->result();

                                        foreach ($school_admission_policy as $rows) { // Loop through the result set
                                            ?>
                                        <ul class="admission-dropdown-menu">
                                <li><a href="<?php echo $rows->fee_policy;?>">Fee Policy</a></li>
                                <li><a href="<?php echo $rows->admission_policy;?>">Admission Policy</a></li>
                                <?php
}
?>
                            </ul>
                   
                        </li>

                        <li><a href="<?php echo base_url(); ?>admission/admissiontests">Admission Test Syllabus</a></li>
                        <li><a href="<?php echo base_url(); ?>admission/faqs">FAQS</a></li>
                    </ul>
                    <!-- dropdown end -->
                    </li>
                    <li><a data-scroll href="#">FACILITIES <i class="bi bi-caret-down-fill" style="font-size: 16px;"></i></a>
                        <ul class="list-unstyled dropdown">
                            <li><a href="<?php echo base_url(); ?>facilities/general">General</a></li>
                            <li><a href="<?php echo base_url(); ?>facilities/libraries">Libraries </a></li>
                            <li><a href="<?php echo base_url(); ?>facilities/laboratories">Laboratories</a></li>
                            <!-- <li><a href="<?php echo base_url(); ?>facilities/extracurricular">Extra Curricular Activities</a></li> -->
                        </ul>
                    </li>
                    <li><a data-scroll href="#">Wall of Fame <i class="bi bi-caret-down-fill" style="font-size: 16px;"></i></a>
                        <ul class="list-unstyled dropdown">
                            <!-- <li><a href="<?php echo base_url(); ?>achievments/fbise">FBISE</a></li> -->
                            <li><a href="<?php echo base_url(); ?>achievments/successstories">Success Stories</a></li>
                        </ul>
                    </li>

                    <li><a data-scroll href="<?php echo base_url(); ?>pdzone">PD Zone</a></li>
                    <li><a data-scroll href="<?php echo base_url(); ?>contact">Contact Us</a></li>

                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
    </div>


</header>
<!--  End header section-->