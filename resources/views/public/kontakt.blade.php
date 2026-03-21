<x-layouts.public title="Kontakt oss">

    <section class="max-w-5xl mx-auto px-6 pt-20 pb-8">
        <h1 class="text-4xl md:text-5xl font-bold leading-tight text-white">Kontakt oss</h1>
        <p class="mt-4 text-zinc-400 text-lg">Vi vil besvare din henvendelse ved første anledning og senest innen 48 timer.</p>
    </section>

    <section class="max-w-5xl mx-auto px-6 py-16">
        <div class="max-w-xl">
            @if(session('success'))
                <div class="mb-6 px-4 py-3 bg-green-900/40 border border-green-700 text-green-300 text-sm rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            <form action="/kontakt-oss" method="POST" class="space-y-5">
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label for="fornavn" class="block text-sm font-medium text-zinc-300 mb-1">Fornavn</label>
                        <input type="text" id="fornavn" name="fornavn" required
                               class="w-full px-4 py-2.5 bg-zinc-800 border border-zinc-700 rounded-lg text-sm text-zinc-100 placeholder-zinc-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition">
                    </div>
                    <div>
                        <label for="etternavn" class="block text-sm font-medium text-zinc-300 mb-1">Etternavn</label>
                        <input type="text" id="etternavn" name="etternavn" required
                               class="w-full px-4 py-2.5 bg-zinc-800 border border-zinc-700 rounded-lg text-sm text-zinc-100 placeholder-zinc-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition">
                    </div>
                </div>

                <div>
                    <label for="bedrift" class="block text-sm font-medium text-zinc-300 mb-1">Bedrift</label>
                    <input type="text" id="bedrift" name="bedrift"
                           class="w-full px-4 py-2.5 bg-zinc-800 border border-zinc-700 rounded-lg text-sm text-zinc-100 placeholder-zinc-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition">
                </div>

                <div>
                    <label for="epost" class="block text-sm font-medium text-zinc-300 mb-1">E-post</label>
                    <input type="email" id="epost" name="epost" required
                           class="w-full px-4 py-2.5 bg-zinc-800 border border-zinc-700 rounded-lg text-sm text-zinc-100 placeholder-zinc-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition">
                </div>

                <div>
                    <label for="mobil" class="block text-sm font-medium text-zinc-300 mb-1">Mobil</label>
                    <div class="flex">
                        <span class="inline-flex items-center px-3 border border-r-0 border-zinc-700 rounded-l-lg bg-zinc-700 text-sm text-zinc-400">+47</span>
                        <input type="tel" id="mobil" name="mobil"
                               class="w-full px-4 py-2.5 bg-zinc-800 border border-zinc-700 rounded-r-lg text-sm text-zinc-100 placeholder-zinc-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition">
                    </div>
                </div>

                <div>
                    <label for="melding" class="block text-sm font-medium text-zinc-300 mb-1">Melding</label>
                    <textarea id="melding" name="melding" rows="5" required
                              class="w-full px-4 py-2.5 bg-zinc-800 border border-zinc-700 rounded-lg text-sm text-zinc-100 placeholder-zinc-600 focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent transition resize-none"></textarea>
                </div>

                <p class="text-xs text-zinc-600">
                    Ved å sende inn skjemaet godtar du vår <a href="/personvern" class="underline hover:text-zinc-400">personvernpolicy</a>.
                </p>

                <button type="submit"
                        class="px-6 py-3 bg-red-500 text-white font-semibold text-sm rounded-lg hover:bg-red-600 transition-colors">
                    Send melding
                </button>
            </form>
        </div>
    </section>

</x-layouts.public>
