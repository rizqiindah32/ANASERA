<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pengembangan Website ANASERA sebagai Pusat Terapi Tumbuh Kembang Anak</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body class="bg-white text-gray-800">
    <!-- Header -->
    <header class="bg-pink-500 text-white">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <img src="{{ asset('uploads/Logo-ANASERA-1-rev01.jpg') }}" alt="Logo ANASERA" class="w-10 h-10 mr-3">
                <h1 class="text-2xl font-bold">ANASERA</h1>
            </div>
            <div class="hidden md:flex space-x-6">
                <a class="hover:text-gray-300" href="/">Home</a>
                <a class="hover:text-gray-300" href="/profile">Profile</a>
                <a class="hover:text-gray-300" href="/layanan">Layanan</a>
                <a class="hover:text-gray-300" href="/galery">Gallery</a>
                <a class="hover:text-gray-300" href="/form_reservasi">Form Reservasi</a>
                <a class="hover:text-gray-300" href="/konsultasi">Konsultasi</a>
                <a class="hover:text-gray-300 font-semibold" href="/admin/login">Login</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-pink-100 py-20">
        <div class="container mx-auto relative z-10 text-center px-4">
            <h2 class="text-4xl font-bold mb-4">
                Welcome to <span class="text-pink-500">ANASERACENTER</span>
            </h2>
            <p class="text-lg mb-6 max-w-3xl mx-auto">
                Kami menyediakan berbagai layanan terapi untuk anak-anak, termasuk Konsultasi Tumbuh Kembang Anak,
                Terapi Wicara, Okupasi Terapi, Sensori Integrasi, Fisioterapi, dan Feeding Therapy.
            </p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16">
        <div class="container mx-auto grid md:grid-cols-3 gap-8 px-4">
            <div class="bg-blue-300 text-white p-6 rounded-lg shadow-lg flex flex-col items-center">
                <h3 class="text-2xl font-bold mb-4 text-center">Licensed Child Care</h3>
                <p class="mb-4 text-center">
                    Anasera menyediakan layanan terapi tumbuh kembang yang aman dan profesional bagi si kecil.
                    Dengan tenaga ahli bersertifikat, kami memastikan setiap anak mendapatkan perhatian terbaik
                    untuk mendukung perkembangan optimalnya.
                </p>
                <img alt="Children playing happily in a colorful therapy room with toys and educational materials"
                    class="rounded-lg object-cover w-full max-w-xs" height="200"
                    src="https://storage.googleapis.com/a1aa/image/R-JvSR-EGZRg3E9I98Fg0eNjgTCdrtcniy6ZB50PbfE.jpg"
                    width="300" />
            </div>
            <div class="bg-pink-300 text-white p-6 rounded-lg shadow-lg flex flex-col items-center">
                <h3 class="text-2xl font-bold mb-4 text-center">High Quality Learning</h3>
                <p class="mb-4 text-center">
                    Dengan terapi wicara, okupasi, dan sensori integrasi, kami bantu anak-anak belajar secara
                    menyenangkan dan efektif. Setiap sesi dirancang untuk meningkatkan keterampilan komunikasi dan
                    motorik mereka.
                </p>
                <img alt="Children engaged in interactive learning activities with therapist guidance"
                    class="rounded-lg object-cover w-full max-w-xs" height="200"
                    src="https://storage.googleapis.com/a1aa/image/7Ac_BzptcOdEJrcT3DfDjlIZiDTavRlBC8cC4vaqTBw.jpg"
                    width="300" />
            </div>
            <div class="bg-yellow-300 text-white p-6 rounded-lg shadow-lg flex flex-col items-center">
                <h3 class="text-2xl font-bold mb-4 text-center">Talented Staff</h3>
                <p class="mb-4 text-center">
                    Tim profesional kami terdiri dari terapis berpengalaman dan bersertifikat. Kami berkomitmen
                    untuk memberikan layanan terbaik demi perkembangan optimal anak.
                </p>
                <img alt="Professional and talented therapy staff smiling and working with children"
                    class="rounded-lg object-cover w-full max-w-xs" height="200"
                    src="https://storage.googleapis.com/a1aa/image/H59_eaGQtkHX7zAm9WH0Reuc6Gkcs6bRw4QSjceY_ws.jpg"
                    width="300" />
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 p-6">
                    <h3 class="text-3xl font-bold mb-4 text-center md:text-left">Our Vision</h3>
                    <p class="mb-5 text-center md:text-left max-w-md mx-auto md:mx-0">
                        Visi Anasera adalah menjadi tempat terapi yang aman dan nyaman dengan fasilitas memadai serta
                        tenaga ahli profesional bersertifikat.
                    </p>
                </div>
                <div class="md:w-1/2 p-6 flex justify-center">
                    <img alt="Happy children playing and smiling in a bright therapy center environment"
                        class="rounded-lg object-cover max-w-full h-auto" height="300"
                        src="https://storage.googleapis.com/a1aa/image/Z2ucPTR33FZ-40JOYu4w2YVatRqRmhvtC92dB5qG9Sw.jpg"
                        width="500" />
                </div>
            </div>
        </div>
    </section>

    <!-- Location -->
    <section class="relative bg-pink-100 py-20">
        <div class="container mx-auto relative z-10 text-center px-4">
            <h2 class="text-4xl font-bold mb-4">Our Location</h2>
            <p class="text-lg mb-6 max-w-3xl mx-auto">
                📍RUKO GRAHA CIAWI NO. 12 Jl. Raya Tapos, Kp. Parung Jambu, Banjar Waru, Kec. Ciawi, Kabupaten Bogor
            </p>
            <div class="mt-8">
                <h2 class="text-4xl font-bold mb-4">Follow Us on Instagram</h2>
                <a class="text-pink-500 hover:text-pink-600" href="https://www.instagram.com/anaseracenter/"
                    target="_blank" rel="noopener noreferrer" aria-label="Instagram ANASERA">
                    <i class="fab fa-instagram fa-4x"></i>
                </a>
            </div>
        </div>
    </section>
</body>

</html>
