<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
        <title>{{ $title ?? 'Moda Express' }}</title>
    </head>
    <body>
        <div class="d-flex">
            <div class="sidebar">
                <div class="logo d-flex align-items-center gap-3">
                    <div class="icon-box">
                        <i class="bi bi-shop"></i>
                    </div>
                    <div> 
                         <h6 class="mb-0 fw-semibold">Moda Express</h6>
                    </div>
                </div>
                <div class="nav-section-title">Menu Principal</div>
                <nav class="nav flex-column px-2">
                    <a href="#" class="nav-link"><i class="bi bi-bag-plus"></i>Cadastrar Produtos</a>
                    <a href="#" class="nav-link"><i class="bi bi-bag-heart"></i>Produtos</a>
                    <a href="#" class="nav-link"><i class="bi bi-reception-4">Gestão</i></a>
                    <a href="#" class="nav-link"><i class="bi bi-cart4">Carrinho</i></a>
                </nav>
            </div>

        </div>
        <div class="header">
            <header class="header">
                <div class="d-flex align-items-center gap-3">
                    <i class="bi bi-shield-lock text-primary fs-4"></i>
                    <h5 class="mb-0 fw-semibold">Ambiente Seguro</h5>
                </div>
                <small class="text-muted">Escola SESI/SENAI de Presidente Epitacio</small>
            </header>
            <main class="main-content">
                {{ $slot }}
            </main>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
    </body>
</html>
