<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - ElectroPro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .sidebar-link:hover { background-color: #1e293b; border-left: 4px solid #3b82f6; }
        .active-link { background-color: #1e293b; border-left: 4px solid #3b82f6; }
    </style>
</head>
<body class="bg-gray-50 font-sans">

    <div class="flex min-h-screen">
        <aside class="w-72 bg-slate-900 text-white shadow-xl fixed h-full transition-all duration-300">
            <div class="p-8">
                <h1 class="text-2xl font-black tracking-tighter italic">ELECTRO<span class="text-blue-500">PRO</span></h1>
                <p class="text-slate-400 text-[10px] uppercase font-bold mt-1 tracking-widest">Admin Control Center</p>
            </div>

            <nav class="mt-4 px-4 space-y-2">
                <a href="/product" class="flex items-center gap-4 px-4 py-3 rounded-lg active-link transition-all">
                    <i class="fas fa-box-open w-5"></i>
                    <span class="font-semibold text-sm">Products Management</span>
                </a>
                <a href="/category" class="flex items-center gap-4 px-4 py-3 rounded-lg sidebar-link text-slate-400 hover:text-white transition-all">
                    <i class="fas fa-layer-group w-5"></i>
                    <span class="font-semibold text-sm">Categories</span>
                </a>
                <a href="/order" class="flex items-center gap-4 px-4 py-3 rounded-lg sidebar-link text-slate-400 hover:text-white transition-all">
                    <i class="fas fa-shopping-cart w-5"></i>
                    <span class="font-semibold text-sm">Orders</span>
                </a>
                <a href="users" class="flex items-center gap-4 px-4 py-3 rounded-lg sidebar-link text-slate-400 hover:text-white transition-all">
                    <i class="fas fa-users w-5"></i>
                    <span class="font-semibold text-sm">Users Control</span>
                </a>
                <div class="pt-10 border-t border-slate-800 mt-10">
                    <a href="/logout" class="flex items-center gap-4 px-4 py-3 rounded-lg text-red-400 hover:bg-red-500/10 transition-all">
                        <i class="fas fa-sign-out-alt w-5"></i>
                        <span class="font-semibold text-sm">Logout</span>
                    </a>
                </div>
            </nav>
        </aside>

        <main class="flex-1 ml-72 p-10">
            <header class="flex justify-between items-center mb-12">
                <div>
                    <h2 class="text-3xl font-black text-slate-900">Products</h2>
                    <p class="text-slate-500 text-sm">Manage your electronic catalog and stock levels</p>
                </div>
                <div class="flex items-center gap-6">
                    <div class="relative">
                        <input type="text" placeholder="Search product..." class="pl-10 pr-4 py-2 bg-white border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-blue-500 outline-none w-64 shadow-sm">
                        <i class="fas fa-search absolute left-3 top-2.5 text-slate-400"></i>
                    </div>
                    <button onclick="document.getElementById('addModal').classList.remove('hidden')" class="bg-blue-600 text-white px-6 py-2.5 rounded-xl font-bold hover:bg-blue-700 shadow-lg shadow-blue-200 transition-all flex items-center gap-2 text-sm">
                        <i class="fas fa-plus"></i> Add New Product
                    </button>
                </div>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Total Products</p>
                        <h3 class="text-2xl font-black mt-1">124</h3>
                    </div>
                    <div class="h-12 w-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center text-xl"><i class="fas fa-laptop"></i></div>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Low Stock</p>
                        <h3 class="text-2xl font-black mt-1 text-red-500">8</h3>
                    </div>
                    <div class="h-12 w-12 bg-red-50 text-red-600 rounded-xl flex items-center justify-center text-xl"><i class="fas fa-exclamation-triangle"></i></div>
                </div>
                <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex items-center justify-between">
                    <div>
                        <p class="text-slate-500 text-xs font-bold uppercase tracking-wider">Total Orders</p>
                        <h3 class="text-2xl font-black mt-1">1,052</h3>
                    </div>
                    <div class="h-12 w-12 bg-green-50 text-green-600 rounded-xl flex items-center justify-center text-xl"><i class="fas fa-shopping-basket"></i></div>
                </div>
            </div>

            <div class="bg-white rounded-[2rem] shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden">
                <table class="w-full text-left">
                    <thead class="bg-slate-50 border-b border-slate-100">
                        <tr>
                            <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase">Product</th>
                            <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase">Category</th>
                            <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase">Price</th>
                            <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase">Stock</th>
                            <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-50">
                        <tr class="hover:bg-blue-50/30 transition-colors group">
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-4">
                                    <div class="h-14 w-14 bg-slate-100 rounded-xl overflow-hidden border border-slate-200">
                                        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&q=80&w=100" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-900">MacBook Pro M3</p>
                                        <p class="text-[10px] text-slate-400 font-mono">ID: #PRO-9923</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-5">
                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest">Computers</span>
                            </td>
                            <td class="px-8 py-5 font-black text-slate-900">19,500 DH</td>
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-2">
                                    <span class="h-2 w-2 bg-green-500 rounded-full"></span>
                                    <span class="text-sm font-bold text-slate-600">42 in stock</span>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-right space-x-2">
                                <button class="h-10 w-10 bg-slate-100 text-slate-600 rounded-xl hover:bg-blue-600 hover:text-white transition-all"><i class="fas fa-edit text-xs"></i></button>
                                <button class="h-10 w-10 bg-slate-100 text-slate-600 rounded-xl hover:bg-red-600 hover:text-white transition-all"><i class="fas fa-trash text-xs"></i></button>
                            </td>
                        </tr>
                        <tr class="hover:bg-blue-50/30 transition-colors group">
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-4">
                                    <div class="h-14 w-14 bg-slate-100 rounded-xl overflow-hidden border border-slate-200">
                                        <img src="https://images.unsplash.com/photo-1592899677977-9c10ca588bbd?auto=format&fit=crop&q=80&w=100" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-900">iPhone 15 Pro</p>
                                        <p class="text-[10px] text-slate-400 font-mono">ID: #PRO-4412</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-8 py-5">
                                <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest">Phones</span>
                            </td>
                            <td class="px-8 py-5 font-black text-slate-900">12,200 DH</td>
                            <td class="px-8 py-5">
                                <div class="flex items-center gap-2 text-red-600">
                                    <i class="fas fa-exclamation-circle"></i>
                                    <span class="text-sm font-bold">3 left!</span>
                                </div>
                            </td>
                            <td class="px-8 py-5 text-right space-x-2">
                                <button class="h-10 w-10 bg-slate-100 text-slate-600 rounded-xl hover:bg-blue-600 hover:text-white transition-all"><i class="fas fa-edit text-xs"></i></button>
                                <button class="h-10 w-10 bg-slate-100 text-slate-600 rounded-xl hover:bg-red-600 hover:text-white transition-all"><i class="fas fa-trash text-xs"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="mt-8 flex justify-center gap-2">
                <button class="h-10 w-10 rounded-xl border border-slate-200 flex items-center justify-center hover:bg-white transition-all"><i class="fas fa-chevron-left"></i></button>
                <button class="h-10 w-10 rounded-xl bg-blue-600 text-white font-bold">1</button>
                <button class="h-10 w-10 rounded-xl border border-slate-200 flex items-center justify-center hover:bg-white transition-all">2</button>
                <button class="h-10 w-10 rounded-xl border border-slate-200 flex items-center justify-center hover:bg-white transition-all"><i class="fas fa-chevron-right"></i></button>
            </div>
        </main>
    </div>

    <div id="addModal" class="hidden fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-[100] flex items-center justify-center p-4">
        <div class="bg-white w-full max-w-2xl rounded-[2.5rem] shadow-2xl overflow-hidden animate-in fade-in zoom-in duration-300">
            <div class="p-8 border-b border-slate-100 flex justify-between items-center">
                <h3 class="text-xl font-black text-slate-900 uppercase tracking-tight">Add New Tech Product</h3>
                <button onclick="document.getElementById('addModal').classList.add('hidden')" class="text-slate-400 hover:text-slate-900"><i class="fas fa-times text-xl"></i></button>
            </div>
            <form class="p-8 grid grid-cols-2 gap-6">
                <div class="col-span-2 space-y-2">
                    <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none">Product Name</label>
                    <input type="text" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl outline-none focus:border-blue-500">
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none">Category</label>
                    <select class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl outline-none focus:border-blue-500">
                        <option>Computers</option>
                        <option>Phones</option>
                        <option>Accessories</option>
                    </select>
                </div>
                <div class="space-y-2">
                    <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none">Price (DH)</label>
                    <input type="number" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl outline-none focus:border-blue-500">
                </div>
                <div class="col-span-2 space-y-2">
                    <label class="text-[10px] font-black text-slate-400 uppercase tracking-widest leading-none">Description</label>
                    <textarea class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl outline-none focus:border-blue-500 h-32"></textarea>
                </div>
                <div class="col-span-2 pt-4">
                    <button type="submit" class="w-full bg-blue-600 text-white py-4 rounded-2xl font-black uppercase tracking-widest hover:bg-blue-700 shadow-lg shadow-blue-200 transition-all">Save Product</button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>