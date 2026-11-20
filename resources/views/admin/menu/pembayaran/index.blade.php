
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pembayaran - Daily Crave</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #fbf9f6;
            color: #49372b;
            padding: 35px;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            margin-bottom: 8px;
        }

        p {
            color: #8c735f;
            font-size: 13px;
            margin-bottom: 25px;
        }

        .card {
            background: white;
            border: 1px solid #eee5da;
            border-radius: 12px;
            padding: 22px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px;
        }

        th, td {
            padding: 15px 12px;
            text-align: left;
            font-size: 12px;
            border-bottom: 1px solid #eee5da;
        }

        th {
            color: #8c735f;
            font-weight: 500;
        }

        button {
            border: none;
            padding: 8px 12px;
            border-radius: 6px;
            color: white;
            cursor: pointer;
            font-family: inherit;
            font-size: 11px;
        }

        .approve {
            background: #16a34a;
        }

        .reject {
            background: #dc2626;
        }

        .proof {
            color: #795b43;
            text-decoration: none;
        }

        .status {
            font-weight: 600;
        }

        .waiting {
            color: #c58b28;
        }

        .success {
            color: #16a34a;
        }

        .failed {
            color: #dc2626;
        }

        input {
            padding: 7px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin: 5px 0;
            font-family: inherit;
            font-size: 11px;
        }
    </style>
</head>

<body>

    <h1>Pembayaran</h1>

    <p>Kelola dan konfirmasi pembayaran pelanggan Daily Crave.</p>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    @if(session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif

    <div class="card">

        <table>
            <thead>
                <tr>
                    <th>KODE PESANAN</th>
                    <th>PELANGGAN</th>
                    <th>TOTAL</th>
                    <th>METODE</th>
                    <th>BUKTI</th>
                    <th>STATUS</th>
                    <th>AKSI</th>
                </tr>
            </thead>

            <tbody>

                @forelse($pembayarans as $p)

                    <tr>
                        <td>{{ $p->pesanan->kode_pesanan }}</td>

                        <td>{{ $p->pesanan->nama_pelanggan }}</td>

                        <td>
                            Rp{{ number_format($p->jumlah_transfer, 0, ',', '.') }}
                        </td>

                        <td>{{ $p->metode_pembayaran }}</td>

                        <td>
                            @if($p->bukti_transfer)
                                <a
                                    class="proof"
                                    href="{{ asset('storage/'.$p->bukti_transfer) }}"
                                    target="_blank"
                                >
                                    Lihat Bukti
                                </a>
                            @else
                                Belum ada
                            @endif
                        </td>

                        <td>
                            <span class="status
                                {{ $p->status === 'berhasil' ? 'success' : ($p->status === 'ditolak' ? 'failed' : 'waiting') }}">
                                {{ ucfirst($p->status) }}
                            </span>
                        </td>

                        <td>
                            @if($p->status === 'menunggu' && $p->bukti_transfer)

                                <form
                                    action="{{ route('admin.pembayaran.konfirmasi', $p->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Konfirmasi pembayaran ini?')"
                                >
                                    @csrf

                                    <button class="approve">
                                        Konfirmasi
                                    </button>
                                </form>

                                <form
                                    action="{{ route('admin.pembayaran.tolak', $p->id) }}"
                                    method="POST"
                                >
                                    @csrf

                                    <input
                                        type="text"
                                        name="catatan_admin"
                                        placeholder="Alasan penolakan"
                                        required
                                    >

                                    <button class="reject">
                                        Tolak
                                    </button>
                                </form>

                            @else
                                -
                            @endif
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="7">
                            Belum ada pembayaran.
                        </td>
                    </tr>

                @endforelse

            </tbody>
        </table>

        {{ $pembayarans->links() }}

    </div>

</body>
</html>
