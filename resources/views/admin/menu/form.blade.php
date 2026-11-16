<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Crave - {{ $menu->exists ? 'Edit Menu' : 'Tambah Menu Baru' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fbf9f6;
            color: #4a3525;
            display: flex;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* ================= SIDEBAR ================= */ 
        .sidebar {
            width: 260px;
            background-color: #f4eee6;
            border-right: 1px solid #e8dfd3;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 28px 20px;
            flex-shrink: 0;
        }

        .sidebar-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 8px 32px;
        }

        .brand {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            color: #5c3d28;
            line-height: 1.1;
        }

        .brand small {
            display: block;
            font-family: 'Poppins', sans-serif;
            font-size: 7px;
            letter-spacing: 2px;
            color: #9b826e;
            margin-top: 3px;
        }

        .admin-badge {
            background-color: #e6dcd0;
            color: #7c5c43;
            font-size: 10px;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 6px;
            letter-spacing: 1px;
        }

        .nav-links { display: flex; flex-direction: column; gap: 8px; }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 13px 18px;
            border-radius: 14px;
            text-decoration: none;
            color: #7a624f;
            font-size: 13.5px;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .nav-item:hover { background-color: #ebe2d6; color: #4a3525; }

        .nav-item.active {
            background-color: #6b4c35;
            color: #ffffff;
            box-shadow: 0 4px 12px rgba(107, 76, 53, 0.2);
        }

        .nav-item svg {
            width: 18px;
            height: 18px;
            stroke: currentColor;
            fill: none;
            stroke-width: 1.8;
        }

        .sidebar-footer {
            border-top: 1px solid #e5dbd0;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 6px;
        }

        .user-info { display: flex; align-items: center; gap: 12px; }

        .avatar-circle {
            width: 38px;
            height: 38px;
            background-color: #5c3d28;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 14px;
        }

        .user-details h4 { font-size: 13px; font-weight: 600; color: #3d2819; }
        .user-details p { font-size: 11px; color: #8c735f; }

        .logout-btn { background: none; border: none; color: #c93b3b; cursor: pointer; padding: 6px; }

        .system-status {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 6px;
            font-size: 11.5px;
            color: #7a624f;
        }

        .status-indicator { display: flex; align-items: center; gap: 8px; }
        .status-dot { width: 8px; height: 8px; background-color: #16a34a; border-radius: 50%; }

        .version-badge {
            background-color: #e8dfd3;
            color: #7a624f;
            padding: 2px 8px;
            border-radius: 6px;
            font-size: 10.5px;
            font-weight: 500;
        }

        /* ================= MAIN CONTENT ================= */
        .main-content {
            flex: 1;
            padding: 32px 42px;
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            text-decoration: none;
            font-size: 12.5px;
            color: #8c735f;
            margin-bottom: 6px;
            transition: color 0.2s;
        }

        .back-link:hover { color: #4a3525; }

        .page-header h1 {
            font-family: 'Playfair Display', serif;
            font-size: 28px;
            font-weight: 600;
            color: #2c1e14;
            margin-bottom: 4px;
        }

        .page-header p { font-size: 13px; color: #8c735f; }

        /* ================= FORM CARD ================= */
        .form-card {
            background-color: #ffffff;
            border: 1px solid #f0e8de;
            border-radius: 20px;
            padding: 32px 36px;
            box-shadow: 0 4px 20px rgba(74, 53, 37, 0.03);
        }

        .form-card-header {
            padding-bottom: 20px;
            border-bottom: 1px solid #f2ebe1;
            margin-bottom: 28px;
        }

        .form-card-header h2 {
            font-family: 'Playfair Display', serif;
            font-size: 22px;
            font-weight: 600;
            color: #2c1e14;
        }

        .form-card-header p { font-size: 12.5px; color: #8c735f; margin-top: 3px; }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px;
        }

        .form-col { display: flex; flex-direction: column; gap: 22px; }

        .form-group label.field-label {
            display: block;
            font-size: 11.5px;
            font-weight: 600;
            letter-spacing: 0.6px;
            text-transform: uppercase;
            color: #7a624f;
            margin-bottom: 8px;
        }

        .req { color: #ef4444; }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #e6dcd0;
            border-radius: 12px;
            font-family: 'Poppins', sans-serif;
            font-size: 13.5px;
            color: #2c1e14;
            background-color: #ffffff;
            outline: none;
            transition: border-color 0.2s;
        }

        .form-control:focus { border-color: #6b4c35; }

        /* RADIO KATEGORI UTAMA */
        .radio-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .radio-pill input { display: none; }

        .radio-pill span {
            display: block;
            text-align: center;
            padding: 11px 12px;
            border-radius: 12px;
            background-color: #f4eee6;
            color: #7a624f;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
        }

        .radio-pill input:checked + span {
            background-color: #6b4c35;
            color: #ffffff;
        }

        /* INPUT HARGA */
        .price-input-wrap {
            position: relative;
            display: flex;
            align-items: center;
        }

        .price-prefix {
            position: absolute;
            left: 16px;
            font-size: 13.5px;
            font-weight: 600;
            color: #8c735f;
        }

        .price-input-wrap .form-control { padding-left: 44px; font-weight: 500; }

        /* RADIO STATUS KETERSEDIAAN */
        .status-options { display: flex; gap: 14px; }

        .status-radio input { display: none; }

        .status-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 18px;
            border-radius: 20px;
            font-size: 12.5px;
            font-weight: 500;
            cursor: pointer;
            border: 1px solid transparent;
            opacity: 0.65;
            transition: all 0.2s;
        }

        .status-pill.tersedia { background-color: #e6f6ec; color: #16a34a; border-color: #bbf7d0; }
        .status-pill.habis { background-color: #fde8e8; color: #dc2626; border-color: #fecaca; }

        .status-radio input:checked + .status-pill { opacity: 1; font-weight: 600; }

        .dot-status { width: 8px; height: 8px; border-radius: 50%; }
        .dot-green { background-color: #16a34a; }
        .dot-red { background-color: #dc2626; }

        /* UPLOAD FOTO */
        .upload-box {
            border: 2px dashed #dfd3c5;
            background-color: #faf6f0;
            border-radius: 16px;
            padding: 26px 20px;
            text-align: center;
        }

        .upload-icon {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background-color: #efe5d8;
            color: #8c735f;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 12px;
        }

        .upload-btn {
            display: inline-block;
            background-color: #ffffff;
            border: 1px solid #e6dcd0;
            padding: 8px 16px;
            border-radius: 10px;
            font-size: 12.5px;
            font-weight: 500;
            color: #2c1e14;
            cursor: pointer;
            margin-top: 8px;
        }

        .upload-hint { font-size: 11px; color: #9b826e; margin-top: 10px; }

        .preview-img {
            max-height: 150px;
            border-radius: 12px;
            margin: 0 auto 12px;
            display: block;
            object-fit: cover;
        }

        /* FOOTER FORM */
        .form-footer {
            margin-top: 30px;
            padding-top: 22px;
            border-top: 1px solid #f2ebe1;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
        }

        .checkbox-label {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 13px;
            color: #4a3525;
            cursor: pointer;
        }

        .checkbox-label input { width: 16px; height: 16px; accent-color: #6b4c35; }

        .form-buttons { display: flex; align-items: center; gap: 12px; }

        .btn-batal {
            text-decoration: none;
            padding: 11px 22px;
            border-radius: 12px;
            border: 1px solid #e6dcd0;
            background-color: #ffffff;
            color: #4a3525;
            font-size: 13px;
            font-weight: 500;
        }

        .btn-batal:hover { background-color: #f4eee6; }

        .btn-simpan {
            padding: 11px 24px;
            border-radius: 12px;
            border: none;
            background-color: #6b4c35;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
        }

        .btn-simpan:hover { background-color: #543b28; }

        .error-box {
            background-color: #fde8e8;
            border: 1px solid #fecaca;
            color: #dc2626;
            padding: 14px 18px;
            border-radius: 12px;
            font-size: 12.5px;
            margin-bottom: 20px;
        }

        @media (max-width: 900px) {
            .form-grid { grid-template-columns: 1fr; }
        }

        @media (max-width: 768px) {
            body { flex-direction: column; }
            .sidebar { width: 100%; border-right: none; border-bottom: 1px solid #e8dfd3; }
            .main-content { padding: 24px 20px; }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">
        <div>
            <div class="sidebar-header">
                <div class="brand">
                    ☼ daily crave
                    <small>DAPUR & KOPI INDONESIA</small>
                </div>
                <span class="admin-badge">ADMIN</span>
            </div>

            <nav class="nav-links">
                <a href="{{ route('admin.dashboard') }}" class="nav-item">
                    <svg viewBox="0 0 24 24">
                        <rect x="3" y="3" width="7" height="7" rx="1.5"></rect>
                        <rect x="14" y="3" width="7" height="7" rx="1.5"></rect>
                        <rect x="14" y="14" width="7" height="7" rx="1.5"></rect>
                        <rect x="3" y="14" width="7" height="7" rx="1.5"></rect>
                    </svg>
                    Dashboard
                </a>

                <a href="{{ route('admin.menu.index') }}" class="nav-item active">
                    <svg viewBox="0 0 24 24">
                        <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"></path>
                        <path d="M7 2v20"></path>
                        <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"></path>
                    </svg>
                    Menu
                </a>

                <a href="#" class="nav-item">
                    <svg viewBox="0 0 24 24">
                        <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path>
                        <line x1="7" y1="7" x2="7.01" y2="7"></line>
                    </svg>
                    Sub-Kategori
                </a>

                <a href="#" class="nav-item">
                    <svg viewBox="0 0 24 24">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                    </svg>
                    Pesanan
                </a>

                <a href="#" class="nav-item">
                    <svg viewBox="0 0 24 24">
                        <rect x="2" y="5" width="20" height="14" rx="2"></rect>
                        <line x1="2" y1="10" x2="22" y2="10"></line>
                    </svg>
                    Pembayaran
                </a>

                <a href="#" class="nav-item">
                    <svg viewBox="0 0 24 24">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    Pelanggan
                </a>
            </nav>
        </div>

        <div class="sidebar-footer">
            <div class="user-profile">
                <div class="user-info">
                    <div class="avatar-circle">A</div>
                    <div class="user-details">
                        <h4>Admin User</h4>
                        <p>Administrator</p>
                    </div>
                </div>
                <button class="logout-btn" title="Keluar">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                </button>
            </div>

            <div class="system-status">
                <div class="status-indicator">
                    <span class="status-dot"></span>
                    <span>Sistem Kasir Online</span>
                </div>
                <span class="version-badge">v2.4</span>
            </div>
        </div>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">
        <div class="page-header">
            <a href="{{ route('admin.menu.index') }}" class="back-link">← Kembali ke Daftar Menu</a>
            <h1>Menu</h1>
            <p>Kelola sajian menu restoran Anda dengan mudah.</p>
        </div>

        <section class="form-card">
            <div class="form-card-header">
                <h2>{{ $menu->exists ? 'Edit Menu' : 'Tambah Menu Baru' }}</h2>
                <p>{{ $menu->exists ? 'Ubah data hidangan yang sudah ada di resto Daily Crave.' : 'Lengkapi formulir hidangan resto Daily Crave.' }}</p>
            </div>

            @if($errors->any())
                <div class="error-box">
                    @foreach($errors->all() as $error)
                        <div>• {{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ $menu->exists ? route('admin.menu.update', $menu->id) : route('admin.menu.store') }}"
                  method="POST"
                  enctype="multipart/form-data">
                @csrf
                @if($menu->exists)
                    @method('PUT')
                @endif

                <div class="form-grid">
                    <!-- KOLOM KIRI -->
                    <div class="form-col">
                        <div class="form-group">
                            <label class="field-label">Nama Menu <span class="req">*</span></label>
                            <input type="text" name="nama_menu" class="form-control"
                                   value="{{ old('nama_menu', $menu->nama_menu) }}"
                                   placeholder="Contoh: Grill Chicken Steak Spesial" required>
                        </div>

                        <div class="form-group">
                            <label class="field-label">Kategori Utama <span class="req">*</span></label>
                            @php $selectedKat = old('kategori_utama', $menu->kategori_utama ?? 'Makanan'); @endphp
                            <div class="radio-grid-3">
                                @foreach(['Makanan', 'Minuman', 'Desert'] as $kat)
                                    <label class="radio-pill">
                                        <input type="radio" name="kategori_utama" value="{{ $kat }}"
                                               class="kategori-radio"
                                               {{ $selectedKat === $kat ? 'checked' : '' }}
                                               onchange="filterSubCategories('{{ $kat }}')">
                                        <span>{{ $kat }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="field-label">Sub Kategori <span class="req">*</span></label>
                            <select name="sub_category_id" id="subCategorySelect" class="form-control" required>
                                @foreach($subCategories as $idx => $sub)
                                    <option value="{{ $sub->id }}"
                                            data-kategori="{{ $sub->kategori_utama }}"
                                            {{ old('sub_category_id', $menu->sub_category_id) == $sub->id ? 'selected' : '' }}>
                                        {{ $idx + 1 }}. {{ $sub->nama_sub_kategori }} ({{ $sub->kategori_utama }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="field-label">Harga Jual (RP) <span class="req">*</span></label>
                            <div class="price-input-wrap">
                                <span class="price-prefix">Rp</span>
                                <input type="number" name="harga" class="form-control"
                                       value="{{ old('harga', $menu->harga) }}"
                                       placeholder="85000" min="0" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="field-label">Status Ketersediaan</label>
                            @php $selectedStatus = old('status', $menu->status ?? 'Tersedia'); @endphp
                            <div class="status-options">
                                <label class="status-radio">
                                    <input type="radio" name="status" value="Tersedia" {{ $selectedStatus === 'Tersedia' ? 'checked' : '' }}>
                                    <span class="status-pill tersedia"><span class="dot-status dot-green"></span> Tersedia</span>
                                </label>

                                <label class="status-radio">
                                    <input type="radio" name="status" value="Habis" {{ $selectedStatus === 'Habis' ? 'checked' : '' }}>
                                    <span class="status-pill habis"><span class="dot-status dot-red"></span> Habis</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- KOLOM KANAN -->
                    <div class="form-col">
                        <div class="form-group">
                            <label class="field-label">Foto Hidangan</label>
                            <div class="upload-box">
                                <img id="fotoPreview"
                                     src="{{ $menu->foto ? asset('storage/' . $menu->foto) : '' }}"
                                     class="preview-img"
                                     style="{{ $menu->foto ? '' : 'display:none;' }}">

                                <div id="fotoPlaceholder" style="{{ $menu->foto ? 'display:none;' : '' }}">
                                    <div class="upload-icon">
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                            <polyline points="21 15 16 10 5 21"></polyline>
                                        </svg>
                                    </div>
                                    <p style="font-size:12.5px; color:#6b4c35;">Tarik & letakkan foto di sini, atau</p>
                                </div>

                                <label class="upload-btn">
                                    Pilih Berkas Foto
                                    <input type="file" name="foto" accept="image/jpeg,image/png,image/webp" style="display:none;" onchange="previewImage(event)">
                                </label>

                                <p class="upload-hint">JPG, PNG atau WEBP rasio 4:3, maks 5MB</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="field-label">Deskripsi Sajian</label>
                            <textarea name="deskripsi" rows="5" class="form-control"
                                      placeholder="Tuliskan deskripsi cita rasa dan komposisi hidangan...">{{ old('deskripsi', $menu->deskripsi) }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- FOOTER FORM -->
                <div class="form-footer">
                    <label class="checkbox-label">
                        <input type="checkbox" name="tampilkan_katalog" value="1"
                               {{ old('tampilkan_katalog', $menu->tampilkan_katalog ?? true) ? 'checked' : '' }}>
                        Tampilkan langsung di katalog pelanggan
                    </label>

                    <div class="form-buttons">
                        <a href="{{ route('admin.menu.index') }}" class="btn-batal">Batal</a>
                        <button type="submit" class="btn-simpan">
                            {{ $menu->exists ? 'Simpan Perubahan' : 'Simpan Menu' }}
                        </button>
                    </div>
                </div>
            </form>
        </section>
    </main>

    <script>
        function filterSubCategories(kategoriUtama) {
            const select = document.getElementById('subCategorySelect');
            const options = select.querySelectorAll('option');
            let firstVisible = null;
            let selectedVisible = false;

            options.forEach(opt => {
                if (opt.dataset.kategori === kategoriUtama) {
                    opt.hidden = false;
                    if (!firstVisible) firstVisible = opt;
                    if (opt.selected) selectedVisible = true;
                } else {
                    opt.hidden = true;
                }
            });

            if (!selectedVisible && firstVisible) {
                firstVisible.selected = true;
            }
        }

        function previewImage(event) {
            const file = event.target.files[0];
            if (!file) return;

            const reader = new FileReader();
            reader.onload = function(e) {
                const img = document.getElementById('fotoPreview');
                const placeholder = document.getElementById('fotoPlaceholder');
                img.src = e.target.result;
                img.style.display = 'block';
                if (placeholder) placeholder.style.display = 'none';
            };
            reader.readAsDataURL(file);
        }

        document.addEventListener('DOMContentLoaded', () => {
            const activeRadio = document.querySelector('.kategori-radio:checked');
            if (activeRadio) filterSubCategories(activeRadio.value);
        });
    </script>
</body>
</html>