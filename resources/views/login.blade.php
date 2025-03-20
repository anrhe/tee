<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-blue-500 mb-6">Login</h2>
        
        <form action="{{ url('/login') }}" method="POST">
            @csrf
            
                       <!-- Username Input -->
                       <div class="mb-4">
                        <label for="name" class="block text-gray-700">Username</label>
                        <input 
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Masukkan Username">
                    </div>
        
                    <!-- Password Input with Toggle -->
                    <div class="mb-4 relative">
                        <label for="password" class="block text-gray-700">Password</label>
                        <input 
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Masukkan Password">

                <!-- Eye Icon -->
                <span class="absolute right-3 top-9 cursor-pointer" onclick="togglePassword()">
                    👁️
                </span>
            </div>

            <!-- Login Button -->
            <a href="{{ url('/dashboard') }}" 
            class="block w-full bg-blue-500 text-white px-4 py-2 text-center rounded-lg hover:bg-blue-600 transition">
             Login
         </a>
        </form>
    </div>

    <script>
        function togglePassword() {
            let passwordField = document.getElementById('password');
            passwordField.type = passwordField.type === 'password' ? 'text' : 'password';
        }
    </script>
</body>
</html>
