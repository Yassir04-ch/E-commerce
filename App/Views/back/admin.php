<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="dashboard.php">Admin</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="../../authoffice/logout.php">Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <h1>Dashboard</h1>
  <div class="row mt-4">
    <div class="col-md-4">
      <a href="products.php" class="btn btn-primary w-100 mb-2">Gérer Produits</a>
    </div>
    <div class="col-md-4">
      <a href="users.php" class="btn btn-secondary w-100 mb-2">Gérer Utilisateurs</a>
    </div>
    <div class="col-md-4">
      <a href="orders.php" class="btn btn-success w-100 mb-2">Gérer Commandes</a>
    </div>
  </div>
</div>
</body>
</html>
