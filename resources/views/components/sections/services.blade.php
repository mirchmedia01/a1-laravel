@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<section class="py-24 px-4 md:px-6">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
            <div class="max-w-2xl">
                <h2 class="text-white text-5xl md:text-7xl font-black tracking-tighter uppercase mb-6 leading-none">{{ t('home.services.title') }}</h2>
                <p class="text-white/40 font-medium text-lg">{{ t('home.services.subtitle') }}</p>
            </div>
            <a href="{{ $p }}/services" class="bg-white/5 border border-white/10 px-8 py-4 rounded-full text-white font-black uppercase tracking-widest text-[10px] hover:bg-accent hover:text-black transition-all">{{ t('common.view_all') }}</a>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
            @foreach($services ?? [] as $idx => $service)
            @php
                $slug = $service['slug'] ?? '';
                $label = $isEs && !empty($service['titleEs']) ? $service['titleEs'] : ($service['title'] ?? '');
                $img = $service['image'] ?? '';
            @endphp
            <a href="{{ $p }}/services/{{ $slug }}"
               class="{{ $idx === 0 ? 'md:col-span-2 md:row-span-2' : '' }} group relative rounded-[30px] overflow-hidden border border-white/5 hover:border-accent/40 transition-transform duration-1000 aspect-4/5 block">
                <img src="{{ $img }}" alt="{{ $label }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6 z-10">
                    <h3 class="text-white text-xl md:text-2xl font-black tracking-tighter uppercase leading-tight">{{ $label }}</h3>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
