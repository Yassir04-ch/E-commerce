<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ElectroPro | Compact Store</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
<style>
    body { background-color: #05070a; font-family: 'Plus Jakarta Sans', sans-serif; color: #94a3b8; }
    
    .nav-blur { background: rgba(5, 7, 10, 0.85); backdrop-filter: blur(15px); }
    .product-card {
        background: #0f1219;
        border: 1px solid rgba(255, 255, 255, 0.05);
        transition: all 0.3s ease;
    }
    .product-card:hover {
        border-color: #3b82f6;
        transform: translateY(-5px);
    }
    
    .image-zoom { transition: transform 0.5s ease; }
    .product-card:hover .image-zoom { transform: scale(1.05); }

    .btn-cart {
        background: #1e293b;
        color: white;
        transition: all 0.2s;
    }
    .btn-cart:hover { background: #3b82f6; }
</style>
</head>
<body class="antialiased">

<nav class="nav-blur sticky top-0 z-[100] border-b border-white/5">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <a href="/category" class="text-lg font-extrabold tracking-tighter text-white">
            YASSIR<span class="text-blue-500">-TECH</span>
        </a>
        <div class="flex items-center gap-6">
            <a href="/card" class="text-slate-400 hover:text-white transition-colors relative">
                <i class="fas fa-shopping-cart"></i>
                <span class="absolute -top-2 -right-2 bg-blue-600 text-[9px] w-3.5 h-3.5 flex items-center justify-center rounded-full text-white">3</span>
            </a>
            <?php if(isset($_SESSION['role'])): ?>
                <a href="/logout" class="text-[10px] font-bold uppercase tracking-wider hover:text-red-500">Exit</a>
            <?php else: ?>
                <a href="/login" class="text-[10px] font-bold uppercase tracking-wider text-white">Sign In</a>
            <?php endif; ?> 
        </div>
    </div>
</nav>

<main class="container mx-auto px-4 py-10">
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-2xl font-bold text-white">Recent Tech</h1>
        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == "admin"): ?>
            <a href="/add" class="text-[10px] bg-blue-600/10 text-blue-500 border border-blue-500/20 px-4 py-1.5 rounded-md font-bold uppercase hover:bg-blue-600 hover:text-white transition">Add</a>
        <?php endif; ?>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4">
        <?php if(!empty($products)): ?>
            <?php foreach($products as $product): ?>
                <div class="product-card rounded-2xl overflow-hidden flex flex-col group p-2">
                    <div class="relative aspect-square rounded-xl overflow-hidden bg-slate-900">
                        <img src="<?= $product->getImage() ?>" class="w-full h-full object-cover image-zoom">
                        
                        <?php if(isset($_SESSION['role']) && $_SESSION['role'] === "admin"): ?>
                            <div class="absolute top-2 right-2 flex flex-col gap-1.5">
                                <a href="/updatepro?id=<?= $product->getId() ?>" class="w-7 h-7 bg-black/50 backdrop-blur-md rounded-full flex items-center justify-center text-white hover:bg-blue-600 text-[10px]">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="/deleteProduct?id=<?= $product->getId() ?>" onclick="return confirm('Delete?')" class="w-7 h-7 bg-black/50 backdrop-blur-md rounded-full flex items-center justify-center text-white hover:bg-red-600 text-[10px]">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="p-3 flex flex-col flex-1">
                        <div class="flex justify-between items-start gap-2 mb-1">
                            <h3 class="text-white font-semibold text-sm truncate group-hover:text-blue-500 transition-colors">
                                <?= $product->getName()?>
                            </h3>
                        </div>
                        
                        <p class="text-slate-500 text-[11px] line-clamp-1 mb-3">
                            <?= $product->getDescription() ?>
                        </p>

                        <div class="mt-auto flex items-center justify-between gap-3">
                            <span class="text-white font-bold text-sm">
                                <?= number_format($product->getPrice(),2) ?> <span class="text-[9px] text-slate-500">DH</span>
                            </span>
                            
                          <form action="/addcart" method="POST" class="flex items-center gap-2">
                                <input type="hidden" name="product_id" value="<?= $product->getId() ?>">

                                <input type="number"  name="quantity" value="1" min="1"
                                    class="w-20 h-9 rounded-lg px-3 text-black font-semibold border border-white/20 focus:outline-none focus:border-blue-500 transition" />
                                <button type="submit"
                                        class="w-9 h-9 rounded-lg flex items-center justify-center bg-blue-600 hover:bg-blue-700 transition text-white shadow">
                                    <i class="fas fa-plus text-sm"></i>
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="col-span-full text-center py-20 text-sm">No products found.</p>
        <?php endif; ?>
    </div>
</main>

<footer class="py-10 border-t border-white/5 text-center">
    <p class="text-[10px] font-bold uppercase tracking-widest text-slate-600">&copy; 2026 Yassir Tech</p>
</footer>

</body>
</html>