<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'utilisateur | Dark Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Inter', sans-serif; }</style>
</head>
<body class="bg-[#0b0f1a] text-slate-200 min-h-screen flex items-center justify-center p-6">

    <div class="max-w-2xl w-full">

        <div class="bg-slate-900/40 backdrop-blur-xl rounded-[2.5rem] shadow-2xl border border-slate-800 overflow-hidden">
            <div class="p-8 md:p-12">
                <div class="flex items-center justify-between mb-10">
                    <div>
                        <h1 class="text-3xl font-bold text-white tracking-tight">Modifier</h1>
                        <p class="text-slate-500 text-sm mt-1">Mise à jour du profil utilisateur</p>
                    </div>
                    <div class="h-16 w-16 rounded-2xl bg-blue-600/20 border border-blue-500/30 text-blue-400 flex items-center justify-center text-xl font-bold shadow-lg shadow-blue-900/20">
    
                    </div>
                </div>

                <form action="/updateuser" method="POST" class="space-y-6">
                    <input type="hidden" name="user_id" value="1">

                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2 ml-1">Nom Complet</label>
                        <input type="text" name="fullname" value="" 
                            class="w-full px-5 py-4 bg-slate-800/50 border border-slate-700 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all text-white placeholder-slate-500">
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2 ml-1">Adresse Email</label>
                        <input type="email" name="email" value=""
                            class="w-full px-5 py-4 bg-slate-800/50 border border-slate-700 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all text-white">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2 ml-1">Rôle</label>
                            <div class="relative">
                                <select name="role" class="w-full px-5 py-4 bg-slate-800/50 border border-slate-700 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-500/50 focus:border-blue-500 transition-all appearance-none cursor-pointer text-white font-medium">
                                    <option value="admin" class="bg-slate-900">Administrateur</option>
                                    <option value="user" class="bg-slate-900">Utilisateur Standard</option>
                                </select>
                                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none text-slate-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-xs font-bold text-slate-500 uppercase tracking-widest mb-2 ml-1">Statut</label>
                            <div class="flex items-center h-[60px] px-5 bg-slate-800/30 border border-slate-700/50 rounded-2xl">
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" name="status" checked class="sr-only peer">
                                    <div class="w-11 h-6 bg-slate-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600 transition-colors"></div>
                                    <span class="ml-3 text-sm font-medium text-slate-400">Compte Actif</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="pt-8 flex flex-col md:flex-row gap-4">
                        <button type="submit" class="flex-1 bg-blue-600 hover:bg-blue-500 text-white font-bold py-4 rounded-2xl transition-all shadow-lg shadow-blue-900/20 active:scale-[0.98]">
                            Mettre à jour
                        </button>
                        <a href="/users"><button type="button"  class="px-8 bg-slate-800 hover:bg-slate-700 text-slate-300 font-bold py-4 rounded-2xl transition-all border border-slate-700">
                            Annuler
                        </button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>