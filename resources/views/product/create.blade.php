
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input, select {
            width: 250px;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 8px 15px;
            cursor: pointer;
        }

        .error {
            color: red;
        }
    </style>
</head>
<body>

    <h1>Tambah Produk Baru</h1>

    @if ($errors->any())
        <div class="error">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('product.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="kode_produk">Kode Produk:</label>
            <input
                type="text"
                id="kode_produk"
                name="kode_produk"
                value="{{ old('kode_produk') }}"
                required
            >
        </div>

        <div class="form-group">
            <label for="nama_produk">Nama Produk:</label>
            <input
                type="text"
                id="nama_produk"
                name="nama_produk"
                value="{{ old('nama_produk') }}"
                maxlength="50"
                required
            >
        </div>

        <div class="form-group">
    <label>Kategori</label>

    <select name="id_kategori" class="form-control" required>
        <option value="">-- Pilih Kategori --</option>

        @foreach ($kategori as $item)
            <option value="{{ $item->id }}">
                {{ $item->nama_kategori }}
            </option>
        @endforeach
    </select>
</div>

        <div class="form-group">
            <label for="harga">Harga:</label>
            <input
                type="number"
                id="harga"
                name="harga"
                value="{{ old('harga') }}"
                min="0"
                required
            >
        </div>

        <div class="form-group">
            <label for="stok">Stok:</label>
            <input
                type="number"
                id="stok"
                name="stok"
                value="{{ old('stok') }}"
                min="0"
                required
            >
        </div>

        <button type="submit">Simpan</button>
        <button type="reset">Reset</button>
        <a href="{{ route('product.index') }}">Kembali</a>

    </form>

</body>
</html>
