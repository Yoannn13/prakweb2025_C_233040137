<x-layout>
    <x-slot:title>
        Home
    </x-slot:title>

    <!-- Hero Section dengan Gradient -->
    <section class="bg-gradient-to-r from-gray-900 via-black to-gray-900 text-white py-32">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-6xl font-bold mb-6">Platform Blog Modern</h1>
            <p class="text-xl text-gray-300 mb-8 max-w-2xl mx-auto">Jelajahi artikel teknologi dan lifestyle terkini dari penulis berbakat kami</p>
            <div class="flex gap-4 justify-center flex-wrap">
                <a href="/posts" class="bg-white text-black px-8 py-4 rounded-lg hover:bg-gray-200 transition font-bold text-lg">
                    Lihat Semua Post
                </a>
                <a href="/categories" class="border-2 border-white text-white px-8 py-4 rounded-lg hover:bg-white hover:text-black transition font-bold text-lg">
                    Jelajahi Kategori
                </a>
            </div>
        </div>
    </section>

    <div class="container mx-auto px-4 py-16">
        <!-- Statistik Section -->
        <section class="mb-20">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-gradient-to-br from-blue-500 to-blue-600 text-white p-8 rounded-xl text-center hover:shadow-2xl transition">
                    <div class="text-5xl font-bold mb-2">150+</div>
                    <p class="text-lg">Posts Berkualitas</p>
                </div>
                <div class="bg-gradient-to-br from-purple-500 to-purple-600 text-white p-8 rounded-xl text-center hover:shadow-2xl transition">
                    <div class="text-5xl font-bold mb-2">5K+</div>
                    <p class="text-lg">Pembaca Aktif</p>
                </div>
                <div class="bg-gradient-to-br from-pink-500 to-pink-600 text-white p-8 rounded-xl text-center hover:shadow-2xl transition">
                    <div class="text-5xl font-bold mb-2">2</div>
                    <p class="text-lg">Kategori Unggulan</p>
                </div>
            </div>
        </section>

        <!-- Fitur Section -->
        <section class="mb-20">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-16">Mengapa Memilih Kami?</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="flex gap-6">
                    <div class="text-5xl">📱</div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Mobile First</h3>
                        <p class="text-gray-600">Akses dari smartphone, tablet, atau desktop dengan pengalaman sempurna</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="text-5xl">⚡</div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Ultra Cepat</h3>
                        <p class="text-gray-600">Loading waktu yang singkat dengan performa optimal</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="text-5xl">🎯</div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Konten Relevan</h3>
                        <p class="text-gray-600">Artikel terbaru dan terpilih dari penulis profesional</p>
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="text-5xl">🔒</div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-2">Aman & Terpercaya</h3>
                        <p class="text-gray-600">Data Anda dilindungi dengan standar keamanan tertinggi</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="bg-black text-white rounded-2xl p-16 text-center">
            <h2 class="text-4xl font-bold mb-6">Siap Memulai?</h2>
            <p class="text-xl text-gray-300 mb-8">Jangan lewatkan artikel dan tips menarik dari komunitas kami</p>
            <a href="/posts" class="bg-white text-black px-10 py-4 rounded-lg hover:bg-gray-200 transition font-bold text-lg inline-block">
                Mulai Membaca Sekarang
            </a>
        </section>
    </div>
</x-layout>