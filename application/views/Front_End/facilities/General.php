<!-- Page Title -->
<div class="pic">
  <div class="page-title dark-background" data-aos="fade"
    style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
    <div class="background-overlay"></div> <!-- Overlay div for dull effect -->
    <div class="container">
      <h1 class="animated-title">General Information</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="<?php echo base_url(); ?>home">Home</a></li>
          <li class="current">General Information</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<style>
  /* Custom Styles */
  .hover-section {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    padding: 40px;
    /* background: linear-gradient(135deg, #f8f9fa, #e0e7ff); */
  }

  .vc-hoverbox-wrapper {
    perspective: 1000px;
    width: 300px;
    text-align: center;
    transition: transform 0.3s ease-in-out;
    transform-style: preserve-3d;
    padding: 12px;
    border-radius: 12px;
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1);
  }

  .vc-hoverbox-wrapper:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }

  .vc-hoverbox {
    background-size: cover;
    width: 100%;
    height: 300px;
    position: relative;
    transition: transform 0.8s ease;
    transform-style: preserve-3d;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .vc-hoverbox-front,
  .vc-hoverbox-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    border-radius: 12px;
  }

  .vc-hoverbox-front {
    background-size: cover;
    background-position: center;
    transform: rotateY(0deg);
    filter: brightness(70%);
  }

  .vc-hoverbox-back {
    background-color: rgba(241, 248, 255, 0.9);
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 20px;
    transform: rotateY(180deg);
    color: #333;
    box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.1);
  }

  .vc-hoverbox-wrapper:hover .vc-hoverbox {
    transform: rotateY(180deg);
  }

  .vc-hoverbox-wrapper h2 {
    /* font-family: 'Akronim', cursive; */
    font-weight: 400;
    font-size: 20px;
    margin-top: 15px;
    color: #003366;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: color 0.3s;
  }

  .vc-hoverbox-wrapper:hover h2 {
    color: #007acc;
  }

  .para {
    font-family: 'Arial', sans-serif;
    font-size: 14px;
    color: #333;
    line-height: 1.6;
    padding: 10px;
    text-align: justify;
  }

  .section-heading {
    background-color: #509999;
    color: #ffffff;
    padding: 15px 20px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    font-family: 'Arial', sans-serif;
    font-size: 24px;
    letter-spacing: 1px;
    margin: 20px 160px;
  }

  .center-heading {
    font-size: 3rem;
    color: #2c3e50;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: relative;
    display: inline-block;
    transition: all 0.4s ease-in-out;
    margin-bottom: 20px;
  }

  .center-paragraph {
    font-size: 1.8rem;
    color: #34495e;
    line-height: 1.8;
    max-width: 1030px;
    margin: 30px auto;
    transition: all 0.4s ease-in-out;
  }

  .center-heading:hover {
    color: #ff6347;
    text-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transform: scale(1.1);
  }

  .center-paragraph:hover {
    color: #3498db;
    transform: translateY(-5px);
  }

  @keyframes fadeInUp {
    0% {
      opacity: 0;
      transform: translateY(20px);
    }

    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .center-heading {
    animation: fadeInUp 1s ease-out;
  }

  .center-paragraph {
    animation: fadeInUp 1.5s ease-out;
    animation-delay: 0.3s;
  }
</style>
</head>

<body>

  <!-- Header Section -->
  <div class="wpb_wrapper text-center mb-5">
    <h1 class="center-heading">Educational Facilities</h1>
    <p class="center-paragraph">The School caters to boys and girls of the Pakistani community in Riyadh from Play Group
      to Class XII. It maintains a high standard of education and provides a variety of curricular and co-curricular
      activities for the development of a wholesome and balanced personality of the students. The School is producing
      excellent results in School and Board Examinations.</p>
  </div>

  <!-- Section Heading -->
  <h2 class="section-heading text-center ">General</h2>

  <!-- Hover Box Section -->
  <section class="container hover-section">
    <!-- Example Hover Box -->
    <div class="vc-hoverbox-wrapper">
      <div class="vc-hoverbox"
        style="background-image: url('<?php echo base_url(); ?>asset/images/Facilities/01.jpg');">
        <div class="vc-hoverbox-front"></div>
        <div class="vc-hoverbox-back">
          <p class="para">
            Character building and religious
            education is supplemented in the morning assembly. Different
            functions are organized on the occasions of national and religious
            significance. Students are encouraged to prepare nice charts and
            slogans containing moral and Islamic teachings. The recitation of
            the Holy Quran (Tajweed-Nazira) and functional Arabic language are
            taught.
          </p>
        </div>
      </div>
      <h2>RELIGIOUS EDUCATION</h2>
    </div>
    <div class="vc-hoverbox-wrapper">
      <div class="vc-hoverbox"
        style="background-image: url('<?php echo base_url(); ?>asset/images/Facilities/02.jpg');">
        <div class="vc-hoverbox-front"></div>
        <div class="vc-hoverbox-back">
          <p class="para">
            Properly maintained dispensaries / medical aid rooms have been set up under the supervision of experienced
            medical staff. Qualified male and female nurses have been employed on a permanent basis to provide medical
            assistance to students in the school premises during school hours
          </p>
        </div>
      </div>
      <h2>HEALTH SERVICE & FIRST AID</h2>
    </div>
    <div class="vc-hoverbox-wrapper">
      <div class="vc-hoverbox"
        style="background-image: url('<?php echo base_url(); ?>asset/images/Facilities/03.jpg');">
        <div class="vc-hoverbox-front"></div>
        <div class="vc-hoverbox-back">
          <p class="para">
           
            Each wing of the school has a canteen. Students can buy refreshments and other edibles there. Cleanliness, quality of food, and pricing are kept under strict watch by the administration.
          </p>
        </div>
      </div>
      <h2> SCHOOL CANTEEN</h2>
    </div>
    <div class="vc-hoverbox-wrapper">
      <div class="vc-hoverbox"
        style="background-image: url('<?php echo base_url(); ?>asset/images/Facilities/04.jpg');">
        <div class="vc-hoverbox-front"></div>
        <div class="vc-hoverbox-back">
          <p class="para">
            
            This facility has been introduced in the school to help and facilitate easy access to stationery items at reasonable prices.
          </p>
        </div>
      </div>
      <h2>STATIONERY SHOPS</h2>
    </div>
    <div class="vc-hoverbox-wrapper">
      <div class="vc-hoverbox"
        style="background-image: url('<?php echo base_url(); ?>asset/images/Facilities/05.webp');">
        <div class="vc-hoverbox-front"></div>
        <div class="vc-hoverbox-back">
          <p class="para">
            
            The school employs Saudi security guards on a contractual basis to ensure the safety of the students as well as school premises during school and pack-up times.
            
          </p>
        </div>
      </div>
      <h2>SECURITY GUARDS</h2>
    </div>
    <div class="vc-hoverbox-wrapper">
      <div class="vc-hoverbox"
        style="background-image: url('<?php echo base_url(); ?>asset/images/Facilities/06.jpg');">
        <div class="vc-hoverbox-front"></div>
        <div class="vc-hoverbox-back">
          <p class="para">
            
            
A large fleet of air-conditioned buses provides pick and drop services to students from all around Riyadh and Al-Kharj city.
          </p>
        </div>
      </div>
      <h2>SCHOOL TRANSPORT</h2>
    </div>
    <div class="vc-hoverbox-wrapper">
      <div class="vc-hoverbox"
        style="background-image: url('<?php echo base_url(); ?>asset/images/Facilities/07.jpg');">
        <div class="vc-hoverbox-front"></div>
        <div class="vc-hoverbox-back">
          <p class="para">
            
            
            
            The school is affiliated with the Federal Board of Intermediate and Secondary Education, Islamabad at Secondary and Higher Secondary Levels.
          </p>
        </div>
      </div>
      <h2>AFFILIATION</h2>
    </div>
    <div class="vc-hoverbox-wrapper">
      <div class="vc-hoverbox"
        style="background-image: url('<?php echo base_url(); ?>asset/images/Facilities/08.jpg');">
        <div class="vc-hoverbox-front"></div>
        <div class="vc-hoverbox-back">
          <p class="para">
            
            
            Properly qualified staff has been engaged to impart physical training in both boys' and girls' wings. Games and sports are an essential part of the school timetable.
          </p>
        </div>
      </div>
      <h2>PHYSICAL EDUCATION</h2>
    </div>
    <div class="vc-hoverbox-wrapper">
      <div class="vc-hoverbox"
        style="background-image: url('<?php echo base_url(); ?>asset/images/Facilities/09.jpg');">
        <div class="vc-hoverbox-front"></div>
        <div class="vc-hoverbox-back">
          <p class="para">
            
            
            
            The Junior Boys Wing includes students from Nursery, KG, and Classes I to IV.
          </p>
        </div>
      </div>
      <h2>JUNIOR BOYS WING</h2>
    </div>
    <div class="vc-hoverbox-wrapper">
      <div class="vc-hoverbox"
        style="background-image: url('<?php echo base_url(); ?>asset/images/Facilities/10.jpg');">
        <div class="vc-hoverbox-front"></div>
        <div class="vc-hoverbox-back">
          <p class="para">
            
            
            
            
The Activity Room, introduced for classes Play Group to IV, engages students in different learning activities using various gadgets and multimedia systems.
          </p>
        </div>
      </div>
      <h2>ACTIVITY ROOM</h2>
    </div>
    <div class="vc-hoverbox-wrapper">
      <div class="vc-hoverbox"
        style="background-image: url('<?php echo base_url(); ?>asset/images/Facilities/11.jpg');">
        <div class="vc-hoverbox-front"></div>
        <div class="vc-hoverbox-back">
          <p class="para">
            
            
            
            
            Textbooks and practical notebooks are provided on payment to the student
          </p>
        </div>
      </div>
      <h2>TEXT BOOKS</h2>
    </div>


    
  </section>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>