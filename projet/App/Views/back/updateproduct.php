<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modifier Produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Modifier Produit</h2>
    <form>
        <div class="mb-3">
            <label for="name" class="form-label">Nom du Produit</label>
            <input type="text" class="form-control" id="name" value="Nom exemple">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="4">Description exemple</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prix</label>
            <input type="number" class="form-control" id="price" step="0.01" value="199.99">
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" value="10">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Catégorie</label>
            <select class="form-select" id="category">
                <option>Ordinateurs</option>
                <option selected>Smartphones</option>
                <option>Accessoires</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image du Produit</label>
            <input type="file" class="form-control" id="image">
            <img src="example.jpg" alt="Produit" width="100" class="mt-2">
        </div>
        <button type="submit" class="btn btn-success">Modifier Produit</button>
    </form>
</div>
</body>
</html>
