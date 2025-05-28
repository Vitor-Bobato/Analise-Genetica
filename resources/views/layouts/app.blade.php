<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Laboratório de Análises Genéticas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Montserrat', Arial, sans-serif;
            background: linear-gradient(120deg, #e0f7fa, #f3e5f5 100%);
            min-height: 100vh;
        }
        .navbar {
            background: #1976d2 !important;
        }
        .navbar-brand, .nav-link, .navbar-text {
            color: #fff !important;
            font-weight: 600;
        }
        .btn-primary {
            background: #1976d2;
            border: none;
            transition: background 0.3s;
        }
        .btn-primary:hover, .btn-primary:focus {
            background: #1565c0;
        }
        .btn-secondary {
            background: #26a69a;
            border: none;
            color: #fff;
            transition: background 0.3s;
        }
        .btn-secondary:hover, .btn-secondary:focus {
            background: #00897b;
        }
        .card {
            border-radius: 20px;
            box-shadow: 0 6px 24px rgba(25, 118, 210, 0.08);
            border: none;
            animation: fadeInUp 1s;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(50px);}
            to { opacity: 1; transform: translateY(0);}
        }
        .table thead {
            background: #1976d2;
            color: #fff;
        }
        .form-label {
            font-weight: 600;
        }
        .fade-in {
            animation: fadeIn 1.2s;
        }
        @keyframes fadeIn {
            from {opacity:0;}
            to {opacity:1;}
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome') }}">LabGenética</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('welcome') }}">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('exames.create') }}">Cadastrar Exame</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('exames.index') }}">Exames Cadastrados</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>