@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<section class="py-24 px-4 md:px-6">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-8">
            <div>
                <h2 class="text-white font-heading text-5xl md:text-7xl tracking-tighter uppercase mb-6 leading-none">{{ t('home.trainers.title') }} <span class="text-accent italic">A1</span></h2>
                <p class="text-white/40 text-lg font-medium max-w-2xl leading-relaxed italic">{{ $isEs ? 'Experiencia a nivel doctoral y entrenadores certificados maestros a tu servicio.' : 'Doctoral-level expertise and master-certified trainers at your service.' }}</p>
            </div>
            <a href="{{ $p }}/trainers" class="bg-white/5 border border-white/10 px-8 py-4 rounded-full text-white font-black uppercase tracking-widest text-[10px] hover:bg-accent hover:text-black transition-all shrink-0">{{ t('common.view_all') }}</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($trainers ?? [] as $idx => $trainer)
            <a href="{{ $p }}/trainers/{{ $trainer['slug'] }}"
               class="{{ $idx === 0 ? 'lg:col-span-2 lg:row-span-2' : '' }} group relative rounded-[40px] overflow-hidden border border-white/5 hover:border-accent/40 transition-transform duration-1000 aspect-4/5 lg:aspect-auto block shadow-2xl">
                <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=800&h=1000&fit=crop" alt="{{ $trainer['name'] }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6 z-10">
                    <span class="text-accent font-black uppercase text-[10px] tracking-widest block mb-2">{{ $isEs && !empty($trainer['titleEs']) ? $trainer['titleEs'] : $trainer['title'] }}</span>
                    <h4 class="text-white text-2xl md:text-3xl font-black tracking-tighter uppercase leading-none">{{ $trainer['name'] }}</h4>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
