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
    padding: 12px;
    border-radius: 6px;
    transition: transform 0.3s ease-in-out;
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
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    transform-style: preserve-3d;
    transition: transform 0.8s ease;
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
    transform: rotateY(0deg);
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
    padding: 20px;
    text-align: center;
    transform: rotateY(180deg);
    color: #333;
    border-radius: 10px;
    box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.15);
  }

  /* Flip effect on hover */
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
    font-size: 12px;
    line-height: 1.7;
    background-color: #eaf4ff;
    padding: 10px 15px;
    border-radius: 5px;
    border-left: 4px solid #007acc;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  /* Section heading styling */
  .section-heading {
    background-color: #509999;
    color: #ffffff;
    padding: 15px 20px;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    font-size: 24px;
    letter-spacing: 1px;
    margin: 20px 176px;
  }
</style>
</head>

<body>


  <section class="hover-section">
  <h2 class="container section-heading col-md-9"> Wall of fame:</h2>


    <p>
      At our annual Wall of fame, we are thrilled to showcase and celebrate our outstanding achievers who shine brightly and make us proud. Each of these individuals has displayed exceptional talent, determination, and hard work in their respective fields, setting a shining example for their peers and inspiring others to reach for their own greatness. From academics to athletics, from the arts to community service, these individuals have excelled and proven that dedication and passion can lead to incredible success. We are honored to have such remarkable individuals in our community, and we congratulate them on their well-deserved recognition.
</p>


    <!-- Box 1: Pakistani Cricketer -->
    <?php foreach ($success_stories as $row): ?>
      <div class="vc-hoverbox-wrapper">
        <div class="vc-hoverbox">
          <div class="vc-hoverbox-front" style="background-image: url('<?php echo base_url(); ?>uploads/success_stories/<?php echo $row->image; ?>"></div>
          <div class="vc-hoverbox-back">

            <span><?php echo $row->about; ?> </h2>
          </div>
        </div>
        <h2><?php echo $row->name; ?></h2>
      </div>
    <?php endforeach; ?>
   
  </section>

  <script>
    // JS to support touchstart for mobile flipping
    document.querySelectorAll('.vc-hoverbox-wrapper').forEach(box => {
      box.addEventListener('touchstart', () => {
        box.querySelector('.vc-hoverbox').classList.toggle('flip');
      });
    });
  </script>