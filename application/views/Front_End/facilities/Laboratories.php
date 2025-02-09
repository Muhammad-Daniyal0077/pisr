<!-- Page Title -->
<div class="pic">
  <div class="page-title dark-background" data-aos="fade"
    style="background-image: url(https://pisr.org/v2/wp-content/uploads/2021/06/Untitled-design1.png);">
    <div class="background-overlay"></div> <!-- Overlay div for dull effect -->
    <div class="container">
      <h1 class="animated-title">Laboratories</h1>
      <nav class="breadcrumbs">
        <ol>
          <li><a href="<?php echo base_url(); ?>home">Home</a></li>
          <li class="current">Laboratories</li>
        </ol>
      </nav>
    </div>
  </div>
</div>

<style>
  h2.section-heading {
    background-color: #509999;
    color: #ffffff;
    padding: 15px 20px;
    font-size: 24px;
    margin: 20px auto;
    text-align: center;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
  }

  /* Paragraph Styles */
  .center-paragraph {
    font-size: 1.8rem;
    color: #34495e;
    line-height: 1.8;
    margin: 40px 120px;
    text-align: center;
    background-color: #eaf4ff;
    padding: 10px 15px;
    border-radius: 5px;
    border-left: 2px solid #007acc;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }



  .center-heading,
  .center-paragraph {
    animation: fadeInUp 1s ease-out;
    text-align: center;
  }

  .center-paragraph {
    animation-delay: 0.3s;
  }

  .grid {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-gap: 1rem;
  }

  @media only screen and (min-width: 767px) {
    .grid {
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 1.5rem;
      margin-bottom: 60px;
    }
  }

  .article {
    position: relative;
    cursor: pointer;
  }

  .article:hover:before {
    opacity: 1;
  }

  .article:hover .article__cover {
    transform: translateX(-2rem) scale(1.05);
  }

  .article:hover .article__title,
  .article:hover .article__info {
    opacity: 1;
    transform: translateX(0);
  }

  .article:hover .article__title {
    transition-delay: 0s;
  }

  .article:hover .article__info {
    transition-delay: 0.1s;
  }

  .article:before {
    content: "";
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    box-shadow: 0 0 10px 4px rgba(0, 0, 0, 0.47);
    transition: opacity 0.3s ease-in-out;
  }

  .article__figure {
    position: relative;
    overflow: hidden;
    margin: 0;
    height: 0;
    padding-bottom: 100%;
  }

  @media only screen and (min-width: 500px) {
    .article__figure {
      padding-bottom: 50%;
    }
  }


  @media only screen and (min-width: 767px) {
    .article__figure {
      padding-bottom: 66.6%;
    }
  }

  @media only screen and (min-width: 1200px) {
    .article__figure {
      padding-bottom: 50%;
    }


  }

  .article__title,
  .article__info {
    opacity: 0;
    max-width: 40rem;
    padding: 0.85rem 1rem;
    transform: translateX(50%);
    transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
    color: #eaf4ff;

  }


  .article__info {
    background-color: rgba(51, 51, 51, 0.7);
    font-weight: 100;
    letter-spacing: 2px;
    font-size: 1rem;
  }




  @media only screen and (min-width: 767px) {
    .container {
      padding-inline: 2rem;
    }
  }


  .article {
    position: relative;
    cursor: pointer;
  }

  .article:hover:before {
    opacity: 1;
  }

  .article:hover .article__cover {
    transform: translateX(-2rem) scale(1.05);
  }

  .article:hover .article__title,
  .article:hover .article__info {
    opacity: 1;
    transform: translateX(0);
  }

  .article:hover .article__title {
    transition-delay: 0s;
  }

  .article:hover .article__info {
    transition-delay: 0.1s;
  }

  .article:before {
    content: "";
    opacity: 0;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    box-shadow: 0 0 10px 4px rgba(0, 0, 0, 0.47);
    transition: opacity 0.3s ease-in-out;
  }

  .article__figure {
    position: relative;
    overflow: hidden;
    margin: 0;
    height: 0;
    padding-bottom: 100%;
  }

  @media only screen and (min-width: 500px) {
    .article__figure {
      padding-bottom: 50%;
    }
  }

  @media only screen and (min-width: 767px) {
    .article__figure {
      padding-bottom: 66.6%;
    }
  }

  @media only screen and (min-width: 1200px) {
    .article__figure {
      padding-bottom: 50%;
    }
  }

  .article__cover {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: -2rem;
    width: calc(100% + 2rem);
    height: 100%;
    object-fit: cover;
    transform: translateX(0);
    transition: transform 0.55s ease-in-out;
  }

  .article__caption {
    position: absolute;
    top: 0;
    bottom: 0;
    right: 0;
    display: flex;
    flex-direction: column;
    max-width: 90%;
  }

  .article__title,
  .article__info {
    opacity: 0;
    max-width: 40rem;
    padding: 0.85rem 1rem;
    transform: translateX(50%);
    transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
    color: #eaf4ff;

  }

  .article__title {
    background-color: rgba(51, 51, 51, 0.5);
    font-weight: 300;
    transition-delay: 0.1s;
    font-size: 2.4rem;
  }

  .article__info {
    background-color: rgba(51, 51, 51, 0.7);
    font-weight: 100;
    letter-spacing: 2px;
    font-size: 1rem;
  }
</style>



<div class="wpb_wrapper" style="margin: 62px 33px;">
  <h1 class="center-heading">Educational Facilities</h1>
  <p class="center-paragraph">The School caters to boys and girls of the Pakistani community in Riyadh from Play
    Group to Class XII. It maintains a high standard of education and provides a variety of curricular and
    co-curricular activities for the development of a wholesome and balanced personality of the students. The
    School is producing excellent results in School and Board Examinations.</p>
</div>


<div class="info">
  <h2 class="container section-heading ">Laboratories</h2>
  <section class="events-list-03">

    <div class="container">
      <div class="grid">
        <article class="article">
          <figure class="article__figure"><img class="article__cover" src="<?php echo base_url(); ?>asset/images/Facilities/013.jpg" />
            <figcaption class="article__caption">
              <h4 class="article__title">COMPUTER LABORATORIES</h4>
              <p class="article__info">The School is equipped with five fully functional Computer Laboratories; each equipped with latest technology including smart board, high tech computers, projectors and an internet connection on every computer. </p>
            </figcaption>
          </figure>
        </article>
        <article class="article">
          <figure class="article__figure"><img class="article__cover" src="<?php echo base_url(); ?>asset/images/Facilities/13.webp" />
            <figcaption class="article__caption">
              <h4 class="article__title">Chemistry, Physics & Biology Laboratories</h4>
              <p class="article__info"> Well equipped and maintained Chemistry, Physics and Biology Laboratories have been
                established in SBW-I and SGW-I for academic activities. These laboratories are
                updated with apparatus, chemicals and tools necessary for conducting science
                practicals.

                Multimedia systems, smart boards and internet connection have also been provided to
                assist in delivering lectures using modern techniques.</p>
            </figcaption>
          </figure>
        </article>
      </div>
    </div>
  </section>

  <!-- ./ End Teachers Area section -->
  <script>
    AOS.init();
  </script>
</div>