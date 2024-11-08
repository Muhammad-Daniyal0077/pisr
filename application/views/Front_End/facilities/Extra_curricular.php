div class="pic">
    <div class="page-title dark-background" data-aos="fade"
        style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
        <div class="background-overlay"></div> <!-- Overlay div for dull effect -->
        <div class="container">
            <h1 class="animated-title">Extra_Curricular Activities</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                    <li class="current">Extra_Curricular Activities</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<style>
    /* General Styling for the Content */
    .vc_tta-panel-body {
      margin: 20px;
      font-family: 'Arial', sans-serif;
    }

    /* Centering the content */
    .inner-container {
      /* text-align:; */
      padding: 30px;
      max-width: 1200px;
      margin: 0 auto;
      /* background-color: #f4f4f9; */
      border-radius: 8px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }

    /* Heading Styling */
    h3 {
      font-size: 2.9rem;
      color: #2c3e50;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-bottom: 20px;
      text-align: center;
      transition: all 0.3s ease;
    }

    h3:hover {
      color: #007acc;
      text-shadow: 0 0 10px rgba(0, 122, 204, 0.7);
      transform: scale(1.05);
    }

    /* Paragraph Styling */
    p {
      font-size: 1.6rem;
      line-height: 2.6;
      color: #555;
      max-width: 900px;
      margin: 0 auto 30px;
      text-align: justify;
      transition: all 0.3s ease;
    }

    p:hover {
      color: #007acc;
      text-shadow: 0 0 8px rgba(0, 122, 204, 0.6);
    }

    /* Ordered List Styling */
    ol {
      list-style: decimal;
      padding-left: 20px;
      text-align: left;
      display: inline-block;
      margin: 15px 120px;
      font-size: 1.7rem;
      color: #333;
      transition: all 0.3s ease;
    }

    ol li {
      margin-bottom: 15px;
      position: relative;
      padding-left: 25px;
      transition: all 0.3s ease;
    }

    ol li::before {
      /* content: '\2022'; Unicode for bullet */
      font-size: 1.9rem;
      color: #007acc;
      position: absolute;
      left: 0.1;
      top: 0.1;
    }

    ol li:hover {
      color: #007acc;
      transform: translateX(10px);
      text-shadow: 0 0 12px rgba(0, 122, 204, 0.7);
    }

    /* Add animation for the list items */
    .animate__fadeInUp {
      animation: fadeInUp 1s ease-out;
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

    /* Smooth hover glow effect for list */
    ol li:hover {
      transform: translateX(10px);
      color: #fff;
      background: #007acc;
      box-shadow: 0 0 15px rgba(0, 122, 204, 0.9);
      border-radius: 5px;
    }
  </style>
</head>

<body>

  <!-- Content Section -->
  <div class="vc_tta-panel-body">
    <div class="vc_row">
      <div class="vc_column">
        <div class="inner-container">
          <!-- Heading -->
          <h3>Extra Curricular Activities</h3>

          <!-- Paragraph Description -->
          <p>Co-curricular activities play a vital role in the development of a child’s personality. A great deal of emphasis is laid on such activities in the school. All students have been distributed into different Houses to ensure healthy competitions in various activities. The students are encouraged to participate in the following activities.</p>

          <!-- Animated Ordered List -->
          <ol id="activity-list">
            <li>Debates (English & Urdu)</li>
            <li>Quiz Programmes</li>
            <li>Qira’at Competition</li>
            <li>Boys Scouting / Girls Guide</li>
            <li>Proctorial Systems</li>
            <li>Food Festivals</li>
            <li>Sports</li>
            <li>Fun & Frolics</li>
            <li>Spring Day Celebration</li>
            <li>Writing Competition</li>
            <li>Class Arrangements Competition</li>
            <li>Chart Competition</li>
            <li>Art Competition</li>
            <li>Spell Bee Competition</li>
            <li>School Magazine</li>
            <li>Monthly News Letters</li>
            <li>Iqbaliat</li>
            <li>Science Exhibition</li>
            <li>Cleanliness Day</li>
            <li>Fire Drills</li>
            <li>Field / Excursion Trips</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Script for improved animation -->
  <script>
    window.onload = () => {
      const listItems = document.querySelectorAll('#activity-list li');
      listItems.forEach((item, index) => {
        item.style.animationDelay = `${index * 0.1}s`; // Stagger animation
        item.classList.add('animate__animated', 'animate__fadeInUp'); // Add animation classes
      });
    };
  </script>

</body>
</html>