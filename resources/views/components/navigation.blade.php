<header class="bg-white shadow-md">
    <div class="container mx-auto flex items-center justify-between p-4">
        <div class="flex items-center gap-4">
            <div class="w-10 h-10 bg-gray-300 rounded"></div>
            <h1 class="text-2xl font-bold text-blue-500 hover:text-blue-700 transition">Title Company</h1>

            <nav class="ml-6 space-x-4">
                <a href="{{ url('/dashboard') }}" class="text-gray-700 hover:text-blue-500 transition">Dashboard</a>
                <a href="{{ url('/list-tamu') }}" class="text-gray-700 hover:text-blue-500 transition">List Tamu</a>
            </nav>
        </div>

        <!-- Dropdown Profil -->
        <div class="relative">
            <button id="dropdownButton" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                ☰
            </button>
            <div id="dropdownMenu" class="absolute right-0 mt-2 w-40 bg-white shadow-lg rounded hidden z-50">
                <a href="{{ url('/profile') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-200">Profile</a>
                <form action="{{ url('/logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-200">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const dropdownButton = document.getElementById("dropdownButton");
        const dropdownMenu = document.getElementById("dropdownMenu");

        if (dropdownButton) {
            dropdownButton.addEventListener("click", function () {
                dropdownMenu.classList.toggle("hidden");
            });
        }
    });
</script>
