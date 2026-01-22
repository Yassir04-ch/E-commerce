<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ElectroPro | Products</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
    @keyframes glow {
        0%, 100% { box-shadow: 0 0 5px rgba(59, 130, 246, 0.5); }
        50% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.8); }
    }
    .product-card:hover { transform: translateY(-10px); animation: glow 2s infinite; }
    body { background-color: #0f172a; }
</style>
</head>
<body class="text-slate-200">

<nav class="bg-black/80 backdrop-blur-md border-b border-white/10 sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="#" class="text-2xl font-black tracking-tighter text-white italic">
            ELECTRO<span class="text-blue-500 underline decoration-blue-500 underline-offset-4">PRO</span>
        </a>
        <div class="flex items-center space-x-6">
            <?php if(isset($_SESSION['user'])): ?>
                <a href="logout.php" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-full text-xs font-bold uppercase tracking-widest">Logout</a>
            <?php else: ?>
                <a href="login.php" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-full text-xs font-bold uppercase tracking-widest">Login</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<main class="container mx-auto px-6 py-16">
    <div class="flex justify-between mb-6">
        <h2 class="text-xl font-bold text-white">Products</h2>
        <?php if($_SESSION['role'] == "admin"): ?>
            <a href="/add" class="bg-blue-600 hover:bg-blue-700 px-4 py-2 rounded text-white font-bold">Add Product</a>
        <?php endif; ?>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
        <?php if(!empty($products)): ?>
            <?php foreach($products as $product): ?>
                <div class="product-card bg-black border border-white/5 rounded-3xl overflow-hidden transition-all duration-500">
                    <div class="relative aspect-square overflow-hidden bg-slate-900/50">
                        <img src="<?= $product->getImage() ?>" class="w-full h-full object-cover">
                      <?php if(isset($_SESSION['role']) && $_SESSION['role'] === "admin"): ?>
                        <div class="absolute top-3 right-3 flex flex-col gap-2 z-20">
                            <a href="/updatepro?id=<?= $product->getId() ?>" 
                            class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-700 rounded-full flex items-center justify-center shadow-lg hover:scale-110 transform transition-all">
                                <i class="fas fa-pencil-alt text-white text-lg"></i>
                            </a>

                            <a href="/deleteProduct?id=<?= $product->getId() ?>" 
                            onclick="return confirm('Are you sure you want to delete this product?')" 
                            class="w-10 h-10 bg-gradient-to-br from-red-500 to-red-700 rounded-full flex items-center justify-center shadow-lg hover:scale-110 transform transition-all">
                                <i class="fas fa-trash-alt text-white text-lg"></i>
                            </a>
                        </div>
                    <?php endif; ?>

                    </div>

                    <div class="p-6 space-y-2">
                        <h3 class="text-white font-bold text-lg"><?= $product->getName()?></h3>
                        <p class="text-slate-400 text-sm line-clamp-2"><?= $product->getDescription() ?></p>
                        <div class="flex justify-between items-center mt-2">
                            <span class="text-white font-black"><?= number_format($product->getPrice(),2) ?> DH</span>
                            <span class="text-slate-400 text-xs">Stock: <?= (int)$product->getStock() ?></span>
                        </div>
                        <form action="/add-to-cart" method="POST">
                            <input type="hidden" name="product_id" value="<?= $product->getId() ?>">
                            <button 
                                type="submit"
                                class="w-full bg-white text-black font-black py-4 rounded-2xl text-xs uppercase tracking-[0.2em] hover:bg-blue-500 hover:text-white transition-all">
                                Add to Cart
                            </button>
                        </form>                  
                      </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-slate-400 text-center col-span-3">No products available</p>
        <?php endif; ?>
    </div>
</main>

<footer class="bg-black py-10 border-t border-white/5 text-center">
    <p class="text-slate-600 text-xs font-bold uppercase tracking-widest italic">ElectroPro Dark Series &copy; 2026</p>
</footer>

</body>
</html>
