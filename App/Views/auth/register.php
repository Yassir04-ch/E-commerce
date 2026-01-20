<div class="container mt-5">
    <h2>Créer un compte</h2>
    <form action="register_process.php" method="POST" class="w-50">
        <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-success">S'inscrire</button>
        <p class="mt-3">Déjà inscrit ? <a href="login.php">Se connecter</a></p>
    </form>
</div>
