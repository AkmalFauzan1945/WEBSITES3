
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kategori</title>

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
        .btn-back{
            text-decoration: none; 
            color: inherit;        
        }
    </style>
</head>
<body>

    <h1>Edit Kategori</h1>

    <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_kategori">Kategori:</label>
            <input
                type="text"
                id="nama_kategori"
                name="nama_kategori"
                value="{{ old('nama_kategori', $kategori->nama_kategori) }}"
                maxlength="50"
                required
            >
        </div>

        <button type="submit">Update</button>
        <button type="reset">Reset</button>
        <button><a href="{{ route('kategori.index') }}" class="btn-close" style="text-decoration: none;">Back</a></button>
    </form>

</body>
</html>
