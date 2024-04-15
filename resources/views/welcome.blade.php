<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Porfolio</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">
      @foreach($user as $name)
      <h1><a href="#">{{ucwords($name->name)}}</a></h1>
      @endforeach
      <h2>I'm a <span>Web Developer</span></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#blogs">Blog</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
          <li><a class="nav-link" href="{{route('login')}}">Login</a></li>
          <li><a class="nav-link" href="{{route('register')}}">Register</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      
      <!-- .navbar -->

      <div class="social-links">
        <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/?hl=en" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header>
  
  <!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/wil.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3></h3>
          @foreach($about as $abouts)
      <!-- <div class="section-title">
        <p><em>Description:</em></p>
      </div><br> -->

            
          <h4>{{$abouts->description}}</h4>
          <div class="row">
            <div class="col-lg-6">
              <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong> <span>{{$abouts->name}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$abouts->birthday}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Place of Birth:</strong> <span>{{$abouts->place_of_birth}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$abouts->age}}</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Address:</strong> <span>{{$abouts->address}}</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$abouts->phone}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$abouts->email}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$abouts->degree}}</span></li>
              </ul>
            </div>
          </div>
          
        </div>
      </div>

    </div><!-- End About Me -->

    

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2>Skills</h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

        @foreach($skill as $skills)
          <div class="progress">
            <span class="skill">{{$skills->name}} <i class="val">{{$skills->percentage}}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{$skills->percentage}}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        @endforeach
        </div>  

      </div>

    </div><!-- End Skills -->

    
  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Objective</h3>
          <div class="resume-item pb-0">
            <h4>{{$abouts->name}}</h4>
            <p><em>{{$abouts->description}}</em></p>
            <p>
            <!-- @endforeach -->
            </p>
          </div>
           
          <h4 class="resume-title">Education Attainment</h4>
      @foreach($education as $educations)
          <div class="resume-item">
            <h4>{{$educations->grade_level}}</h4>
            <h5>{{$educations->year_graduated}}</h5>
            <p><em>{{$educations->name_of_school}}</em></p>
            <p>{{$educations->details}}</p>
          </div>
          @endforeach
          

          <h3 class="resume-title">Experience</h3>
          @foreach($experience as $experiences)
          <div class="resume-item">
            <h4>{{$experiences->title}}</h4>
            <h5>{{$experiences->year_created}}</h5>
            <p><em>{{$experiences->description}}</em></p>
          </div>
          @endforeach
        </div>
      </div>

    </div>
</section>

  <!-- End Resume Section -->



  <!-- ======= Blogs Section ======= -->
  
  <section id="blogs" class="blogs">
    <div class="container">

      <div class="section-title">
        <h2>Blogs</h2>
        <p>My Blogs</p>
      </div>

      <div class="row blog-container">
        @foreach($blog as $blogs)
        <div class="col-lg-6 col-md-6 blog-item">
          <div class="blog-wrap">
            <!-- Add inline styles to ensure the images have the same size -->
            <img src="{{ asset('storage/'.$blogs->blog_image) }}" class="img-fluid" alt="Blog Image" style="width: 100%; height: 100%; object-fit: cover;">
            <div class="blog-info">
              <h4>{{$blogs->title}}</h4>
              <p>{{$blogs->date}}</p>
              <p>{{$blogs->details}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
</section>

  <!-- End Blogs Section -->

  <!-- Past Work Section -->

 
  <!-- End Past Work Section -->



  <!-- ======= Webinar Section ======= -->
  


  <section id="webinar" class="webinar">
    <div class="container">

      <div class="section-title">
        <h2>Webinar</h2>
        <p>Webinars</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="webinar-title">Topic</h3>
          <div class="webinar-item pb-0">
          <p><em>Join us for an engaging webinar where we'll explore strategies for creating captivating designs that resonate with your audience.</em></p> 
          </div>
          
          <h3 class="webinar-title">Speaker</h3>
          <div class="webinar-item">
            <p><em>Award-winning Graphic Designer with expertise in user-centered design and engagement strategies.</em></p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="webinar-title">Agenda</h3>
          <div class="webinar-item">
            <p><em>Explore the psychology behind engaging designs and how to tailor your content to captivate your audience.</em></p>
          </div>
          <h3 class="webinar-title">Date</h3>
          <div class="webinar-item">
          <p><em>Date: April 30, 2024</em></p>

          </div>
        </div>
      </div>
      
    </div>
  </section>









  <!-- End Webinar Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
  <div class="container">

    <div class="section-title">
      <h2>Contact</h2>
      <p>Contact Me</p>
    </div>

    <div class="row mt-2">
      <div class="col-md-6 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-map"></i>
          <h3>My Address</h3>
          <p>Catandog 1 Hilongos Leyte</p>
        </div>
      </div>

      <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-share-alt"></i>
          <h3>Social Profiles</h3>
          <div class="social-links">
            <a href="https://www.facebook.com/" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/?hl=en" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>
      </div>

      <div class="col-md-6 mt-4 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-envelope"></i>
          <h3>Email Me</h3>
          <p>w.santiago091601@gmail.com</p>
        </div>
      </div>

      <div class="col-md-6 mt-4 d-flex align-items-stretch">
        <div class="info-box">
          <i class="bx bx-phone-call"></i>
          <h3>Call Me</h3>
          <p>0938 035 7529</p>
        </div>
      </div>
    </div>

    <form name="submit-to-google-sheet" action="forms/contact.php" method="post" role="form" class="php-email-form mt-4">
      <div class="row">
        <div class="col-md-6 form-group">
          <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First Name" required>
        </div>
        <div class="col-md-6 form-group mt-3 mt-md-0">
          <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required>
        </div>
      </div>
      <div class="form-group mt-3">
        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
      </div>
      <div class="form-group mt-3">
        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
      </div>
      <div class="my-3">
        <div class="error-message"></div>
      </div>
      <div class="text-center">
        <button type="submit">Send Message</button>
      </div>
    <span id="msg"></span>

    </form>


    <script src="assets/js/main.js"></script>
    <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbw4YAHSVl_ldllMUNzWebtA0GkGRHLySIiCrJ-M9HLMBL7q_ATMdoC00-NPcHYjURKX3A/exec';
      const form = document.forms['submit-to-google-sheet'];
      const msg = document.getElementById("msg");

      form.addEventListener('submit', e => {
        e.preventDefault();
        fetch(scriptURL, { method: 'POST', body: new FormData(form) })
          .then(response => {
            msg.innerHTML = "Message sent successfully";
            setTimeout(function() {
              msg.innerHTML = "";
            }, 5000);
            form.reset();
          })
          .catch(error => console.error('Error!', error.message));
      });
    </script>
  </div>
</section>

  <!-- End Contact Section -->

 

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  
</body>

</html>