<x-layouts.public>

    <div class="max-w-2xl mx-auto px-6 pt-24 pb-16">

        <h1 class="text-3xl font-bold text-white mb-6">HePe</h1>

        <p class="text-zinc-400 leading-relaxed mb-4">
            Heim & Pedersen DA er et lite internettselskap som har holdt det gående siden 1999. Vi tar ikke på oss nye kunder, men betjener et knippe langsiktige kunder med e-post, drift og teknisk støtte.
        </p>

        <p class="text-zinc-400 leading-relaxed mb-12">
            Er du eksisterende kunde og trenger hjelp, ta gjerne kontakt.
        </p>

        {{-- Webmail --}}
        <div class="mb-10">
            <h2 class="text-sm font-semibold uppercase tracking-wider text-zinc-500 mb-4">E-post</h2>
            <a href="https://outlook.live.com/owa/?nlp=1" target="_blank"
               class="inline-flex items-center gap-2 px-5 py-2.5 border border-zinc-700 text-zinc-300 text-sm font-medium rounded-lg hover:border-zinc-500 hover:text-white transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                Logg på webmail
            </a>
        </div>

        {{-- Contact --}}
        <div>
            <h2 class="text-sm font-semibold uppercase tracking-wider text-zinc-500 mb-4">Kontakt</h2>
            <a href="/kontakt-oss" class="inline-flex items-center gap-2 px-5 py-2.5 bg-red-500 text-white text-sm font-medium rounded-lg hover:bg-red-600 transition-colors">
                Send oss en melding
            </a>
        </div>

    </div>

</x-layouts.public>
