<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #f6d365, #fda085);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Segoe UI', sans-serif;
    }
    .register-card {
      background: #fff;
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 450px;
    }
    .form-control:focus {
      box-shadow: none;
      border-color: #ff8c42;
    }
    .btn-primary {
      background-color: #ff8c42;
      border: none;
    }
    .btn-primary:hover {
      background-color: #e6762e;
    }
  </style>
</head>
<body>

<div class="register-card">
  <h3 class="text-center mb-4"><i class="bi bi-pencil-square me-2"></i>Register</h3>
  <form action="{{ route('register.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="fullname" class="form-label">Full Name</label>
      <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Your name" required>
    </div>
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="Your name" required>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" required>
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="••••••••" required>
    </div>
    <div class="mb-3">
      <label for="confirmPassword" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="confirmPassword" placeholder="••••••••" required>
    </div>
    <div class="d-grid">
      <button type="submit" class="btn btn-primary">Create Account</button>
    </div>
    <div class="text-center mt-3">
      <small>Already have an account? <a href="{{ Route('login') }}">Login</a></small>
    </div>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
