@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<x-layouts.public :meta="$meta ?? []">
    <section class="py-24 md:py-32 px-4 relative overflow-hidden pt-36">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent/5 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="max-w-7xl mx-auto relative z-10">
            <h1 class="text-white font-heading text-6xl sm:text-7xl md:text-9xl tracking-tighter uppercase mb-6 leading-[1.1]">{{ $isEs ? 'Blog' : 'Blog' }} <span class="accent-text-gradient italic inline-block py-1">&amp; Insights</span></h1>
            <p class="text-white/40 text-lg md:text-xl font-medium max-w-2xl leading-relaxed">{{ $isEs ? 'Consejos de fitness, guías de entrenamiento y bienestar de nuestro equipo experto.' : 'Fitness tips, training guides, and wellness insights from our expert team.' }}</p>
        </div>
    </section>

    <section class="px-4 md:px-6 pb-24">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($blogs as $blog)
            <a href="{{ $p }}/blog/{{ $blog['slug'] }}" class="group bg-white/3 border border-white/10 rounded-[30px] overflow-hidden hover:border-accent/40 transition-all">
                @if(!empty($blog['coverImage']))
                <div class="aspect-16/9 overflow-hidden">
                    <img src="{{ $blog['coverImage'] }}" alt="{{ $blog['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                </div>
                @endif
                <div class="p-6">
                    <span class="text-accent text-[10px] font-black uppercase tracking-widest">{{ $blog['category'] ?? '' }}</span>
                    <h3 class="text-white font-heading text-xl font-black uppercase tracking-tighter mt-2 mb-3 group-hover:text-accent transition-colors">{{ $isEs && !empty($blog['title_es']) ? $blog['title_es'] : $blog['title'] }}</h3>
                    <p class="text-white/40 text-sm leading-relaxed line-clamp-3">{{ $isEs && !empty($blog['excerpt_es']) ? $blog['excerpt_es'] : ($blog['excerpt'] ?? '') }}</p>
                </div>
            </a>
            @empty
            <div class="col-span-3 text-center py-20">
                <p class="text-white/30 text-lg">{{ $isEs ? 'No hay artículos todavía.' : 'No articles yet.' }}</p>
            </div>
            @endforelse
        </div>
    </section>
</x-layouts.public>
