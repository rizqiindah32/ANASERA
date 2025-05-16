<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Konsultasi Admin - Konsultasi</title>
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


    <main class="container mx-auto px-4 py-6 flex-grow">
        <h1 class="text-3xl font-bold text-pink-600 mb-6">Daftar Konsultasi Pengguna</h1>

        <div id="konsultasiList" class="space-y-6">
            <div class="bg-white rounded shadow-md p-4 flex flex-col md:flex-row md:space-x-6" data-id="1">
                <div class="md:w-1/3 mb-4 md:mb-0">
                    <div class="mb-2">
                        <span class="font-semibold text-gray-700">User:</span> John Doe
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold text-gray-700">Pesan:</span>
                        <p class="bg-blue-100 p-2 rounded text-gray-800">Saya butuh bantuan dengan akun saya.</p>
                    </div>
                    <div class="text-sm text-gray-500 mt-2">
                        Dikirim pada: 01 Jan 2023 10:00
                    </div>
                </div>
                <div class="md:w-2/3 flex flex-col h-[350px]">
                    <div class="font-semibold text-gray-700 mb-2">Konsultasi Interaktif</div>
                    <div class="flex-1 bg-gray-50 border border-gray-300 rounded p-4 overflow-y-auto flex flex-col space-y-3"
                        id="chat-1" aria-live="polite" aria-label="Chat messages with John Doe">
                        <!-- Chat messages will appear here -->
                    </div>
                    <form class="replyForm mt-3 flex gap-2" data-id="1" aria-label="Form balasan untuk John Doe">
                        <textarea name="balasan" rows="2" class="flex-1 p-2 border border-gray-300 rounded resize-none"
                            placeholder="Tulis balasan..."></textarea>
                        <button type="submit"
                            class="bg-pink-500 hover:bg-pink-600 text-white py-2 px-4 rounded flex items-center justify-center"
                            aria-label="Kirim balasan">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                        <button type="button"
                            class="btnClear bg-gray-300 hover:bg-gray-400 text-gray-700 py-2 px-4 rounded flex items-center justify-center"
                            aria-label="Bersihkan balasan">
                            <i class="fas fa-times"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="bg-white rounded shadow-md p-4 flex flex-col md:flex-row md:space-x-6" data-id="11">
                <div class="md:w-1/3 mb-4 md:mb-0">
                    <div class="mb-2">
                        <span class="font-semibold text-gray-700">User:</span> Irene King
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold text-gray-700">Pesan:</span>
                        <p class="bg-blue-100 p-2 rounded text-gray-800">Bagaimana cara mengaktifkan notifikasi?</p>
                    </div>
                    <div class="text-sm text-gray-500 mt-2">
                        Dikirim pada: 11 Jan 2023 20:00
                    </div>
                </div>
                <div class="md:w-2/3 flex flex-col h-[350px]">
                    <div class="font-semibold text-gray-700 mb-2">Konsultasi Interaktif</div>
                    <div class="flex-1 bg-gray-50 border border-gray-300 rounded p-4 overflow-y-auto flex flex-col space-y-3"
                        id="chat-11" aria-live="polite" aria-label="Chat messages with Irene King">
                    </div>
                    <form class="replyForm mt-3 flex gap-2" data-id="11" aria-label="Form balasan untuk Irene King">
                        <textarea name="balasan" rows="2" class="flex-1 p-2 border border-gray-300 rounded resize-none"
                            placeholder="Tulis balasan..."></textarea>
                        <button type="submit"
                            class="bg-pink-500 hover:bg-pink-600 text-white py-2 px-4 rounded flex items-center justify-center"
                            aria-label="Kirim balasan">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                        <button type="button"
                            class="btnClear bg-gray-300 hover:bg-gray-400 text-gray-700 py-2 px-4 rounded flex items-center justify-center"
                            aria-label="Bersihkan balasan">
                            <i class="fas fa-times"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="bg-white rounded shadow-md p-4 flex flex-col md:flex-row md:space-x-6" data-id="14">
                <div class="md:w-1/3 mb-4 md:mb-0">
                    <div class="mb-2">
                        <span class="font-semibold text-gray-700">User:</span> Larry Nelson
                    </div>
                    <div class="mb-2">
                        <span class="font-semibold text-gray-700">Pesan:</span>
                        <p class="bg-blue-100 p-2 rounded text-gray-800">Aplikasi tidak bisa terhubung ke internet.</p>
                    </div>
                    <div class="text-sm text-gray-500 mt-2">
                        Dikirim pada: 14 Jan 2023 23:00
                    </div>
                </div>
                <div class="md:w-2/3 flex flex-col h-[350px]">
                    <div class="font-semibold text-gray-700 mb-2">Konsultasi Interaktif</div>
                    <div class="flex-1 bg-gray-50 border border-gray-300 rounded p-4 overflow-y-auto flex flex-col space-y-3"
                        id="chat-14" aria-live="polite" aria-label="Chat messages with Larry Nelson">
                    </div>
                    <form class="replyForm mt-3 flex gap-2" data-id="14"
                        aria-label="Form balasan untuk Larry Nelson">
                        <textarea name="balasan" rows="2" class="flex-1 p-2 border border-gray-300 rounded resize-none"
                            placeholder="Tulis balasan..."></textarea>
                        <button type="submit"
                            class="bg-pink-500 hover:bg-pink-600 text-white py-2 px-4 rounded flex items-center justify-center"
                            aria-label="Kirim balasan">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                        <button type="button"
                            class="btnClear bg-gray-300 hover:bg-gray-400 text-gray-700 py-2 px-4 rounded flex items-center justify-center"
                            aria-label="Bersihkan balasan">
                            <i class="fas fa-times"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
        }

        // Simulated user messages for interactivity
        const userMessages = {
            1: [{
                sender: 'user',
                text: 'Saya butuh bantuan dengan akun saya.',
                time: '01 Jan 2023 10:00'
            }],
            11: [{
                sender: 'user',
                text: 'Bagaimana cara mengaktifkan notifikasi?',
                time: '11 Jan 2023 20:00'
            }],
            14: [{
                sender: 'user',
                text: 'Aplikasi tidak bisa terhubung ke internet.',
                time: '14 Jan 2023 23:00'
            }]
        };

        // Function to create a chat bubble
        function createChatBubble(sender, text, time) {
            const bubble = document.createElement('div');
            bubble.classList.add('max-w-[75%]', 'break-words', 'relative', 'px-3', 'py-2', 'rounded-lg', 'shadow-sm');
            const timeEl = document.createElement('div');
            timeEl.classList.add('text-xs', 'text-gray-400', 'mt-1', 'select-none');
            timeEl.textContent = time;

            if (sender === 'admin') {
                bubble.classList.add('bg-pink-100', 'text-pink-800', 'self-end');
                bubble.setAttribute('aria-label', 'Balasan admin: ' + text);
            } else {
                bubble.classList.add('bg-blue-100', 'text-gray-800', 'self-start');
                bubble.setAttribute('aria-label', 'Pesan pengguna: ' + text);
            }
            bubble.textContent = text;
            bubble.appendChild(timeEl);
            return bubble;
        }

        // Load initial user messages into chat containers
        Object.entries(userMessages).forEach(([id, messages]) => {
            const chatContainer = document.getElementById(`chat-${id}`);
            if (chatContainer) {
                messages.forEach(msg => {
                    const bubble = createChatBubble(msg.sender, msg.text, msg.time);
                    chatContainer.appendChild(bubble);
                });
                chatContainer.scrollTop = chatContainer.scrollHeight;
            }
        });

        // Handle reply form submissions
        document.querySelectorAll('.replyForm').forEach(form => {
            form.addEventListener('submit', e => {
                e.preventDefault();
                const textarea = form.querySelector('textarea[name="balasan"]');
                const replyText = textarea.value.trim();
                if (!replyText) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Balasan tidak boleh kosong.',
                    });
                    return;
                }
                const konsultasiId = form.dataset.id;
                const chatContainer = document.getElementById(`chat-${konsultasiId}`);

                // Create admin reply bubble
                const now = new Date();
                const timeString = now.toLocaleString('id-ID', {
                    day: '2-digit',
                    month: 'short',
                    year: 'numeric',
                    hour: '2-digit',
                    minute: '2-digit',
                    hour12: false
                }).replace(/,/g, '');

                const replyBubble = createChatBubble('admin', replyText, timeString);

                // Add delete button for each admin reply
                const deleteBtn = document.createElement('button');
                deleteBtn.type = 'button';
                deleteBtn.className = 'absolute top-1 right-1 text-pink-600 hover:text-pink-900';
                deleteBtn.innerHTML = '<i class="fas fa-times"></i>';
                deleteBtn.title = 'Hapus balasan';
                deleteBtn.setAttribute('aria-label', 'Hapus balasan admin');
                deleteBtn.addEventListener('click', () => {
                    Swal.fire({
                        title: 'Hapus balasan?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#aaa',
                        confirmButtonText: 'Ya, hapus',
                        cancelButtonText: 'Batal'
                    }).then(result => {
                        if (result.isConfirmed) {
                            replyBubble.remove();
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: 'Balasan telah dihapus.',
                                timer: 1500,
                                showConfirmButton: false
                            });
                        }
                    });
                });
                replyBubble.style.position = 'relative';
                replyBubble.appendChild(deleteBtn);

                chatContainer.appendChild(replyBubble);
                chatContainer.scrollTop = chatContainer.scrollHeight;

                // Clear textarea
                textarea.value = '';

                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: 'Balasan berhasil dikirim.',
                    timer: 1500,
                    showConfirmButton: false
                });
            });

            // Clear button functionality
            const clearBtn = form.querySelector('.btnClear');
            if (clearBtn) {
                clearBtn.addEventListener('click', () => {
                    form.querySelector('textarea[name="balasan"]').value = '';
                });
            }
        });
    </script>
</body>

</html>
