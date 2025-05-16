<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Pengembangan Website ANASERA sebagai Pusat Terapi Tumbuh Kembang Anak
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-image: url("{{ asset('uploads/bg.jpg') }}");
            background-size: cover;
        }
    </style>
</head>

<body class="bg-white text-gray-800">
    <!-- Header -->
    <header class="bg-pink-500 text-white">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <img alt="ANASERA Logo" class="mr-3" height="50"
                    src="{{ asset('uploads/Logo-ANASERA-1-rev01.jpg') }}" width="50" />
                <h1 class="text-2xl font-bold">
                    ANASERA
                </h1>
            </div>
            <div class="hidden md:flex space-x-6">
                <a class="hover:text-gray-300" href="{{ url('/') }}">Home</a>
                <a class="hover:text-gray-300" href="{{ url('/profile') }}">Profile</a>
                <a class="hover:text-gray-300" href="{{ url('/layanan') }}">Layanan</a>
                <a class="hover:text-gray-300" href="{{ url('/galery') }}">Gallery</a>
                <a class="hover:text-gray-300" href="{{ url('/form_reservasi') }}">Form Reservasi</a>
                <a class="hover:text-gray-300" href="{{ url('/konsultasi') }}">Konsultasi</a>
            </div>
        </div>
    </header>
    <!-- Form Reservasi -->
    <div class="flex items-center justify-center min-h-screen px-4 pt-15 pb-20">
        <div
            class="bg-white/80 backdrop-blur-md border border-gray-200 p-8 rounded-2xl shadow-xl max-w-lg w-full text-center mt-16">
            <h1 class="text-2xl font-bold mb-2">
                Form Reservasi ANASERA
            </h1>
            <p class="text-gray-600 mb-6">
                Silakan isi form berikut untuk melakukan reservasi.
            </p>
            <div class="bg-white bg-opacity-90 p-6 rounded-lg shadow-md">
                <form class="space-y-4">
                    <div>
                        <label class="block text-left text-gray-700" for="nama-anak">
                            Nama Anak
                        </label>
                        <input class="w-full p-2 border border-gray-300 rounded" id="nama-anak"
                            placeholder="Masukkan nama anak" type="text" />
                    </div>
                    <div>
                        <label class="block text-left text-gray-700" for="tanggal-lahir">
                            Tanggal Lahir
                        </label>
                        <input class="w-full p-2 border border-gray-300 rounded" id="tanggal-lahir"
                            placeholder="Masukkan tanggal lahir" type="date" />
                    </div>
                    <div>
                        <label class="block text-left text-gray-700" for="usia">
                            Usia
                        </label>
                        <input class="w-full p-2 border border-gray-300 rounded" id="usia"
                            placeholder="Masukkan usia anak" type="number" />
                    </div>
                    <div>
                        <label class="block text-left text-gray-700" for="jenis-kelamin">
                            Jenis Kelamin
                        </label>
                        <select class="w-full p-2 border border-gray-300 rounded" id="jenis-kelamin">
                            <option value="">
                                Pilih jenis kelamin
                            </option>
                            <option value="laki-laki">
                                Laki-laki
                            </option>
                            <option value="perempuan">
                                Perempuan
                            </option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-left text-gray-700" for="pendidikan">
                            Pendidikan Anak Saat Ini
                        </label>
                        <input class="w-full p-2 border border-gray-300 rounded" id="pendidikan"
                            placeholder="Masukkan pendidikan anak saat ini" type="text" />
                    </div>
                    <div>
                        <label class="block text-left text-gray-700" for="domisili">
                            Domisili
                        </label>
                        <input class="w-full p-2 border border-gray-300 rounded" id="domisili"
                            placeholder="Masukkan domisili" type="text" />
                    </div>
                    <div>
                        <label class="block text-left text-gray-700" for="keluhan">
                            Keluhan
                        </label>
                        <textarea class="w-full p-2 border border-gray-300 rounded" id="keluhan" placeholder="Masukkan keluhan"
                            rows="4">
                        </textarea>
                    </div>
                    <button class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600" type="submit">
                        KIRIM RESERVASI
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
