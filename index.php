<!DOCTYPE html>
<html>

<head>
  <title>Global Health Diplomacy</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/w3.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/style-basic.css">
  <link rel="stylesheet" href="./css/programs.css">
  <link rel="stylesheet" href="./css/exp.css">
  <link rel="stylesheet" href="./css/training.css">
  <link rel="stylesheet" href="./css/bopartner.css">
  <link rel="stylesheet" href="./css/news.css">
  <link rel="stylesheet" href="./css/partner.css">
  <link rel="stylesheet" href="./css/intouch.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/prism.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!-- Header -->
<header class="header-container w3-content">
  <!-- Navigation Bar -->
  <div class="navigation-bar">
    <div class="s2">
      <a href="#" class="w3-logo w3-left" id="logo-utama">Global</br>Health</br>Diplomacy</a>
    </div>
    <div class="w3-rest">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    </div>
    <div id="topbar-post">
      <a href="#intouch" class="menu-bar w3-right w3-button w3-mobile w3-hide-small w3-hide-medium">Contact</a>
      <a href="#partner" class="menu-bar w3-right w3-button w3-mobile w3-hide-small w3-hide-medium">Partners</a>
      <a href="#events" class="menu-bar w3-right w3-button w3-mobile w3-hide-small w3-hide-medium">Events</a>
      <a href="#ghd-news" class="menu-bar w3-right w3-button w3-mobile w3-hide-small w3-hide-medium">News</a>
      <a href="#register" class="menu-bar w3-right w3-button w3-mobile w3-hide-small w3-hide-medium">Register</a>
      <a href="#programs" class="menu-bar w3-right w3-button w3-mobile w3-hide-small w3-hide-medium">Programs</a>
      <a href="#about" class="menu-bar w3-right w3-button w3-mobile w3-hide-small w3-hide-medium">About</a>
    </div>
  </div>
  <div id="bawahnyanavbar" class="navigation-bar">
    <div class="header-inner-container w3-col l4 m12 s12">
      <p class="w3-hide-small w3-hide-medium" id="text-big">DIPLOMACY</br>NEEDS</br>ACTION</p>
      <div id="con1" class="inner2-container w3-white">
        <p>GHD Training</p>
      </div>
      <div id="con2" class="inner2-container w3-white">
        <p>25-29 August, 2018</p>
        <p>Bandung, Indonesia</p>
      </div>
      <div class="inner2-container w3-red">
        <a href="#" id="con3">
          <p>Register Now!</p>
        </a>
      </div>
    </div>
  </div>

  <!-- Navbar on small screens -->
  <div id="navsmall" class="w3-bar-block w3-black w3-hide w3-hide-large w3-top">
    <a href="#intouch" class="w3-bar-item w3-button w3-padding-large">Contact</a>
    <a href="#partner" class="w3-bar-item w3-button w3-padding-large">Partners</a>
    <a href="#events" class="w3-bar-item w3-button w3-padding-large">Events</a>
    <a href="#ghd-news" class="w3-bar-item w3-button w3-padding-large">News</a>
    <a href="#register" class="w3-bar-item w3-button w3-padding-large">Register</a>
    <a href="#programs" class="w3-bar-item w3-button w3-padding-large">Programs</a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large">About</a>
  </div>
  <img class="w3-image" src="./img/hero/header.png" alt="Header Image">
</header>

<body>
  <!-- Content -->
  <div class="content">

    <!-- Programs -->
    <div class="outer-container w3-center" id="programs">
      <h1>Programs</h1>
      <div class="w3-padding-large" id="padding-image">
        <div class="w3-third w3-margin-bottom padding-program-card">
          <img src="./img/program/executive.png" class="w3-image w3-hover-opacity">
          <div class="w3-container w3-white" id="text-card">
            <h3>Executive</h3>
            <p>High-level position of Health and International relation Professionals</p>
          </div>
          <div class="w3-container w3-red">
            <a onclick="executiveFunc()" href="javascript:void(0)" id="programExecutive">
              <p>Learn More</p>
            </a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom padding-program-card">
          <img src="./img/program/student.png" class="w3-image w3-hover-opacity">
          <div class="w3-container w3-white" id="text-card">
            <h3>Student</h3>
            <p>Design for University Student from second year and up</p>
          </div>
          <div class="w3-container w3-red">
            <a onclick="studentFunc()" href="javascript:void(0)" id="programStudent">
              <p>Coming Soon</p>
            </a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom padding-program-card">
          <img src="./img/program/intermediate.png" class="w3-image w3-hover-opacity">
          <div class="w3-container w3-white" id="text-card">
            <h3>Intermediate</h3>
            <p>High-level position of Health and International relation Professionals</p>
          </div>
          <div class="w3-container w3-red">
            <a onclick="interFunc()" href="javascript:void(0)" id="programIntermediate">
              <p>Coming Soon</p>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div id="contentExecutive" class="outer-container w3-hide w3-animate-opacity w3-bar-block">
      <div class="training-container w3-row-padding">
        <div class="w3-third image-content-programs">
          <img src="./img/program/executive.png" class="w3-hover-opacity w3-third w3-image">
        </div>
        <div class="w3-twothird inner-programs">
          <h1><b>EXECUTIVE TRAINING</b></h1>
          <p><b>Requirements:</b></p>
          <ul>
            <li>Age</li>
            <li>Profession</li>
            <li>Degree</li>
          </ul>
          <p><b>How to Register:</b></p>
          <ol>
            <li>Please make sure to complete all the application and requirements form</li>
            <li>Send the form to ghd2018@gmail.com with [GDH 2018] Application form_scholarship as a subject</li>
            <li>The announcement will be uploaded in www.GHD.org</li>
            <li>Deadline : April 30, 2018</li>
          </ol>
          <p>Download booklet : <a href="#">click here</a></p>
        </div>
      </div>
    </div>

    <!-- Experience -->
    <div class="w3-center" id="experience">
      <div class="outer-container">
        <h1><b>The Experience</b></h1>
        <h4><b>Global Health Diplomacy (GHD) Training</b> is a three to five-day intensive program that combine 40 percent theory and 60 percent practice.</h4>
        <h6> This training prepares participants with negotiation and policy skills to help them in influencing people, collaboration, and decision making at national and international level.</h6>
        <div id="number-container">
          <div class="w3-quarter">
            <div id="number" class="w3-row">
              <span class='numscroller' data-min='0' data-max='28' data-delay='1' data-increment='1'>28</span>
              <h4><b>institutions</b></h4>
              <div class="garisbawah"></div>
              <p>Representatives of national & international institutions involved</p>
            </div>
          </div>
          <div class="w3-quarter">
            <div id="number" class="w3-row">
              <span class='numscroller' data-min='0' data-max='3' data-delay='1' data-increment='1'>3</span>
              <h4><b>days</b></h4>
              <div class="garisbawah"></div>
              <p id="text-number2">Multi-Stage Negotiation Simulation sessions</p>
            </div>
          </div>
          <div class="w3-quarter">
            <div id="number" class="w3-row">
              <span class='numscroller' data-min='0' data-max='12' data-delay='1' data-increment='1'>12</span>
              <h4><b>classes</b></h4>
              <div class="garisbawah"></div>
              <p id="text-number2">Global health and diplomatic practice</p>
            </div>
          </div>
          <div class="w3-quarter">
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
          <div class="w3-half" id="image-training">
            <img src="./img/article/ghd-17.png" class="w3-hover-opacity">
          </div>
          <div class="w3-half" id="inner-training">
            <h1>GHD Training 2017</h1>
            <h6>Diplomacy is undergoing profound changes in the 21st century – and global health is one of the areas where this is most apparent.</h6>
            <a href="./post.php">
              <button type="button" class="w3-button w3-red w3-margin-top">Learn More</button>
            </a>
          </div>
        </div>
      </div>

      <!-- Be Our Partner -->
      <div class="outer-container" id="be-ourpartner">
        <div id="be-ourpartner-container">
          <div class="w3-half" id="inner-be-ourpartner">
            <h1>Be Our Partner</h1>
            <h6>Are you the best candidate for our future Global Health Diplomacy Training? Join our Team as Speaker or Volunteer. Also, we are happy to open donate or grant from everyone, particularly Health Philanthropy for Global Health development.</h6>
            <a href="./post.php">
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
                    <p>15 Feb 2018</p>
                    <h3>Spotlight</h3>
                    <p>Lorem ipsum To foster INDOHUN</p>
                  </div>
                  <img src="./img/program/executive.png" class="w3-hover-opacity">
                  <div class="w3-container w3-red">
                    <a href="#" id="con3">
                      <p>Learn More</p>
                    </a>
                  </div>
                </div>
                <div class="w3-third w3-margin-bottom padding-news-card">
                  <div class="w3-container w3-white" id="text-news">
                    <p>15 Feb 2018</p>
                    <h3><b>World</b></h3>
                    <p>Lorem ipsum To foster INDOHUN sustainability, it is</p>
                  </div>
                  <img src="./img/program/student.png" class="w3-hover-opacity">
                  <div class="w3-container w3-red">
                    <a href="#" id="con3">
                      <p>Learn More</p>
                    </a>
                  </div>
                </div>
                <div class="w3-third w3-margin-bottom padding-news-card">
                  <div class="w3-container w3-white" id="text-news">
                    <p>15 Feb 2018</p>
                    <h3><b>In The Media</b></h3>
                  </div>
                  <img src="./img/program/intermediate.png" class="w3-hover-opacity">
                  <div class="w3-container w3-red">
                    <a href="#" id="con3">
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
                    <p>15 Feb 2018</p>
                    <h3><b>Spotlight</b></h3>
                    <p>Lorem ipsum To foster INDOHUN</p>
                  </div>
                  <img src="./img/program/executive.png" class="w3-hover-opacity">
                  <div class="w3-container w3-red">
                    <a href="#" id="con3">
                      <p>Learn More</p>
                    </a>
                  </div>
                </div>
                <div class="w3-third w3-margin-bottom padding-news-card">
                  <div class="w3-container w3-white" id="text-news">
                    <p>15 Feb 2018</p>
                    <h3><b>World</b></h3>
                    <p>Lorem ipsum To foster INDOHUN sustainability, it is</p>
                  </div>
                  <img src="./img/program/student.png" class="w3-hover-opacity">
                  <div class="w3-container w3-red">
                    <a href="#" id="con3">
                      <p>Learn More</p>
                    </a>
                  </div>
                </div>
                <div class="w3-third w3-margin-bottom padding-news-card">
                  <div class="w3-container w3-white" id="text-news">
                    <p>15 Feb 2018</p>
                    <h3><b>In The Media</b></h3>
                  </div>
                  <img src="./img/program/intermediate.png" class="w3-hover-opacity">
                  <div class="w3-container w3-red">
                    <a href="#" id="con3">
                      <p>Learn More</p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Left and right controls -->
          <a id="sebelum" class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="fa fa-long-arrow-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a id="sesudah" class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="fa fa-long-arrow-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Our Partner -->
    <div class="outer-container w3-center" id="partner">
      <h1>Our Partner</h1>
      <div class="w3-row-padding" id="partner-container">
        <div class="w3-third w3-container w3-margin-bottom">
        </div>
        <div class="w3-third w3-container w3-margin-bottom w3-center">
          <div class="w3-third w3-container w3-margin-bottom" id="partner-img">
            <img src="./img/partner/USAID.png" class="w3-hover-opacity">
          </div>
          <div class="w3-third w3-container w3-margin-bottom" id="partner-img">
            <img src="./img/partner/SEAOHUN.png" class="w3-hover-opacity">
          </div>
          <div class="w3-third w3-container w3-margin-bottom" id="partner-img">
            <img src="./img/partner/OHW.png" class="w3-hover-opacity">
          </div>
        </div>
        <div class="w3-third w3-container w3-margin-bottom">
        </div>
      </div>
    </div>

    <div class="outer-container w3-center" id="intouch">
      <h1>Get In Touch</h1>
      <div class="w3-row-padding container-intouch">
        <div class="w3-third w3-container w3-margin-bottom" id="chat">
          <div class="w3-half" id="img-intouch">
            <img src="./img/intouch/chat.png">
          </div>
          <div class="w3-half" id="text-intouch">
            <p>847-939-9359</p>
          </div>
        </div>
        <div class="w3-third w3-container w3-margin-bottom" id="messages">
          <div class="w3-half" id="img-intouch">
            <img src="./img/intouch/message.png">
          </div>
          <div class="w3-half" id="text-intouch">
            <p>montreal@mail.com</p>
          </div>
        </div>
        <div class="w3-third w3-container w3-margin-bottom" id="location">
          <div class="w3-half" id="img-intouch">
            <img src="./img/intouch/globe.png">
          </div>
          <div class="w3-half" id="text-intouch">
            <p>4116 Oak Avenue</br>Chicago, IL 60607</p>
          </div>
        </div>
      </div>
      <div class="w3-row-padding w3-padding-large">
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
      <a href="https://www.facebook.com/indohun.id/">
        <i class="fa fa-facebook-official w3-hover-opacity" id="icon-social"></i>
      </a>
      <a href="https://twitter.com/Indohun">
        <i class="fa fa-twitter w3-hover-opacity" id="icon-social"></i>
      </a>
      <a href="#">
        <i class="fa fa-dribbble w3-hover-opacity" id="icon-social"></i>
      </a>
      <a href="#">
        <i class="fa fa-google-plus w3-hover-opacity" id="icon-social"></i>
      </a>
      <a href="https://www.youtube.com/user/INDONESIAOHUN">
        <i class="fa fa-youtube w3-hover-opacity" id="icon-social"></i>
      </a>
    </div>
  </footer>
  <script src="./js/jquery-1.10.2.min.js"></script>
  <script src="./js/numscroller-1.0.js"></script>
  <script src="./js/prism.js"></script>
  <script src="./js/navbar.js"></script>
  <script src="./js/accordion.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script src="./js/setting-carousel.js"></script>
</body>

</html>