<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengembangan Website ANASERA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }

        .bold-border {
            border: 2px solid rgb(0, 0, 0);
        }
    </style>
</head>

<body class="bg-white text-gray-800">
    <!-- Header -->
    <header class="bg-pink-500 text-white">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <img src="uploads/logo-anasera-1-rev01.jpg" alt="ANASERA Logo" class="mr-3" height="50"
                    width="50">
                <h1 class="text-2xl font-bold">ANASERA</h1>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a class="hover:text-gray-300" href="{{ url('/') }}">Home</a>
                <a class="hover:text-gray-300" href="{{ url('/profile') }}">Profile</a>
                <a class="hover:text-gray-300" href="{{ url('/layanan') }}">Layanan</a>
                <a class="hover:text-gray-300" href="{{ url('/galery') }}">Gallery</a>
                <a class="hover:text-gray-300" href="{{ url('/form_reservasi') }}">Form Reservasi</a>
                <a class="hover:text-gray-300" href="{{ url('/konsultasi') }}">Konsultasi</a>
            </nav>
        </div>
    </header>

    <!-- Operational Hours Section -->
    <section class="py-8 bg-pink-100">
        <div class="container mx-auto text-center">
            <h2 class="text-2xl font-bold mb-2">Jadwal Operasional</h2>
            <p class="text-lg flex justify-center items-center">
                <img src="https://img.icons8.com/ios-filled/50/000000/clock.png" alt="Clock Icon" class="w-6 h-6 mr-2">
                Senin - Minggu: 08.00 - 18.00
            </p>
            <div class="mt-4">
                <table class="table-auto mx-auto border-collapse bold-border border-rgb-400">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border border-gray-400">Hari</th>
                            <th class="px-4 py-2 border border-gray-400">Tanggal</th>
                            <th class="px-4 py-2 border border-gray-400">Status</th>
                            <th class="px-4 py-2 border border-gray-400">Jam Operasional</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2 border-gray-400">Senin</td>
                            <td class="border px-4 py-2 border-gray-400">1 Januari 2025</td>
                            <td class="border px-4 py-2 border-gray-400">Full Booked</td>
                            <td class="border px-4 py-2 border-gray-400">08.00 - 18.00</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 border-gray-400">Selasa</td>
                            <td class="border px-4 py-2 border-gray-400">2 Januari 2025</td>
                            <td class="border px-4 py-2 border-gray-400">Full Booked</td>
                            <td class="border px-4 py-2 border-gray-400">08.00 - 18.00</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 border-gray-400">Rabu</td>
                            <td class="border px-4 py-2 border-gray-400">3 Januari 2025</td>
                            <td class="border px-4 py-2 border-gray-400">Full Booked</td>
                            <td class="border px-4 py-2 border-gray-400">08.00 - 18.00</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 border-gray-400">Kamis</td>
                            <td class="border px-4 py-2 border-gray-400">4 Januari 2025</td>
                            <td class="border px-4 py-2 border-gray-400">Full Booked</td>
                            <td class="border px-4 py-2 border-gray-400">08.00 - 18.00</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 border-gray-400">Jumat</td>
                            <td class="border px-4 py-2 border-gray-400">5 Januari 2025</td>
                            <td class="border px-4 py-2 border-gray-400">Tersedia</td>
                            <td class="border px-4 py-2 border-gray-400">08.00 - 18.00</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 border-gray-400">Sabtu</td>
                            <td class="border px-4 py-2 border-gray-400">6 Januari 2025</td>
                            <td class="border px-4 py-2 border-gray-400">Tersedia</td>
                            <td class="border px-4 py-2 border-gray-400">08.00 - 18.00</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2 border-gray-400">Minggu</td>
                            <td class="border px-4 py-2 border-gray-400">7 Januari 2025</td>
                            <td class="border px-4 py-2 border-gray-400">Tersedia</td>
                            <td class="border px-4 py-2 border-gray-400">08.00 - 18.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Our Services Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Our Services</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Konsultasi Tumbuh Kembang Anak -->
                <div
                    class="p-6 bg-purple-200 rounded-lg shadow-md transition transform hover:scale-105 hover:bg-purple-300">
                    <img src="uploads/konsultasi-anak.jpg" alt="Konsultasi Anak"
                        class="mx-auto mb-4 w-full h-40 object-cover rounded-lg">
                    <h3 class="text-2xl font-bold mb-2">Konsultasi Anak</h3>
                    <p class="text-left">Evaluasi menyeluruh oleh tenaga profesional untuk menilai perkembangan anak.
                    </p>
                </div>

                <!-- Terapi Wicara -->
                <div
                    class="p-6 bg-purple-200 rounded-lg shadow-md transition transform hover:scale-105 hover:bg-purple-300">
                    <img src="uploads/terapi-wicara.jpg" alt="Terapi Wicara"
                        class="mx-auto mb-4 w-full h-40 object-cover rounded-lg">
                    <h3 class="text-2xl font-bold mb-2">Terapi Wicara</h3>
                    <p class="text-left">Menangani gangguan bicara, bahasa, dan suara dengan terapis wicara
                        bersertifikasi.</p>
                </div>

                <!-- Okupasi Terapi -->
                <div
                    class="p-6 bg-purple-200 rounded-lg shadow-md transition transform hover:scale-105 hover:bg-purple-300">
                    <img src="uploads/okupasi.jpg" alt="Okupasi Terapi"
                        class="mx-auto mb-4 w-full h-40 object-cover rounded-lg">
                    <h3 class="text-2xl font-bold mb-2">Okupasi Terapi</h3>
                    <p class="text-left">Membantu anak mengatasi kesulitan dalam aktivitas sehari-hari.</p>
                </div>

                <!-- Sensori Integrasi -->
                <div
                    class="p-6 bg-purple-200 rounded-lg shadow-md transition transform hover:scale-105 hover:bg-purple-300">
                    <img src="uploads/sensori-integrasi.jpg" alt="Sensori Integrasi"
                        class="mx-auto mb-4 w-full h-40 object-cover rounded-lg">
                    <h3 class="text-2xl font-bold mb-2">Sensori Integrasi</h3>
                    <p class="text-left">Terapi untuk membantu anak dalam memproses dan merespons rangsangan sensorik.
                    </p>
                </div>

                <!-- Fisioterapi -->
                <div
                    class="p-6 bg-purple-200 rounded-lg shadow-md transition transform hover:scale-105 hover:bg-purple-300">
                    <img src="uploads/fisioterapi-anak.jpg" alt="Fisioterapi"
                        class="mx-auto mb-4 w-full h-40 object-cover rounded-lg">
                    <h3 class="text-2xl font-bold mb-2">Fisioterapi</h3>
                    <p class="text-left">Mengatasi masalah motorik dan perkembangan anak sesuai kondisi medis.</p>
                </div>

                <!-- Feeding Therapy -->
                <div
                    class="p-6 bg-purple-200 rounded-lg shadow-md transition transform hover:scale-105 hover:bg-purple-300">
                    <img src="uploads/feeding.jpg" alt="Feeding Therapy"
                        class="mx-auto mb-4 w-full h-40 object-cover rounded-lg">
                    <h3 class="text-2xl font-bold mb-2">Feeding Therapy</h3>
                    <p class="text-left">Terapi untuk anak dengan kesulitan makan dan sensitivitas terhadap makanan.
                    </p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
