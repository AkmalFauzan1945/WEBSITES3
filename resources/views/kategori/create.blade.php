
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori</title>

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

        input[type="text"] {
            width: 20%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <h1>Tambah Kategori Baru</h1>

    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama_kategori">Kategori:</label>
            <input
                type="text"
                id="nama_kategori"
                name="nama_kategori"
                maxlength="50"
                required
            >
        </div>

        <button type="submit" class="btn-submit">Simpan</button>
        <button type="reset" class="btn-reset">Reset</button>
    </form>

</body>
</html>
