<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #74ebd5, #9face6);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Segoe UI', sans-serif;
        }

        .login-card {
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #6c63ff;
        }

        .btn-primary {
            background-color: #6c63ff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #5848e2;
        }
    </style>
</head>

<body>

    <div class="login-card">
        <h3 class="text-center mb-4"><i class="bi bi-person-circle me-2"></i>Login</h3>
        @if (session('error'))
            <div class="mb-4 p-3 rounded bg-green-100 text-green-800">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{ Route('login.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                @error('username')
                    <small>{{ $message }}</small>
                @enderror
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="username...">
            </div>
            <div class="mb-3">
                @error('password')
                    <small>{{ $message }}</small>
                @enderror
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="••••••••">
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Sign In</button>
            </div>
            <div class="text-center mt-3">
                <small>Don't have an account? <a href="{{ route('auth.register') }}">Register</a></small>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
