<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="card-header text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                            </div>

                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </form>
                    </div>
                </div>
                <p class="text-center mt-3 text-muted">Belum punya akun? <a href="register">
                Registrasi
                </a> 
                    </p>
                    <p class="text-center mt-3 text-muted"> <a href="forgot-password">
                Lupa Sandi
                </a> 
                    </p>
            </div>
        </div>
    </div>
</body>
</html>
