!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Admin - Anasera</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 110%;
        }
    </style>
</head>

<body class="bg-gray-50 min-h-screen">
    <!-- Navigasi Atas -->
    <header class="bg-pink-600 text-white shadow">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <img src="{{ asset('uploads/Logo-ANASERA-1-rev01.jpg') }}" alt="Logo ANASERA" class="w-10 h-10 mr-3">
                <h1 class="text-2xl font-bold">ANASERA Admin</h1>
            </div>
            <nav class="hidden md:flex space-x-6">
                <a href="{{ route('admin.dashboard') }}" class="hover:text-gray-300">Dashboard</a>
                <a href="{{ route('admin.reservasi') }}" class="hover:text-gray-300">Reservasi</a>
                <a href="{{ route('admin.konsultasi') }}" class="hover:text-gray-300">Konsultasi</a>
                <a href="{{ route('admin.layanan') }}" class="hover:text-gray-300">Layanan</a>
                <a href="{{ route('admin.galeri') }}" class="hover:text-gray-300">Galeri</a>
                <a href="{{ route('admin.akun') }}" class="hover:text-gray-300">Akun</a>
                <a href="{{ route('logout') }}" class="hover:text-gray-300">Logout</a>
            </nav>
        </div>
        <nav class="md:hidden bg-pink-700 text-white px-6 py-4 hidden" id="mobileMenu">
            <a class="block py-2 hover:text-gray-300" href="/admin/dashboard">
                Dashboard
            </a>
            <a class="block py-2 hover:text-gray-300" href="/admin/reservasi">
                Reservasi
            </a>
            <a class="block py-2 hover:text-gray-300" href="/admin/konsultasi">
                Konsultasi
            </a>
            <a class="block py-2 hover:text-gray-300" href="/admin/layanan">
                Layanan
            </a>
            <a class="block py-2 hover:text-gray-300 font-semibold underline" href="/admin/galeri">
                Galeri
            </a>
            <a class="block py-2 hover:text-gray-300" href="/admin/akun">
                Akun
            </a>
            <a class="block py-2 hover:text-gray-300" href="/logout">
                Logout
            </a>
        </nav>
    </header>

    <!-- Konten Dashboard -->
    <main class="container mx-auto mt-8 px-6">
        <h2 class="text-3xl font-semibold mb-6">Dashboard</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-lg shadow flex items-center space-x-4 hover:shadow-lg transition-shadow">
                <div class="p-3 bg-blue-100 text-blue-600 rounded-full">
                    <i class="fas fa-calendar-check fa-2x"></i>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Total Reservasi</p>
                    <p class="text-2xl font-semibold text-gray-900">128</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow flex items-center space-x-4 hover:shadow-lg transition-shadow">
                <div class="p-3 bg-green-100 text-green-600 rounded-full">
                    <i class="fas fa-comments fa-2x"></i>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Total Konsultasi</p>
                    <p class="text-2xl font-semibold text-gray-900">54</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow flex items-center space-x-4 hover:shadow-lg transition-shadow">
                <div class="p-3 bg-yellow-100 text-yellow-600 rounded-full">
                    <i class="fas fa-users fa-2x"></i>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Total User</p>
                    <p class="text-2xl font-semibold text-gray-900">320</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-lg shadow flex items-center space-x-4 hover:shadow-lg transition-shadow">
                <div class="p-3 bg-red-100 text-red-600 rounded-full">
                    <i class="fas fa-exclamation-triangle fa-2x"></i>
                </div>
                <div>
                    <p class="text-sm font-medium text-gray-500">Pending Approvals</p>
                    <p class="text-2xl font-semibold text-gray-900">7</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
