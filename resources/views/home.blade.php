<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RZ7</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <style>
    /* Custom styles */
    body {
      padding-top: 60px;
    }
    .service-card {
      margin-bottom: 30px;
      display: flex;
      flex-direction: column;
      opacity: 0; /* Initial state for animation */
    }
    .card-body {
      flex: 1;
    }
    /* Adjust footer padding and background size */
    footer.py-2 {
      padding-top: 5px;
      padding-bottom: 5px;
    }
    /* Background image for header */
    header.jumbotron {
      background-image: url('{{ asset('image/ryan.jpg') }}'); /* Replace this URL with the actual path to your image */
      background-size: contain; /* Ensure the entire image fits within the header */
      background-repeat: no-repeat; /* Prevent image from repeating */
      background-position: center;
      color: transparent; /* Set text color to transparent */
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6); /* Add shadow effect to text */
      background-color: white; /* Change background color to white */
    }
    header.jumbotron h1,
    header.jumbotron p {
      color: rgb(255, 255, 255); /* Set text color to white */
    }
    /* Ensure all card images have consistent dimensions */
    .card-img-top {
      object-fit: cover;
      height: 200px; /* Adjust this value to fit your design */
    }
    /* Add shadow effect to cards */
    .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); /* Change the values as needed */
      transition: 0.3s; /* Add transition effect */
    }
    /* On mouse-over, add a deeper shadow */
    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2); /* Change the values as needed */
    }
    /* Updated CSS for about-section */
    .about-section {
      padding: 80px 0; /* Padding for top and bottom */
      background-color: #f8f9fa; /* Background color */
      text-align: center; /* Center-align text */
    }
    .about-section.animate__animated.animate__fadeInUp {
      visibility: visible !important; /* Ensure visibility */
      animation: fadeInUp 0.75s forwards; /* Use Animate.css animation */
    }
    .about-section .section-heading {
      font-size: 2.5rem; /* Font size for section heading */
      color: #343a40; /* Color for section heading */
      margin-bottom: 30px; /* Margin bottom for section heading */
    }
    .about-section p {
      font-size: 1.1rem; /* Font size for paragraph */
      line-height: 1.8; /* Line height for paragraph */
      color: #6c757d; /* Color for paragraph */
      max-width: 800px; /* Maximum width for paragraph */
      margin: 0 auto; /* Center-align paragraph */
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">JASA DESAIN GRAFIS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link animate__animated" href="#"><i class="fas fa-home"></i> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link animate__animated" href="#services"><i class="fas fa-cogs"></i> Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link animate__animated" href="#"><i class="fas fa-envelope"></i> Pesan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link animate__animated" href="#"><i class="fas fa-shopping-cart"></i> Keranjang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link animate__animated" href="#"><i class="fas fa-user"></i> Profil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 <!-- Hero Section -->
<header class="jumbotron">
  <div class="container text-center">
    <h1 class="display-4">WELCOME TO WEBSITE</h1>
    <p class="lead">Layanan jasa desain grafis Ryan vaxel.</p>
  </div>
</header>
<!-- About Section -->
<section id="about" class="about-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Tentang Kami</h2>
        <p class="mb-5">Kami adalah tim desainer grafis profesional yang berdedikasi untuk membantu Anda mewujudkan visi kreatif Anda. Dengan pengalaman bertahun-tahun dalam industri desain, kami menawarkan layanan desain yang beragam mulai dari desain vektor, logo, hingga ilustrasi digital. Kami bangga dengan kualitas pekerjaan kami dan berkomitmen untuk memberikan hasil terbaik bagi setiap klien.</p>
      </div>
    </div>
  </div>
</section>
<!-- Services Section -->
<section id="services" class="container">
  <div class="row">
    <div class="col-md-4 d-flex align-items-stretch">
      <div class="card service-card animate__animated">
        <img src="image/vecktor.png" class="card-img-top" alt="Desain Vecktor">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Desain Vecktor</h5>
          <p class="card-text">
            <strong>Deskripsi Layanan:</strong> 
            Temukan desainer grafis berbakat untuk proyek Anda. Kami menyediakan layanan desain vektor profesional yang dapat memenuhi semua kebutuhan kreatif Anda.
          </p>
          <a href="vecktor" class="btn btn-primary mt-auto">Browse</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex align-items-stretch">
      <div class="card service-card animate__animated">
        <img src="image/pet.jpg" class="card-img-top" alt="Desain Vecktor Pet">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Desain Vecktor Pet</h5>
          <p class="card-text">
            <strong>Deskripsi Layanan:</strong> 
            Apakah Anda ingin mengabadikan momen spesial dengan hewan peliharaan kesayangan Anda dalam bentuk seni digital yang elegan dan tahan lama? Kami hadir untuk mewujudkan keinginan Anda melalui layanan desain vektor hewan peliharaan profesional kami!
          </p>
          <a href="vecktor" class="btn btn-primary mt-auto">Browse</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 d-flex align-items-stretch">
      <div class="card service-card animate__animated">
        <img src="image/logo.jpg" class="card-img-top" alt="Desain Logo">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title">Desain Logo</h5>
          <p class="card-text">
            <strong>Deskripsi Layanan:</strong> 
            Dapatkan logo profesional yang mencerminkan identitas merek Anda. Kami menawarkan layanan desain logo yang akan membantu bisnis Anda menonjol di pasar yang kompetitif.
          </p>
          <a href="logo" class="btn btn-primary mt-auto">Browse</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Footer -->
<footer class="bg-dark text-white text-center py-2">
  <div class="container">
    <p>&copy; RZ7 2024 </p>
  </div>
</footer>
<!-- Bootstrap and dependencies JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.js"></script>
<script>
  $(document).ready(function() {
    // Handle click event on nav-links
    $('.nav-link').on('click', function() {
      $(this).addClass('animate__bounce'); // Add bounce animation class
      var navLink = $(this);
      setTimeout(function() {
        navLink.removeClass('animate__bounce'); // Remove bounce animation class after animation completes
      }, 1000); // Adjust the timeout value as needed
    });
  });
  
  // jQuery to detect scroll and add animation class
  $(window).on('scroll', function() {
    // Adding animation to the About section
    var aboutSection = $('#about');
    var aboutSectionPosition = aboutSection.offset().top;
    var scrollPosition = $(window).scrollTop() + $(window).height() - 100;

    if (scrollPosition > aboutSectionPosition) {
      aboutSection.addClass('animate__fadeInUp');
      // Remove the class after animation is complete
      aboutSection.one('animationend', function() {
        aboutSection.removeClass('animate__fadeInUp');
      });
    }

    // Adding animation to service cards
    $('.service-card').each(function() {
      var cardPosition = $(this).offset().top;
      if (scrollPosition > cardPosition) {
        $(this).addClass('animate__fadeInUp');
        $(this).css('opacity', 1); // Make sure the card is visible after animation
      }
    });
  });
</script>
</body>
</html>
