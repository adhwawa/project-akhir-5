<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Crave - Menu</title>

    <!-- Google Fonts: Cormorant Garamond / Playfair Display (Serif) & Inter (Sans) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cream: {
                            bg: '#FBF9F6',
                            card: '#FFFFFF',
                            badge: '#F2EDE4',
                            footer: '#F3ECE1',
                        },
                        brand: {
                            dark: '#4A3525',
                            accent: '#6B533E',
                            text: '#2C231C',
                            muted: '#8C827A',
                            subtle: '#A89F97',
                            buttonBg: '#F5EFE6',
                            buttonText: '#5A4636'
                        }
                    },
                    fontFamily: {
                        serif: ['"Cormorant Garamond"', 'Georgia', 'serif'],
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-cream-bg text-brand-text font-sans antialiased min-h-screen flex flex-col justify-between selection:bg-brand-accent selection:text-white">

    <div>
        <!-- 1. HEADER / NAVBAR -->
        <header class="max-w-6xl mx-auto px-6 pt-8 pb-6 flex justify-between items-center">
            <!-- Logo Daily Crave dengan Sun Icon -->
            <div class="flex items-center gap-3">
                <svg class="w-7 h-7 text-brand-dark" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="4"></circle>
                    <path stroke-linecap="round" d="M12 2v2m0 16v2M4.93 4.93l1.41 1.41m11.32 11.32l1.41 1.41M2 12h2m16 0h2M4.93 19.07l1.41-1.41m11.32-11.32l1.41-1.41"></path>
                </svg>
                <div>
                    <h1 class="text-2xl tracking-[0.18em] font-serif font-bold uppercase text-brand-dark leading-none">daily crave</h1>
                    <span class="text-[9px] tracking-[0.25em] font-medium text-brand-muted uppercase block mt-1">DAPUR & RUANG TEMU</span>
                </div>
            </div>
            
            <!-- Navigation Links -->
            <nav class="flex items-center gap-9 text-sm font-medium text-brand-muted">
                <a href="#" class="hover:text-brand-dark transition-colors">Menu Kami</a>
                <a href="#" class="bg-brand-dark text-white px-6 py-2.5 rounded-full text-sm font-medium shadow-sm">Makanan</a>
                <a href="#" class="hover:text-brand-dark transition-colors">Minuman</a>
                <a href="#" class="hover:text-brand-dark transition-colors">Dessert</a>
            </nav>
        </header>

        <!-- 2. HERO SECTION -->
        <section class="max-w-6xl mx-auto px-6 py-12 grid grid-cols-1 md:grid-cols-12 gap-8 items-center">
            <div class="md:col-span-7 pr-4">
                <div class="flex items-center gap-2 mb-4">
                    <span class="w-6 h-[1px] bg-brand-subtle"></span>
                    <span class="text-[11px] tracking-[0.2em] uppercase text-brand-subtle font-semibold">MENU DI MEJA ANDA</span>
                </div>
                <h2 class="text-5xl md:text-6xl font-serif font-normal text-brand-dark leading-[1.15] mb-6">
                    Rasa yang akrab.<br>Momen yang hangat.
                </h2>
                <p class="text-brand-muted text-sm leading-relaxed max-w-md font-light">
                    Jelajahi pilihan makanan, minuman, dan penutup. Luangkan waktu, temukan yang ingin Anda nikmati.
                </p>
            </div>
            <div class="md:col-span-5 flex justify-end">
                <div class="relative overflow-hidden rounded-[24px] shadow-sm w-full h-[320px]">
                    <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=800" alt="Hero Image Daily Crave" class="w-full h-full object-cover">
                </div>
            </div>
        </section>

        <!-- 3. FILTER CATEGORY BAR -->
        <section class="max-w-6xl mx-auto px-6 border-t border-b border-[#EBE4D8] py-4 mb-10 flex justify-between items-center text-xs">
            <div class="flex items-center gap-6">
                <button class="text-brand-muted hover:text-brand-dark font-medium transition-colors">Main Course</button>
                <button class="text-brand-muted hover:text-brand-dark font-medium transition-colors">Nusantara</button>
                
                <!-- Active Category Pill -->
                <button class="bg-[#7A6451] text-white px-5 py-2 rounded-full font-medium flex items-center gap-1.5 shadow-sm">
                    <span>Comfort</span>
                    <span class="text-[10px] opacity-75">09</span>
                </button>
                
                <button class="text-brand-muted hover:text-brand-dark font-medium transition-colors">Extra</button>
            </div>
            <span class="text-brand-subtle tracking-[0.18em] text-[10px] font-semibold uppercase">DAFTAR MAKANAN DAILY CRAVE</span>
        </section>

        <!-- 4. MENU LIST CONTAINER -->
        <main class="max-w-6xl mx-auto px-6 pb-24">
            <div class="mb-8 flex justify-between items-end">
                <div>
                    <div class="flex items-center gap-2 mb-1">
                        <span class="text-[10px] uppercase tracking-[0.2em] text-brand-subtle font-semibold">MAKANAN</span>
                        <span class="w-4 h-[1px] bg-brand-subtle"></span>
                        <span class="text-[10px] uppercase tracking-[0.2em] text-brand-subtle font-semibold">09 PILIHAN</span>
                    </div>
                    <h3 class="text-4xl font-serif font-normal text-brand-dark">Comfort</h3>
                </div>
                <p class="text-xs text-brand-muted font-light">Temukan pilihan untuk waktu bersantap Anda.</p>
            </div>

            <!-- List Cards Menu -->
            <div class="space-y-5">
                @php
                    $menus = [
                        [
                            'nama' => 'Mendoan',
                            'harga' => 'Rp30.000',
                            'deskripsi' => 'Tempe pilihan diiris tipis dan dibalut adonan tepung berbumbu dengan irisan daun bawang, kemudian digoreng hingga renyah di bagian pinggir. Disajikan bersama sambal kecap berisi cabai rawit, bawang merah, dan tomat segar.',
                            'gambar' => 'https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?w=500'
                        ],
                        [
                            'nama' => 'Tahu Crispy',
                            'harga' => 'Rp30.000',
                            'deskripsi' => 'Potongan tahu pilihan dibalut tepung berbumbu dan digoreng hingga menghasilkan lapisan luar yang renyah dengan bagian dalam lembut. Disajikan dengan taburan bumbu serta saos.',
                            'gambar' => 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=500'
                        ],
                        [
                            'nama' => 'Bakwan Jagung',
                            'harga' => 'Rp30.000',
                            'deskripsi' => 'Jagung manis pipil dicampur tepung berbumbu, irisan daun bawang, wortel, bawang putih, dan sedikit ketumbar. Digoreng hingga keemasan dan disajikan bersama cabai rawit serta saus sambal sebagai pelengkap.',
                            'gambar' => 'https://images.unsplash.com/photo-1601050690597-df0568f70950?w=500'
                        ],
                        [
                            'nama' => 'Singkong Crispy',
                            'harga' => 'Rp30.000',
                            'deskripsi' => 'Singkong pilihan dipotong memanjang, direbus hingga empuk, kemudian digoreng dengan balutan tepung berbumbu hingga bagian luarnya renyah. Dilengkapi taburan bubuk balado atau parutan keju serta saus sambal untuk cocolan.',
                            'gambar' => 'https://images.unsplash.com/photo-1589301760014-d929f3979dbc?w=500'
                        ],
                        [
                            'nama' => 'Cireng Crispy',
                            'harga' => 'Rp32.000',
                            'deskripsi' => 'Cireng dibuat dari tepung tapioka dengan campuran bawang putih, daun bawang, dan bumbu pilihan yang menghasilkan tekstur kenyal di dalam serta renyah di luar. Disajikan dengan saus cuko dan taburan daun bawang sebagai pelengkap.',
                            'gambar' => 'https://images.unsplash.com/photo-1626777552726-4a6b54c97e46?w=500'
                        ],
                        [
                            'nama' => 'French Fries',
                            'harga' => 'Rp25.000',
                            'deskripsi' => 'Kentang pilihan dipotong memanjang dan digoreng hingga berwarna keemasan dengan tekstur renyah di luar dan lembut di dalam. Disajikan dengan taburan garam dan parsley serta saus sambal, saus tomat, dan mayonnaise.',
                            'gambar' => 'https://images.unsplash.com/photo-1576107232684-1279f3908594?w=500'
                        ],
                        [
                            'nama' => 'Roti Bakar Coklat Keju',
                            'harga' => 'Rp35.000',
                            'deskripsi' => 'Roti tawar tebal dipanggang dengan olesan margarin hingga berwarna kecokelatan dan renyah di bagian luar. Diberi topping meises cokelat, parutan keju cheddar, susu kental manis, serta tambahan saus cokelat sebagai pelengkap.',
                            'gambar' => 'https://images.unsplash.com/photo-1584776296944-ab6fb57b0bdd?w=500'
                        ],
                        [
                            'nama' => 'Pisang Goreng Crispy',
                            'harga' => 'Rp32.000',
                            'deskripsi' => 'Pisang pilihan dibalut adonan tepung renyah dan digoreng hingga keemasan dengan bagian dalam yang lembut. Disajikan dengan topping keju parut, meises cokelat, susu kental manis, dan saus cokelat.',
                            'gambar' => 'https://images.unsplash.com/photo-1603894584373-5ac82b2ae398?w=500'
                        ],
                        [
                            'nama' => 'Mix Platter',
                            'harga' => 'Rp45.000',
                            'deskripsi' => 'Sajian aneka camilan dalam satu piring yang terdiri dari french fries, chicken nuggets, sosis goreng, onion rings, dan chicken popcorn. Dilengkapi saus sambal, saus tomat, dan mayonnaise sebagai pilihan cocolan untuk dinikmati bersama.',
                            'gambar' => 'https://images.unsplash.com/photo-1544025162-d76694265947?w=500'
                        ]
                    ];
                @endphp

                @foreach ($menus as $item)
                    <div class="bg-cream-card rounded-[20px] p-4 border border-[#F0EAE1] flex items-center justify-between shadow-[0_2px_8px_rgba(0,0,0,0.02)] hover:shadow-[0_4px_16px_rgba(0,0,0,0.05)] transition-all">
                        <div class="flex items-center gap-6">
                            <!-- Image Thumbnail -->
                            <img src="{{ $item['gambar'] }}" alt="{{ $item['nama'] }}" class="w-44 h-32 object-cover rounded-[14px] shrink-0">
                            
                            <!-- Menu Content -->
                            <div class="py-1">
                                <h4 class="text-2xl font-serif font-semibold text-brand-dark mb-1">{{ $item['nama'] }}</h4>
                                <span class="text-xs font-semibold text-brand-accent tracking-wide block mb-2">{{ $item['harga'] }}</span>
                                <p class="text-[12px] text-brand-muted max-w-2xl leading-relaxed font-light">{{ $item['deskripsi'] }}</p>
                            </div>
                        </div>

                        <!-- Plus Round Button -->
                        <button class="w-9 h-9 rounded-full bg-brand-buttonBg hover:bg-[#EBE2D5] flex items-center justify-center text-brand-buttonText text-base font-light shrink-0 ml-4 transition-colors">
                            +
                        </button>
                    </div>
                @endforeach
            </div>
        </main>
    </div>

    <!-- 5. FOOTER SECTION -->
    <footer class="bg-cream-footer border-t border-[#EBE4D8] py-8">
        <div class="max-w-6xl mx-auto px-6 flex justify-between items-center text-[11px] text-brand-muted">
            <p>© 2026 Daily Crave. Diracik dengan sepenuh hati.</p>
            <div class="flex gap-8">
                <a href="#" class="hover:text-brand-dark transition-colors">Kebijakan privasi</a>
                <a href="#" class="hover:text-brand-dark transition-colors">Syarat & ketentuan</a>
            </div>
        </div>
    </footer>

</body>
</html>