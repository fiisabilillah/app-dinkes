<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #343a40;
        }
        .form-control {
            border-radius: 5px;
            margin-bottom: 15px;
        }
        .btn-primary {
            width: 100%;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .form-text {
            color: #e74c3c;
        }
        .password-container {
            position: relative;
        }
        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Reset Password</h2>
        <form method="POST" action="{{ route('password.store') }}">
            @csrf
            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input id="email" class="form-control" type="email" name="email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">
                @if ($errors->get('email'))
                    <div class="form-text">{{ $errors->first('email') }}</div>
                @endif
            </div>

            <!-- Password -->
            <div class="mb-3 password-container">
                <label for="password" class="form-label">Password</label>
                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
                <span class="toggle-password" onclick="togglePasswordVisibility('password')">&#128065;</span>
                @if ($errors->get('password'))
                    <div class="form-text">{{ $errors->first('password') }}</div>
                @endif
            </div>

            <!-- Confirm Password -->
            <div class="mb-3 password-container">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                <span class="toggle-password" onclick="togglePasswordVisibility('password_confirmation')">&#128065;</span>
                @if ($errors->get('password_confirmation'))
                    <div class="form-text">{{ $errors->first('password_confirmation') }}</div>
                @endif
            </div>

            <!-- Reset Button -->
            <div class="d-grid">
                <button type="submit" class="btn btn-info">Reset Password</button>
            </div>
        </form>
    </div>

    <script>
        function togglePasswordVisibility(fieldId) {
            const passwordField = document.getElementById(fieldId);
            const passwordIcon = passwordField.nextElementSibling;
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                passwordIcon.textContent = '🙈'; // Mengubah ikon saat password terlihat
            } else {
                passwordField.type = 'password';
                passwordIcon.textContent = '👁️'; // Mengubah ikon saat password tersembunyi
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
