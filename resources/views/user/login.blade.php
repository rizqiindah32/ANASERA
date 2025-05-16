<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Login User - ANASERA
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Times+New+Roman&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 110%;
        }
    </style>
</head>

<body class="bg-white text-gray-800">
    <!-- Header -->
    <header class="bg-pink-500 text-white relative">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <div class="flex items-center">
                <img alt="ANASERA logo with pink background and white text, stylized emblem" class="mr-3"
                    height="50"
                    src="https://storage.googleapis.com/a1aa/image/27b46734-5d3d-4c9f-b6c6-59f03ab022e2.jpg"
                    width="50" />
                <h1 class="text-2xl font-bold">
                    ANASERA
                </h1>
            </div>
            <nav class="hidden md:flex space-x-6 items-center font-semibold">
                <a class="hover:text-gray-300 transition-colors duration-200" href="/">
                    Home
                </a>
                <a class="hover:text-gray-300 transition-colors duration-200" href="/profile">
                    Profile
                </a>
                <a class="hover:text-gray-300 transition-colors duration-200" href="/layanan">
                    Layanan
                </a>
                <a class="hover:text-gray-300 transition-colors duration-200" href="/galery">
                    Gallery
                </a>
                <a class="hover:text-gray-300 transition-colors duration-200" href="/form_reservasi">
                    Form Reservasi
                </a>
                <a class="hover:text-gray-300 transition-colors duration-200" href="/konsultasi">
                    Konsultasi
                </a>
                <div class="relative group">
                    <button class="hover:text-gray-300 flex items-center focus:outline-none">
                        Login
                        <i class="fas fa-caret-down ml-1">
                        </i>
                    </button>
                    <div
                        class="absolute right-0 mt-2 w-40 bg-white text-gray-800 rounded-md shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-opacity duration-200 z-20">
                        <a class="block px-4 py-2 hover:bg-pink-100 font-semibold" href="/admin/login">
                            Admin
                        </a>
                        <a class="block px-4 py-2 hover:bg-pink-100 font-semibold" href="/login">
                            User
                        </a>
                    </div>
                </div>
            </nav>
            <button class="md:hidden focus:outline-none" id="mobile-menu-button">
                <i class="fas fa-bars text-white text-2xl">
                </i>
            </button>
        </div>
        <nav class="md:hidden bg-pink-500 text-white px-6 py-4 space-y-3 hidden" id="mobile-menu">
            <a class="block hover:text-gray-300 font-semibold" href="/">
                Home
            </a>
            <a class="block hover:text-gray-300 font-semibold" href="/profile">
                Profile
            </a>
            <a class="block hover:text-gray-300 font-semibold" href="/layanan">
                Layanan
            </a>
            <a class="block hover:text-gray-300 font-semibold" href="/galery">
                Gallery
            </a>
            <a class="block hover:text-gray-300 font-semibold" href="/form_reservasi">
                Form Reservasi
            </a>
            <a class="block hover:text-gray-300 font-semibold" href="/konsultasi">
                Konsultasi
            </a>
            <div class="border-t border-pink-400 pt-3">
                <button
                    class="w-full flex justify-between items-center font-semibold hover:text-gray-300 focus:outline-none"
                    id="mobile-login-button">
                    Login
                    <i class="fas fa-caret-down ml-1">
                    </i>
                </button>
                <div class="mt-2 space-y-2 hidden" id="mobile-login-dropdown">
                    <a class="block px-4 py-2 bg-white text-pink-600 rounded font-semibold hover:bg-pink-100"
                        href="/admin/login">
                        Admin
                    </a>
                    <a class="block px-4 py-2 bg-white text-pink-600 rounded font-semibold hover:bg-pink-100"
                        href="/login">
                        User
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <!-- Login Section -->
    <section class="py-16 bg-white min-h-[calc(100vh-96px)] flex items-center">
        <div class="container mx-auto px-4">
            <div class="max-w-md mx-auto bg-gray-100 p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-6 text-center">
                    Login User
                </h2>
                <form id="loginForm" onsubmit="return false;">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="username">
                            Username
                        </label>
                        <input autocomplete="username"
                            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-400"
                            id="username" placeholder="Username" type="text" />
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="email">
                            Email
                        </label>
                        <input autocomplete="email"
                            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-400"
                            id="email" placeholder="Email" type="email" />
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-2" for="password">
                            Password
                        </label>
                        <input autocomplete="current-password"
                            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-pink-400"
                            id="password" placeholder="Password" type="password" />
                    </div>
                    <div class="flex flex-col sm:flex-row justify-between items-center gap-3">
                        <button
                            class="w-full sm:w-auto bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-6 rounded transition-colors duration-200"
                            type="submit">
                            Sign In
                        </button>
                        <a class="text-pink-500 hover:text-pink-800 text-sm font-semibold" href="#">
                            Forgot Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileLoginButton = document.getElementById('mobile-login-button');
        const mobileLoginDropdown = document.getElementById('mobile-login-dropdown');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        mobileLoginButton.addEventListener('click', () => {
            mobileLoginDropdown.classList.toggle('hidden');
        });

        // Login form submit handler
        document.getElementById("loginForm").addEventListener("submit", async function() {
            const username = document.getElementById("username").value.trim();
            const email = document.getElementById("email").value.trim();
            const password = document.getElementById("password").value.trim();

            if (!username || !email || !password) {
                alert("Semua field harus diisi!");
                return;
            }

            try {
                const res = await fetch("http://localhost:8000/api/user/login", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        username,
                        email,
                        password
                    })
                });

                const data = await res.json();
                if (res.ok) {
                    alert("Login berhasil!");
                    window.location.href = "/user/dashboard";
                } else {
                    alert(data.message || "Login gagal!");
                }
            } catch (err) {
                alert("Terjadi kesalahan! Pastikan server API aktif.");
                console.error(err);
            }
        });
    </script>
</body>

</html>
