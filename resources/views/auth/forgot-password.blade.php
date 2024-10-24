<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Your Password?</title>
    <style>
        /* Styling untuk halaman lupa password */
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
        }

        .container {
            max-width: 500px;
            margin: 100px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .container h2 {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .container p {
            font-size: 16px;
            color: #666;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 16px;
            color: #333;
            margin-bottom: 5px;
        }

        input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            color: #333;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #17a2b8;
            /* Warna default Bootstrap info */
            border-color: #17a2b8;
            color: white;
            /* Warna teks */
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #138496;
            /* Warna saat hover */
            border-color: #117a8b;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Lupa Kata Sandi?</h2>
        <p>Tidak masalah. Cukup beri tahu kami alamat email Anda dan kami akan mengirimkan email berisi tautan untuk mengatur ulang kata sandi Anda.</p>

        <!-- Session Status -->
        @if (session('status'))
        <div class="mb-4 text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <!-- Form untuk lupa password -->
        <form method="POST" action="{{ route('password.email') }}" class="form">
            @csrf
            <div class="form-group">
                <label for="email">Alamat Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukkan alamat email Anda" value="{{ old('email') }}" required autofocus>

                <!-- Error Email -->
                @if ($errors->has('email'))
                <span class="text-red-600">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-info">Kirim Tautan Reset Kata Sandi</button>
        </form>
    </div>

</body>

</html>
