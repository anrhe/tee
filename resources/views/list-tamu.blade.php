<!DOCTYPE html>
<html lang="id">

<x-navigation></x-navigation>    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tamu</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="max-w-6xl mx-auto bg-white p-6 shadow-lg rounded-lg">
        <div class="flex justify-between mb-4">
            <button id="showStats" class="bg-blue-500 text-white px-4 py-2 rounded">Statistik</button>
        </div>

        <!-- Tabel Data -->
        <table class="w-full border">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">Tanggal</th>
                    <th class="border p-2">Nama</th>
                    <th class="border p-2">Jenis Kelamin</th>
                    <th class="border p-2">Alamat</th>
                    <th class="border p-2">Tujuan Kedatangan</th>
                    <th class="border p-2">Foto</th>
                    <th class="border p-2">Jam Masuk</th>
                    <th class="border p-2">Keterangan</th>
                </tr>
            </thead>
            <tbody id="dataTamuBody"></tbody>
        </table>
    </div>

    <!-- Pop-up Statistik -->
    <div id="statsPopup" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-4xl max-h-[90vh] overflow-auto">
            <h2 class="text-lg font-bold mb-4">Statistik</h2>
            <p id="totalUsers" class="text-gray-700 mb-4"></p>

            <!-- Grid untuk menampilkan dua Pie Chart bersebelahan -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="text-md font-bold text-center">Jenis Kelamin</h3>
                    <canvas id="chartGender"></canvas>
                </div>
                <div>
                    <h3 class="text-md font-bold text-center">Tujuan Kedatangan</h3>
                    <canvas id="chartPurposes"></canvas>
                </div>
            </div>

            <button id="closeStats" class="mt-4 bg-red-500 text-white px-4 py-2 rounded w-full">Tutup</button>
        </div>
    </div>

    <script>
        // Simulasi Data
        const dataTamu = [
            {tanggal: "2025-03-20", nama: "John Doe", jk: "L", alamat: "Jakarta", tujuan: "Meeting", foto: "-", jam: "08:30", ket: "-"},
            {tanggal: "2025-03-20", nama: "Jane Smith", jk: "P", alamat: "Bandung", tujuan: "Interview", foto: "-", jam: "09:00", ket: "-"},
            {tanggal: "2025-03-20", nama: "Michael Brown", jk: "L", alamat: "Surabaya", tujuan: "Meeting", foto: "-", jam: "10:00", ket: "-"},
            {tanggal: "2025-03-20", nama: "Sarah Lee", jk: "P", alamat: "Bali", tujuan: "Training", foto: "-", jam: "10:30", ket: "-"},
            {tanggal: "2025-03-20", nama: "David Kim", jk: "L", alamat: "Yogyakarta", tujuan: "Interview", foto: "-", jam: "11:00", ket: "-"}
        ];

        function renderTable() {
            let tbody = document.getElementById("dataTamuBody");
            tbody.innerHTML = "";
            dataTamu.forEach(data => {
                tbody.innerHTML += `<tr>
                    <td class='border p-2'>${data.tanggal}</td>
                    <td class='border p-2'>${data.nama}</td>
                    <td class='border p-2'>${data.jk}</td>
                    <td class='border p-2'>${data.alamat}</td>
                    <td class='border p-2'>${data.tujuan}</td>
                    <td class='border p-2'>${data.foto}</td>
                    <td class='border p-2'>${data.jam}</td>
                    <td class='border p-2'>${data.ket}</td>
                </tr>`;
            });
        }
        renderTable();

        let chartGenderInstance = null;
        let chartPurposeInstance = null;

        document.getElementById("showStats").addEventListener("click", function() {
            document.getElementById("statsPopup").classList.remove("hidden");

            let lakiCount = dataTamu.filter(d => d.jk === "L").length;
            let perempuanCount = dataTamu.filter(d => d.jk === "P").length;

            let purposes = {};
            dataTamu.forEach(d => {
                purposes[d.tujuan] = (purposes[d.tujuan] || 0) + 1;
            });

            document.getElementById("totalUsers").innerHTML = `
                <strong>Total User:</strong> ${dataTamu.length} <br>
                <strong>Laki-laki:</strong> ${lakiCount} | <strong>Perempuan:</strong> ${perempuanCount}
            `;

            if (chartGenderInstance) chartGenderInstance.destroy();
            if (chartPurposeInstance) chartPurposeInstance.destroy();

            chartGenderInstance = new Chart(document.getElementById("chartGender"), {
                type: "pie",
                data: {
                    labels: ["Laki-laki", "Perempuan"],
                    datasets: [{
                        data: [lakiCount, perempuanCount],
                        backgroundColor: ["blue", "pink"]
                    }]
                }
            });

            chartPurposeInstance = new Chart(document.getElementById("chartPurposes"), {
                type: "pie",
                data: {
                    labels: Object.keys(purposes),
                    datasets: [{
                        data: Object.values(purposes),
                        backgroundColor: ["red", "green", "yellow", "purple"]
                    }]
                }
            });
        });

        document.getElementById("closeStats").addEventListener("click", function() {
            document.getElementById("statsPopup").classList.add("hidden");
        });

    </script>
</body>
</html>
