<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Galeri</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Playfair+Display:wght@700&display=swap"
        rel="stylesheet" />
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }

        .heading {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>

<body class="bg-yellow-100">
    <!-- Header -->
    <header class="bg-pink-500 text-white">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <img alt="ANASERA Logo" class="mr-3" height="50"
                    src="{{ asset('uploads/Logo-ANASERA-1-rev01.jpg') }}" width="50" />
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

    <!-- Banner -->
    <section class="relative">
        <img alt="A cozy, stylish living room with vintage decor" class="w-full h-auto"
            src="{{ asset('uploads/bersama.jpg') }}">
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
            <h1 class="text-6xl md:text-6xl font-bold mb-4">OUR FACILITIES</h1>
        </div>
    </section>

    <!-- Resepsionis -->
    <section class="bg-yellow-200 py-16">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="relative w-3/4 mx-auto">
                    <img alt="A person named Peaches sitting in a stylish room"
                        class="w-full h-auto border-8 border-yellow-500" src="{{ asset('uploads/Resepsionis.jpg') }}" />
                    <div class="absolute top-2 left-2 bg-yellow-500 p-2 rounded-full">
                        <i class="fas fa-star text-white"></i>
                    </div>
                </div>
                <div>
                    <h3 class="heading text-3xl md:text-4xl text-green-800 mb-4">RESEPSIONIS</h3>
                    <p class="text-2xl mb-4">Langkah pertama dimulai dengan sambutan hangat dan senyum yang tulus</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Ruang Tunggu -->
    <section class="bg-orange-600 py-16">
        <div class="container mx-auto px-4 text-white">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="heading text-3xl md:text-4xl mb-4">RUANG TUNGGU</h3>
                    <p class="text-2xl mb-4">Tempat istirahat sejenak sambil menenangkan hati dan pikiran</p>
                </div>
                <div class="relative w-3/4 mx-auto">
                    <img alt="A stylish vintage kitchen with a red fridge"
                        class="w-full h-auto border-8 border-yellow-500"
                        src="{{ asset('uploads/ruang_tunggu.jpg') }}" />
                    <div class="absolute top-2 right-2 bg-yellow-500 p-2 rounded-full">
                        <i class="fas fa-star text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tempat Bermain Anak -->
    <section class="py-16" style="background-color: #b3d085;">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="relative w-3/4 mx-auto">
                    <img alt="A person named Peaches sitting in a stylish room"
                        class="w-full h-auto border-8 border-yellow-500"
                        src="{{ asset('uploads\tempat_bermain.jpg') }}" />
                    <div class="absolute top-2 left-2 bg-yellow-500 p-2 rounded-full">
                        <i class="fas fa-star text-white"></i>
                    </div>
                </div>
                <div>
                    <h3 class="heading text-3xl md:text-4xl text-green-800 mb-4">Tempat Bermain Anak </h3>
                    <p class="text-2xl mb-4">Di sini, anak-anak bebas tertawa, bermain, dan jadi diri sendiri</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ruang konsultasi -->
    <section class="py-16" style="background-color: #bb91ef;">
        <div class="container mx-auto px-4 text-white">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="heading text-3xl md:text-4xl mb-4">Ruang Konsultasi</h3>
                    <p class="text-2xl mb-4">Di sini, orang tua dan tenaga ahli duduk bersama, saling berbagi cerita
                        demi tumbuh kembang terbaik untuk anak tercinta</p>
                </div>
                <div class="relative w-3/4 mx-auto">
                    <img alt="A stylish vintage kitchen with a red fridge"
                        class="w-full h-auto border-8 border-yellow-500"
                        src="{{ asset('uploads/ruang_konsultasi.jpg') }}" />
                    <div class="absolute top-2 right-2 bg-yellow-500 p-2 rounded-full">
                        <i class="fas fa-star text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ruang terapi wicara -->
    <section class="py-16" style="background-color: #ffabab;">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="relative w-3/4 mx-auto">
                    <img alt="A person named Peaches sitting in a stylish room"
                        class="w-full h-auto border-8 border-yellow-500"
                        src="{{ asset('uploads\ruang_terapiwicara.jpg') }}" />
                    <div class="absolute top-2 left-2 bg-yellow-500 p-2 rounded-full">
                        <i class="fas fa-star text-white"></i>
                    </div>
                </div>
                <div>
                    <h3 class="heading text-3xl md:text-4xl text-green-800 mb-4">Ruang Terapi Wicara </h3>
                    <p class="text-2xl mb-4">Langkah bicara pertama dimulai dari sini, bersama perhatian dan kesabaran
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--Ruang Sensori Integrasi -->
    <section class="py-16" style="background-color: #8ca6fc;">
        <div class="container mx-auto px-4 text-white">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="heading text-3xl md:text-4xl mb-4">Ruang Sensori Integrasi</h3>
                    <p class="text-2xl mb-4">Ruangan ceria penuh warna, tempat anak bermain sambil belajar mengenal
                        dunia dengan sentuhan, suara, dan gerakan</p>
                </div>
                <div class="relative w-3/4 mx-auto">
                    <img alt="A stylish vintage kitchen with a red fridge"
                        class="w-full h-auto border-8 border-yellow-500"
                        src="{{ asset('uploads/ruang_sensoriIntegrasi.jpg') }}" />
                    <div class="absolute top-2 right-2 bg-yellow-500 p-2 rounded-full">
                        <i class="fas fa-star text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ruang Okupasi Terapi -->
    <section class="py-16" style="background-color: #eee2e2;">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div class="relative w-3/4 mx-auto">
                    <img alt="A person named Peaches sitting in a stylish room"
                        class="w-full h-auto border-8 border-yellow-500"
                        src="{{ asset('uploads\ruang_okupasi.jpg') }}" />
                    <div class="absolute top-2 left-2 bg-yellow-500 p-2 rounded-full">
                        <i class="fas fa-star text-white"></i>
                    </div>
                </div>
                <div>
                    <h3 class="heading text-3xl md:text-4xl text-green-800 mb-4">Ruang Okupasi Terapi</h3>
                    <p class="text-2xl mb-4">Dengan penuh kesabaran, anak diajak belajar melakukan hal-hal kecil yang
                        berarti besar
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--Ruang Fisioterapi -->
    <section class="py-16" style="background-color: #dd9595;">
        <div class="container mx-auto px-4 text-white">
            <div class="grid md:grid-cols-2 gap-8 items-center">
                <div>
                    <h3 class="heading text-3xl md:text-4xl mb-4">Ruang Fisioterapi</h3>
                    <p class="text-2xl mb-4">Melalui gerakan sederhana, anak belajar menjadi lebih kuat setiap harinya
                    </p>
                </div>
                <div class="relative w-3/4 mx-auto">
                    <img alt="A stylish vintage kitchen with a red fridge"
                        class="w-full h-auto border-8 border-yellow-500"
                        src="{{ asset('uploads/ruang_fisioterapi.jpg') }}" />
                    <div class="absolute top-2 right-2 bg-yellow-500 p-2 rounded-full">
                        <i class="fas fa-star text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
