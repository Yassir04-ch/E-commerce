<?php
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="">MySite</a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <span class="nav-link">Hello, <?= $_SESSION['firstname']; ?>!</span>
                </li>
            </ul>
        </div>
    </div>
</nav>

 <div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-body text-center">
            <p class="lead">You are now logged in. Enjoy your dashboard.</p>
            <a href="/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>
</div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
