<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row align-items-center g-4">
            <div class="col-12 col-lg-6">
                <div class="pe-lg-4">
                    <span class="badge text-bg-primary mb-3">CRM Platformu</span>
                    <h1 class="display-6 fw-bold">{{ $title }}</h1>
                    <p class="text-muted">{{ $subtitle }}</p>
                    <div class="card border-0 shadow-sm mt-4">
                        <div class="card-body">
                            <h2 class="h6 fw-bold mb-3">Örnek Yönetici Kullanıcıları</h2>
                            <div class="row g-3">
                                @foreach ($sampleUsers as $user)
                                    <div class="col-12 col-md-6">
                                        <div class="border rounded-3 p-3 h-100 bg-white">
                                            <div class="fw-semibold">{{ $user['role'] }}</div>
                                            <div class="small text-muted">{{ $user['company'] }}</div>
                                            <div class="mt-2 small">
                                                <div><span class="text-muted">E-posta:</span> {{ $user['email'] }}</div>
                                                <div><span class="text-muted">Şifre:</span> {{ $user['password'] }}</div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <p class="text-muted small mt-3 mb-0">
                                Bu bilgiler geliştirme ortamı için örnektir. Canlı ortamda şifreleri güvenli biçimde yönetmelisiniz.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-lg-5">
                        <h2 class="h5 fw-bold mb-3">Hesabınıza giriş yapın</h2>
                        <form>
                            <div class="mb-3">
                                <label class="form-label" for="email">E-posta</label>
                                <input class="form-control" id="email" type="email" placeholder="ornek@firma.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="password">Şifre</label>
                                <input class="form-control" id="password" type="password" placeholder="••••••••">
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember">
                                    <label class="form-check-label" for="remember">Beni hatırla</label>
                                </div>
                                <a class="small text-decoration-none" href="#">Şifremi unuttum</a>
                            </div>
                            <button class="btn btn-primary w-100 mb-3" type="button">Giriş yap</button>
                            <div class="text-center text-muted small">
                                Kurumsal CRM için güvenli oturum altyapısı hazırlanıyor.
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-muted small text-center mt-3">
                    © 2024 CRM Platformu · Güvenli, ölçeklenebilir, hızlı.
                </div>
            </div>
        </div>
    </div>
</body>
</html>
