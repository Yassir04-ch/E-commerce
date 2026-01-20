<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>E-Shop - Accueil</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">E-Shop</a>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item"><a class="nav-link" href="../../authoffice/login.php">Login</a></li>
      <li class="nav-item"><a class="nav-link" href="../../authoffice/register.php">Register</a></li>
      <li class="nav-item"><a class="nav-link" href="cart.php">Panier</a></li>
    </ul>
  </div>
</nav>

<div class="container mt-5">
  <h1>Produits disponibles</h1>
  <div class="row">
    <div class="col-md-3 mb-4">
      <div class="card">
        <img src="../../assets/img/laptop.jpg" class="card-img-top" alt="Produit">
        <div class="card-body">
          <h5 class="card-title">Ordinateur Portable</h5>
          <p class="card-text">$1200</p>
          <a href="product.php?id=1" class="btn btn-primary">Voir produit</a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
