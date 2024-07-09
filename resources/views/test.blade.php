<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #efefef;
        }

        .wrapper {
            display: flex;
        }

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #d2d2d2; /* New background color (abu abu) */
            width: 200px; /* Set the width of the sidebar */
        }

        .nav-link {
            color: #333;
        }

        .nav-link:hover {
            color: #007bff;
        }

        .main-content {
            margin-left: 200px;
            padding: 20px;
        }

        .form-container {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .form-control textarea {
            resize: none;
            height: 150px; /* Set a fixed height for the textarea */
        }

        .form-label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <nav class="sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard">
                            <i class="bi bi-speedometer2"></i> Dashboard <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacts">
                            <i class="bi bi-envelope"></i> Message
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="inputdata">
                            <i class="bi bi-file-earmark-plus"></i> Input Data 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="editgambar">
                            <i class="bi bi-pencil-square"></i> Edit Gambar
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-person"></i> Profil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login">
                            <i class="bi bi-box-arrow-right"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="main-content">
            <h1>Input Data</h1>
            <div class="form-container">
                <form action="{{ route('inputdata.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('inputdata') }}" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
