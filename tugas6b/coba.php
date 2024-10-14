<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    
    <style>
        body {
            background-color: #f8f9fa; /* Light background color */
        }

        h2 {
            margin-bottom: 20px; /* Space below the title */
            font-weight: bold; /* Bold title */
        }

        .table {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow for depth */
        }

        .btn-warning {
            transition: background-color 0.3s; /* Smooth transition for hover */
        }

        .btn-warning:hover {
            background-color: #d39e00; /* Darker on hover */
        }

        .btn-danger {
            transition: background-color 0.3s; /* Smooth transition for hover */
        }

        .btn-danger:hover {
            background-color: #c82333; /* Darker on hover */
        }

        .action-buttons a {
            margin-right: 5px; /* Space between buttons */
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Data Mahasiswa</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>Actions</th> <!-- New Actions Column -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>123456789012</td>
                <td>John Doe</td>
                <td>Jalan Mawar No. 1, Bandung, Jawa Barat, Indonesia</td>
                <td>1999-05-01</td>
                <td>L</td>
                <td>john.doe@example.com</td>
                <td class="action-buttons">
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>987654321098</td>
                <td>Jane Smith</td>
                <td>Jalan Melati No. 2, Jakarta, DKI Jakarta, Indonesia</td>
                <td>2000-07-15</td>
                <td>P</td>
                <td>jane.smith@example.com</td>
                <td class="action-buttons">
                    <a href="#" class="btn btn-warning btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

<!-- Bootstrap JS (with Popper.js included) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script></body>
</html>
