<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElectroPro | Dark Tech Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @keyframes glow {
            0%, 100% { box-shadow: 0 0 5px rgba(59, 130, 246, 0.5); }
            50% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.8); }
        }
        .product-card:hover {
            transform: translateY(-10px);
            animation: glow 2s infinite;
        }
        body {
            background-color: #0f172a; /* Slate 950 */
        }
    </style>
</head>
<body class="text-slate-200">

    <nav class="bg-black/80 backdrop-blur-md border-b border-white/10 sticky top-0 z-50">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-black tracking-tighter text-white italic">
                ELECTRO<span class="text-blue-500 underline decoration-blue-500 underline-offset-4">PRO</span>
            </a>
            <div class="hidden md:flex space-x-10 text-xs font-black uppercase tracking-widest">
                <a href="#" class="text-slate-400 hover:text-blue-400 transition-colors">Home</a>
                <a href="#" class="text-white border-b-2 border-blue-500 pb-1">Shop</a>
                <a href="#" class="text-slate-400 hover:text-blue-400 transition-colors">Support</a>
            </div>
            <div class="flex items-center space-x-6">
                <a href="#" class="relative hover:text-blue-400 transition-colors">
                    <i class="fas fa-shopping-cart text-xl"></i>
                    <span class="absolute -top-2 -right-2 bg-blue-600 text-white text-[10px] px-1.5 py-0.5 rounded-full">3</span>
                </a>
                <a href="login.html" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-full text-xs font-bold transition-all shadow-lg shadow-blue-900/40 uppercase tracking-widest">Login</a>
            </div>
        </div>
    </nav>

    <header class="py-20 relative overflow-hidden bg-gradient-to-b from-black to-slate-900">
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-6xl font-black mb-4 tracking-tighter text-transparent bg-clip-text bg-gradient-to-r from-white to-slate-500">
                NEXT-GEN <br>TECH CATALOG.
            </h1>
            <p class="text-slate-400 max-w-md text-lg font-medium">Explore high-performance electronics crafted for the future.</p>
        </div>
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-blue-600/20 rounded-full blur-[120px]"></div>
    </header>

    <main class="container mx-auto px-6 py-16">
        <div class="flex flex-col lg:flex-row gap-12">
            
            <aside class="w-full lg:w-64 space-y-12">
                <div>
                    <h3 class="text-white font-black text-xs uppercase tracking-[0.3em] mb-8 border-l-4 border-blue-600 pl-4">Categories</h3>
                    <ul class="space-y-5 text-sm font-bold text-slate-400">
                        <li class="flex items-center justify-between hover:text-blue-400 cursor-pointer transition-all group">
                            <span>Laptops</span> <span class="bg-slate-800 text-[10px] px-2 py-1 rounded">12</span>
                        </li>
                        <li class="flex items-center justify-between text-blue-400 group cursor-pointer">
                            <span>Smartphones</span> <span class="bg-blue-900/30 text-[10px] px-2 py-1 rounded">24</span>
                        </li>
                        <li class="flex items-center justify-between hover:text-blue-400 cursor-pointer transition-all group">
                            <span>Audio Gear</span> <span class="bg-slate-800 text-[10px] px-2 py-1 rounded">08</span>
                        </li>
                    </ul>
                </div>
            </aside>

            <div class="flex-1 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                
                
                
                 
                 <div class="flex-1 grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
                    <?php if(!empty($products)): ?>
                <?php foreach($products as $product): ?>
                    <div class="product-card bg-black border border-white/5 rounded-3xl overflow-hidden transition-all duration-500 group">
                        <div class="relative aspect-square overflow-hidden bg-slate-900/50">
                            <img src="<?= $product->getImage() ?>" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 opacity-80 group-hover:opacity-100">
                            <div class="absolute top-4 right-4 space-y-2">
                                <button class="w-10 h-10 bg-black/50 backdrop-blur-md rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors">
                                    <i class="far fa-heart"></i>
                                </button>
                            </div>
                        </div>
                        <div class="p-6 space-y-4">
                            <div class="flex justify-between items-start">
                                <div>
                                    <span class="text-blue-500 font-black text-[10px] uppercase tracking-widest"><?= $product->getName()  ?></span>
                                    <h3 class="text-white font-bold text-lg mt-1 group-hover:text-blue-400 transition-colors"><?= $product->getDescription()  ?></h3>
                                </div>
                                <span class="text-white font-black"><?= $product->getPrice() ?> DH</span>
                            </div>
                            <div class="flex items-center gap-2 text-[10px] font-bold text-slate-500 uppercase">
                                <i class="fas fa-check-circle text-blue-500"></i> <?= $product->getStock()  ?>
                            </div>
                            <button class="w-full bg-white text-black font-black py-4 rounded-2xl text-xs uppercase tracking-[0.2em] hover:bg-blue-500 hover:text-white transition-all">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
                    <?php else: ?>
                    <p class="text-white">No product her</p>
                <?php endif; ?>
            </div>

            </div>
        </div>
    </main>

    <footer class="bg-black py-10 border-t border-white/5 text-center">
        <p class="text-slate-600 text-xs font-bold uppercase tracking-widest italic">ElectroPro Dark Series &copy; 2026</p>
    </footer>

</body>
</html>