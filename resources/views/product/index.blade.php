
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Product</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }

        table {
            width: 70%;
            border-collapse: collapse;
            margin-top: 5px;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 8px 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-edit {
            text-decoration: none;
            color: inherit;
        }

        .btn-create {
            text-decoration: none;
            color: inherit;
        }

        .btn-delete {
            text-decoration: none;
            color: inherit;
        }

        .action-buttons {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .action-buttons form {
            margin: 0;
        }
    </style>
</head>

<body>

    <h1>PRODUCT</h1>

    <button>
        <a href="{{ route('product.create') }}" class="btn-create">
            Tambah Product
        </a>
    </button>

    <button>
        <a href="/" class="btn-create">
            Back
        </a>
    </button>

    <form method="GET" action="{{ route('product.index') }}">
    <input type="text" name="nama_produk" placeholder="Cari Produk" value="{{ request('nama_produk') }}">

    <button type="submit">Cari</button>
</form>

    @if(session('success'))
        <h4 style="color:green">
            {{ session('success') }}
        </h4>
    @endif

    @if(session('error'))
        <h4 style="color:red">
            {{ session('error') }}
        </h4>
    @endif

    <table>
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        @forelse ($produk as $item)
    <tr>
        <td>{{ $item->kode_produk }}</td>
        <td>{{ $item->nama_produk }}</td>
        <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
        <td>{{ $item->stok }}</td>

        <td>
            <div class="action-buttons">
                <button><a href="{{ route('product.edit', $item->id) }}" class="btn-edit">
                    Edit
                </a></button>

                <form action="{{ route('product.destroy', $item->id) }}"
                      method="POST"
                      onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn-delete">Hapus</button>
                </form>
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td colspan="5">Belum ada data produk.</td>
    </tr>
@endforelse

        </tbody>
    </table>

</body>
</html>
