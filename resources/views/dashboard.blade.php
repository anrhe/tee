<x-app>
    <x-navigation></x-navigation>    
    
    <!-- Main Content -->
    <main class="p-6 max-w-6xl mx-auto">
        <div class="grid gap-6 lg:grid-cols-3">
            
            <!-- Large Box -->
            <div class="bg-white shadow-lg rounded-lg p-6 lg:col-span-2">
                <div class="relative">
                    <div id="slideshow" class="w-full h-64 bg-gray-300 rounded flex items-center justify-center">
                        <img id="slide-image" src="default.jpg" alt="Gambar Utama" class="w-full h-64 object-cover rounded">
                    </div>
                    <button onclick="prevSlide()" class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-black text-white p-2 rounded-full">◀</button>
                    <button onclick="nextSlide()" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-black text-white p-2 rounded-full">▶</button>
                </div>
                <textarea id="slide-caption" class="mt-4 text-sm text-gray-700 w-full border rounded p-2">Lorem ipsum dolor sit amet...</textarea>
            </div>

            <!-- QR -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <input type="file" id="qr-image" class="w-full mb-2">
                <textarea id="qr-text" class="mt-4 text-sm text-gray-700 w-full border rounded p-2">Lorem ipsum dolor sit amet...</textarea>
            </div>
        </div>

        <!-- Form Section -->
        <div class="mt-8 p-6 bg-white shadow-lg rounded-lg">
            <h2 class="text-center font-bold text-lg mb-4">Data Tamu</h2>
            <div class="grid gap-4">
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-1">Tanggal</label>
                    <input type="date" id="tanggal" class="w-full p-2 border rounded bg-gray-200 text-gray-700" value="2025-03-20">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-1">Nama</label>
                    <input type="text" id="nama" class="w-full p-2 border rounded bg-gray-200 text-gray-700" placeholder="Nama Anda">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-1">Jenis Kelamin</label>
                    <select id="jenis-kelamin" class="w-full p-2 border rounded bg-gray-200 text-gray-700">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-1">Alamat</label>
                    <input type="text" id="alamat" class="w-full p-2 border rounded bg-gray-200 text-gray-700" placeholder="Alamat Anda">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-1">Tujuan Kedatangan</label>
                    <select id="tujuan-kedatangan" class="w-full p-2 border rounded bg-gray-200 text-gray-700">
                        <option value="Meeting">Meeting</option>
                        <option value="Interview">Interview</option>
                        <option value="Kunjungan">Kunjungan</option>
                    </select>
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-1">Detail Tujuan Berkunjung</label>
                    <input type="text" id="alamat" class="w-full p-2 border rounded bg-gray-200 text-gray-700" placeholder="Detail tujuan anda berkunjung">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-1">Foto</label>
                    <input type="file" id="foto" class="w-full p-2 border rounded bg-gray-200 text-gray-700">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-1">Jam Masuk</label>
                    <input type="time" id="jam-masuk" class="w-full p-2 border rounded bg-gray-200 text-gray-700">
                </div>
                <div>
                    <label class="block text-gray-700 text-sm font-semibold mb-1">Keterangan</label>
                    <textarea id="keterangan" class="w-full p-2 border rounded bg-gray-200 text-gray-700"></textarea>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
       <footer class="py-6 text-center text-sm text-gray-500">
        Perusahaan &copy; {{ date('Y') }}
    </footer>

    
</x-app>