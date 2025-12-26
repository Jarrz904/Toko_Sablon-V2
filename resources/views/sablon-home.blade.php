<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Journa Studio | Premium Printing Service</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;500;700&display=swap" rel="stylesheet">
    <style> 
        body { font-family: 'Space Grotesk', sans-serif; } 
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(10px); }
        .rotate-y-12 { transform: rotateY(12deg); }
        .rotate-x-6 { transform: rotateX(-6deg); }
        .translate-z-30 { transform: translateZ(30px); }
        .translate-z-50 { transform: translateZ(50px); }
    </style>
</head>
<body class="bg-[#0f0f0f] text-neutral-100 antialiased" 
      x-data="{ 
        price: 0, 
        qty: 12, 
        productName: 'Pilih Produk', 
        imageUrl: null,
        hasDesign: false,
        isLoading: false,
        get total() { return this.price * this.qty },
        selectProduct(name, price) {
            this.productName = name;
            this.price = price;
            window.location.href = '#kalkulator';
        },
        async sendWhatsApp() {
            if(this.price === 0) { 
                alert('Pilih produk di katalog terlebih dahulu!'); 
                window.location.href = '#katalog';
                return; 
            }
            
            this.isLoading = true;
            let cloudImageUrl = 'Tidak ada simulasi';

            if (this.hasDesign) {
                const element = document.getElementById('preview-area');
                try {
                    const canvas = await html2canvas(element, {
                        backgroundColor: '#0a0a0a',
                        useCORS: true,
                        scale: 2 
                    });
                    
                    const base64Image = canvas.toDataURL('image/png').split(',')[1];
                    
                    const apiKey = '9a4ae2de4decddda7a1a98f2fe9cd712';
                    const formData = new FormData();
                    formData.append('image', base64Image);

                    const response = await fetch(`https://api.imgbb.com/1/upload?key=${apiKey}`, {
                        method: 'POST',
                        body: formData
                    });

                    const result = await response.json();
                    if (result.success) {
                        cloudImageUrl = result.data.url;
                    }
                } catch (err) {
                    console.error('Gagal mengupload gambar:', err);
                    cloudImageUrl = 'Gagal memuat link (Cek manual)';
                }
            }

            const phoneNumber = '6285741129749';
            const formattedTotal = new Intl.NumberFormat('id-ID').format(this.total);
            const formattedPrice = new Intl.NumberFormat('id-ID').format(this.price);
            
            const message = `Halo Journa Studio, saya ingin pesan sablon:%0A%0A` +
                            `*DETAIL PESANAN*%0A` +
                            `--------------------------%0A` +
                            `*Produk:* ${this.productName}%0A` +
                            `*Harga Satuan:* Rp ${formattedPrice}%0A` +
                            `*Jumlah:* ${this.qty} Pcs%0A` +
                            `*Estimasi Total:* Rp ${formattedTotal}%0A` +
                            `--------------------------%0A%0A` +
                            `*LINK SIMULASI DESAIN:*%0A${cloudImageUrl}%0A%0A` +
                            `_Mohon segera diproses, terima kasih._`;
            
            this.isLoading = false;
            window.open(`https://wa.me/${phoneNumber}?text=${message}`, '_blank');
        }
      }">

    <nav class="flex justify-between items-center p-6 sticky top-0 bg-[#0f0f0f]/80 backdrop-blur-lg z-50 border-b border-white/5">
        <div class="flex items-center gap-4">
            <img src="{{ asset('img/logo.jpg') }}" alt="Journa Studio Logo" class="h-10 md:h-12 rounded-sm object-contain">
            <div class="hidden md:block text-sm font-bold tracking-[0.3em] uppercase">Journa Studio</div>
        </div>
        <div class="hidden lg:flex space-x-10 text-[10px] uppercase tracking-widest font-medium opacity-60">
            <a href="#about" class="hover:opacity-100 transition">Tentang Kami</a>
            <a href="#katalog" class="hover:opacity-100 transition">Katalog</a>
            <a href="#preview" class="hover:opacity-100 transition">Preview</a>
            <a href="#lokasi" class="hover:opacity-100 transition">Lokasi</a>
        </div>
        <a href="#kalkulator" class="bg-white text-black px-5 py-2 rounded-full font-bold text-[10px] uppercase tracking-widest hover:bg-amber-500 transition-colors">Order Now</a>
    </nav>

    <header class="py-24 px-8 text-center">
        <h1 class="text-8xl md:text-[12rem] font-bold tracking-tighter leading-none mb-10 overflow-hidden">
            <span class="inline-block hover:italic transition-all duration-500 cursor-default uppercase">Journa</span><br>
            <span class="text-neutral-500 uppercase">Printing</span>
        </h1>
        <p class="max-w-xl mx-auto text-neutral-400 text-lg leading-relaxed italic">
            "Bukan sekadar tinta di atas kain, tapi sebuah pernyataan diri."
        </p>
    </header>

    <section id="about" class="max-w-7xl mx-auto px-8 py-32 grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
        <div class="relative group" style="perspective: 1500px;"> 
            <div class="absolute -inset-4 bg-amber-500/20 rounded-full blur-3xl group-hover:bg-amber-500/40 transition duration-1000"></div>
            
            <div class="relative overflow-hidden rounded-[3rem] aspect-square bg-[#705515] border border-white/10 shadow-2xl transition-all duration-700 ease-out transform-gpu group-hover:rotate-y-12 group-hover:-rotate-x-6 group-hover:scale-105" 
                 style="transform-style: preserve-3d;">
                
                <img src="{{ asset('img/logo2.png') }}" 
                     class="w-full h-full object-cover transition duration-1000 group-hover:scale-110" 
                     style="transform: translateZ(30px);" 
                     alt="Journa Studio Logo">
                
                <div class="absolute inset-0 bg-gradient-to-tr from-white/0 via-white/10 to-white/0 opacity-0 group-hover:opacity-100 transition-all duration-700 transform translate-x-[-100%] group-hover:translate-x-[100%] pointer-events-none"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent pointer-events-none"></div>
                
                <div class="absolute bottom-10 left-10 text-left transition-transform duration-700 group-hover:translate-z-50" 
                     style="transform: translateZ(50px);">
                    <p class="text-amber-500 font-bold tracking-[0.5em] text-[10px] uppercase mb-1 drop-shadow-md">Since</p>
                    <p class="text-4xl font-black italic text-white drop-shadow-2xl">2025</p>
                </div>
            </div>
        </div>

        <div>
            <span class="text-amber-500 text-xs tracking-[0.5em] uppercase italic">// Our Story</span>
            <h2 class="text-5xl font-bold mt-6 mb-8 tracking-tighter uppercase leading-tight text-white">Estetika Tinggi & <br> Presisi Tanpa Kompromi.</h2>
            <div class="space-y-6">
                <p class="text-neutral-400 leading-relaxed">
                    <strong class="text-white">Journa Studio</strong> lahir dari visi untuk mendefinisikan kembali standar kualitas sablon di Indonesia. Kami tidak hanya mencetak, kami mengkurasi setiap detail.
                </p>
                <p class="text-neutral-500 leading-relaxed italic border-l-2 border-amber-500 pl-6">
                    "Kami percaya bahwa setiap brand memiliki cerita unik, dan tugas kami adalah memastikan cerita tersebut tersampaikan melalui kualitas cetakan yang abadi."
                </p>
                <div class="grid grid-cols-2 gap-8 pt-6">
                    <div>
                        <h4 class="text-white font-bold text-lg mb-1 italic">Premium Quality</h4>
                        <p class="text-xs text-neutral-500 uppercase tracking-widest">Material pilihan standar internasional.</p>
                    </div>
                    <div>
                        <h4 class="text-white font-bold text-lg mb-1 italic">Fast Response</h4>
                        <p class="text-xs text-neutral-500 uppercase tracking-widest">Alur kerja sistematis untuk hasil maksimal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="katalog" class="max-w-7xl mx-auto px-8 py-20">
        <h2 class="text-center text-xs uppercase tracking-[0.5em] text-amber-500 mb-16 italic">// Masterpiece Techniques & Materials</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <div class="group cursor-pointer" @click="selectProduct('Plastisol Raster', 65000)">
                <div class="aspect-[3/4] overflow-hidden rounded-2xl mb-6 bg-neutral-900 border border-white/5 relative">
                    <img src="{{ asset('img/foto4.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="text-xs font-bold tracking-widest uppercase border border-white p-3">Pilih & Pesan</span>
                    </div>
                </div>
                <h3 class="text-xl font-medium mb-1 uppercase tracking-tighter text-white">Plastisol Raster</h3>
                <p class="text-neutral-500 text-sm mb-4 italic">Detail dot halus untuk gambar photorealistic.</p>
                <span class="text-sm font-bold text-amber-500 tracking-widest uppercase">Start Rp 65.000</span>
            </div>

            <div class="group cursor-pointer" @click="selectProduct('Plastisol Glossy', 68000)">
                <div class="aspect-[3/4] overflow-hidden rounded-2xl mb-6 bg-neutral-900 border border-white/5 relative">
                    <img src="{{ asset('img/foto5.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="text-xs font-bold tracking-widest uppercase border border-white p-3">Pilih & Pesan</span>
                    </div>
                </div>
                <h3 class="text-xl font-medium mb-1 uppercase tracking-tighter text-white">Plastisol Glossy</h3>
                <p class="text-neutral-500 text-sm mb-4 italic">Efek kilap mewah dan tekstur yang tebal.</p>
                <span class="text-sm font-bold text-amber-500 tracking-widest uppercase">Start Rp 68.000</span>
            </div>

            <div class="group cursor-pointer" @click="selectProduct('Sablon Plascharge Ink', 75000)">
                <div class="aspect-[3/4] overflow-hidden rounded-2xl mb-6 bg-neutral-900 border border-white/5 relative">
                    <img src="{{ asset('img/foto6.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="text-xs font-bold tracking-widest uppercase border border-white p-3">Pilih & Pesan</span>
                    </div>
                </div>
                <h3 class="text-xl font-medium mb-1 uppercase tracking-tighter text-white">Plascharge Ink</h3>
                <p class="text-neutral-500 text-sm mb-4 italic">Tekstur lembut menyatu dengan kain namun tetap cerah.</p>
                <span class="text-sm font-bold text-amber-500 tracking-widest uppercase">Start Rp 75.000</span>
            </div>

            <div class="group cursor-pointer" @click="selectProduct('Sablon Puff Ink Print', 72000)">
                <div class="aspect-[3/4] overflow-hidden rounded-2xl mb-6 bg-neutral-900 border border-white/5 relative">
                    <img src="{{ asset('img/foto7.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="text-xs font-bold tracking-widest uppercase border border-white p-3">Pilih & Pesan</span>
                    </div>
                </div>
                <h3 class="text-xl font-medium mb-1 uppercase tracking-tighter text-white">Puff Ink Print</h3>
                <p class="text-neutral-500 text-sm mb-4 italic">Efek timbul (3D) yang unik dan artistik.</p>
                <span class="text-sm font-bold text-amber-500 tracking-widest uppercase">Start Rp 72.000</span>
            </div>

            <div class="group cursor-pointer" @click="selectProduct('Cotton Combed 24s', 58000)">
                <div class="aspect-[3/4] overflow-hidden rounded-2xl mb-6 bg-neutral-900 border border-white/5 relative">
                    <img src="{{ asset('img/foto8.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="text-xs font-bold tracking-widest uppercase border border-white p-3">Pilih & Pesan</span>
                    </div>
                </div>
                <h3 class="text-xl font-medium mb-1 uppercase tracking-tighter text-white">Cotton Combed 24s</h3>
                <p class="text-neutral-500 text-sm mb-4 italic">Bahan sedang, sangat populer untuk dailywear.</p>
                <span class="text-sm font-bold text-amber-500 tracking-widest uppercase">Start Rp 58.000</span>
            </div>

            <div class="group cursor-pointer" @click="selectProduct('Cotton Combed 30s', 55000)">
                <div class="aspect-[3/4] overflow-hidden rounded-2xl mb-6 bg-neutral-900 border border-white/5 relative">
                    <img src="{{ asset('img/foto9.jpg') }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <span class="text-xs font-bold tracking-widest uppercase border border-white p-3">Pilih & Pesan</span>
                    </div>
                </div>
                <h3 class="text-xl font-medium mb-1 uppercase tracking-tighter text-white">Cotton Combed 30s</h3>
                <p class="text-neutral-500 text-sm mb-4 italic">Bahan tipis dan adem, standar distro premium.</p>
                <span class="text-sm font-bold text-amber-500 tracking-widest uppercase">Start Rp 55.000</span>
            </div>
        </div>
    </section>

    <section id="preview" class="py-32 bg-[#0a0a0a] border-y border-white/5">
        <div class="max-w-6xl mx-auto px-10 grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <div id="preview-area" class="relative flex justify-center items-center bg-neutral-900 rounded-[3rem] p-10 aspect-square overflow-hidden border border-white/10 shadow-2xl">
                <img src="{{ asset('img/kaos-polos-putih.jpg') }}"
                     class="w-full h-full object-contain z-10 opacity-80" alt="Kaos Polos">
                
                <template x-if="imageUrl">
                    <div class="absolute z-20 top-[35%] w-32 h-32 flex justify-center items-center">
                        <img :src="imageUrl" class="max-w-full max-h-full object-contain mix-blend-multiply opacity-90">
                    </div>
                </template>

                <template x-if="!imageUrl">
                    <div class="absolute z-20 text-neutral-700 uppercase text-[10px] tracking-widest font-bold">Preview Area</div>
                </template>
            </div>

            <div>
                <span class="text-amber-500 font-mono text-xs tracking-widest uppercase">// Design Simulator</span>
                <h2 class="text-5xl font-bold mt-4 mb-6 tracking-tighter italic text-white">Simulasi <br>Visual.</h2>
                <p class="text-neutral-400 mb-10 leading-relaxed italic">Simulasi desain ini akan terhitung dalam ringkasan pesanan Anda.</p>
                
                <input type="file" accept="image/*" class="hidden" id="uploadLogo" 
                       @change="const file = $event.target.files[0]; if (file) { imageUrl = URL.createObjectURL(file); hasDesign = true; }">
                <label for="uploadLogo" class="inline-block bg-white text-black font-bold px-10 py-5 rounded-2xl cursor-pointer hover:bg-amber-500 transition-all uppercase text-xs tracking-widest">
                    Unggah Logo (.PNG)
                </label>
                <button x-show="imageUrl" @click="imageUrl = null; hasDesign = false;" class="block mt-4 text-[10px] text-red-500 underline uppercase tracking-widest">Hapus Desain</button>
            </div>
        </div>
    </section>

    <section id="proses" class="py-32 bg-white text-black">
        <div class="max-w-7xl mx-auto px-10">
            <div class="text-center mb-20">
                <span class="text-amber-600 font-mono text-xs tracking-[0.3em] uppercase">The Journey</span>
                <h2 class="text-6xl font-black tracking-tighter mt-4 uppercase italic leading-none">High Quality <br>Production.</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="p-8 border-2 border-black rounded-[2rem] hover:bg-black hover:text-white transition duration-500 h-[300px] flex flex-col justify-between">
                    <span class="text-5xl font-black opacity-20 italic">01</span>
                    <h3 class="text-xl font-bold uppercase italic">Afdruk</h3>
                    <p class="text-xs opacity-60 uppercase font-bold tracking-widest">Transfer Desain ke Screen.</p>
                </div>
                <div class="p-8 border-2 border-black rounded-[2rem] hover:bg-black hover:text-white transition duration-500 h-[300px] flex flex-col justify-between md:mt-12">
                    <span class="text-5xl font-black opacity-20 italic">02</span>
                    <h3 class="text-xl font-bold uppercase italic">Ink Mix</h3>
                    <p class="text-xs opacity-60 uppercase font-bold tracking-widest">Pencampuran Warna Pantone.</p>
                </div>
                <div class="p-8 border-2 border-black rounded-[2rem] hover:bg-black hover:text-white transition duration-500 h-[300px] flex flex-col justify-between">
                    <span class="text-5xl font-black opacity-20 italic">03</span>
                    <h3 class="text-xl font-bold uppercase italic">Cetak</h3>
                    <p class="text-xs opacity-60 uppercase font-bold tracking-widest">Eksekusi Sablon Manual.</p>
                </div>
                <div class="p-8 border-2 border-black rounded-[2rem] hover:bg-black hover:text-white transition duration-500 h-[300px] flex flex-col justify-between md:mt-12">
                    <span class="text-5xl font-black opacity-20 italic">04</span>
                    <h3 class="text-xl font-bold uppercase italic">Finishing</h3>
                    <p class="text-xs opacity-60 uppercase font-bold tracking-widest">Curing & Quality Check.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="kalkulator" class="max-w-4xl mx-auto py-32 px-8">
        <div class="bg-neutral-900 border border-white/10 p-12 rounded-[3rem] shadow-2xl relative overflow-hidden">
            <h2 class="text-3xl font-bold mb-10 uppercase tracking-widest italic text-center text-amber-500">Ringkasan Order</h2>
            <div class="space-y-12 relative z-10">
                <div class="flex justify-between border-b border-white/10 pb-4">
                    <span class="text-neutral-500 uppercase text-xs tracking-widest font-bold italic">Produk</span>
                    <span class="text-white text-right font-bold tracking-tight uppercase" x-text="productName"></span>
                </div>
                <div class="flex justify-between border-b border-white/10 pb-4">
                    <span class="text-neutral-500 uppercase text-xs tracking-widest font-bold italic">Status Simulasi</span>
                    <span :class="hasDesign ? 'text-green-500' : 'text-amber-500'" class="text-right font-bold tracking-tight uppercase text-xs" x-text="hasDesign ? 'Desain Terpasang' : 'Belum Ada Desain'"></span>
                </div>
                <div class="flex justify-between border-b border-white/10 pb-4">
                    <span class="text-neutral-500 uppercase text-xs tracking-widest font-bold italic">Jumlah (Pcs)</span>
                    <input type="number" x-model="qty" class="bg-transparent text-right text-3xl font-bold outline-none border-none focus:ring-0 w-32 text-amber-500">
                </div>
                <div class="flex justify-between items-end pt-10">
                    <div>
                        <p class="text-neutral-500 uppercase text-[10px] tracking-widest mb-2 font-bold italic">Total Estimasi</p>
                        <h4 class="text-6xl font-bold tracking-tighter text-white">Rp <span x-text="new Intl.NumberFormat('id-ID').format(total)"></span></h4>
                    </div>
                    <button @click="sendWhatsApp()" :disabled="isLoading" class="bg-white text-black font-black px-12 py-6 rounded-2xl hover:bg-amber-500 transition-all duration-300 uppercase text-xs tracking-widest shadow-xl disabled:opacity-50">
                        <span x-text="isLoading ? 'Memproses...' : 'Pesan via WhatsApp'"></span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="lokasi" class="max-w-7xl mx-auto px-8 py-32">
        <div class="text-center mb-16">
            <span class="text-amber-500 text-xs tracking-[0.5em] uppercase italic">// Visit Our Studio</span>
            <h2 class="text-5xl font-bold mt-4 tracking-tighter uppercase italic text-white">Kunjungi Kami.</h2>
        </div>
        <div class="w-full h-[500px] rounded-[3rem] overflow-hidden border border-white/10 grayscale hover:grayscale-0 transition duration-1000">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.95373531531615!3d-37.816279742021234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sid!4v1616565000000!5m2!1sen!2sid" 
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>

    <footer class="p-20 text-center border-t border-white/5 bg-[#0a0a0a]">
        <div class="flex flex-col items-center mb-6">
             <img src="{{ asset('img/logo.jpg') }}" alt="Journa Studio Logo" class="h-16 mb-4 rounded-sm">
             <div class="text-xl font-bold tracking-[0.3em] text-white">JOURNA STUDIO</div>
        </div>
        <p class="opacity-30 text-[10px] tracking-[0.8em] uppercase mb-8 italic text-neutral-400">Fine Printing Since 2025.</p>
        <div class="flex justify-center gap-8 opacity-40 text-[10px] tracking-widest uppercase mb-10 font-bold">
            <a href="#" class="hover:text-amber-500 transition">Instagram</a>
            <a href="#" class="hover:text-amber-500 transition">TikTok</a>
            <a href="https://wa.me/6287771770583" class="hover:text-amber-500 transition">WhatsApp</a>
        </div>
        <p class="opacity-20 text-[9px] uppercase tracking-widest text-neutral-500">©2025 Journa Studio Printing Lab. Made with Passion.</p>
    </footer>

</body>
</html>