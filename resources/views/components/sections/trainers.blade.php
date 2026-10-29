@php
    $isEs = app()->getLocale() === 'es';
    $p = $isEs ? '/es' : '';
    $allTrainers = array_values($trainers ?? []);
@endphp
<section class="py-24 bg-black px-4 md:px-6 scroll-reveal" x-intersect="$el.classList.add('is-visible')">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
            <div class="max-w-2xl">
                <h2 class="text-white text-5xl md:text-7xl font-black tracking-tighter uppercase mb-6 leading-none italic italic-fix">{{ t('the_a1_elite') }}</h2>
                <p class="text-white/40 font-medium text-lg italic italic-fix">{{ t('doctorallevel_expertise_and_mastercertified_trainers_at_your') }}</p>
            </div>
            <a href="{{ $p }}/contact#schedule" class="bg-white/5 border border-white/10 px-8 py-4 rounded-full text-white font-black uppercase tracking-widest text-[10px] hover:bg-accent hover:text-black transition-all shrink-0">{{ t('book_now') }}</a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
            @foreach($allTrainers as $trainer)
            @php
                $slug = $trainer['slug'] ?? '';
                $localImg = '/images/trainers/' . $slug . '.webp';
                $trainerImg = file_exists(public_path($localImg)) ? $localImg : ($trainer['image'] ?? 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=800&h=1000&fit=crop');
            @endphp
            <a href="{{ $p }}/trainers/{{ $slug }}"
               class="aspect-[4/5] group relative rounded-[24px] md:rounded-[32px] overflow-hidden border border-white/5 hover:border-accent/40 transition-all duration-700 shadow-2xl block">
                <img src="{{ $trainerImg }}" alt="{{ $trainer['name'] }}" class="absolute inset-0 w-full h-full object-cover object-top grayscale group-hover:grayscale-0 group-hover:scale-[1.03] transition-all duration-700" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/30 to-transparent opacity-90 group-hover:opacity-70 transition-opacity"></div>

                <div class="absolute bottom-4 left-4 right-4 md:bottom-6 md:left-6 md:right-6 z-10">
                    <span class="text-accent font-black uppercase text-[9px] md:text-[10px] tracking-widest block mb-1.5">{{ $isEs && !empty($trainer['titleEs']) ? $trainer['titleEs'] : $trainer['title'] }}</span>
                    <h4 class="text-white text-xl sm:text-2xl xl:text-3xl font-black tracking-tighter uppercase leading-none italic italic-fix group-hover:accent-text-gradient transition-all break-words">{{ $trainer['name'] }}</h4>
                    <p class="text-white/60 font-medium text-xs md:text-sm leading-relaxed max-w-xs mt-2 opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">{{ ($isEs && !empty($trainer['bioEs'])) ? $trainer['bioEs'] : ($trainer['bio'] ?? '') }}</p>
                    <div class="mt-3 flex items-center gap-3 opacity-0 group-hover:opacity-100 transition-all delay-100 translate-y-2 group-hover:translate-y-0">
                        <div class="w-8 h-8 rounded-full bg-accent flex items-center justify-center text-black">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </div>
                        <span class="text-white font-black text-[9px] uppercase tracking-widest">{{ t('trainers.view_profile') }}</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
