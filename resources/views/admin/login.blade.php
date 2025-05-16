<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login Admin - ANASERA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
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
                <img src="{{ asset('uploads/Logo-ANASERA-1-rev01.jpg') }}" alt="Logo" class="mr-3" width="50"
                    height="50" />
                <h1 class="text-2xl font-bold">ANASERA</h1>
            </div>
            <div class="hidden md:flex space-x-6 items-center">
                <a href="{{ url('/') }}" class="hover:text-gray-300">Home</a>
                <a href="{{ url('/profile') }}" class="hover:text-gray-300">Profile</a>
                <a href="{{ url('/layanan') }}" class="hover:text-gray-300">Layanan</a>
                <a href="{{ url('/galery') }}" class="hover:text-gray-300">Gallery</a>
                <a href="{{ url('/form_reservasi') }}" class="hover:text-gray-300">Form Reservasi</a>
                <a href="{{ url('/konsultasi') }}" class="hover:text-gray-300">Konsultasi</a>

                <!-- Dropdown Login -->
                <div class="relative group">
                    <button class="hover:text-gray-300 font-semibold flex items-center">
                        Login <i class="fas fa-caret-down ml-1"></i>
                    </button>
                    <div
                        class="absolute right-0 mt-2 w-40 bg-white text-gray-800 rounded-md shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition-opacity duration-200 z-20">
                        <a href="{{ url('/admin/login') }}"
                            class="block px-4 py-2 hover:bg-pink-100 font-semibold">Admin</a>
                        <a href="{{ url('/login') }}" class="block px-4 py-2 hover:bg-pink-100 font-semibold">User</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Login Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto">
            <div class="max-w-md mx-auto bg-gray-100 p-8 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-6 text-center">Login Admin</h2>
                <form id="loginForm" onsubmit="return false;">
                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2" for="username">Username</label>
                        <input id="username" type="text" class="w-full p-2 border rounded" placeholder="Username">
                    </div>
                    <div class="mb-6">
                        <label class="block text-gray-700 font-bold mb-2" for="password">Password</label>
                        <input id="password" type="password" class="w-full p-2 border rounded" placeholder="Password">
                    </div>
                    <div class="flex justify-between items-center">
                        <button type="submit"
                            class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded">Sign
                            In</button>
                        <a href="#" class="text-pink-500 hover:text-pink-800 text-sm font-semibold">Forgot
                            Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.getElementById("loginForm").addEventListener("submit", async function() {
            const username = document.getElementById("username").value.trim();
            const password = document.getElementById("password").value.trim();

            if (!username || !password) {
                alert("Username dan Password harus diisi!");
                return;
            }

            try {
                const res = await fetch("http://localhost:8000/api/admin/login", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        username,
                        password
                    })
                });

                const data = await res.json();
                if (res.ok) {
                    alert("Login berhasil!");
                    window.location.href = "/admin/dashboard";
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
