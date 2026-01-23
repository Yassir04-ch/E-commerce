<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YASSIR-TECH - Premium Electronics</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-white font-sans text-slate-900">
    <nav class="flex justify-between items-center px-8 py-6 sticky top-0 bg-white/80 backdrop-blur-md z-50">
        <div class="text-2xl font-black tracking-tighter italic text-blue-600">YASSIR-TECH</div>
        <div class="hidden md:flex space-x-10 font-bold text-sm uppercase tracking-widest text-slate-600">
            <a href="#" class="text-blue-600">Home</a>
            <a href="/category" class="hover:text-blue-600">Shop</a>
            <a href="#" class="hover:text-blue-600">Deals</a>
        </div>
        <div class="flex items-center space-x-6 text-xl">
            <a href="#"><i class="fas fa-search"></i></a>
            <a href="/cart" class="relative"><i class="fas fa-shopping-bag"></i></a>
            <a href="/login" class="bg-slate-900 text-white text-sm px-6 py-2 rounded-full font-bold">Login</a>
        </div>
    </nav>

    <section class="relative h-[80vh] flex items-center bg-slate-100 overflow-hidden">
        <div class="container mx-auto px-8 grid md:grid-cols-2 items-center gap-12">
            <div class="z-10">
                <span class="inline-block bg-blue-100 text-blue-600 px-4 py-1 rounded-full text-xs font-bold mb-4 uppercase tracking-widest">New Arrival</span>
                <h1 class="text-6xl md:text-8xl font-black leading-none mb-6">FUTURE IS <br><span class="text-blue-600">IN HAND.</span></h1>
                <p class="text-slate-500 text-lg mb-8 max-w-md">Discover the latest in high-end electronics. From the new M3 MacBooks to the ultimate smartphones.</p>
                <div class="flex space-x-4">
                    <a href="catalog.html" class="bg-blue-600 text-white px-10 py-4 rounded-xl font-bold hover:shadow-2xl hover:shadow-blue-200 transition-all">Shop Now</a>
                    <button class="border-2 border-slate-900 px-10 py-4 rounded-xl font-bold hover:bg-slate-900 hover:text-white transition-all">Learn More</button>
                </div>
            </div>
            <div class="relative">
                <div class="absolute -top-20 -right-20 w-96 h-96 bg-blue-400 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
                <img src="https://img.freepik.com/premium-photo/tech-gadgets-devices12-58_1288896-13149.jpg?semt=ais_hybrid&w=740&q=80" class="rounded-3xl shadow-2xl relative z-10" alt="Tech">
            </div>
        </div>
    </section>
</body>
</html>