<!DOCTYPE html>
<html lang="no" class="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ isset($title) ? $title . ' – HePe' : 'HePe' }}</title>

    <link rel="icon" href="/images/favicon/favicon.ico" sizes="any">
    <link rel="apple-touch-icon" href="/images/favicon/apple-touch-icon-120x120.png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @cookieconsentscripts
</head>
<body class="bg-zinc-900 text-zinc-100 font-sans antialiased min-h-screen flex flex-col">

    {{-- Navigation --}}
    <header class="border-b border-zinc-800 bg-zinc-900 sticky top-0 z-50">
        <div class="max-w-5xl mx-auto px-6 h-16 flex items-center justify-between">
            <a href="/" class="flex items-center gap-2 shrink-0">
                <img src="/images/logo_neg.png" alt="HePe" class="h-8 w-auto">
            </a>
            <nav class="flex items-center gap-1">
                <a href="https://outlook.live.com/owa/?nlp=1" target="_blank" class="px-4 py-2 text-sm font-medium text-zinc-400 hover:text-zinc-100 hover:bg-zinc-800 rounded-lg transition-colors">Webmail</a>
                <a href="/kontakt-oss" class="px-4 py-2 text-sm font-medium bg-red-500 text-white hover:bg-red-600 rounded-lg transition-colors">Kontakt oss</a>
            </nav>
        </div>
    </header>

    {{-- Main content --}}
    <main class="flex-1">
        {{ $slot }}
    </main>

    {{-- Footer --}}
    <footer class="bg-zinc-900 mt-24">
        <div class="max-w-5xl mx-auto px-6 py-12">
            <div class="flex flex-wrap items-center justify-between gap-4">
                <p class="text-xs text-zinc-600">© {{ date('Y') }} Heim & Pedersen DA</p>
                <div class="flex gap-4 text-xs text-zinc-600">
                    <a href="/personvern" class="hover:text-zinc-400 transition-colors">Personvern</a>
                    <a href="/cookies" class="hover:text-zinc-400 transition-colors">Cookies</a>
                    <a href="/vilkar" class="hover:text-zinc-400 transition-colors">Vilkår</a>
                    <a href="/abt" class="hover:text-zinc-400 transition-colors">ABT</a>
                </div>
            </div>
        </div>
    </footer>

    @cookieconsentview
</body>
</html>
