@php $isEs = app()->getLocale() === 'es'; @endphp
<section class="py-24 px-4 md:px-6">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-white font-heading text-5xl md:text-6xl text-center uppercase tracking-tighter mb-16 leading-none">{{ t('home.reviews.title') }}</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @php
            $testimonials = [
                ['name' => 'Sarah M.', 'role' => 'Client', 'text' => 'The trainers at A1 are incredible. They came to my apartment gym and completely transformed my strength in just 3 months.'],
                ['name' => 'David R.', 'role' => 'Client', 'text' => 'After my knee surgery, Dr. Hai Lin got me back to running in half the expected time. The in-home physical therapy was a game changer.'],
                ['name' => 'Jennifer L.', 'role' => 'Client', 'text' => 'I love that I can train at home with world-class equipment. No commuting, no crowds — just results.'],
            ];
            @endphp

            @foreach($testimonials as $review)
            <div class="bg-white/5 border border-white/10 rounded-[30px] p-8">
                <div class="flex text-accent mb-4">@for($i=0; $i<5; $i++)<svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>@endfor</div>
                <p class="text-white/60 text-sm leading-relaxed mb-6 italic">"{{ $review['text'] }}"</p>
                <div>
                    <p class="text-white font-bold text-sm">{{ $review['name'] }}</p>
                    <p class="text-white/30 text-xs">{{ $review['role'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
