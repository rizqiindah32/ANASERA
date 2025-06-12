<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Data Reservasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
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
            <nav class="hidden md:flex space-x-6 items-center">
                <a href="{{ route('admin.dashboard') }}" class="hover:text-gray-300">Dashboard</a>
                <a href="{{ route('admin.reservasi') }}" class="hover:text-gray-300">Reservasi</a>
                <a href="{{ route('admin.konsultasi') }}" class="hover:text-gray-300">Konsultasi</a>
                <a href="{{ route('admin.layanan') }}" class="hover:text-gray-300">Layanan</a>
                <a href="{{ route('admin.galery') }}" class="hover:text-gray-300">Galeri</a>
                <a href="{{ route('admin.akun') }}" class="hover:text-gray-300">Akun</a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    class="hover:text-gray-300">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
            </nav>
        </div>

        <!-- Mobile Menu -->
        <nav class="md:hidden bg-pink-700 text-white px-6 py-4 hidden" id="mobileMenu">
            <a class="block py-2 hover:text-gray-300" href="{{ route('admin.dashboard') }}">Dashboard</a>
            <a class="block py-2 hover:text-gray-300" href="{{ route('admin.reservasi') }}">Reservasi</a>
            <a class="block py-2 hover:text-gray-300" href="{{ route('admin.konsultasi') }}">Konsultasi</a>
            <a class="block py-2 hover:text-gray-300" href="{{ route('admin.layanan') }}">Layanan</a>
            <a class="block py-2 hover:text-gray-300" href="{{ route('admin.galery') }}">Galeri</a>
            <a class="block py-2 hover:text-gray-300" href="{{ route('admin.akun') }}">Akun</a>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="hover:text-gray-300">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </nav>
    </header>

    <!-- Konten -->
    <div class="flex items-center justify-center p-4">
        <div class="bg-white p-6 rounded shadow-md w-full max-w-full overflow-x-auto">
            <h2 class="text-xl font-bold mb-4">Data Reservasi Pengguna</h2>

            <table class="min-w-full bg-white text-sm rounded shadow border border-gray-200">
                <thead class="bg-pink-500 text-white">
                    <tr>
                        <th class="py-2 px-4 border border-pink-600 text-left">Nama Anak</th>
                        <th class="py-2 px-4 border border-pink-600 text-left">Tanggal Lahir</th>
                        <th class="py-2 px-4 border border-pink-600 text-left">Tanggal Reservasi</th>
                        <th class="py-2 px-4 border border-pink-600 text-left">Usia</th>
                        <th class="py-2 px-4 border border-pink-600 text-left">Jenis Kelamin</th>
                        <th class="py-2 px-4 border border-pink-600 text-left">Pendidikan</th>
                        <th class="py-2 px-4 border border-pink-600 text-left">Domisili</th>
                        <th class="py-2 px-4 border border-pink-600 text-left">Keluhan</th>
                        <th class="py-2 px-4 border border-pink-600 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($reservasis as $reservasi)
                        <tr class="hover:bg-gray-100">
                            <td class="py-2 px-4 border border-gray-200">{{ $reservasi->nama_anak }}</td>
                            <td class="py-2 px-4 border border-gray-200">{{ $reservasi->tanggal_lahir }}</td>
                            <td class="py-2 px-4 border border-gray-200">{{ $reservasi->tanggal_reservasi }}</td>
                            <td class="py-2 px-4 border border-gray-200">{{ $reservasi->usia }} th</td>
                            <td class="py-2 px-4 border border-gray-200 capitalize">{{ $reservasi->jenis_kelamin }}
                            </td>
                            <td class="py-2 px-4 border border-gray-200">{{ $reservasi->pendidikan }}</td>
                            <td class="py-2 px-4 border border-gray-200">{{ $reservasi->domisili }}</td>
                            <td class="py-2 px-4 border border-gray-200">{{ $reservasi->keluhan }}</td>
                            {{-- <td class="py-2 px-4 border border-gray-200 text-center">
                                <form method="POST" action="{{ route('admin.reservasi.destroy', $reservasi->id) }}"
                                    onsubmit="return confirm('Yakin ingin hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-red-600 hover:text-red-800 flex items-center justify-center space-x-1 mx-auto">
                                        <i class="fas fa-trash-alt"></i><span>Hapus</span>
                                    </button>
                                </form>
                            </td> --}}
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center py-4 text-gray-500">Tidak ada data reservasi.</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
</body>

</html>
