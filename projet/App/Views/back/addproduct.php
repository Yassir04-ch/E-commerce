<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Produit | Dark Mode</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#0f172a] min-h-screen flex items-center justify-center p-6 text-slate-200">

    <div class="w-full max-w-2xl bg-[#1e293b] rounded-3xl shadow-2xl border border-slate-700/50 overflow-hidden">
        <div class="bg-gradient-to-br from-indigo-500 via-purple-600 to-pink-500 p-8 text-center">
            <h2 class="text-3xl font-extrabold text-white tracking-tight">Ajouter Produit</h2>
            <p class="text-indigo-100 mt-2 text-sm font-medium">Gestion d'inventaire — Mode Sombre</p>
        </div>

        <form action="/add" method="POST" enctype="multipart/form-data" class="p-8 space-y-6">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-slate-400 mb-2 ml-1">Nom du Produit</label>
                    <input type="text" name="name" required
                        class="w-full px-4 py-3 bg-[#0f172a] border border-slate-700 rounded-xl text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition-all placeholder:text-slate-600"
                        placeholder="Ex: iPhone 15 Pro Max">
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-slate-400 mb-2 ml-1">Description</label>
                    <textarea name="description" rows="3" required
                        class="w-full px-4 py-3 bg-[#0f172a] border border-slate-700 rounded-xl text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition-all resize-none placeholder:text-slate-600"
                        placeholder="Décrivez les points forts du produit..."></textarea>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2 ml-1">Prix (MAD)</label>
                    <div class="relative">
                        <input type="number" name="price" step="0.01" required
                            class="w-full px-4 py-3 bg-[#0f172a] border border-slate-700 rounded-xl text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition-all"
                            placeholder="0.00">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-400 mb-2 ml-1">Stock</label>
                    <input type="number" name="stock" required
                        class="w-full px-4 py-3 bg-[#0f172a] border border-slate-700 rounded-xl text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition-all"
                        placeholder="Quantité">
                </div>

                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-slate-400 mb-2 ml-1">Catégorie</label>
                    <select name="category" required
                        class="w-full px-4 py-3 bg-[#0f172a] border border-slate-700 rounded-xl text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition-all cursor-pointer appearance-none">
                        <option value="" class="bg-[#1e293b]">-- Sélectionner --</option>
                        <option value="Ordinateurs" class="bg-[#1e293b]">Ordinateurs</option>
                        <option value="Smartphones" class="bg-[#1e293b]">Smartphones</option>
                    </select>
                </div>

                <div class="md:col-span-2">
                <label class="block text-sm font-medium text-slate-400 mb-2 ml-1">Lien ou Nom de l'image (String)</label>
                <div class="relative group">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-slate-500 group-focus-within:text-indigo-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                        </svg>
                    </div>
                    
                    <input type="text" name="image" required
                        class="w-full pl-12 pr-4 py-3 bg-[#0f172a] border border-slate-700 rounded-xl text-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition-all placeholder:text-slate-600"
                        placeholder="Ex: https://monsite.com/image.jpg ou produit1.png">
                </div>
                <p class="mt-2 text-xs text-slate-500 ml-1 italic">Entrez l'URL directe de l'image ou le nom du fichier déjà présent sur le serveur.</p>
            </div>
            </div>

            <button type="submit" 
                class="w-full py-4 bg-indigo-600 hover:bg-indigo-500 text-white font-bold rounded-xl shadow-[0_0_20px_rgba(79,70,229,0.4)] hover:shadow-[0_0_30px_rgba(79,70,229,0.6)] transition-all duration-300 active:scale-[0.98]">
                Ajouter le Produit
            </button>
        </form>
    </div>

</body>
</html>