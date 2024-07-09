<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
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
            background-size: cover; /* Ensure the entire image fits within the header */
            background-repeat: no-repeat; /* Prevent image from repeating */
            background-position: center;
            color: white; /* Set text color to white */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6); /* Add shadow effect to text */
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}"><i class="fas fa-cogs"></i> Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('messages.index') }}"><i class="fas fa-envelope"></i> Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i> Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user"></i> Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <h1>Messages</h1>
                @foreach($messages as $message)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $message->user_id === Auth::id() ? 'You' : $message->user->name }}</h5>
                            <p class="card-text">{{ $message->message }}</p>
                            @if($message->image_path)
                                <img src="{{ asset($message->image_path) }}" class="card-img-top" alt="Image">
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Send a Message</h5>
                        <form action="{{ route('messages.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="image">Image (optional)</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-2">
        <div class="container">
            <p>&copy; RZ7 2024 </p>
        </div>
    </footer>

    <!-- Bootstrap JS bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
