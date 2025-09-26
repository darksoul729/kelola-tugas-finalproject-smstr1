<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Tugas - Solusi Manajemen Tugas Sederhana</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc; /* Warna background sangat terang */
        }
        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4 sticky top-0 z-10">
        <div class="container mx-auto flex justify-between items-center px-6 lg:px-10">
            <a href="#" class="text-2xl font-extrabold text-blue-600 tracking-wider">
                Kelola Tugas
            </a>
            <div class="flex items-center space-x-4">
                <a href="#fitur" class="text-gray-600 hover:text-blue-600 transition duration-200 font-medium hidden sm:block">Fitur</a>
                <a href="#kontak" class="text-gray-600 hover:text-blue-600 transition duration-200 font-medium hidden sm:block">Kontak</a>
                <a href="task_manager_mockup.html" class="bg-blue-600 text-white font-semibold py-2 px-5 rounded-full shadow-lg hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-105">
                    Mulai Aplikasi
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="bg-blue-500 py-24 md:py-36 text-white overflow-hidden">
        <div class="container mx-auto px-6 lg:px-10 text-center relative z-0">
            
            <h1 class="text-5xl md:text-7xl font-extrabold mb-4 leading-tight text-shadow">
                Fokus Pada Apa Yang Penting
            </h1>
            <p class="text-xl md:text-2xl font-light mb-10 max-w-3xl mx-auto opacity-90">
                Aplikasi Kelola Tugas berbasis CodeIgniter 4: Simpel, Cepat, dan Efektif untuk melacak setiap daftar pekerjaan Anda, dari pending hingga done.
            </p>
            
            <a href="task_manager_mockup.html" class="bg-yellow-400 text-blue-800 text-xl font-bold py-3 px-10 rounded-full shadow-2xl hover:bg-yellow-300 transition duration-300 ease-in-out transform hover:scale-110 inline-flex items-center space-x-2">
                <span>Coba Sekarang Gratis</span>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </a>
        </div>
    </header>

    <!-- Fitur Section -->
    <section id="fitur" class="py-20 bg-white">
        <div class="container mx-auto px-6 lg:px-10 text-center">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Kenapa Memilih Kelola Tugas?</h2>
            <p class="text-lg text-gray-600 mb-16 max-w-3xl mx-auto">
                Kami menyediakan fitur dasar yang Anda butuhkan tanpa kerumitan yang tidak perlu.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                
                <!-- Feature 1: Status Tracking -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-lg border-t-4 border-red-500 transform hover:shadow-xl transition-all duration-300">
                    <div class="text-red-500 mb-4 inline-block p-3 bg-red-100 rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">3 Status Tugas Fleksibel</h3>
                    <p class="text-gray-600 text-sm">Lacak setiap tahapan pekerjaan: **Pending** (Merah), **Progress** (Biru), dan **Done** (Hijau). Cepat ubah status sesuai progres Anda.</p>
                </div>
                
                <!-- Feature 2: Deadline & CRUD -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-lg border-t-4 border-blue-500 transform hover:shadow-xl transition-all duration-300">
                    <div class="text-blue-500 mb-4 inline-block p-3 bg-blue-100 rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-4 4v.01M3 21h18M3 7h18a2 2 0 012 2v10a2 2 0 01-2 2H3a2 2 0 01-2-2V9a2 2 0 012-2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Manajemen CRUD Penuh</h3>
                    <p class="text-gray-600 text-sm">Buat, Baca, Ubah, dan Hapus tugas. Tambahkan **deadline** untuk memastikan Anda tidak melewatkan tenggat waktu penting.</p>
                </div>

                <!-- Feature 3: Simplicity -->
                <div class="bg-gray-50 p-6 rounded-xl shadow-lg border-t-4 border-green-500 transform hover:shadow-xl transition-all duration-300">
                    <div class="text-green-500 mb-4 inline-block p-3 bg-green-100 rounded-full">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.27a.997.997 0 011.026.11l2.25 2.25a.997.997 0 01-.11 1.026l-7.796 7.796a.997.997 0 01-1.026.11l-2.25-2.25a.997.997 0 01.11-1.026l7.796-7.796z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Dirancang untuk Pelajar/Pemula</h3>
                    <p class="text-gray-600 text-sm">Dibangun dengan **CodeIgniter 4** sebagai proyek latihan, sehingga strukturnya bersih dan mudah dipelajari serta dikembangkan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-6 lg:px-10 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Siap Mengorganisir Tugas Anda?</h2>
            <p class="text-lg mb-8 max-w-3xl mx-auto">
                Akses langsung ke mockup interaktif dan lihat bagaimana tugas Anda dapat dikelola.
            </p>
            <a href="task_manager_mockup.html" class="bg-white text-blue-600 text-xl font-bold py-3 px-10 rounded-full shadow-2xl hover:bg-gray-200 transition duration-300 ease-in-out transform hover:scale-105 inline-block">
                Lihat Demo Aplikasi
            </a>
        </div>
    </section>

    <!-- Footer / Contact -->
    <footer id="kontak" class="bg-gray-800 text-gray-300 py-10">
        <div class="container mx-auto px-6 lg:px-10 text-center">
            <p class="mb-2">Proyek Latihan CodeIgniter 4 | Kelola Tugas</p>
            <p class="text-sm">Source Code: <a href="https://github.com/username/kelola-tugas.git" class="text-blue-400 hover:text-blue-300 transition-colors">Lihat di GitHub</a></p>
            <p class="text-xs mt-4">&copy; 2024. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

</body>
</html>
