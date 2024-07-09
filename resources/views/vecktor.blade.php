<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Card Pet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        .card {
            margin: 20px;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .card img {
            object-fit: cover;
            width: 100%;
            height: 200px; /* Adjust the height as needed */
        }

        /* Custom styles */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding-top: 60px;
        }
        .container {
            flex: 1;
        }
        .service-card {
            margin-bottom: 30px;
        }
        /* Adjust footer padding and background size */
        footer.py-2 {
            padding-top: 5px;
            padding-bottom: 5px;
            background-color: transparent !important; /* Set background to transparent */
        }
        footer p {
            margin: 0;
            color: #000; /* Set text color to black */
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
        /* Add shadow effect to cards */
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); /* Change the values as needed */
            transition: 0.3s; /* Add transition effect */
        }
        /* On mouse-over, add a deeper shadow */
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2); /* Change the values as needed */
        }
        /* Style for the "Pesan" button */
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            padding: 1.25rem;
        }
        .pesan-btn {
            margin-top: auto; /* Push the button to the bottom of the card body */
            background-color: #007bff;
            color: #fff;
            border: none;
            text-align: center;
            padding: 0.5rem;
            border-radius: 4px;
            display: inline-block;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }
        .pesan-btn i {
            margin-right: 5px;
        }
        .pesan-btn:hover {
            background-color: #0056b3;
            text-decoration: none;
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
        <ul class="navbar-nav ms-auto">
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
  
  <div class="container mt-4">
    <h2 class="text-center">Layanan Jasa Desain Grafis</h2>
    <div class="row">
        @foreach($images as $image)
            <div class="col-md-4 mb-4">
                <div class="card h-100" data-toggle="modal" data-target="#imageModal{{ $loop->index }}">
                    <img src="{{ asset($image->image_path) }}" class="card-img-top" alt="{{ $image->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $image->title }}</h5>
                        <p class="card-text">{{ $image->description }}</p>
                        <a href="#" class="pesan-btn"><i class="fas fa-comment"></i> Pesan Sekarang</a>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="imageModal{{ $loop->index }}" tabindex="-1" role="dialog"
                    aria-labelledby="imageModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="imageModalLabel">{{ $image->title }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset($image->image_path) }}" class="img-fluid" alt="{{ $image->title }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  </div>

  <footer class="bg-dark text-white text-center py-2">
    <div class="container">
        <p>&copy; RZ7 2024</p>
    </div>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
