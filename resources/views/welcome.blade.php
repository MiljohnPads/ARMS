<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ARMS - Salus Institute of Technology</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                margin: 0;
                padding: 0;
                height: 100vh;
                background-image: url('https://scontent.fceb8-1.fna.fbcdn.net/v/t39.30808-6/455747819_2514337045623040_3591389809117143274_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeEUqViC4cwzInvEdKf4NQAG-hBVDAqB7Uj6EFUMCoHtSOWZfbGWphcuyGS-6-bTXqNM1v_wTo7WXncaQk8BNZry&_nc_ohc=ER9Km36rjKgQ7kNvgELIslw&_nc_zt=23&_nc_ht=scontent.fceb8-1.fna&_nc_gid=AYSx9WyBmmRHUmwKuNxMICy&oh=00_AYCZmzWks4OG5mcQu7DZfk7m5_ioin8daAEdZoiPLIz1vw&oe=66E09CEC');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                display: flex;
                justify-content: center;
                align-items: center;
                color: white;
            }
            .content-container {
                background-color: rgba(0, 0, 0, 0.6);
                padding: 30px;
                border-radius: 12px;
                text-align: center;
                max-width: 800px;
                width: 100%;
            }
            header h1 {
                margin: 0 0 20px;
                font-size: 2.5em;
                font-weight: 600;
            }
            nav a {
                color: #ff2d20;
                text-decoration: none;
                margin: 0 10px;
                font-weight: 600;
            }
            nav a:hover {
                text-decoration: underline;
            }
            img {
                border-radius: 8px;
                margin: 20px 0;
            }
            footer p {
                margin-top: 20px;
                font-size: 0.875em;
                color: #ffffffb3;
            }
        </style>
    </head>
    <body>
        <div class="content-container">
            <header>
                <h1>Salus Institute of Technology</h1>
                @if (Route::has('login'))
                    <nav>
                        @auth
                            <a href="{{ url('/dashboard') }}">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}">Log in</a>

                        @endauth
                    </nav>
                @endif
            </header>
            <div>
                <img src="https://scontent.fceb8-1.fna.fbcdn.net/v/t39.30808-6/455949693_2514337008956377_6947541719723993411_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeGNQVl-H17WLJyrkKxoka1G2K6pik0hXIfYrqmKTSFch2uvGahsXfCZb-3T9OHAGwkDlWAcyZCCnSjrj9zTRGkO&_nc_ohc=Dk9zT_pI7UUQ7kNvgGAHOXf&_nc_zt=23&_nc_ht=scontent.fceb8-1.fna&oh=00_AYD3-wjXbhhc1ASjges1q-bHEaaPKefxwO8C3FSZISLsdg&oe=66E0C8DD" alt="Salus Institute of Technology Logo" class="w-40">
            </div>
            <footer>
                <p>&copy; {{ date('2024') }} Your George Corps. All rights reserved.</p>
            </footer>
        </div>
    </body>
</html>
