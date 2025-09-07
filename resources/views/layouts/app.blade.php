<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | My Laravel App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background: #f2f2f2;
            padding: 15px 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
           
        }

        .header-left p {
            margin: 0;
        }

        .nav-links a {
            text-decoration: none;
            margin-left: 15px;
            color: #333;
            font-weight: bold;
        }

        main {
            padding: 30px;
        }

        footer {
            background: #f2f2f2;
            padding: 10px;
            text-align: center;
         
            bottom: 0;
          
        }

        .logout-link {
            margin-left: 20px;
        }
    </style>
</head>
<body>

    <header>
        <div class="header-left">
            <p>Hello, <strong>{{ session('user')->name }}</strong></p>
        </div>

       

        <div class="nav-links">
            <a href="/dashboard">Home</a>
            <a href="/cart">Cart</a>
            <a href="/logout" class="logout-link">Logout</a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2025 My Laravel App</p>
    </footer>
    
</body>
</html>
