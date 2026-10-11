<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Pakaian Laravel</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; margin: 0; background-color: #2E3440; color: #ECEFF4; }
        nav { background: #3B4252; padding: 15px 25px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); }
        .nav-links a { color: #88C0D0; text-decoration: none; margin-right: 25px; font-weight: 600; font-size: 18px; }
        .container { padding: 30px; }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; background-color: #3B4252; border-radius: 8px; overflow: hidden; }
        th, td { border-bottom: 1px solid #434C5E; padding: 12px 15px; text-align: left; }
        th { background-color: #4C566A; color: #ECEFF4; }
        input, button { padding: 10px; border-radius: 5px; border: 1px solid #434C5E; background-color: #4C566A; color: #ECEFF4; }
        button { background-color: #5E81AC; cursor: pointer; font-weight: bold; }
        button:hover { background-color: #81A1C1; }
        
        /* Desain simpel untuk Pagination Laravel */
        nav[role="navigation"] { margin-top: 20px; }
        nav[role="navigation"] svg { height: 20px; }
        nav[role="navigation"] a, nav[role="navigation"] span { color: #ECEFF4; background-color: #4C566A; padding: 8px 12px; border-radius: 5px; text-decoration: none; margin-right: 5px; }
    </style>
</head>
<body>
    <nav>
        <div class="nav-links">
            <a href="{{ route('products.index') }}">🛍️ Data Pakaian</a>
        </div>
    </nav>
    <div class="container">
        <!-- Bagian ini akan diisi oleh halaman lain -->
        @yield('content')
    </div>
</body>
</html>