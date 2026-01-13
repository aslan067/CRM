<!doctype html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="#">CRM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#crmNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="crmNavbar">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="#">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Müşteriler</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Satışlar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Stok</a></li>
                </ul>
                <div class="d-flex align-items-center gap-3">
                    <span class="text-muted small">Super Admin</span>
                    <button class="btn btn-outline-primary btn-sm">Yeni Teklif</button>
                </div>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        <div class="d-flex flex-column flex-lg-row align-items-lg-center justify-content-between gap-3 mb-4">
            <div>
                <h1 class="h3 fw-bold mb-1">{{ $title }}</h1>
                <p class="text-muted mb-0">{{ $subtitle }}</p>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-light border">Raporları indir</button>
                <button class="btn btn-primary">Yeni müşteri</button>
            </div>
        </div>

        <div class="row g-3 mb-4">
            @foreach ($stats as $stat)
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <p class="text-muted mb-1">{{ $stat['label'] }}</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <h2 class="h4 fw-bold mb-0">{{ $stat['value'] }}</h2>
                                <span class="badge bg-success-subtle text-success">{{ $stat['trend'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row g-3">
            <div class="col-12 col-xl-8">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center">
                        <h2 class="h6 fw-bold mb-0">Son Aktiviteler</h2>
                        <a class="text-decoration-none small" href="#">Tümünü gör</a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            @foreach ($activities as $activity)
                                <li class="list-group-item px-0">
                                    <div class="fw-semibold">{{ $activity['title'] }}</div>
                                    <small class="text-muted">{{ $activity['meta'] }}</small>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-white border-0">
                        <h2 class="h6 fw-bold mb-0">Bugünün Öncelikleri</h2>
                    </div>
                    <div class="card-body">
                        @foreach ($tasks as $task)
                            <div class="d-flex align-items-start gap-3 mb-3">
                                <div class="rounded-circle bg-primary-subtle text-primary fw-semibold px-2 py-1">
                                    {{ strtoupper(mb_substr($task['status'], 0, 1)) }}
                                </div>
                                <div>
                                    <div class="fw-semibold">{{ $task['name'] }}</div>
                                    <small class="text-muted">{{ $task['due'] }} · {{ $task['status'] }}</small>
                                </div>
                            </div>
                        @endforeach
                        <button class="btn btn-outline-primary w-100 mt-2">Takvimde görüntüle</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
