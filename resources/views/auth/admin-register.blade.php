<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Register - Inventory System</title>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <meta name="msapplication-TileColor" content="#206bc4" />
    <meta name="theme-color" content="#206bc4" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="robots" content="noindex,nofollow,noarchive" />
    <link rel="icon" href="{{ asset('warehouse.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{ asset('warehouse.png') }}" type="image/x-icon" />
    <!-- Tabler Core -->
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet" />
</head>

<body class="antialiased border-top-wide border-primary d-flex flex-column">
    <div class="flex-fill d-flex flex-column justify-content-center">
        <div class="container-tight py-6">
            <form class="card card-md border-0 rounded-3" action="{{ route('admin.admin.register.submit') }}" method="POST">
                @csrf
                <div class="card-body">
                    <h3 class="text-center mb-3 font-weight-medium">
                        Daftar Admin
                    </h3>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            placeholder="masukan nama anda" name="name" required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                            placeholder="masukan email anda" name="email" required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Hidden field for admin department -->
                    <div class="mb-3">
                        <label class="form-label">Role</label>
                        <select class="form-select" disabled>
                            <option value="Admin" selected>Admin</option>
                        </select>
                        <input type="hidden" name="department" value="Admin">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kata Sandi</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            placeholder="masukan kata sandi anda" name="password" required>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Konfirmasi Kata Sandi</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                            placeholder="masukan konfirmasi kata sandi anda" name="password_confirmation" required>
                        @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
