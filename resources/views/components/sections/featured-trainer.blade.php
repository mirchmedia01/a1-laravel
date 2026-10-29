@props(['slug' => 'neil', 'trainers' => null])

@php
    $isEs = app()->getLocale() === 'es';
    $p = $isEs ? '/es' : '';
    $allTrainers = array_values($trainers ?? load_content('trainers.json'));

    $featured = null;
    foreach ($allTrainers as $candidate) {
        if (($candidate['slug'] ?? '') === $slug) {
            $featured = $candidate;
            break;
        }
    }
    $featured = $featured ?? ($allTrainers[0] ?? null);
@endphp

@if($featured)
@php
    $localImg = '/images/trainers/' . ($featured['slug'] ?? '') . '.webp';
    $img = file_exists(public_path($localImg)) ? $localImg : ($featured['image'] ?? 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=800&h=1000&fit=crop');
    $title = $isEs && !empty($featured['titleEs']) ? $featured['titleEs'] : ($featured['title'] ?? '');
    $bio = $isEs && !empty($featured['longBioEs']) ? $featured['longBioEs'] : ($featured['longBio'] ?? $featured['bio'] ?? '');
    $specialties = $isEs && !empty($featured['specialtiesEs']) ? $featured['specialtiesEs'] : ($featured['specialties'] ?? []);
@endphp
<section class="py-16 md:py-24 px-4 md:px-6 scroll-reveal" x-intersect="$el.classList.add('is-visible')">
    <div class="max-w-7xl mx-auto">
        <div class="bg-white rounded-[40px] md:rounded-[60px] border-[6px] md:border-[12px] border-black shadow-2xl overflow-hidden grid grid-cols-1 lg:grid-cols-[0.9fr_1.1fr]">
            <div class="relative min-h-[360px] sm:min-h-[460px] lg:min-h-[560px] group overflow-hidden">
                <img src="{{ $img }}" alt="{{ $featured['name'] }}" class="absolute inset-0 w-full h-full object-cover object-top grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000">
                <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                <span class="absolute bottom-6 left-6 md:bottom-10 md:left-10 bg-accent text-black px-5 py-2 rounded-full font-black uppercase text-[10px] tracking-widest shadow-xl">{{ t('master_trainer') }}</span>
            </div>

            <div class="p-6 sm:p-8 md:p-14 lg:p-16 flex flex-col justify-center">
                <span class="text-accent font-black uppercase tracking-[0.3em] text-[10px] md:text-xs mb-4">{{ t('featured_trainer.eyebrow') }}</span>
                <h2 class="text-black font-heading text-5xl sm:text-6xl md:text-8xl uppercase tracking-tighter leading-[0.9] mb-3">{{ $featured['name'] }}</h2>
                <p class="text-black/40 font-black uppercase tracking-widest text-[10px] md:text-xs mb-8">{{ $title }}</p>

                <div class="space-y-4 md:space-y-5 mb-8">
                    @foreach(array_filter(explode("\n\n", $bio)) as $para)
                    <p class="text-black/60 leading-relaxed text-sm md:text-base">{{ $para }}</p>
                    @endforeach
                </div>

                @if(!empty($specialties))
                <div class="flex flex-wrap gap-2 mb-10">
                    @foreach($specialties as $specialty)
                    <span class="bg-accent/10 text-black/70 border border-accent/30 text-[10px] font-bold uppercase tracking-widest px-4 py-2 rounded-full">{{ $specialty }}</span>
                    @endforeach
                </div>
                @endif

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                    <a href="{{ $p }}/contact#schedule" class="btn-accent px-8 py-4 rounded-full font-heading text-xl uppercase tracking-wide text-center shadow-xl">
                        {{ t('featured_trainer.cta', ['name' => $featured['name']]) }}
                    </a>
                    <a href="{{ $p }}/trainers/{{ $featured['slug'] }}" class="group inline-flex items-center justify-center gap-2 px-6 py-4 rounded-full border border-black/10 text-black font-black uppercase tracking-widest text-[10px] hover:border-accent hover:text-accent transition-all">
                        {{ t('featured_trainer.profile') }}
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" class="group-hover:translate-x-1 transition-transform"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
