<!-- Page Title -->
<div class="pic">
    <div class="page-title dark-background" data-aos="fade"
      style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
      <div class="background-overlay"></div> <!-- Overlay div for dull effect -->
      <div class="container">
        <h1 class="animated-title">LIBRARIES</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?php echo base_url(); ?>home">Home</a></li>
            <li class="current">LIBRARIES</li>
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
    height: 650px;
    perspective: 1000px; /* Adjusted perspective for better 3D effect */
    width: 660px; 
    text-align: center;
    transition: transform 0.3s ease-in-out;
    transform-style: preserve-3d;
    padding: 12px;
    border-radius: 12px; /* More rounded corners */
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.1); /* Slightly more shadow for depth */
  }
  
  /* Hover effect with elevation */
  .vc-hoverbox-wrapper:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Enhanced shadow effect */
  }
  
  /* Hover box styling */
  .vc-hoverbox {
    width: 100%;
    height: 600px; 
    position: relative;
    transition: transform 0.8s ease;
    transform-style: preserve-3d;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
  
  /* Front side of the box */
  .vc-hoverbox-front {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    background-size: cover;
    background-position: center;
    border-radius: 12px;
    overflow: hidden;
    transform: rotateY(0deg);
    transition: opacity 0.3s ease;
    filter: brightness(70%); /* Darken the image for better text visibility */
  }
  
  /* Back side of the box */
  .vc-hoverbox-back {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    background-color: rgba(241, 248, 255, 0.9); /* Semi-transparent white for better readability */
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 20px;
    transform: rotateY(180deg);
    color: #333;
    border-radius: 12px;
    box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.1);
    font-size: 16px;
    line-height: 1.6;
  }
  
  /* Flip effect when hovering over the wrapper */
  .vc-hoverbox-wrapper:hover .vc-hoverbox {
    transform: rotateY(180deg);
  }
  
  /* Name below the box */
  .vc-hoverbox-wrapper h2 {
    font-family: 'Akronim', cursive;
    font-weight: 400;
    font-size: 20px;
    margin-top: 15px;
    color: #003366;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: color 0.3s;
  }
  
  /* Hover effect for name */
  .vc-hoverbox-wrapper:hover h2 {
    color: #007acc;
  }
  
  /* Paragraph inside the back */
  .para {
    font-family: 'Arial', sans-serif;
    font-size: 14px;
    color: #333;
    line-height: 1.6;
    padding: 10px;
    text-align: justify; /* Align the text */
  }
  
    /* Description text styling */
    .para {
      font-family: Arial, sans-serif;
      font-weight: 400;
      margin-top: 4px;
      color: #4a4a4a;
      font-size: 12px;
      line-height: 1.8;
      background-color: #eaf4ff;
      padding: 10px 15px;
      border-radius: 5px;
      border-left: 2px solid #007acc;
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
    /* Center-align the heading and paragraph */
  .center-heading, .center-paragraph {
      
      text-align: center; /* Center alignment */
      margin-left: 518px;/* To ensure it is centered within the container */
  }
  
  /* Heading Style */
  .center-heading {
    font-size: 3rem;
    color: #2c3e50;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: relative;
    display: inline-block;
    transition: all 0.4s ease-in-out;
    /* margin-bottom: 20px; */
    margin-top: 50px;
  }
  
  /* Paragraph Style */
  .center-paragraph {
      font-size: 1.8rem;
      color: #34495e; /* Slightly lighter color for the paragraph */
      line-height: 1.8;
      max-width: 1030px; /* Constrains width for readability */
      margin: 30px auto;
      transition: all 0.4s ease-in-out;
  }
  
  /* Hover effects for the heading */
  .center-heading:hover {
      color: #ff6347; /* Change color on hover */
      text-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Adds shadow effect */
      transform: scale(1.1); /* Slight zoom effect */
  }
  
  /* Hover effects for the paragraph */
  .center-paragraph:hover {
      color: #3498db; /* Change color on hover */
      transform: translateY(-5px); /* Lift effect */
  }
  
  /* Animations for the heading and paragraph */
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
  
  /* Apply animation to both heading and paragraph */
  .center-heading {
      animation: fadeInUp 1s ease-out;
  }
  
  .center-paragraph {
      animation: fadeInUp 1.5s ease-out;
      animation-delay: 0.3s; /* Delay the paragraph fade-in */
  }
  /* Wrapper for the hover box with perspective */
  .vc-hoverbox-wrapper {
    perspective: 1004px;
    width: 800px;
    height: 320px;
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
    height: 270px;
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
    width: 800px;
    
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
    /* background-color: #f1f8ff; */
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
  .vc-hoverbox-wrapper h2 {
    font-family: 'Akronim', cursive;
    font-weight: 400;
    font-size: 20px;
    margin-top: 25px;
    color: #003366;
    text-transform: uppercase;
    letter-spacing: 1px;
    transition: color 0.3s;
}  
  </style>
  </head>
  s
  <body>
  <div class="wpb_wrapper">
      <h1 class="center-heading">Educational Facilities</h1>
      <p class="center-paragraph">The School caters to boys and girls of the Pakistani community in Riyadh from Play Group to Class XII. It maintains a high standard of education and provides a variety of curricular and co-curricular activities for the development of a wholesome and balanced personality of the students. The School is producing excellent results in School and Board Examinations.</p>
  </div>
  
    <h2 class="container section-heading col-md-9">libraries</h2>
    
        <div class="vc-hoverbox-wrapper">
            <div class="vc-hoverbox">
              <div class="vc-hoverbox-front" style="background-image: url('https://pisr.org/v2/wp-content/uploads/2021/06/1-300x225.jpg');"></div>
              <div class="vc-hoverbox-back">
                <p> Libraries and reading rooms have been provided in the Boys as well as the Girls Wings separately. The libraries contain reasonable number of books on various Subjects. Local & Pakistani Newspapers as well as magazines in English and Urdu are also provided to keep the students well-informed about local, national & international affairs. Reference sections are also available in these Libraries. Maps, charts, over-head projectors and other educational aids are provided to make classroom instruction(s) more effective. </p>
            </div>
            </div>
            <h2>Libraries</h2>
          </div>
      
   
  
  
  </body>
  
  </html>