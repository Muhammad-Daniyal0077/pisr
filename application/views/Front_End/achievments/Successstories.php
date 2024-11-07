<!-- Page Title -->
<div class="pic">
  <div class="page-title dark-background" data-aos="fade"
    style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
    <div class="background-overlay"></div> <!-- Overlay div for dull effect -->
    <div class="container">
      <h1 class="animated-title">SUCCESS STORIES</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="<?php echo base_url(); ?>home">Home</a></li>
          <li class="current">SUCCESS STORIES</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
<style>
  /* Reset */
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  /* Container styling */
  .hover-section {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    padding: 40px;
    background: linear-gradient(135deg, #f8f9fa, #e0e7ff);
  }

  /* Wrapper for the hover box with perspective */
  .vc-hoverbox-wrapper {
    perspective: 1004px;
    width: 260px;
    text-align: center;
    transition: transform 0.3s ease-in-out;
    transform-style: preserve-3d;
    padding: 12px;
    border-radius: 6px;
  }

  /* Hover effect with elevation */
  .vc-hoverbox-wrapper:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
  }

  /* Hover box styling */
  .vc-hoverbox {
    width: 100%;
    height: 250px;
    position: relative;
    transition: transform 0.8s ease;
    transform-style: preserve-3d;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
  }

  /* Front side of the box */
  .vc-hoverbox-front {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    background-size: cover;
    background-position: center;
    border-radius: 10px;
    overflow: hidden;
    transform: rotateY(0deg);
    transition: opacity 0.3s ease;
  }

  /* Back side of the box */
  .vc-hoverbox-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    background-color: #f1f8ff;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 20px;
    transform: rotateY(180deg);
    color: #333;
    border-radius: 10px;
    box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.15);
  }

  /* Flip effect when hovering over the wrapper */
  .vc-hoverbox-wrapper:hover .vc-hoverbox {
    transform: rotateY(180deg);
  }

  /* Name below the box */
  .vc-hoverbox-wrapper h2 {
    font-family: 'Akronim', cursive;
    font-weight: 400;
    font-size: 18px;
    margin-top: 15px;
    color: #003366;
    transition: color 0.3s;
  }

  /* Hover effect for name */
  .vc-hoverbox-wrapper:hover h2 {
    color: #007acc;
  }

  /* Description text styling */
  .para {
    font-family: Arial, sans-serif;
    font-weight: 400;
    margin-top: 5px;
    color: #4a4a4a;
    font-size: 12px;
    line-height: 1.7;
    background-color: #eaf4ff;
    padding: 10px 15px;
    border-radius: 5px;
    border-left: 4px solid #007acc;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .section-heading {
    background-color: #509999;
    /* Light blue background */
    color: #ffffff;
    /* White text */
    padding: 15px 20px;
    /* Padding for spacing */
    text-align: center;
    /* Center align text */
    border-radius: 10px;
    /* Rounded corners */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    /* Subtle shadow for depth */
    font-family: 'Arial', sans-serif;
    /* Clean font */
    font-size: 24px;
    /* Larger font size */
    letter-spacing: 1px;
    /* Slightly spaced letters */
    margin: 20px 176px;
    /* Space below the heading */
  }
</style>
</head>

<body>

  <h2 class="container section-heading col-md-9">Success Storeis of PISR</h2>
  <section class="hover-section">

    <!-- Box 1: Pakistani Cricketer -->
    <div class="vc-hoverbox-wrapper">
      <div class="vc-hoverbox">
        <div class="vc-hoverbox-front" style="background-image: url('https://pisr.org/v2/wp-content/uploads/2021/06/3-1.png');"></div>
        <div class="vc-hoverbox-back">
          <h2>Pakistani Cricketer</h2>
        </div>
      </div>
      <h2>Mr. Saeed Anwar</h2>
    </div>

    <!-- Box 2: Dr. Madiha Virk - Gratitude Message -->
    <div class="vc-hoverbox-wrapper">
      <div class="vc-hoverbox">
        <div class="vc-hoverbox-front" style="background-image: url('https://pisr.org/v2/wp-content/uploads/2021/06/3-1.jpg');"></div>
        <div class="vc-hoverbox-back">
          <span class="para">I did my Alma mater was Pakistan international school… I have no words to express my gratitude towards my mother institution… whatever I am today is because of the efforts put in disciplining me by my teachers and the institution itself.</span>
        </div>
      </div>
      <h2>Dr. Madiha Virk</h2>
    </div>

    <!-- Box 3: Pakistani Journalist -->
    <div class="vc-hoverbox-wrapper">
      <div class="vc-hoverbox">
        <div class="vc-hoverbox-front" style="background-image: url('https://pisr.org/v2/wp-content/uploads/2021/06/Picture1-e1623570334106.png');"></div>
        <div class="vc-hoverbox-back">
          <h2>Pakistani Journalist</h2>
        </div>
      </div>
      <h2>Dr. Shahid Masood</h2>
    </div>

    <!-- Box 4: Dr. Numan Majeed - Gratitude Message -->
    <div class="vc-hoverbox-wrapper">
      <div class="vc-hoverbox">
        <div class="vc-hoverbox-front" style="background-image: url('https://pisr.org/v2/wp-content/uploads/2021/06/85-e1664430481686.jpg');"></div>
        <div class="vc-hoverbox-back">
          <span class="para">Thank you PISR for making our dreams into reality. I miss my school time. Proud to be an alumnus of the best alma mater.<br>"Chemical Pathologist"</span>
        </div>
      </div>
      <h2>Dr. Numan Majeed</h2>
    </div>
  </section>

  <script>
    // JS to support touchstart for mobile flipping
    document.querySelectorAll('.vc-hoverbox-wrapper').forEach(box => {
      box.addEventListener('touchstart', () => {
        box.querySelector('.vc-hoverbox').classList.toggle('flip');
      });
    });
  </script>

</body>

</html>