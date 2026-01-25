<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Modern Dark</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-[#0f172a] text-slate-200 font-sans min-h-screen">

    <nav class="bg-[#1e293b] border-b border-slate-700 py-4 px-8 flex justify-between items-center sticky top-0 z-50 shadow-lg">
        <div class="flex items-center gap-3">
            <div class="bg-violet-600 p-2 rounded-lg">
                <i class="fas fa-shield-halved text-white"></i>
            </div>
            <span class="text-xl font-black tracking-tight text-white uppercase">Admin<span class="text-violet-500">Panel</span></span>
        </div>
        <a href="/logout" class="flex items-center gap-2 bg-rose-500/10 hover:bg-rose-500 text-rose-500 hover:text-white px-4 py-2 rounded-lg transition-all duration-300 font-bold text-sm">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </nav>

    <div class="max-w-6xl mx-auto p-10">
        <header class="mb-12">
            <h1 class="text-4xl font-black text-white mb-2 tracking-tight">Tableau de Bord</h1>
            <p class="text-slate-400">Bienvenue, Admin. Gérez votre boutique en un seul clic.</p>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <a href="/category" class="group relative bg-[#1e293b] border border-slate-700 p-8 rounded-3xl overflow-hidden hover:border-violet-500 transition-all duration-500 shadow-xl hover:-translate-y-2">
                <div class="absolute -right-4 -bottom-4 text-8xl text-slate-800 opacity-20 group-hover:text-violet-500 group-hover:opacity-10 transition-all">
                    <i class="fas fa-box-open"></i>
                </div>
                <div class="bg-violet-500/20 text-violet-400 w-14 h-14 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-violet-500 group-hover:text-white transition-all">
                    <i class="fas fa-boxes-stacked"></i>
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">Gérer Produits</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Ajoutez, modifiez ou supprimez vos articles et catégories.</p>
                <div class="mt-6 flex items-center text-violet-400 font-bold text-sm uppercase tracking-widest gap-2">
                    Explorer <i class="fas fa-arrow-right text-xs group-hover:translate-x-2 transition-transform"></i>
                </div>
            </a>

            <a href="/users" class="group relative bg-[#1e293b] border border-slate-700 p-8 rounded-3xl overflow-hidden hover:border-blue-500 transition-all duration-500 shadow-xl hover:-translate-y-2">
                <div class="absolute -right-4 -bottom-4 text-8xl text-slate-800 opacity-20 group-hover:text-blue-500 group-hover:opacity-10 transition-all">
                    <i class="fas fa-users"></i>
                </div>
                <div class="bg-blue-500/20 text-blue-400 w-14 h-14 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-blue-500 group-hover:text-white transition-all">
                    <i class="fas fa-user-gear"></i>
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">Utilisateurs</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Gérez les comptes clients et les permissions du staff.</p>
                <div class="mt-6 flex items-center text-blue-400 font-bold text-sm uppercase tracking-widest gap-2">
                    Explorer <i class="fas fa-arrow-right text-xs group-hover:translate-x-2 transition-transform"></i>
                </div>
            </a>

            <a href="/order" class="group relative bg-[#1e293b] border border-slate-700 p-8 rounded-3xl overflow-hidden hover:border-emerald-500 transition-all duration-500 shadow-xl hover:-translate-y-2">
                <div class="absolute -right-4 -bottom-4 text-8xl text-slate-800 opacity-20 group-hover:text-emerald-500 group-hover:opacity-10 transition-all">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="bg-emerald-500/20 text-emerald-400 w-14 h-14 rounded-2xl flex items-center justify-center text-2xl mb-6 group-hover:bg-emerald-500 group-hover:text-white transition-all">
                    <i class="fas fa-receipt"></i>
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">Commandes</h3>
                <p class="text-slate-400 text-sm leading-relaxed">Suivez les ventes en temps réel et changez les status.</p>
                <div class="mt-6 flex items-center text-emerald-400 font-bold text-sm uppercase tracking-widest gap-2">
                    Explorer <i class="fas fa-arrow-right text-xs group-hover:translate-x-2 transition-transform"></i>
                </div>
            </a>

        </div>
    </div>
</body>
</html>