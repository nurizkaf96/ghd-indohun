<!DOCTYPE html>
<html>
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
<link rel="stylesheet" href="./css/intouch.css">
<link rel="stylesheet" href="./css/footer.css">
<link rel="stylesheet" href="./css/prism.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>
  <!-- Navigation Bar -->
  <div class="navigation-bar">
    <a href="#" class="w3-logo w3-left w3-mobile">Global</br>Health</br>Diplomacy</a>
    <a href="#intouch" class="menu-bar w3-right w3-button w3-mobile">Contact</a>
    <a href="#partners" class="menu-bar w3-right w3-button w3-mobile">Partners</a>
    <a href="#events" class="menu-bar w3-right w3-button w3-mobile">Events</a>
    <a href="#news" class="menu-bar w3-right w3-button w3-mobile">News</a>
    <a href="#register" class="menu-bar w3-right w3-button w3-mobile">Register</a>
    <a href="#programs" class="menu-bar w3-right w3-button w3-mobile">Programs</a>
    <a href="#about" class="menu-bar w3-right w3-button w3-mobile">About</a>
  </div>
  <!-- Header -->
  <header class="header-container w3-content" style="max-width:1500px;">
    <div class="w3-display-left w3-padding w3-col l6 m8">
      <div class="header-inner-container">
        <p>DIPLOMACY</br>NEEDS</br>ACTION</p>
        <div id="con1" class="training-container w3-white">
          <p>GHD Training</p>
        </div>
        <div id="con2" class="training-container w3-white">
          <p>25-29 August, 2018</p>
          <p>Bandung, Indonesia</p>
        </div>
        <div class="training-container w3-red">
          <a href="#" id="con3">
            <p>Register Now!</p>
          </a>
        </div>
      </div>
    </div>
    <img class="header-image" src="./img/headerimg.jpg" alt="Header Image">
  </header>

  <!-- Content -->
  <div class="content">

    <!-- Programs -->
    <div class="outer-container w3-center" id="programs">
      <h1><b>Programs</b></h1>
      <div class="w3-padding-large" id="padding-image">
        <div class="w3-third w3-margin-bottom padding-program-card">
          <img src="./img/card1.jpg" style="width:100%; height: 15rem" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <h3><b>Executive</b></h3>
            <p>High-level position of Health and International relation Professionals</p>
          </div>
          <div class="w3-container w3-red">
            <a onclick="executiveFunc()" href="javascript:void(0)" id="programExecutive">
              <p>Learn More</p>
            </a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom padding-program-card">
          <img src="./img/card2.jpg" style="width:100%; height: 15rem" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <h3><b>Student</b></h3>
            <p>Design for University Student from second year and up</p>
          </div>
          <div class="w3-container w3-red">
            <a onclick="studentFunc()" href="javascript:void(0)" id="programStudent">
              <p>Coming Soon</p>
            </a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom padding-program-card">
          <img src="./img/card1.jpg" style="width:100%; height: 15rem" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <h3><b>Intermediate</b></h3>
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
      <div class="executive-training-container w3-row-padding">
        <div class="w3-third image-content-executive">
          <img src="./img/card1.jpg" class="w3-hover-opacity">
        </div>
        <div class="w3-twothird" id="inner-executive-training">
          <h1><b>EXECUTIVE TRAINING</b></h1>
          <p><b>Requirements:</b></p>
          <p>Age</p>
          <p>Profession</p>
          <p>Degree</p>
          </br>
          <p><b>How to Register:</b></p>
          <p>1. Please make sure to complete all the application and requirements form</p>
          <p>2. Send the form to ghd2018@gmail.com with [GDH 2018] Application form_scholarship as a subject</p>
          <p>3. The announcement will be uploaded in www.GHD.org</p>
          <p>4. Deadline : April 30, 2018</p>
          </br>
          <p>Download booklet : <a href="#">click here</a></p>
        </div>
      </div>
    </div>

    <div id="contentStudent" class="outer-container w3-hide w3-animate-opacity w3-bar-block">
      <div class="student-training-container w3-row-padding">
        <div class="w3-third image-content-student">
          <img src="./img/card1.jpg" class="w3-hover-opacity">
        </div>
        <div class="w3-twothird" id="inner-student-training">
          <h1><b>STUDENT TRAINING</b></h1>
          <p><b>Requirements:</b></p>
          <p>Age</p>
          <p>Profession</p>
          <p>Degree</p>
          </br>
          <p><b>How to Register:</b></p>
          <p>1. Please make sure to complete all the application and requirements form</p>
          <p>2. Send the form to ghd2018@gmail.com with [GDH 2018] Application form_scholarship as a subject</p>
          <p>3. The announcement will be uploaded in www.GHD.org</p>
          <p>4. Deadline : April 30, 2018</p>
          </br>
          <p>Download booklet : <a href="#">click here</a></p>
        </div>
      </div>
    </div>

    <div id="contentIntermediate" class="outer-container w3-hide w3-animate-opacity w3-bar-block">
      <div class="intermediate-training-container w3-row-padding">
        <div class="w3-third image-content-intermediate">
          <img src="./img/card1.jpg" class="w3-hover-opacity">
        </div>
        <div class="w3-twothird" id="inner-intermediate-training">
          <h1><b>INTERMEDIATE TRAINING</b></h1>
          <p><b>Requirements:</b></p>
          <p>Age</p>
          <p>Profession</p>
          <p>Degree</p>
          </br>
          <p><b>How to Register:</b></p>
          <p>1. Please make sure to complete all the application and requirements form</p>
          <p>2. Send the form to ghd2018@gmail.com with [GDH 2018] Application form_scholarship as a subject</p>
          <p>3. The announcement will be uploaded in www.GHD.org</p>
          <p>4. Deadline : April 30, 2018</p>
          </br>
          <p>Download booklet : <a href="#">click here</a></p>
        </div>
      </div>
    </div>

    <!-- Experience -->
    <div class="outer-container w3-center" id="experience">
      <h1><b>The Experience</b></h1>
      <h4><b>Global Health Diplomacy (GHD) Training</b> is a three to five-day intensive program that combine 40 percent theory and 60 percent practice.</h4>
      <h6> This training prepares participants with negotiation and policy skills to help them in influencing people, collaboration, and decision making at national and international level.</h6>
      <div id="number-container">
        <div class="w3-quarter">
          <div id="number" class="w3-row w3-margin-bottom w3-center">
            <span class='numscroller' data-min='0' data-max='28' data-delay='1' data-increment='1'>28</span>
            <h4><b>institutions</b></h4>
            <div class="garisbawah"></div>
            <p>Representatives of national & international institutions involved</p>
          </div>
        </div>
        <div class="w3-quarter">
          <div id="number" class="w3-row w3-margin-bottom">
            <span class='numscroller' data-min='0' data-max='3' data-delay='1' data-increment='1'>3</span>
            <h4><b>days</b></h4>
            <div class="garisbawah"></div>
            <p>Multi-Stage Negotiation Simulation sessions</p>
          </div>
        </div>
        <div class="w3-quarter">
          <div id="number" class="w3-row w3-margin-bottom">
            <span class='numscroller' data-min='0' data-max='12' data-delay='1' data-increment='1'>12</span>
            <h4><b>classes</b></h4>
            <div class="garisbawah"></div>
            <p>Global health and diplomatic practice</p>
          </div>
        </div>
        <div class="w3-quarter">
          <div id="number" class="w3-row w3-margin-bottom">
            <span class='numscroller' data-min='0' data-max='9' data-delay='1' data-increment='1'>9</span>
            <h4><b>speakers</b></h4>
            <div class="garisbawah"></div>
            <p>International level</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Training -->
    <div class="outer-container" id="training">
      <div id="training-container">
        <div class="w3-half" id="image-training">
          <img src="./img/training.jpg" class="w3-hover-opacity">
        </div>
        <div class="w3-half" id="inner-training">
          <h1><b>GHD</b></h1>
          <h1><b>Training</b></h1>
          <h1><b>2017</b></h1>
          <h6>Diplomacy is undergoing profound changes in the 21st century – and global health is one of the areas where this is most apparent. The negotiation processes that shape and manage the global policy environment for health are increasingly conducted not only between sectors.</h6>
          <button type="button" class="w3-button w3-red w3-margin-top">Learn More</button>
        </div>
      </div>
    </div>

    <!-- Be Our Partner -->
    <div class="outer-container" id="be-ourpartner">
      <div id="be-ourpartner-container">
        <div class="w3-half" id="inner-be-ourpartner">
          <h1><b>Be</b></h1>
          <h1><b>Our</b></h1>
          <h1><b>Partner</b></h1>
          <h6>Are you the best candidate for our future Global Health Diplomacy Training? Join our Team as Speaker or Volunteer. Also, we are happy to open donate or grant from everyone, particularly Health Philanthropy for Global Health development.</h6>
          <button type="button" class="w3-button w3-red w3-margin-top">Learn More</button>
        </div>
        <div class="w3-half" id="image-be-ourpartner">
          <img src="./img/bop.jpg" class="w3-hover-opacity">
        </div>
      </div>
    </div>

    <!-- News -->
    <div class="outer-container w3-center" id="news">
      <h1><b>News</b></h1>
      <div class="w3-padding-large" id="padding-image">
        <div class="w3-third w3-margin-bottom padding-program-card">
          <div class="w3-container w3-white" id="text-news">
            <p>15 Feb 2018</p>
            <h3><b>Spotlight</b></h3>
            <p>Lorem ipsum To foster INDOHUN</p>
          </div>
          <img src="./img/card1.jpg" style="width:100%; height: 15rem" class="w3-hover-opacity">
          <div class="w3-container w3-red">
            <a href="#" id="con3">
              <p>Learn More</p>
            </a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom padding-program-card">
          <div class="w3-container w3-white" id="text-news">
            <p>15 Feb 2018</p>
            <h3><b>World</b></h3>
            <p>Lorem ipsum To foster INDOHUN sustainability, it is</p>
          </div>
          <img src="./img/card2.jpg" style="width:100%; height: 15rem" class="w3-hover-opacity">
          <div class="w3-container w3-red">
            <a href="#" id="con3">
              <p>Learn More</p>
            </a>
          </div>
        </div>
        <div class="w3-third w3-margin-bottom padding-program-card">
          <div class="w3-container w3-white" id="text-news">
            <p>15 Feb 2018</p>
            <h3><b>In The Media</b></h3>
          </div>
          <img src="./img/card1.jpg" style="width:100%; height: 15rem" class="w3-hover-opacity">
          <div class="w3-container w3-red">
            <a href="#" id="con3">
              <p>Learn More</p>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Our Partner -->
    <div class="outer-container w3-center" id="partner">
      <h1><b>Our Partner</b></h1>
      <div class="w3-row-padding w3-padding-large">
        <div class="w3-third w3-container w3-margin-bottom">
        </div>
        <div class="w3-third w3-container w3-margin-bottom w3-center">
          <div class="w3-third w3-container w3-margin-bottom">
            <img src="./img/usaid.png" alt="usaid" style="width: 8rem; height: 4rem;" class="w3-hover-opacity">
          </div>
          <div class="w3-third w3-container w3-margin-bottom">
            <img src="./img/seaohun.png" alt="usaid" style="width: 6rem; height: 4rem;" class="w3-hover-opacity">
          </div>
          <div class="w3-third w3-container w3-margin-bottom">
            <img src="./img/onehealth.png" alt="usaid" style="width: 8rem; height: 4rem;" class="w3-hover-opacity">
          </div>
        </div>
        <div class="w3-third w3-container w3-margin-bottom">
        </div>
      </div>
    </div>

    <div class="outer-container w3-center" id="intouch">
      <h1><b>Get In Touch</b></h1>
      <div class="w3-row-padding container-intouch">
        <div class="w3-third w3-container w3-margin-bottom" id="chat">
          <div class="w3-half">
            <img src="./img/chat.png" style="width: 4rem">
          </div>
          <div class="w3-half">
            <p>847-939-9359</p>
          </div>
        </div>
        <div class="w3-third w3-container w3-margin-bottom" id="messages">
          <div class="w3-half">
            <img src="./img/message.png" style="width: 4rem">
          </div>
          <div class="w3-half">
            <p>montreal@mail.com</p>
          </div>
        </div>
        <div class="w3-third w3-container w3-margin-bottom" id="location">
          <div class="w3-half">
            <img src="./img/globe.png" style="width: 4rem">
          </div>
          <div class="w3-half">
            <p>4116 Oak Avenue</br>Chicago, IL 60607</p>
          </div>
        </div>
      </div>
      <div class="w3-row-padding w3-padding-large">
        <a href="https://indohun.org/">
          <button type="button" class="w3-button w3-red w3-margin-top">Visit INDOHUN website</button>
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
  <script type="text/javascript">
    // Accordion 
    function executiveFunc() {
        var x = document.getElementById("contentExecutive");
        var y = document.getElementById("contentStudent");
        var z = document.getElementById("contentIntermediate");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            y.className = y.className.replace(" w3-show", "");
            z.className = z.className.replace(" w3-show", "");
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    function studentFunc() {
        var x = document.getElementById("contentStudent");
        var y = document.getElementById("contentExecutive");
        var z = document.getElementById("contentIntermediate");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            y.className = y.className.replace(" w3-show", "");
            z.className = z.className.replace(" w3-show", "");
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    function interFunc() {
        var x = document.getElementById("contentIntermediate");
        var y = document.getElementById("contentStudent");
        var z = document.getElementById("contentExecutive");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
            y.className = y.className.replace(" w3-show", "");
            z.className = z.className.replace(" w3-show", "");
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
  </script>
</body>
</html>