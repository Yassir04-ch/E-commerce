<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - YASSIR-TECH</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-slate-50 min-h-screen flex items-center justify-center p-6">
    <div class="max-w-4xl w-full bg-white rounded-[2rem] shadow-2xl flex flex-col md:flex-row overflow-hidden border border-slate-100">
        <div class="md:w-1/3 bg-slate-900 p-10 text-white flex flex-col justify-between">
            <div>
                <h2 class="text-3xl font-black mb-6">Join Us!</h2>
                <p class="text-slate-400 leading-relaxed">Create an account to track orders, save favorites, and get exclusive early access to our tech deals.</p>
            </div>
            <div class="space-y-4">
                <div class="flex items-center gap-3"><i class="fas fa-check-circle text-blue-500"></i> <span class="text-sm">Fast Checkout</span></div>
                <div class="flex items-center gap-3"><i class="fas fa-check-circle text-blue-500"></i> <span class="text-sm">Order Tracking</span></div>
            </div>
        </div>

        <div class="md:w-2/3 p-10 md:p-16">
            <h1 class="text-2xl font-bold text-slate-900 mb-8">Register Your Account</h1>
            <form action="/register" method="POST" class="grid md:grid-cols-2 gap-6">
                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-500 uppercase">First Name</label>
                    <input type="text" name="firstname" required class="w-full px-4 py-3 bg-slate-50 border rounded-xl outline-none focus:border-blue-500 transition-all">
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-500 uppercase">Last Name</label>
                    <input type="text" name="lastname" required class="w-full px-4 py-3 bg-slate-50 border rounded-xl outline-none focus:border-blue-500 transition-all">
                </div>
                <div class="md:col-span-2 space-y-2">
                    <label class="text-xs font-bold text-slate-500 uppercase">Email Address</label>
                    <input type="email" name="email" required class="w-full px-4 py-3 bg-slate-50 border rounded-xl outline-none focus:border-blue-500 transition-all">
                </div>
                <div class="space-y-2">
                    <label class="text-xs font-bold text-slate-500 uppercase">Password</label>
                    <input type="password" name="password" required class="w-full px-4 py-3 bg-slate-50 border rounded-xl outline-none focus:border-blue-500 transition-all">
             </div>
                
                   
                <div class="md:col-span-2 pt-4">
                    <button type="submit" class="w-full bg-blue-600 text-white py-4 rounded-xl font-bold hover:bg-blue-700 shadow-lg shadow-blue-200 transition-all">
                        Create Account
                    </button>
                    <p class="text-center mt-6 text-slate-500 text-sm">Already have an account? <a href="/login" class="text-blue-600 font-bold">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>