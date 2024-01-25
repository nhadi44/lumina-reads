<!DOCTYPE html>
<html lang="en">

<head>
    @livewireStyles()
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/assets/compiled/favicon/favicon.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/assets/compiled/css/guest/index.css">
    <title>@yield('title')</title>
    @stack('styles')

</head>

<body>
    <header>
        <div class="navbar-custom position-fixed top-0 start-0 w-100 bg-transparent py-2" id="navbar">
            <div class="container">
                <livewire:guest.navbar />
            </div>
        </div>
        <div class="vh-100">
            <livewire:guest.hero />
        </div>
    </header>

    <main class="vh-100 bg-warning">
        @yield('content')
    </main>

    <footer>

    </footer>

    @livewireScripts()
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="/assets/compiled/js/guest/script.js"></script>
    @stack('scripts')
</body>

</html>
