<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .container h1 {
            margin-bottom: 1rem;
        }

        .container form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .container form input[type="file"] {
            padding: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .container form button {
            padding: 1rem;
            background-color: #333;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .container form button:hover {
            background-color: #555;
        }

        .alert {
            margin-bottom: 1rem;
            padding: 1rem;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload File</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
                <br>
                <a href="{{ asset('storage/' . session('file')) }}" target="_blank">View File</a>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" required>
            <button type="submit">Upload</button>
        </form>
    </div>
</body>
</html>
