<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details - ElectroPro Dark</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { background-color: #020617; }
        
        /* Animation dyal floating (t7errek l-fo9 o l-te7t) */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }

        /* Animation dyal border kaydour */
        @keyframes rotate-border {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .float-animation {
            animation: float 5s ease-in-out infinite;
        }

        .glass-card {
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        /* Border Gradient Animation container */
        .gradient-border-box {
            position: relative;
            padding: 3px;
            overflow: hidden;
            border-radius: 4rem; /* Border Radius kbir */
        }

        .gradient-border-box::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(transparent, #3b82f6, transparent, #3b82f6);
            animation: rotate-border 4s linear infinite;
        }

        .gradient-border-content {
            position: relative;
            background: #020617;
            border-radius: 3.9rem;
            z-index: 1;
        }

        .neo-glow {
            box-shadow: 0 0 30px rgba(59, 130, 246, 0.3);
        }
    </style>
</head>
<body class="text-slate-300 antialiased font-sans">

    <main class="container mx-auto px-6 py-20 min-h-screen flex items-center">
        <div class="grid lg:grid-cols-2 gap-20 items-center">
            
            <div class="space-y-12">
                <div class="gradient-border-box float-animation neo-glow">
                    <div class="gradient-border-content p-10 group overflow-hidden">
                        <div class="absolute inset-0 bg-blue-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                       <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&q=80&w=600" 
                            alt="Product" 
                            class="w-full h-auto object-contain rounded-[3rem] transition-transform duration-700 group-hover:scale-110 drop-shadow-[0_0_30px_rgba(59,130,246,0.4)]">
                    </div>
                </div>
                
                <div class="flex gap-4 justify-center">
                    <div class="w-20 h-20 rounded-3xl glass-card p-2 border-2 border-blue-600 cursor-pointer overflow-hidden transition-all hover:scale-110">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?auto=format&fit=crop&q=80&w=150" class="w-full h-full object-cover rounded-2xl">
                    </div>
                    <div class="w-20 h-20 rounded-3xl glass-card p-2 border border-white/10 hover:border-blue-500/50 cursor-pointer transition-all hover:scale-110 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1524678606370-a47ad25cb82a?auto=format&fit=crop&q=80&w=150" class="w-full h-full object-cover rounded-2xl opacity-40 hover:opacity-100">
                    </div>
                </div>
            </div>

            <div class="space-y-10">
                <header class="space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="bg-blue-600/10 text-blue-400 text-[10px] font-black uppercase tracking-[0.3em] px-3 py-1 rounded-full border border-blue-500/20">
                            Premium Audio
                        </span>
                        <div class="flex text-yellow-500 text-[10px]">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                        </div>
                    </div>
                    <h1 class="text-6xl font-black text-white tracking-tighter leading-tight italic uppercase">
                        SONY XM5 <br>
                        <span class="text-blue-500 not-italic">NOISE CANCEL</span>
                    </h1>
                </header>

                <div class="flex items-center gap-6">
                    <span class="text-5xl font-black text-white">3,499 <span class="text-xl">DH</span></span>
                    <div class="h-10 w-[2px] bg-slate-800"></div>
                    <span class="text-slate-500 line-through text-lg font-bold">4,200 DH</span>
                </div>

                <div class="space-y-4 border-l-4 border-blue-600 pl-6">
                    <h4 class="text-xs font-black uppercase tracking-widest text-blue-500">Tech Specs</h4>
                    <p class="text-slate-400 text-lg leading-relaxed italic">
                        "The world's best noise cancelling headphones just got better. Pure silence. Pure sound."
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-5 pt-6">
                    <button class="flex-1 h-20 bg-blue-600 hover:bg-white hover:text-black text-white font-black rounded-3xl flex items-center justify-center gap-4 transition-all duration-500 neo-glow uppercase tracking-[0.2em] text-sm">
                        <i class="fas fa-cart-arrow-down text-lg"></i> Buy Now
                    </button>
                    
                    <button class="w-20 h-20 glass-card rounded-3xl flex items-center justify-center text-xl hover:bg-red-500 hover:text-white transition-all duration-500">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
            </div>
        </div>
    </main>

</body>
</html>