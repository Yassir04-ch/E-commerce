<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Cart | ElectroPro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { background-color: #05070a; font-family: 'Plus Jakarta Sans', sans-serif; }
        .product-thumb { width: 64px; height: 64px; object-fit: cover; border-radius: 12px; }
        .glass-table { background: rgba(15, 18, 25, 0.6); backdrop-filter: blur(10px); }
    </style>
</head>

<body class="bg-[#05070a] text-slate-300 min-h-screen">

<nav class="border-b border-white/5 bg-black/40 backdrop-blur-md sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="/category" class="text-xl font-black text-white tracking-tighter">
            YASSIR<span class="text-blue-500">-TECH</span>
        </a>
        <a href="/category" class="text-xs font-bold uppercase tracking-widest text-slate-500 hover:text-white transition">
            <i class="fas fa-arrow-left mr-2"></i> Back to Store
        </a>
    </div>
</nav>

<main class="container mx-auto px-6 py-12 max-w-5xl">
    <div class="flex items-center gap-4 mb-10">
        <div class="w-12 h-12 bg-blue-600/10 rounded-2xl flex items-center justify-center text-blue-500">
            <i class="fas fa-shopping-cart text-xl"></i>
        </div>
        <h1 class="text-3xl font-extrabold text-white tracking-tight">Your Cart</h1>
    </div>

    <div class="glass-table rounded-[2rem] border border-white/5 overflow-hidden">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="text-[10px] font-black uppercase tracking-[0.2em] text-slate-500 border-b border-white/5">
                    <th class="p-6">Product Details</th>
                    <th class="p-6 text-center">Price</th>
                    <th class="p-6 text-center">Quantity</th>
                    <th class="p-6 text-right">Subtotal</th>
                    <th class="p-6 text-center"></th>
                </tr>
            </thead>
           <tbody class="divide-y divide-white/5">

<?php if(!empty($productsCart)): ?>
    <?php foreach($productsCart as $item): ?>
        <tr class="group hover:bg-white/[0.02] transition">
            <td class="p-6">
                <div class="flex items-center gap-4">
                    <img src="<?= $item['product']->getImage() ?>" class="product-thumb border border-white/10" alt="Product">
                    <div>
                        <p class="text-white font-bold text-sm"><?= $item['product']->getName() ?></p>
                        <p class="text-[11px] text-slate-500"><?= $item['product']->getDescription() ?></p>
                    </div>
                </div>
            </td>

            <td class="p-6 text-center font-semibold text-slate-400 text-sm">
                <?= number_format($item['product']->getPrice(), 0) ?> DH
            </td>

            <td class="p-6">
                <form action="/update-cart" method="POST" class="flex items-center justify-center gap-3">
                    <input type="hidden" name="product_id" value="<?= $item['product']->getId() ?>">

                    <div class="flex items-center bg-black/40 border border-white/10 rounded-xl p-1">
                        <input type="number" value="<?= $item['qty'] ?>"
                               min="1"
                               class="w-14 bg-transparent text-center text-sm font-bold text-white outline-none">
                    </div>
                </form>
            </td>

            <td class="p-6 text-right font-black text-white text-sm">
                <?= number_format($item['subtotal'], 2) ?> DH
            </td>

            <td class="p-6 text-center">
                <form action="/delete-cart" method="POST">
                    <input type="hidden" name="product_id" value="<?= $item['product']->getId() ?>">
                    <button type="submit" class="text-slate-600 hover:text-red-500 transition-colors">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="5" class="text-center py-10 text-sm text-slate-400">
            Your cart is empty.
        </td>
    </tr>
<?php endif; ?>

</tbody>

    </div>


        <div class="flex flex-col gap-4 w-full md:w-auto">
            <a href="/send" class="bg-white text-black hover:bg-blue-600 hover:text-white px-12 py-5 rounded-2xl font-black uppercase tracking-widest transition-all text-center shadow-2xl shadow-white/5">
               Send order <i class="fas fa-chevron-right ml-2 text-[10px]"></i>
            </a>
            <p class="text-[10px] text-slate-600 text-center italic font-medium">Secure SSL Encrypted Checkout</p>
        </div>
    </div>
</main>

<footer class="py-10 text-center opacity-40">
    <p class="text-[10px] font-bold uppercase tracking-[0.4em]">ElectroPro Premium Series 2026</p>
</footer>

</body>
</html>