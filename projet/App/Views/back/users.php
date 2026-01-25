<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs | Dark Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        /* Bach n-hsen l-scrollbar f dark mode */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0f172a; }
        ::-webkit-scrollbar-thumb { background: #334155; border-radius: 10px; }
    </style>
</head>
<body class="bg-[#0b0f1a] text-slate-200">

    <div class="min-h-screen flex">
        <aside class="w-64 bg-slate-900/50 border-r border-slate-800 flex-shrink-0 hidden md:flex flex-col">
            <div class="p-6 text-2xl font-bold tracking-tight text-white">
                ADMIN<span class="text-blue-500">PRO</span>
            </div>
            <nav class="flex-1 px-4 space-y-2 mt-4">
                <a href="/admin" class="flex items-center p-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 min-1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    Dashboard
                </a>
                <a href="users.php" class="flex items-center p-3 bg-blue-600/10 text-blue-500 rounded-xl border border-blue-600/20 transition shadow-lg shadow-blue-900/10">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    Utilisateurs
                </a>
                <a href="/category" class="flex items-center p-3 text-slate-400 hover:bg-slate-800 hover:text-white rounded-xl transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    Produits
                </a>
            </nav>
            <div class="p-4 border-t border-slate-800">
                <a href="../../authoffice/logout.php" class="flex items-center p-3 text-red-400 hover:bg-red-500/10 rounded-xl transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    Déconnexion
                </a>
            </div>
        </aside>

        <main class="flex-1 p-8 bg-[#0b0f1a]">
            <div class="flex flex-col md:flex-row md:items-center justify-between mb-10 gap-4">
                <div>
                    <h1 class="text-3xl font-bold text-white tracking-tight">Gestion des Utilisateurs</h1>
                    <p class="text-slate-500 mt-1">Contrôlez les accès à votre plateforme</p>
                </div>
                <button class="bg-blue-600 hover:bg-blue-500 text-white px-6 py-3 rounded-2xl font-semibold transition-all shadow-xl shadow-blue-900/20 flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                    Nouveau Utilisateur
                </button>
            </div>

            <div class="bg-slate-900/40 rounded-[2rem] border border-slate-800 shadow-2xl backdrop-blur-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-800/50 border-b border-slate-800/50">
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest"></th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Utilisateur</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Rôle</th>
                                <th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800/50">
                            <?php if(isset($users) && !empty($users)) :?>
                                <?php foreach($users as $user) :?>
                                <tr class="hover:bg-slate-800/30 transition group">
                                    <td class="px-6 py-5">
                                        <div class="h-11 w-11 rounded-full bg-blue-500/10 text-blue-400 border border-blue-500/20 flex items-center justify-center font-bold transition group-hover:scale-110">
                                            <?=strtoupper(substr(($user->getFirstname()), 0, 2)) ?>
                                        </div>
                                    </td>
                                    <td class="px-6 py-5">
                                        <div class="font-semibold text-slate-200"><?= $user->getFirstname() . " " .$user->getLastname()?></div>
                                        <div class="text-sm text-slate-500 italic"><?= $user->getEmail()?></div>
                                    </td>
                                    <td class="px-6 py-5">
                                        <span class="px-3 py-1 bg-slate-800 text-slate-300 border border-slate-700 rounded-lg text-xs font-medium uppercase">
                                            <?= $user->getRole()?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-5 text-right">
                                        <div class="flex justify-end space-x-3">
                                            <a href="/updateuser?id=<?= $user->getId() ?>" class="p-2 text-slate-500 hover:text-blue-400 hover:bg-blue-500/10 rounded-xl transition">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                                            </a>
                                            <a href="/deleteuser?id=<?= $user->getId() ?>" class="p-2 text-slate-500 hover:text-red-400 hover:bg-red-500/10 rounded-xl transition" onclick="return confirm('Safi ghadi tmshou?')">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach ;?>
                            <?php else :?>
                                <tr>
                                    <td colspan="4" class="px-6 py-10 text-center text-slate-500 italic">
                                        <div class="flex flex-col items-center">
                                            <svg class="w-12 h-12 mb-3 opacity-20" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                            Aucun utilisateur trouvé sur la plateforme.
                                        </div>
                                    </td>
                                </tr>
                            <?php endif ;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

</body>
</html>