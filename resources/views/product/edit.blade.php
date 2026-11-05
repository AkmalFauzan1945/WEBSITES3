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
            margin-bottom: 10px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"] {
            width: 20%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <h1>Tambah Produk Baru</h1>

    <form action="{{route('product.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="kode">Kode Produk:</label>
            <input type="text" id="kode" name="kode">
        </div>

        <div class="form-group">
            <label for="nama_produk">Nama Produk:</label>
            <input type="text" id="nama_produk" name="nama_produk">
        </div>

        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="number" id="harga" name="harga">
        </div>

        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok">
        </div>

        <button type="submit" class="btn-submit">Simpan</button>
        <button type="reset" class="btn-reset">Reset</button>
    </form>

</body>
</html>