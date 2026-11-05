<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Suplier</title>
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

    <h1>Tambah Suplier Baru</h1>

    <form action="{{route('suplier.store')}}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama">Nama Suplier:</label>
            <input type="text" id="nama" name="nama">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat">
        </div>

        <div class="form-group">
            <label for="no_telp">No Telp:</label>
            <input type="text" id="no_telp" name="no_telp">
        </div>

        <button type="submit" class="btn-submit">Simpan</button>
        <button type="reset" class="btn-reset">Reset</button>
    </form>

</body>
</html>