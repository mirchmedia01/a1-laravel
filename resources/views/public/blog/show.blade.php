@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<x-layouts.public :meta="$meta ?? []">
    <article class="max-w-4xl mx-auto px-4 py-24 pt-36">
        <a href="{{ $p }}/blog" class="inline-flex items-center gap-2 text-white/40 hover:text-accent text-xs font-bold uppercase tracking-widest mb-8 transition-colors">
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            {{ t('back_to_blog') }}
        </a>

        @if(!empty($blog['coverImage']))
        <div class="aspect-2/1 rounded-[30px] overflow-hidden mb-12">
            <img src="{{ $blog['coverImage'] }}" alt="{{ $blog['title'] }}" class="w-full h-full object-cover">
        </div>
        @endif

        <h1 class="text-white font-heading text-4xl md:text-6xl uppercase tracking-tighter leading-none mb-6">{{ $isEs && !empty($blog['title_es']) ? $blog['title_es'] : $blog['title'] }}</h1>

        <div class="flex items-center gap-4 text-white/30 text-xs font-bold uppercase tracking-widest mb-12">
            @if(!empty($blog['author']))<span>{{ $blog['author'] }}</span>@endif
            @if(!empty($blog['createdAt']))<span>{{ \Carbon\Carbon::parse($blog['createdAt'])->format('M d, Y') }}</span>@endif
        </div>

        <div class="prose prose-invert prose-lg max-w-none text-white/70 leading-relaxed">
            @php $content = $isEs && !empty($blog['content_es']) ? $blog['content_es'] : ($blog['excerpt'] ?? ''); @endphp
            <p>{{ $content }}</p>
        </div>
    </article>

    @php
        $allBlogs = load_content('blogs.json');
        $relatedBlogs = array_filter($allBlogs, fn($b) => ($b['category'] ?? '') === ($blog['category'] ?? '') && $b['slug'] !== $blog['slug'] && ($b['published'] ?? false));
        $relatedBlogs = array_slice(array_values($relatedBlogs), 0, 3);
    @endphp

    @php
        $cat = $blog['category'] ?? '';
        $ctaMap = [
            'Strength' => ['slug' => 'personal-training', 'text' => t('train_with_our_strength_experts'), 'es' => 'Entrena con nuestros expertos en fuerza', 'en' => 'Train with our strength experts'],
            'Nutrition' => ['slug' => 'registered-dietitians', 'text' => t('speak_with_a_registered_dietitian'), 'es' => 'Habla con un dietista registrado', 'en' => 'Speak with a registered dietitian'],
            'Recovery' => ['slug' => 'physical-therapy', 'text' => t('book_a_physical_therapy_consult'), 'es' => 'Programa una consulta de terapia física', 'en' => 'Book a physical therapy consult'],
            'Training' => ['slug' => 'personal-training', 'text' => t('start_your_training_journey'), 'es' => 'Comienza tu entrenamiento', 'en' => 'Start your training journey'],
            'Mindset' => ['slug' => 'consultations', 'text' => t('book_a_free_consultation'), 'es' => 'Reserva una consulta gratuita', 'en' => 'Book a free consultation'],
            'Lifestyle' => ['slug' => 'consultations', 'text' => t('transform_your_lifestyle'), 'es' => 'Transforma tu estilo de vida', 'en' => 'Transform your lifestyle'],
        ];
        $cta = $ctaMap[$cat] ?? ['slug' => 'consultations', 'text' => t('start_your_journey_1'), 'en' => 'Start your journey', 'es' => 'Comienza tu viaje'];
    @endphp
    <section class="px-4 pb-8">
        <div class="max-w-3xl mx-auto bg-accent/10 border border-accent/20 rounded-[30px] p-8 text-center">
            <p class="text-white font-heading text-xl font-black uppercase mb-4">{{ t('ready_to_take_action') }}</p>
            <a href="{{ $p }}/services/{{ $cta['slug'] }}" class="inline-block bg-accent text-black px-8 py-4 rounded-full font-heading font-black uppercase tracking-widest text-sm hover:bg-white transition-all">{{ $isEs ? $cta['es'] : $cta['en'] }}</a>
        </div>
    </section>

    @if(!empty($relatedBlogs))
    <section class="px-4 pb-24">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-white font-heading text-3xl md:text-4xl uppercase tracking-tighter mb-8 text-center">{{ t('related_articles') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach($relatedBlogs as $rb)
                <a href="{{ $p }}/blog/{{ $rb['slug'] }}" class="group bg-white/3 border border-white/10 rounded-[30px] overflow-hidden hover:border-accent/40 transition-all">
                    <div class="aspect-16/9 overflow-hidden">
                        <img src="{{ $rb['coverImage'] ?? '/images/training/personal-training-hero.webp' }}" alt="{{ $rb['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    </div>
                    <div class="p-6">
                        <span class="text-accent text-[10px] font-black uppercase tracking-widest">{{ $rb['category'] ?? 'Wellness' }}</span>
                        <h3 class="text-white font-heading text-lg font-black uppercase tracking-tighter mt-2 group-hover:text-accent transition-colors">{{ $isEs && !empty($rb['title_es']) ? $rb['title_es'] : $rb['title'] }}</h3>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <x-sections.cta />
</x-layouts.public>
