<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Gestion des Commandes</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0f172a] text-slate-200 font-sans p-10">
    
    <div class="max-w-4xl mx-auto">
        
        <h1 class="text-3xl font-bold text-violet-400 mb-8 border-b-2 border-slate-800 pb-4 flex items-center gap-3">
            <span>📊</span> Gestion des Commandes
        </h1>
          <a href="/category" class="text-xs font-bold uppercase tracking-widest text-slate-500 hover:text-white transition">
            <i class="fas fa-arrow-left mr-2"></i> Back to Store
        </a>

        <?php if (empty($orders)): ?>
            <div class="text-center p-10 bg-slate-800 rounded-xl text-slate-400">
                Aucune commande trouvée pour le moment.
            </div>
        <?php else: ?>
            
            <?php foreach ($orders as $order): ?>
                <div class="bg-[#1e293b] border border-slate-700 rounded-2xl overflow-hidden shadow-2xl mb-10 transition hover:border-slate-500">
                    
                    <div class="bg-[#312e81] p-6 flex justify-between items-center">
                        <div>
                            <div class="text-xs font-black text-violet-300 tracking-widest uppercase">Commande #<?= $order->getId() ?></div>
                            <div class="text-xl font-bold text-white mt-1">Client ID:</div>
                        </div>
                        <div class="text-right">
                           
                            <span class="px-4 py-1 rounded-full text-xs font-bold border">
                                <?= $order->getStatus() ?>
                            </span>
                            <div class="text-xs text-slate-400 mt-2"><?= $order->getCreated_at() ?></div>
                        </div>
                    </div>

                    <div class="p-6">
                        <table class="w-full text-left">
                            <thead>
                                <tr class="text-slate-500 text-xs uppercase tracking-wider border-b border-slate-700">
                                    <th class="pb-3 px-2 font-semibold">Produit</th>
                                    <th class="pb-3 px-2 text-center font-semibold">Quantité</th>
                                    <th class="pb-3 px-2 text-right font-semibold">Prix Unit.</th>
                                    <th class="pb-3 px-2 text-right font-semibold text-violet-400">Sous-total</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-800">
                                <?php 
                                    $totalOrder =0;
                                    foreach ($order->getOrderitems() as $item): 
                                        $subtotal = $item->getPrice() * $item->getQuantity();
                                        $totalOrder += $subtotal;   
                                ?>
                                <tr class="group hover:bg-slate-800/50 transition">
                                    <td class="py-4 px-2">
                                    </td>
                                    <td class="py-4 px-2 text-center text-slate-400"><?= $item->getQuantity() ?></td>
                                    <td class="py-4 px-2 text-right text-slate-500"><?= $item->getPrice()?> DH</td>
                                    <td class="py-4 px-2 text-right font-bold text-slate-100"><?= $subtotal ?> DH</td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="bg-[#0f172a]/50 p-6 flex justify-between items-center border-t border-slate-700">
                        <div class="text-sm text-slate-500 font-medium">
                            Status Paiement: <span class="text-emerald-500">Sécurisé</span>
                        </div>
                        <div class="text-right">
                            <span class="text-xs text-slate-500 block">Total Final</span>
                            <span class="text-2xl font-black text-emerald-400 tracking-tight">
                                <?= $totalOrder?> <small class="text-xs">DH</small>
                            </span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        <?php endif; ?>
    </div>

</body>
</html>