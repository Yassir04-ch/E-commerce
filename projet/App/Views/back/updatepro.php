<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: /");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 text-slate-200 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-xl bg-black/80 p-8 rounded-2xl shadow-xl border border-white/10">
        
        <h1 class="text-2xl font-black text-white mb-6 text-center">
            Update Product
        </h1>

        <form action="/updatepro" method="POST" class="space-y-5">

            <input type="hidden" name="id" value="<?= $product->getId() ?>">

            <div>
                <label class="text-sm text-slate-400">Product Name</label>
                <input 
                    type="text" 
                    name="name" 
                    value="<?= htmlspecialchars($product->getName()) ?>"
                    required
                    class="w-full mt-1 px-4 py-3 bg-slate-800 rounded-xl outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <div>
                <label class="text-sm text-slate-400">Description</label>
                <textarea 
                    name="description" 
                    rows="3"
                    class="w-full mt-1 px-4 py-3 bg-slate-800 rounded-xl outline-none focus:ring-2 focus:ring-blue-500"
                ><?= htmlspecialchars($product->getDescription()) ?></textarea>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="text-sm text-slate-400">Price (DH)</label>
                    <input 
                        type="number" 
                        step="0.01"
                        name="price" 
                        value="<?= $product->getPrice() ?>"
                        required
                        class="w-full mt-1 px-4 py-3 bg-slate-800 rounded-xl outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>

                <div>
                    <label class="text-sm text-slate-400">Stock</label>
                    <input 
                        type="number" 
                        name="stock" 
                        value="<?= $product->getStock() ?>"
                        required
                        class="w-full mt-1 px-4 py-3 bg-slate-800 rounded-xl outline-none focus:ring-2 focus:ring-blue-500"
                    >
                </div>
            </div>

            <div>
                <label class="text-sm text-slate-400">Image URL</label>
                <input 
                    type="text" 
                    name="image" 
                    value="<?= htmlspecialchars($product->getImage()) ?>"
                    class="w-full mt-1 px-4 py-3 bg-slate-800 rounded-xl outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>

            <div class="flex justify-between items-center pt-4">
                <a href="/admin" class="text-slate-400 hover:text-white text-sm">
                    ← Back
                </a>

                <button 
                    type="submit"
                    class="bg-blue-600 hover:bg-blue-700 px-6 py-3 rounded-xl font-bold transition-all"
                >
                    Update Product
                </button>
            </div>

        </form>

    </div>

</body>
</html>
