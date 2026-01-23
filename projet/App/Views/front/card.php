<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Cart | ElectroPro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 text-slate-200 min-h-screen">

<nav class="bg-black/80 border-b border-white/10">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="/category" class="text-2xl font-black text-white italic">
            YASSIR<span class="text-blue-500">-TECH</span>
        </a>
        <a href="/category" class="text-sm text-slate-400 hover:text-white">
            ← Continue shopping
        </a>
    </div>
</nav>

<main class="container mx-auto px-6 py-16">

    <h1 class="text-3xl font-black mb-10 text-white">🛒 Your Cart</h1>

    <?php if (empty($products)): ?>
        <div class="bg-black/60 p-10 rounded-2xl text-center border border-white/10">
            <p class="text-slate-400 text-lg mb-6">Your cart is empty</p>
            <a href="/category"
               class="bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-xl font-bold transition">
                Go Shopping
            </a>
        </div>
    <?php else: ?>

        <div class="overflow-x-auto bg-black/60 rounded-2xl border border-white/10">
            <table class="w-full text-left">
                <thead class="bg-slate-800 text-slate-400 text-sm uppercase">
                    <tr>
                        <th class="p-4">Product</th>
                        <th class="p-4">Price</th>
                        <th class="p-4">Quantity</th>
                        <th class="p-4">Subtotal</th>
                        <th class="p-4">Action</th>
                    </tr>
                </thead>

                <tbody>
                <?php foreach ($products as $p): ?>
                    <tr class="border-t border-white/5 hover:bg-white/5 transition">
                        <td class="p-4 font-bold text-white">
                            <?= htmlspecialchars($p->getName()) ?>
                        </td>

                        <td class="p-4">
                            <?= number_format($p->getPrice(), 2) ?> DH
                        </td>

                        <td class="p-4">
                            <form action="/update-cart" method="POST" class="flex items-center gap-2">
                                <input type="hidden" name="product_id" value="<?= $p->getId() ?>">
                                <input
                                    type="number"
                                    name="quantity"
                                    min="1"
                                    value="<?= $p->quantity ?>"
                                    class="w-20 px-2 py-1 bg-slate-800 rounded outline-none focus:ring-2 focus:ring-blue-500"
                                >
                                <button
                                    type="submit"
                                    class="text-xs bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded font-bold">
                                    Update
                                </button>
                            </form>
                        </td>

                        <td class="p-4 font-bold text-white">
                            <?= number_format($p->subtotal, 2) ?> DH
                        </td>

                        <td class="p-4">
                            <a href="/delete-cart?id=<?= $p->getId() ?>"
                               onclick="return confirm('Remove this product from cart?')"
                               class="text-red-500 hover:text-red-400 font-bold">
                                ❌ Remove
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="flex flex-col md:flex-row justify-between items-center mt-10 gap-6">
            <h2 class="text-2xl font-black text-white">
                Total: <span class="text-blue-500"><?= number_format($total, 2) ?> DH</span>
            </h2>

            <a href="/checkout"
               class="bg-green-600 hover:bg-green-700 px-8 py-4 rounded-xl font-black uppercase tracking-widest transition">
                Checkout
            </a>
        </div>

    <?php endif; ?>

</main>

<footer class="bg-black py-8 border-t border-white/10 text-center mt-20">
    <p class="text-slate-600 text-xs font-bold uppercase tracking-widest italic">
        ElectroPro © 2026
    </p>
</footer>

</body>
</html>
