<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/scss/app.scss">
    <link rel="stylesheet" href="assets/scss/themes/dark/app-dark.scss">
    <link rel="stylesheet" href="assets/scss/pages/auth.scss">
    <link rel="shortcut icon" href="assets/static/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/static/images/logo/favicon.png" type="image/png">


    <script src="{{ asset('public/assets/js') }}" defer></script>

</head>

<body>
    <script src="assets/static/js/initTheme.js"></script>
    <div id="auth">
        <main class="container mx-auto mt-10">

            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')

        </main>
    </div>
</body>

</html>
