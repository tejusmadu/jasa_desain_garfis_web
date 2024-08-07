<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Card pet </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .card {
            margin: 20px;
        }
        .card img {
            object-fit: cover;
            height: 150px; /* Mengurangi tinggi gambar */
        }

        /* Custom styles */
        body {
            padding-top: 60px;
        }
        .service-card {
            margin-bottom: 30px;
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
            color: rgb(255, 255, 255); /* Set text color to black */
        }
        /* Ensure all card images have consistent dimensions */
        .card-img-top {
            object-fit: cover;
            height: 150px; /* Adjust this value to fit your design */
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
            <a class="nav-link" href="home"><i class="fas fa-home"></i> <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="home"><i class="fas fa-cogs"></i> Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-envelope"></i> Pesan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Keranjang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-user"></i> Profil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  
<footer class="bg-dark text-white text-center py-2">
    <div class="container">
        <p>&copy; RZ7 2024 </p>
    </div>
</footer>
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
