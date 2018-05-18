<!DOCTYPE html>
<html>

<head>
  <title>Global Health Diplomacy</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/w3.css">
  <link rel="stylesheet" href="./css/style-basic.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/programs.css">
  <link rel="stylesheet" href="./css/exp.css">
  <link rel="stylesheet" href="./css/training.css">
  <link rel="stylesheet" href="./css/bopartner.css">
  <link rel="stylesheet" href="./css/news.css">
  <link rel="stylesheet" href="./css/partner.css">
  <link rel="stylesheet" href="./css/intouch.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/prism.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

  <script src="./js/jquery-1.10.2.min.js"></script>
  <script src="./js/numscroller-1.0.js"></script>
  <script src="./js/prism.js"></script>
  <script src="./js/navbar.js"></script>
  <script src="./js/accordion.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/setting-carousel.js"></script>

<!-- Header -->
<header class="header-container" id="top">
  <!-- Navigation Bar -->
  <div class="navigation-bar" id="navbar">
    <div class="w3-logo w3-left logo-area">
      <img src="./img/Logo_GHD.png" alt="Logo GHD" id="logo-utama" class="logo-img">
      <!-- <a href="#">Global</br>Health</br>Diplomacy</a> -->
    </div>
    <!-- <div class="w3-rest"> -->
      <button class="w3-bar-item w3-button w3-hide-large w3-right" onclick="openFunction()">
      <a><i class="fas fa-bars"></i></a></button>
    <!-- </div> -->
    <div id="topbar-post" class="navigation-bar">
      <a href="#intouch" class="menu-bar w3-right w3-button w3-mobile w3-hide-small w3-hide-medium">Contact</a>
      <a href="#partner" class="menu-bar w3-right w3-button w3-mobile w3-hide-small w3-hide-medium">Partners</a>
      <a href="#events" class="menu-bar w3-right w3-button w3-mobile w3-hide-small w3-hide-medium">Events</a>
      <a href="#ghd-news" class="menu-bar w3-right w3-button w3-mobile w3-hide-small w3-hide-medium">News</a>
      <a href="#register" class="menu-bar w3-right w3-button w3-mobile w3-hide-small w3-hide-medium">Register</a>
      <a href="#programs" class="menu-bar w3-right w3-button w3-mobile w3-hide-small w3-hide-medium">Programs</a>
      <a href="#about" class="menu-bar w3-right w3-button w3-mobile w3-hide-small w3-hide-medium">About</a>
    </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="navsmall" class="w3-modal" onclick="closeFunction()">
    <div id="inner-navsmall" class="w3-bar-block w3-black w3-top w3-center">
      <a href="#intouch" class="w3-bar-item w3-button w3-padding-large">Contact</a>
      <a href="#partner" class="w3-bar-item w3-button w3-padding-large">Partners</a>
      <a href="#events" class="w3-bar-item w3-button w3-padding-large">Events</a>
      <a href="#ghd-news" class="w3-bar-item w3-button w3-padding-large">News</a>
      <a href="#register" class="w3-bar-item w3-button w3-padding-large">Register</a>
      <a href="#programs" class="w3-bar-item w3-button w3-padding-large">Programs</a>
      <a href="#about" class="w3-bar-item w3-button w3-padding-large">About</a>
    </div>
  </div>

  <!-- Below Navbar -->
  <div id="bawahnyanavbar" class="navigation-bar">
    <div class="header-inner-container w3-col l4 m12 s12">
      <p class="w3-hide-small w3-hide-medium" id="text-big">DIPLOMACY</br>NEEDS</br>ACTION</p>
      <div id="con1" class="inner2-container w3-white">
        <h1>GHD Training</h1>
      </div>
      <div id="con2" class="inner2-container w3-white">
        <p>25-29 August, 2018</p>
        <p>Bandung, Indonesia</p>
      </div>
      <div class="inner2-container w3-red">
        <a onclick="accordionfunc()" href="#contentExecutive" id="con3">
          <p>Register Now!</p>
        </a>
      </div>
    </div>
  </div>

  <!-- Gambar Header -->
  <img class="w3-image img-head" src="./img/hero/header.png" alt="Header Image">
</header>

<body>
  <!-- Content -->
  <div class="content">

    <!-- Programs -->
    <div class="outer-container w3-center" id="programs">
      <h1>Programs</h1>
      <div id="padding-image">
        <div class="w3-margin-bottom padding-program-card w3-col l4 m12 s12">
          <img src="./img/program/executive.png" class="w3-image w3-hover-opacity" id="image-card-programs">
          <div class="w3-container w3-white" id="text-card">
            <h3>Executive</h3>
            <p>High-level position of Health and International relation Professionals</p>
          </div>
          <div class="w3-container w3-red">
            <a onclick="accordionfunc()" href="#contentExecutive" id="programExecutive">
              <p id="con3">Learn More</p>
            </a>
          </div>
        </div>
        <div class="w3-margin-bottom padding-program-card w3-col l4 m12 s12">
          <img src="./img/program/student.png" class="w3-image w3-hover-opacity" id="image-card-programs">
          <div class="w3-container w3-white" id="text-card">
            <h3>Student</h3>
            <p>Design for University Student from second year and up</p>
          </div>
          <div class="w3-container w3-red">
            <a href="#" id="programStudent">
              <p id="con3">Coming Soon</p>
            </a>
          </div>
        </div>
        <div class="w3-margin-bottom padding-program-card w3-col l4 m12 s12">
          <img src="./img/program/intermediate.png" class="w3-image w3-hover-opacity" id="image-card-programs">
          <div class="w3-container w3-white" id="text-card">
            <h3>Intermediate</h3>
            <p>High-level position of Health and International relation Professionals</p>
          </div>
          <div class="w3-container w3-red">
            <a href="#" id="programIntermediate">
              <p id="con3">Coming Soon</p>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div id="contentExecutive" class="outer-container w3-hide w3-animate-opacity w3-bar-block" tabindex="1">
      <div class="exe-container w3-row-padding">
        <div class="inner-programs">
          <img src="./img/program/executive.png" class="w3-hover-opacity image-content-programs">
          <h1><b>EXECUTIVE TRAINING</b></h1>
          <p>
            Global health diplomacy (GHD) Training is three to five-day intensive program that combine 40 percent theory and 60 percent practice. This training prepares participants with negotiation and policy skills to help them in influencing people, collaboration, and decision making at national and international level.
          </p>
          <ul>
            <li>Participant will be trained diplomacy skills set including negotiation manner and strategy, social influencing, and building professional image.</li>
            <li>
              Participant will benefit from the structure of the program and the lecturer since it is highly participatory and it provides them with skill-building activities, multi-stakeholders panels, case study, role-play exercises, and negotiation simulation with world-prominent and leading facilitators.
              We are calling for the next true leaders!
            </li>
          </ul>
          <h5>Download Links</h4>
          <ul>
            <li><a href="http://bit.ly/GHD2018ProgramBooklet">Booklet</a></li>
            <li><a href="https://drive.google.com/open?id=11P2_aUbLO8ft-hnri0ZJGVBTYhnQSEdN">Scholarship Application Forms</a></li>
            <li><a href="https://drive.google.com/open?id=1uI1hywgViPDMlVaXTpHq9cFyo5xT_UBX">Regular Application Forms</a></li>
          </ul>
          <h4><b>Instructions</b></h3>
          <ol>
            <li>Please make sure to complete all the application and requirements form</li>
            <li>Complete this application form and submit to our email at discoversghd@gmail.com, (with the file subject: GHD – SCH – 2018 – Full Name – Your Institution/Organisation Name – Nationality).</li>
            <li>If selected, we will publish the announcement of the Global Health Diplomacy candidates at: globalhealthdiplomacy.id on 15th June, 2018</li>
          </ol>
          <h4><b>Impotant Dates</b></h3>
          <ul>
            <li>Scholarship Application Deadline May 30, 2018</li>
            <li>Non-scholarship Application Deadline June 30, 2018</li>
            <li>Participant Selected and Administration Process 15 July – 22 July, 2018</li>
            <li>Pre-departure Assignment Process July 23 – August 6, 2018</li>
            <li>Training Days August 25 – August 29, 2018</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Experience -->
    <div class="w3-center" id="experience">
      <div class="outer-container">
        <h1>The Experience</h1>
        <h4><b>Global Health Diplomacy (GHD) Training</b> is a three to five-day intensive program that combine 40 percent theory and 60 percent practice.</h4>
        <h6> This training prepares participants with negotiation and policy skills to help them in influencing people, collaboration, and decision making at national and international level.</h6>
        <div id="number-container">
          <div class="w3-quarter m12 s12">
            <div id="number" class="w3-row">
              <span class='numscroller' data-min='0' data-max='28' data-delay='1' data-increment='1'>28</span>
              <h4><b>institutions</b></h4>
              <div class="garisbawah"></div>
              <p>Representatives of national & international institutions involved</p>
            </div>
          </div>
          <div class="w3-quarter m12 s12">
            <div id="number" class="w3-row">
              <span class='numscroller' data-min='0' data-max='3' data-delay='1' data-increment='1'>3</span>
              <h4><b>days</b></h4>
              <div class="garisbawah"></div>
              <p id="text-number2">Multi-Stage Negotiation Simulation sessions</p>
            </div>
          </div>
          <div class="w3-quarter m12 s12">
            <div id="number" class="w3-row">
              <span class='numscroller' data-min='0' data-max='12' data-delay='1' data-increment='1'>12</span>
              <h4><b>classes</b></h4>
              <div class="garisbawah"></div>
              <p id="text-number2">Global health and diplomatic practice</p>
            </div>
          </div>
          <div class="w3-quarter m12 s12">
            <div id="number" class="w3-row">
              <span class='numscroller' data-min='0' data-max='9' data-delay='1' data-increment='1'>9</span>
              <h4><b>speakers</b></h4>
              <div class="garisbawah"></div>
              <p id="text-number2">International level</p>
            </div>
          </div>
        </div>
        <div id="red-back-number"></div>
      </div>
      <div id="coverbackground"></div>
    </div>

    <!-- Learn More -->
    <div id="learn-more">
      <div class="outer-container" id="training">
        <div id="training-container">
          <div class="w3-half m6 s12" id="image-training">
            <img src="./img/article/ghd-17.png" class="w3-hover-opacity">
          </div>
          <div class="w3-half m6 s12" id="inner-training">
            <h1>GHD Training 2017</h1>
            <h6>Diplomacy is undergoing profound changes in the 21st century – and global health is one of the areas where this is most apparent.</h6>
            <a href="#">
              <button type="button" class="w3-button w3-red w3-margin-top">Learn More</button>
            </a>
          </div>
        </div>
      </div>

      <!-- Be Our Partner -->
      <div class="outer-container" id="be-ourpartner">
        <div id="be-ourpartner-container">
          <div class="w3-half" id="image-be-ourpartner-resp">
            <img src="./img/article/bop.png" class="w3-hover-opacity">
          </div>
          <div class="w3-half" id="inner-be-ourpartner">
            <h1>Be Our Partner</h1>
            <h6>Are you the best candidate for our future Global Health Diplomacy Training? Join our Team as Speaker or Volunteer. Also, we are happy to open donate or grant from everyone, particularly Health Philanthropy for Global Health development.</h6>
            <a href="#">
              <button type="button" class="w3-button w3-red w3-margin-top">Learn More</button>
            </a>
          </div>
          <div class="w3-half" id="image-be-ourpartner">
            <img src="./img/article/bop.png" class="w3-hover-opacity">
          </div>
        </div>
      </div>
    </div>  

    <!-- News -->
    <div class="outer-container w3-center" id="news">
      <h1 id="ghd-news">News</h1>
      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="slider-container">
              <div class="w3-padding-large" id="padding-image">
                <div class="w3-third w3-margin-bottom padding-news-card">
                  <div class="w3-container w3-white" id="text-news">
                    <p class="news-date">3 May 2018</p>
                    <h3>OHCC Throughout years...</h3>
                    <p>One Health Collaboration Center (OHCC) Progress Throughout the Years—Insight for Future’s Development...</p>
                  </div>
                  <img src="http://indohun.org/wp-content/uploads/2018/05/OHCC-Udayana-OH-Students-Club-3-Kelas-II.jpg" class="w3-hover-opacity image-news">
                  <div class="w3-container w3-red">
                    <a href="http://indohun.org/news/one-health-collaboration-center-ohcc-progress-throughout-the-years-insight-for-futures-development/" id="con3">
                      <p>Learn More</p>
                    </a>
                  </div>
                </div>
                <div class="w3-third w3-margin-bottom padding-news-card">
                  <div class="w3-container w3-white" id="text-news">
                    <p class="news-date">26 April 2018</p>
                    <h3>Prof Jeff Bender visited Indonesia</h3>
                    <p>The Initiation of Travel Medicine in the World of One Health: ...</p>
                  </div>
                  <img src="http://indohun.org/wp-content/uploads/2018/04/Screen-Shot-2018-04-26-at-7.49.01-PM.jpg" class="w3-hover-opacity image-news">
                  <div class="w3-container w3-red">
                    <a href="http://indohun.org/news/professor-jeff-bender-visits-to-indonesia/" id="con3">
                      <p>Learn More</p>
                    </a>
                  </div>
                </div>
                <div class="w3-third w3-margin-bottom padding-news-card">
                  <div class="w3-container w3-white" id="text-news">
                    <p class="news-date">3 April 2018</p>
                    <h3>Outbreak of Influenza in US ...</h3>
                    <p>A Hundred Years after the 1918 Spanish Flu and We Are Now Experiencing ...</p>
                  </div>
                  <img src="http://indohun.org/wp-content/uploads/2018/04/http-time.com3731745spanish-flu-history-.jpg" class="w3-hover-opacity image-news">
                  <div class="w3-container w3-red">
                    <a href="http://indohun.org/news/a-hundred-years-after-the-1918-spanish-flu-and-we-are-now-experiencing-a-similar-thing-outbreak-of-influenza-in-the-united-states-2017-2018/" id="con3">
                      <p>Learn More</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="slider-container">
              <div class="w3-padding-large" id="padding-image">
                <div class="w3-third w3-margin-bottom padding-news-card">
                  <div class="w3-container w3-white" id="text-news">
                    <p class="news-date">19 Feb 2018</p>
                    <h3><b>Deadly Measles Outbreak</b></h3>
                    <p>Deadly Measles Outbreak and Malnutrition Striking Children in Asmat ...</p>
                  </div>
                  <img src="http://indohun.org/wp-content/uploads/2018/02/5-1.jpg" class="w3-hover-opacity image-news">
                  <div class="w3-container w3-red">
                    <a href="http://indohun.org/news/deadly-measles-outbreak-and-malnutrition-striking-children-in-asmat-regency-province-of-papua-the-role-of-the-indonesian-government/" id="con3">
                      <p>Learn More</p>
                    </a>
                  </div>
                </div>
                <div class="w3-third w3-margin-bottom padding-news-card">
                  <div class="w3-container w3-white" id="text-news">
                    <p class="news-date">17 Feb 2018</p>
                    <h3><b>Diphtheria Outbreak in ...</b></h3>
                    <p>Outbreak of diphtheria, a communicable disease known for its life-threatening risk ...</p>
                  </div>
                  <img src="http://indohun.org/wp-content/uploads/2018/02/JAK111-1211_2017_020155_hd.jpg" class="w3-hover-opacity image-news">
                  <div class="w3-container w3-red">
                    <a href="http://indohun.org/news/an-old-foe-showing-its-fangs-diphtheria-outbreak-in-indonesia-2017/" id="con3">
                      <p>Learn More</p>
                    </a>
                  </div>
                </div>
                <div class="w3-third w3-margin-bottom padding-news-card">
                  <div class="w3-container w3-white" id="text-news">
                    <p class="news-date">See More</p>
                    <h3><b>News and Updates</b></h3>
                    <p>See more updates from Indohun</p>
                  </div>
                  <img src="http://indohun.org/wp-content/themes/indohun/inc/images/photo/main-image.JPG" class="w3-hover-opacity image-news">
                  <div class="w3-container w3-red">
                    <a href="http://indohun.org/news/" id="con3">
                      <p>Learn More</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a id="sebelum" class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="fas fa-arrow-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a id="sesudah" class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="fas fa-arrow-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Our Partner -->
    <div class="outer-container w3-center" id="partner">
      <h1>Our Partner</h1>
      <div class="w3-row-padding" id="partner-container">
        <div class="w3-container w3-margin-bottom w3-center">
          <div class="w3-third w3-container w3-margin-bottom" id="partner-img-kiri">
            <img src="./img/partner/USAID.png" class="w3-hover-opacity">
          </div>
          <div class="w3-third w3-container w3-margin-bottom" id="partner-img">
            <img src="./img/partner/SEAOHUN.png" class="w3-hover-opacity">
          </div>
          <div class="w3-third w3-container w3-margin-bottom" id="partner-img-kanan">
            <img src="./img/partner/OHW.png" class="w3-hover-opacity">
          </div>
        </div>
      </div>
    </div>


    <div class="outer-container w3-center" id="intouch">
      <h1>Get In Touch</h1>
      <div class="w3-row-padding container-intouch">
        <div class="w3-third" id="chat">
          <i class="fas fa-phone intouch-icons-area"></i>
          <p id="text-intouch">(+62) 812-8011-9690</p>
        </div>
        <div class="w3-third" id="messages">
          <i class="fas fa-envelope intouch-icons-area"></i>
          <p id="text-intouch">discoversghd@gmail.com</p>
        </div class="intouch-icons-area">
        <div class="w3-third" id="location">
          <i class="fas fa-location-arrow intouch-icons-area"></i>
          <p id="text-intouch">
            Universitas Indonesia
          </p>
        </div>
      </div>
      <!-- <div class="w3-row-padding container-intouch">
        <div class="w3-third" id="chat">
          <div class="w3-third" id="img-intouch">
            <img src="./img/intouch/chat.png">
          </div>
          <div class="w3-twothird" id="text-intouch">
            <p>(+62) 812-8011-9690</p>
          </div>
        </div>
        <div class="w3-third w3-container" id="messages">
          <div class="w3-third" id="img-intouch">
            <img src="./img/intouch/message.png">
          </div>
          <div class="w3-twothird" id="text-intouch">
            <p>discoversghd@gmail.com</p>
          </div>
        </div>
        <div class="w3-third w3-container" id="location">
          <div class="w3-third" id="img-intouch">
            <img src="./img/intouch/globe.png">
          </div>
          <div class="w3-twothird" id="text-intouch">
            <p>Tempat</p>
          </div>
        </div>
      </div> -->
      <div class="w3-row-padding w3-padding-large" id="tombol-indohun">
        <a href="https://indohun.org/">
          <button type="button" class="w3-button w3-red w3-margin-top" id="button-source">Visit INDOHUN website</button>
        </a>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-padding-32 w3-center" id="footer">
    <h5>&copy; 2018 - <a href="https://indohun.org/">INDOHUN</a> All Right Reserved</h5>
    <div class="w3-xlarge w3-padding-large" id="social-link">
      <div id="icon-social">
        <a href="https://www.facebook.com/indohun.id/">
          <i class="fab fa-facebook w3-hover-opacity"></i>
        </a>
        <a href="https://twitter.com/Indohun">
          <i class="fab fa-twitter w3-hover-opacity"></i>
        </a>
        <a href="#">
          <i class="fab fa-dribbble w3-hover-opacity"></i>
        </a>
        <a href="#">
          <i class="fab fa-google-plus w3-hover-opacity"></i>
        </a>
        <a href="https://www.youtube.com/user/INDONESIAOHUN">
          <i class="fab fa-youtube w3-hover-opacity"></i>
        </a>
      </div>
      <a href="#top">
        <button class="btn-up"><i class="fas fa-chevron-up"></i></button>
      </a>
    </div>
  </footer>
</body>

</html>