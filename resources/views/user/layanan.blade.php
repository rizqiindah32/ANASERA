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
    <header class="bg-pink-500 text-white relative">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <img src="{{ asset('uploads/Logo-ANASERA-1-rev01.jpg') }}" alt="Logo ANASERA" class="w-10 h-10 mr-3" />
                <h1 class="text-2xl font-bold">ANASERA</h1>
            </div>
            <nav class="hidden md:flex space-x-6 items-center font-semibold">
                <a class="hover:text-gray-300 transition-colors duration-200" href="/">Home</a>
                <a class="hover:text-gray-300 transition-colors duration-200" href="/profile">Profile</a>
                <a class="hover:text-gray-300 transition-colors duration-200" href="/layanan">Layanan Pasien</a>
                <a class="hover:text-gray-300 transition-colors duration-200" href="/galery">Gallery</a>
                <a class="hover:text-gray-300 transition-colors duration-200" href="/konsultasi">Konsultasi</a>
                @guest
                    <!-- Menu Login (Guest Only) -->
                    <div class="relative" id="login-menu-desktop">
                        <button id="login-toggle-desktop" class="flex items-center hover:text-gray-300 focus:outline-none">
                            Login <i class="fas fa-caret-down ml-1"></i>
                        </button>
                        <div id="login-dropdown-desktop"
                            class="absolute right-0 mt-2 w-40 bg-white text-gray-800 rounded-md shadow-lg hidden z-20">
                            <a class="block px-4 py-2 hover:bg-pink-100 font-semibold" href="/admin/login">Admin</a>
                            <a class="block px-4 py-2 hover:bg-pink-100 font-semibold" href="/login">User</a>
                            <a class="block px-4 py-2 hover:bg-pink-100 font-semibold" href="/register">Register</a>
                        </div>
                    </div>
                @endguest
                @auth
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();"
                        class="block px-4 py-2 bg-white text-pink-600 rounded font-semibold hover:bg-pink-100">
                        Logout
                    </a>
                    <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                @endauth
            </nav>
            <button class="md:hidden focus:outline-none" id="mobile-menu-button">
                <i class="fas fa-bars text-white text-2xl"></i>
            </button>
        </div>
        <nav class="md:hidden bg-pink-500 text-white px-6 py-4 space-y-3 hidden" id="mobile-menu">
            <a class="block hover:text-gray-300 font-semibold" href="/">Home</a>
            <a class="block hover:text-gray-300 font-semibold" href="/profile">Profile</a>
            <a class="block hover:text-gray-300 font-semibold" href="/layanan">Layanan</a>
            <a class="block hover:text-gray-300 font-semibold" href="/galery">Gallery</a>
            <a class="block hover:text-gray-300 font-semibold" href="/form_reservasi">Form Reservasi</a>
            <a class="block hover:text-gray-300 font-semibold" href="/konsultasi">Konsultasi</a>
            @guest
                <!-- Mobile Login Dropdown -->
                <div class="relative" id="login-menu-mobile">
                    <button id="login-toggle-mobile"
                        class="w-full flex justify-between items-center font-semibold hover:text-gray-300 focus:outline-none">
                        Login <i class="fas fa-caret-down ml-1"></i>
                    </button>
                    <div id="login-dropdown-mobile" class="mt-2 space-y-2 hidden">
                        <a class="block px-4 py-2 bg-white text-pink-600 rounded font-semibold hover:bg-pink-100"
                            href="/admin/login">Admin</a>
                        <a class="block px-4 py-2 bg-white text-pink-600 rounded font-semibold hover:bg-pink-100"
                            href="/login">User</a>
                        <a class="block px-4 py-2 bg-white text-pink-600 rounded font-semibold hover:bg-pink-100"
                            href="/register">Register</a>
                    </div>
                </div>
            @endguest

            @auth
                <!-- Mobile Logout Button -->
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form-mobile').submit();"
                    class="block px-4 py-2 bg-white text-pink-600 rounded font-semibold hover:bg-pink-100">
                    Logout
                </a>
                <form id="logout-form-mobile" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            @endauth
        </nav>
    </header>

    <!-- Jadwal Tersedia -->
    @php
        use Carbon\Carbon;

        $timezone = 'Asia/Jakarta';
        $today = Carbon::now($timezone)->startOfDay();
        $datesForWeek = [];
        $datesMap = collect($dates)->keyBy('tanggal');

        for ($i = 0; $i < 7; $i++) {
            $currentDate = $today->copy()->addDays($i)->toDateString();

            if ($datesMap->has($currentDate)) {
                $datesForWeek[] = $datesMap[$currentDate];
            } else {
                $datesForWeek[] = [
                    'tanggal' => $currentDate,
                    'available' => null,
                    'status' => 'Tersedia',
                ];
            }
        }
    @endphp

    <section class="p-6 bg-white rounded-md shadow-md mx-4 mb-12">
        <h2 class="text-2xl font-bold mb-4">Jadwal Layanan</h2>
        <table class="w-full text-sm text-left text-gray-700 font-medium border border-gray-200">
            <thead class="bg-gray-100 text-gray-500">
                <tr>
                    <th class="px-4 py-2 border">No</th>
                    <th class="px-4 py-2 border">Hari/Tanggal</th>
                    <th class="px-4 py-2 border">Kuota Tersedia</th>
                    <th class="px-4 py-2 border">Status</th>
                    <th class="px-4 py-2 border">Jam Operasional</th>
                    <th class="px-4 py-2 border">Reservasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datesForWeek as $index => $date)
                    @php
                        $carbonDate = Carbon::parse($date['tanggal'])->locale('id');
                        $isAvailable = is_null($date['available']) || $date['available'] > 0;
                        $availableDisplay = is_null($date['available']) ? '-' : $date['available'];
                    @endphp
                    <tr class="border-t border-gray-200">
                        <td class="px-4 py-3 border">{{ $index + 1 }}</td>
                        <td class="px-4 py-2 border">{{ $carbonDate->translatedFormat('l, d/m/Y') }}</td>
                        <td class="px-4 py-2 border">{{ $availableDisplay }}</td>
                        <td class="px-4 py-2 border">
                            @if ($isAvailable)
                                <span class="text-green-600 font-semibold">Tersedia</span>
                            @else
                                <span class="text-red-600 font-semibold">Penuh</span>
                            @endif
                        </td>
                        <td class="px-4 py-2 border">08:00 - 17:00</td>
                        <td class="px-4 py-2 border">
                            @auth
                                @if ($isAvailable)
                                    <a href="{{ route('reservasi.create', $date['tanggal']) }}"
                                        class="bg-purple-600 hover:bg-purple-700 text-white px-3 py-1 rounded-md text-sm">
                                        Reservasi
                                    </a>
                                @else
                                    <button disabled
                                        class="bg-purple-300 text-white px-3 py-1 rounded-md text-sm cursor-not-allowed">
                                        Reservasi
                                    </button>
                                @endif
                            @else
                                <a href="{{ url('/login') }}"
                                    onclick="return confirm('Silakan login terlebih dahulu untuk melakukan reservasi.')"
                                    class="bg-purple-600 hover:bg-purple-700 text-white px-3 py-1 rounded-md text-sm">
                                    Reservasi
                                </a>
                            @endauth
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

    <!-- Success Modal -->
    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden" id="successModal">
        <div class="bg-white p-6 rounded shadow-md max-w-md mx-4">
            <h2 class="text-xl font-semibold text-green-600 mb-2 select-none">Berhasil!</h2>
            <p class="text-gray-700 mb-4 select-none" id="successMessage">Reservasi Anda telah berhasil.</p>
            <button class="mt-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 w-full select-none"
                onclick="document.getElementById('successModal').classList.add('hidden')">
                Tutup
            </button>
        </div>
    </div>

    <script>
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

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
