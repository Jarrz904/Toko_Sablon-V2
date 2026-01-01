<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journa Studio | Premium Printing Service</title>
    <link rel="icon" type="image/jpeg" href="{{ asset('img/logo3.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
        }

        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
        }

        .rotate-y-12 {
            transform: rotateY(12deg);
        }

        .rotate-x-6 {
            transform: rotateX(-6deg);
        }

        .translate-z-30 {
            transform: translateZ(30px);
        }

        .translate-z-50 {
            transform: translateZ(50px);
        }

        /* Background Hero Teroptimasi */
        .hero-bg {
            background-image: linear-gradient(to bottom, rgba(15, 15, 15, 0.4), rgba(15, 15, 15, 1)), url('{{ asset("img/bg-logo.jpg") }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #0f0f0f;
        }

        ::-webkit-scrollbar-thumb {
            background: #d97706;
            border-radius: 10px;
        }
    </style>
</head>

<body class="bg-[#0f0f0f] text-neutral-100 antialiased" x-data="{ 
        selectProduct(name, price) {
            const phoneNumber = '6289686202603';
            const message = `Halo Journa Studio, saya ingin bertanya tentang produk: *${name}*`;
            window.open(`https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`, '_blank');
        }
      }">

    <nav
        class="flex justify-between items-center p-4 md:p-6 sticky top-0 bg-[#0f0f0f]/80 backdrop-blur-lg z-50 border-b border-white/5">
        <div class="flex items-center gap-3 md:gap-4">
            <img src="{{ asset('img/logo.PNG') }}" alt="Journa Sablon Logo"
                class="h-8 md:h-12 rounded-sm object-contain">
        </div>

        <div class="hidden lg:flex space-x-10 text-[10px] uppercase tracking-widest font-medium opacity-60">
            <a href="#about" class="hover:opacity-100 hover:text-amber-500 transition">Tentang Kami</a>
            <a href="#sablon" class="hover:opacity-100 hover:text-amber-500 transition">Jenis Sablon</a>
            <a href="#bahan" class="hover:opacity-100 hover:text-amber-500 transition">Jenis Bahan</a>
            <a href="#testimoni" class="hover:opacity-100 hover:text-amber-500 transition">Testimoni</a>
            <a href="#kontak" class="hover:opacity-100 hover:text-amber-500 transition">Kontak</a>
        </div>

        <a href="https://wa.me/6289686202603" target="_blank"
            class="flex items-center gap-2 md:gap-3 bg-[#25D366] text-white px-4 py-2 md:px-8 md:py-4 rounded-full font-black text-[9px] md:text-sm uppercase tracking-widest hover:scale-105 active:scale-95 transition-all shadow-lg hover:shadow-[#25D366]/50">
            <svg class="w-3 h-3 md:w-5 md:h-5 fill-current" viewBox="0 0 24 24">
                <path
                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.246 2.248 3.484 5.232 3.484 8.412 0 6.556-5.338 11.892-11.893 11.892-1.997-.001-3.951-.5-5.688-1.448l-6.309 1.656zm6.224-3.92c1.589.943 3.139 1.462 4.75 1.463 5.462 0 9.906-4.444 9.906-9.906 0-2.646-1.03-5.132-2.903-7.003-1.871-1.871-4.358-2.903-7.003-2.903-5.462 0-9.906 4.444-9.906 9.906 0-2.031.618 4.001 1.787 5.713l-1.011 3.703 3.869-.884-.493-.39z" />
            </svg>
            <span class="whitespace-nowrap">Hubungi Kami</span>
        </a>
    </nav>

    <header class="relative min-h-screen flex flex-col items-center justify-center px-8 text-center hero-bg">
        <div class="z-10 flex flex-col items-center">
            <div class="relative mb-12 group">
                <div
                    class="absolute -inset-1 bg-neutral-200 rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000">
                </div>
                <img src="{{ asset('img/logo.PNG') }}" alt="Journa Sablon Logo"
                    class="relative w-64 md:w-96 rounded-2xl shadow-2xl border border-white/10">
            </div>
            <div class="h-1.5 w-80 bg-amber-500 mb-8"></div>
            <p class="max-w-3xl mx-auto text-neutral-200 text-xl md:text-2xl leading-relaxed italic drop-shadow-lg">
                "Pusat layanan sablon premium dengan kualitas artistik tinggi. <br class="hidden md:block"> Kami
                mewujudkan ide Anda menjadi karya di atas kain."
            </p>
            <a href="#sablon"
                class="mt-12 px-10 py-4 bg-white text-black font-bold uppercase text-sm tracking-[0.3em] rounded-full hover:bg-amber-500 transition-all hover:scale-105">Lihat
                Katalog</a>
        </div>
    </header>

    <section id="about"
        class="max-w-7xl mx-auto px-8 py-32 grid grid-cols-1 md:grid-cols-2 gap-20 items-center border-b border-white/5">
        <div class="relative group" style="perspective: 1500px;">
            <div
                class="absolute -inset-4 bg-amber-500/20 rounded-full blur-3xl group-hover:bg-amber-500/40 transition duration-1000">
            </div>
            <div class="relative overflow-hidden rounded-[3rem] aspect-square bg-[#705515] border border-white/10 shadow-2xl transition-all duration-700 ease-out transform-gpu group-hover:rotate-y-12 group-hover:-rotate-x-6 group-hover:scale-105"
                style="transform-style: preserve-3d;">
                <img src="{{ asset('img/logo3.png') }}"
                    class="w-full h-full object-cover transition duration-1000 group-hover:scale-110"
                    style="transform: translateZ(30px);" alt="Journa Studio Logo">
                <div class="absolute bottom-10 left-10 text-left transition-transform duration-700 group-hover:translate-z-50"
                    style="transform: translateZ(50px);">
                    <p class="text-amber-500 font-bold tracking-[0.5em] text-[10px] uppercase mb-1 drop-shadow-md">Since
                    </p>
                    <p class="text-4xl font-black italic text-white drop-shadow-2xl">2019</p>
                </div>
            </div>
        </div>
        <div>
            <h2 class="text-5xl font-bold mt-6 mb-8 tracking-tighter uppercase leading-tight text-white">Sejarah Journa
                Sablon</h2>
            <div class="space-y-6">
                <p class="text-neutral-400 leading-relaxed text-lg">
                    <strong class="text-white">Journa Studio Printing</strong> resmi didirikan pada tahun <strong
                        class="text-amber-500">2019</strong>. Berawal dari dedikasi mendalam untuk menciptakan standar
                    baru dalam produksi kaos, kami hadir sebagai spesialis sablon kaos premium yang menggabungkan
                    kenyamanan bahan dengan detail visual yang tajam.
                </p>
                <p class="text-neutral-500 leading-relaxed italic border-l-2 border-amber-500 pl-6">
                    "Bagi kami, sepotong kaos bukan sekadar pakaian, melainkan sebuah karya seni yang harus nyaman
                    dipakai dan membanggakan untuk dipandang."
                </p>
            </div>
        </div>
    </section>

    <section id="sablon" class="max-w-7xl mx-auto px-6 md:px-8 py-20 md:py-32 text-center">
        <h2 class="text-3xl md:text-5xl font-bold mb-12 md:mb-16 tracking-tighter uppercase italic text-white">
            Jenis Sablon
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-8">

            <div class="group cursor-pointer" @click="selectProduct('Plastisol Raster', 65000)">
                <div
                    class="aspect-square overflow-hidden rounded-xl md:rounded-2xl mb-4 md:mb-6 bg-neutral-900 border border-white/5 relative">
                    <img src="{{ asset('img/foto1.jpg') }}"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center italic text-[8px] md:text-xs tracking-widest font-bold text-white">
                        HUBUNGI KAMI</div>
                </div>
                <h3 class="text-white font-bold uppercase tracking-tighter text-xs md:text-base">Plastisol Raster</h3>
                <p class="text-neutral-500 text-[8px] md:text-[10px] uppercase tracking-widest mt-1">Detail Dot &
                    Gradasi Halus</p>
            </div>

            <div class="group cursor-pointer" @click="selectProduct('Plastisol Glossy', 68000)">
                <div
                    class="aspect-square overflow-hidden rounded-xl md:rounded-2xl mb-4 md:mb-6 bg-neutral-900 border border-white/5 relative">
                    <img src="{{ asset('img/foto2.jpg') }}"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center italic text-[8px] md:text-xs tracking-widest font-bold text-white">
                        HUBUNGI KAMI</div>
                </div>
                <h3 class="text-white font-bold uppercase tracking-tighter text-xs md:text-base">Plastisol Glossy</h3>
                <p class="text-neutral-500 text-[8px] md:text-[10px] uppercase tracking-widest mt-1">Kilau Mewah & Solid
                </p>
            </div>

            <div class="group cursor-pointer" @click="selectProduct('Plascharge Ink', 75000)">
                <div
                    class="aspect-square overflow-hidden rounded-xl md:rounded-2xl mb-4 md:mb-6 bg-neutral-900 border border-white/5 relative">
                    <img src="{{ asset('img/foto3.jpg') }}"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center italic text-[8px] md:text-xs tracking-widest font-bold text-white">
                        HUBUNGI KAMI</div>
                </div>
                <h3 class="text-white font-bold uppercase tracking-tighter text-xs md:text-base">Plascharge Ink</h3>
                <p class="text-neutral-500 text-[8px] md:text-[10px] uppercase tracking-widest mt-1">Lembut Menyatu Ke
                    Kain</p>
            </div>

            <div class="group cursor-pointer" @click="selectProduct('Puff Ink 3D', 72000)">
                <div
                    class="aspect-square overflow-hidden rounded-xl md:rounded-2xl mb-4 md:mb-6 bg-neutral-900 border border-white/5 relative">
                    <img src="{{ asset('img/foto4.jpg') }}"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center italic text-[8px] md:text-xs tracking-widest font-bold text-white">
                        HUBUNGI KAMI</div>
                </div>
                <h3 class="text-white font-bold uppercase tracking-tighter text-xs md:text-base">Puff Ink 3D</h3>
                <p class="text-neutral-500 text-[8px] md:text-[10px] uppercase tracking-widest mt-1">Efek Timbul
                    Mengembang</p>
            </div>

            <div class="group cursor-pointer" @click="selectProduct('Sablon Rubber', 55000)">
                <div
                    class="aspect-square overflow-hidden rounded-xl md:rounded-2xl mb-4 md:mb-6 bg-neutral-900 border border-white/5 relative">
                    <img src="{{ asset('img/foto5.jpeg') }}"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center italic text-[8px] md:text-xs tracking-widest font-bold text-white">
                        HUBUNGI KAMI</div>
                </div>
                <h3 class="text-white font-bold uppercase tracking-tighter text-xs md:text-base">Sablon DTF</h3>
                <p class="text-neutral-500 text-[8px] md:text-[10px] uppercase tracking-widest mt-1">Elastis & Daya
                    Tahan Tinggi</p>
            </div>

            <div class="group cursor-pointer" @click="selectProduct('Sablon DTF', 60000)">
                <div
                    class="aspect-square overflow-hidden rounded-xl md:rounded-2xl mb-4 md:mb-6 bg-neutral-900 border border-white/5 relative">
                    <img src="{{ asset('img/foto6.jpeg') }}"
                        class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                    <div
                        class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center italic text-[8px] md:text-xs tracking-widest font-bold text-white">
                        HUBUNGI KAMI</div>
                </div>
                <h3 class="text-white font-bold uppercase tracking-tighter text-xs md:text-base">Sablon Rubber</h3>
                <p class="text-neutral-500 text-[8px] md:text-[10px] uppercase tracking-widest mt-1">Warna Full Color &
                    Detail Presisi</p>
            </div>

        </div>
    </section>

   <section id="bahan" class="py-32 bg-[#0a0a0a]">
    <div class="max-w-7xl mx-auto px-8 text-center">
        <h2 class="text-3xl md:text-5xl font-bold mt-4 mb-12 md:mb-16 tracking-tighter uppercase italic text-white">
            Jenis Bahan
        </h2>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            
            <div class="group cursor-pointer text-center" @click="selectProduct('Cotton Combed 30s')">
                <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-neutral-900 border border-white/5 mb-4 relative">
                    <img src="{{ asset('img/kaos-putih.webp') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        alt="Cotton Combed 30s">
                    <div class="absolute inset-0 bg-amber-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
                <h3 class="text-white font-bold text-xs uppercase tracking-widest">Cotton Combed 30s</h3>
                <p class="text-neutral-500 text-[9px] uppercase mt-1 tracking-tighter">Ringan & Paling Laris</p>
            </div>

            <div class="group cursor-pointer text-center" @click="selectProduct('Cotton Combed 24s')">
                <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-neutral-900 border border-white/5 mb-4 relative">
                    <img src="{{ asset('img/kaos-hitam.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        alt="Cotton Combed 24s">
                    <div class="absolute inset-0 bg-amber-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
                <h3 class="text-white font-bold text-xs uppercase tracking-widest">Cotton Combed 24s</h3>
                <p class="text-neutral-500 text-[9px] uppercase mt-1 tracking-tighter">Tebal Sedang & Nyaman</p>
            </div>

            <div class="group cursor-pointer text-center" @click="selectProduct('Cotton Combed 20s')">
                <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-neutral-900 border border-white/5 mb-4 relative">
                    <img src="{{ asset('img/kaos-biru-muda.jpeg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        alt="Cotton Combed 20s">
                    <div class="absolute inset-0 bg-amber-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
                <h3 class="text-white font-bold text-xs uppercase tracking-widest">Cotton Combed 20s</h3>
                <p class="text-neutral-500 text-[9px] uppercase mt-1 tracking-tighter">Bahan Tebal & Kokoh</p>
            </div>

            <div class="group cursor-pointer text-center" @click="selectProduct('Cotton Combed 16s')">
                <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-neutral-900 border border-white/5 mb-4 relative">
                    <img src="{{ asset('img/kaos-biru.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        alt="Cotton Combed 16s">
                    <div class="absolute inset-0 bg-amber-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
                <h3 class="text-white font-bold text-xs uppercase tracking-widest">Cotton Combed 16s</h3>
                <p class="text-neutral-500 text-[9px] uppercase mt-1 tracking-tighter">Sangat Tebal (Heavyweight)</p>
            </div>

            <div class="group cursor-pointer text-center" @click="selectProduct('Cotton Bamboo 30s')">
                <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-neutral-900 border border-white/5 mb-4 relative">
                    <img src="{{ asset('img/kaos-kuning.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        alt="Cotton Bamboo 30s">
                    <div class="absolute inset-0 bg-amber-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
                <h3 class="text-white font-bold text-xs uppercase tracking-widest">Cotton Bamboo 30s</h3>
                <p class="text-neutral-500 text-[9px] uppercase mt-1 tracking-tighter">Anti Bakteri & Super Lembut</p>
            </div>

            <div class="group cursor-pointer text-center" @click="selectProduct('Cotton Bamboo 24s')">
                <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-neutral-900 border border-white/5 mb-4 relative">
                    <img src="{{ asset('img/kaos-ungu-muda.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        alt="Cotton Bamboo 24s">
                    <div class="absolute inset-0 bg-amber-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
                <h3 class="text-white font-bold text-xs uppercase tracking-widest">Cotton Bamboo 24s</h3>
                <p class="text-neutral-500 text-[9px] uppercase mt-1 tracking-tighter">Premium & Sejuk di Kulit</p>
            </div>

            <div class="group cursor-pointer text-center" @click="selectProduct('Polyester 30s')">
                <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-neutral-900 border border-white/5 mb-4 relative">
                    <img src="{{ asset('img/kaos-pink.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        alt="Polyester 30s">
                    <div class="absolute inset-0 bg-amber-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
                <h3 class="text-white font-bold text-xs uppercase tracking-widest">Polyester 30s</h3>
                <p class="text-neutral-500 text-[9px] uppercase mt-1 tracking-tighter">Awet & Tahan Lama</p>
            </div>

            <div class="group cursor-pointer text-center" @click="selectProduct('Polyester 24s')">
                <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-neutral-900 border border-white/5 mb-4 relative">
                    <img src="{{ asset('img/kaos-merah.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        alt="Polyester 24s">
                    <div class="absolute inset-0 bg-amber-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
                <h3 class="text-white font-bold text-xs uppercase tracking-widest">Polyester 24s</h3>
                <p class="text-neutral-500 text-[9px] uppercase mt-1 tracking-tighter">Cepat Kering & Ekonomis</p>
            </div>

            <div class="group cursor-pointer text-center" @click="selectProduct('Pique Cotton')">
                <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-neutral-900 border border-white/5 mb-4 relative">
                    <img src="{{ asset('img/kaos-maroon.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        alt="Pique Cotton">
                    <div class="absolute inset-0 bg-amber-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
                <h3 class="text-white font-bold text-xs uppercase tracking-widest">Pique Cotton</h3>
                <p class="text-neutral-500 text-[9px] uppercase mt-1 tracking-tighter">Bahan Polo Berpori Alami</p>
            </div>

            <div class="group cursor-pointer text-center" @click="selectProduct('Pique Polyester')">
                <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-neutral-900 border border-white/5 mb-4 relative">
                    <img src="{{ asset('img/kaos-hijau.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        alt="Pique Polyester">
                    <div class="absolute inset-0 bg-amber-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
                <h3 class="text-white font-bold text-xs uppercase tracking-widest">Pique Polyester</h3>
                <p class="text-neutral-500 text-[9px] uppercase mt-1 tracking-tighter">Bahan Polo Kuat & Solid</p>
            </div>

            <div class="group cursor-pointer text-center" @click="selectProduct('Cotton Carded 30s')">
                <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-neutral-900 border border-white/5 mb-4 relative">
                    <img src="{{ asset('img/kaos-coklat.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        alt="Cotton Carded 30s">
                    <div class="absolute inset-0 bg-amber-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
                <h3 class="text-white font-bold text-xs uppercase tracking-widest">Cotton Carded 30s</h3>
                <p class="text-neutral-500 text-[9px] uppercase mt-1 tracking-tighter">Harga Terjangkau</p>
            </div>

            <div class="group cursor-pointer text-center" @click="selectProduct('Cotton Carded 24s')">
                <div class="aspect-[3/4] rounded-2xl overflow-hidden bg-neutral-900 border border-white/5 mb-4 relative">
                    <img src="{{ asset('img/kaos-abu.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
                        alt="Cotton Carded 24s">
                    <div class="absolute inset-0 bg-amber-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>
                <h3 class="text-white font-bold text-xs uppercase tracking-widest">Cotton Carded 24s</h3>
                <p class="text-neutral-500 text-[9px] uppercase mt-1 tracking-tighter">Tekstur Unik & Klasik</p>
            </div>

        </div>
    </div>
</section>

    <section id="testimoni" class="max-w-7xl mx-auto px-8 py-32">
        <div class="text-center mb-20">
            <h2 class="text-5xl font-bold mt-4 tracking-tighter uppercase italic text-white">Testimoni</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div
                class="glass p-8 rounded-[2.5rem] border border-white/5 flex flex-col justify-between hover:border-amber-500/30 transition-all duration-500 group">
                <div class="mb-8">
                    <div class="flex text-amber-500 mb-4 text-xs tracking-widest">★★★★★</div>
                    <p class="text-neutral-300 italic leading-relaxed">"Kualitas sablon plastisolnya gila banget,
                        detailnya dapet dan awet walau udah dicuci berkali-kali. Journa emang juara!"</p>
                </div>
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 rounded-full bg-neutral-800 border border-white/10 group-hover:border-amber-500 transition flex items-center justify-center text-amber-500 font-bold text-lg shadow-inner">
                        A</div>
                    <div>
                        <h4 class="text-white font-bold text-xs uppercase tracking-widest">Andika Pratama</h4>
                        <p class="text-neutral-500 text-[10px] uppercase tracking-tighter">Owner Local Brand</p>
                    </div>
                </div>
            </div>

            <div
                class="glass p-8 rounded-[2.5rem] border border-white/5 flex flex-col justify-between hover:border-amber-500/30 transition-all duration-500 group">
                <div class="mb-8">
                    <div class="flex text-amber-500 mb-4 text-xs tracking-widest">★★★★★</div>
                    <p class="text-neutral-300 italic leading-relaxed">"Gak nyangka di Semarang ada studio sablon yang
                        se-detail ini. Pas buat merch band saya yang banyak desain raster halus."</p>
                </div>
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 rounded-full bg-neutral-800 border border-white/10 group-hover:border-amber-500 transition flex items-center justify-center text-amber-500 font-bold text-lg shadow-inner">
                        R</div>
                    <div>
                        <h4 class="text-white font-bold text-xs uppercase tracking-widest">Reza Bagus</h4>
                        <p class="text-neutral-500 text-[10px] uppercase tracking-tighter">Vocalist Darkroom</p>
                    </div>
                </div>
            </div>

            <div
                class="glass p-8 rounded-[2.5rem] border border-white/5 flex flex-col justify-between hover:border-amber-500/30 transition-all duration-500 group">
                <div class="mb-8">
                    <div class="flex text-amber-500 mb-4 text-xs tracking-widest">★★★★★</div>
                    <p class="text-neutral-300 italic leading-relaxed">"Bahan cotton combed premiumnya beneran kerasa
                        bedanya. Dingin di kulit dan sablonannya nggak gampang pecah."</p>
                </div>
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 rounded-full bg-neutral-800 border border-white/10 group-hover:border-amber-500 transition flex items-center justify-center text-amber-500 font-bold text-lg shadow-inner">
                        S</div>
                    <div>
                        <h4 class="text-white font-bold text-xs uppercase tracking-widest">Siska Amelia</h4>
                        <p class="text-neutral-500 text-[10px] uppercase tracking-tighter">Fashion Designer</p>
                    </div>
                </div>
            </div>

            <div
                class="glass p-8 rounded-[2.5rem] border border-white/5 flex flex-col justify-between hover:border-amber-500/30 transition-all duration-500 group">
                <div class="mb-8">
                    <div class="flex text-amber-500 mb-4 text-xs tracking-widest">★★★★★</div>
                    <p class="text-neutral-300 italic leading-relaxed">"Pelayanan ramah dan pengerjaan tepat waktu.
                        Jarang ada sablonan yang hasil produksinya sama persis sama mockup digital."</p>
                </div>
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 rounded-full bg-neutral-800 border border-white/10 group-hover:border-amber-500 transition flex items-center justify-center text-amber-500 font-bold text-lg shadow-inner">
                        D</div>
                    <div>
                        <h4 class="text-white font-bold text-xs uppercase tracking-widest">Deni Setiawan</h4>
                        <p class="text-neutral-500 text-[10px] uppercase tracking-tighter">Entrepreneur</p>
                    </div>
                </div>
            </div>

            <div
                class="glass p-8 rounded-[2.5rem] border border-white/5 flex flex-col justify-between hover:border-amber-500/30 transition-all duration-500 group">
                <div class="mb-8">
                    <div class="flex text-amber-500 mb-4 text-xs tracking-widest">★★★★★</div>
                    <p class="text-neutral-300 italic leading-relaxed">"Efek puff ink 3D-nya rapi banget. Tim Journa
                        bener-bener perhatiin kualitas tiap pieces-nya. Sangat direkomendasikan!"</p>
                </div>
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 rounded-full bg-neutral-800 border border-white/10 group-hover:border-amber-500 transition flex items-center justify-center text-amber-500 font-bold text-lg shadow-inner">
                        M</div>
                    <div>
                        <h4 class="text-white font-bold text-xs uppercase tracking-widest">Maya Putri</h4>
                        <p class="text-neutral-500 text-[10px] uppercase tracking-tighter">Content Creator</p>
                    </div>
                </div>
            </div>

            <div
                class="glass p-8 rounded-[2.5rem] border border-white/5 flex flex-col justify-between hover:border-amber-500/30 transition-all duration-500 group">
                <div class="mb-8">
                    <div class="flex text-amber-500 mb-4 text-xs tracking-widest">★★★★★</div>
                    <p class="text-neutral-300 italic leading-relaxed">"Studio paling jujur soal bahan. Kalau premium ya
                        beneran premium. Hasil Plascharge-nya soft banget di kain."</p>
                </div>
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 rounded-full bg-neutral-800 border border-white/10 group-hover:border-amber-500 transition flex items-center justify-center text-amber-500 font-bold text-lg shadow-inner">
                        B</div>
                    <div>
                        <h4 class="text-white font-bold text-xs uppercase tracking-widest">Bima Sakti</h4>
                        <p class="text-neutral-500 text-[10px] uppercase tracking-tighter">Distro Owner</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kontak" class="max-w-7xl mx-auto px-8 py-32 border-t border-white/5">
        <div class="text-center mb-16">
            <h2 class="text-5xl font-bold mt-4 tracking-tighter uppercase italic text-white">Hubungi Kami.</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">
            <div
                class="lg:col-span-7 w-full h-[500px] md:h-[600px] rounded-[3rem] overflow-hidden border border-white/10 grayscale hover:grayscale-0 transition duration-1000 shadow-[0_20px_50px_rgba(0,0,0,0.5)] relative group">
                <div class="absolute inset-0 bg-amber-500/5 pointer-events-none group-hover:opacity-0 transition"></div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.745619104825!2d109.15119767898834!3d-6.920983775232521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9b649cf805b%3A0xbe91d40929be9e02!2sJOURNA%20STUDIO%20SABLON%20DAN%20KONFEKSI!5e1!3m2!1sid!2sid!4v1767020682323!5m2!1sid!2sid"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div
                class="lg:col-span-5 glass p-10 md:p-14 rounded-[3rem] border border-white/10 flex flex-col justify-center shadow-2xl">
                <div class="mb-12">
                    <h4 class="text-amber-500 font-bold uppercase text-xs tracking-widest mb-4 italic">Alamat Studio
                    </h4>
                    <p class="text-2xl text-white font-medium leading-snug">Gang singadipura Jl. Projosumarto II,
                        Seturancang, Setu, Kec. Tarub, Kabupaten Tegal, Jawa Tengah</p>
                </div>

                <div class="space-y-10">
                    <div>
                        <h4 class="text-amber-500 font-bold uppercase text-xs tracking-widest mb-3 italic">WhatsApp</h4>
                        <a href="https://wa.me/6289686202603" target="_blank"
                            class="text-2xl md:text-3xl font-bold text-white hover:text-[#25D366] transition-all flex items-center gap-4 group">
                            <div class="p-3 bg-white/5 rounded-2xl group-hover:bg-[#25D366]/20 transition">
                                <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.246 2.248 3.484 5.232 3.484 8.412 0 6.556-5.338 11.892-11.893 11.892-1.997-.001-3.951-.5-5.688-1.448l-6.309 1.656zm6.224-3.92c1.589.943 3.139 1.462 4.75 1.463 5.462 0 9.906-4.444 9.906-9.906 0-2.646-1.03-5.132-2.903-7.003-1.871-1.871-4.358-2.903-7.003-2.903-5.462 0-9.906 4.444-9.906 9.906 0-2.031.618 4.001 1.787 5.713l-1.011 3.703 3.869-.884-.493-.39z" />
                                </svg>
                            </div>
                            <span>+62 896 8620 2603</span>
                        </a>
                    </div>

                    <div>
                        <h4 class="text-amber-500 font-bold uppercase text-xs tracking-widest mb-3 italic">Instagram
                        </h4>
                        <a href="https://instagram.com/journastudio" target="_blank"
                            class="text-2xl md:text-3xl font-bold text-white hover:text-[#E4405F] transition-all flex items-center gap-4 group">
                            <div class="p-3 bg-white/5 rounded-2xl group-hover:bg-[#E4405F]/20 transition">
                                <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                            </div>
                            <span>@journastudio</span>
                        </a>
                    </div>

                    <div>
                        <h4 class="text-amber-500 font-bold uppercase text-xs tracking-widest mb-3 italic">Facebook</h4>
                        <a href="https://www.facebook.com/share/1L2PBrMioz/" target="_blank"
                            class="text-2xl md:text-3xl font-bold text-white hover:text-[#1877F2] transition-all flex items-center gap-4 group">
                            <div class="p-3 bg-white/5 rounded-2xl group-hover:bg-[#1877F2]/20 transition">
                                <svg class="w-7 h-7 fill-current" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                            </div>
                            <span>Journa Studio</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="p-20 text-center border-t border-white/5 bg-[#0a0a0a]">
        <div class="flex flex-col items-center mb-6">
            <img src="{{ asset('img/logo.PNG') }}" alt="Journa Studio Logo" class="h-16 mb-4 rounded-sm">
        </div>
        <p class="opacity-30 text-[10px] tracking-[0.8em] uppercase mb-8 italic text-neutral-400">Premium Printing
            Laboratory Since 2022.</p>
        <p class="opacity-20 text-[9px] uppercase tracking-widest text-neutral-500">©2025 Journa Sablon Printing Lab.
            Made with Passion in Tegal.</p>
    </footer>

</body>

</html>