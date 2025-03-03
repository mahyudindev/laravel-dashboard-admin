<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Splash Screen</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #808080; /* Background abu-abu */
            overflow: hidden;
        }

        #logo {
            width: 200px; /* Ukuran logo */
            height: auto;
            animation: shimmer 3s infinite alternate;
        }

        @keyframes shimmer {
            0% {
                filter: brightness(1);
            }
            50% {
                filter: brightness(2);
            }
            100% {
                filter: brightness(1);
            }
        }

        @keyframes backgroundShimmer {
        0% {
            background-color: #808080;
        }
        50% {
            background-color: #a9a9a9;
        }
        100% {
            background-color: #808080;
        }
    }

    body {
        animation: backgroundShimmer 3s infinite alternate;
    }
    </style>
</head>
<body>
<div style="display: flex; align-items: center; justify-content: center; flex-direction: column; height: 100vh;">
    <img id="logo" src="{{ asset('logo/logo.png') }}" alt="Logo" style="opacity: 0.8;">
    <h3 style="color: white; margin-top: 20px;">Sistem Pembayaran SPP</h1>
</div>

<script>
    setTimeout(() => {
        window.location.href = "{{ url('/login') }}"; 
    }, 3000); 
</script>
</body>
</html>
