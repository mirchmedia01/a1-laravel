@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<x-layouts.public :meta="$meta ?? []">
    <section class="py-24 md:py-32 px-4 relative overflow-hidden pt-36">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent/5 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="max-w-7xl mx-auto relative z-10">
            <h1 class="text-white font-heading text-4xl sm:text-5xl md:text-7xl lg:text-8xl tracking-tighter uppercase mb-6 leading-[1.1]">
                {{ t('trainers.hero.title') }} <span class="text-accent italic inline-block py-1">A1</span>
            </h1>
            <p class="text-white/40 text-lg md:text-xl font-medium max-w-2xl leading-relaxed italic">{{ t('trainers.hero.subtitle') }}</p>
        </div>
    </section>

    <section class="px-4 md:px-6 pb-24">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($trainers as $idx => $trainer)
            <a href="{{ $p }}/trainers/{{ $trainer['slug'] }}"
               class="{{ $idx === 0 ? 'lg:col-span-2 lg:row-span-2' : '' }} group relative rounded-[40px] overflow-hidden border border-white/5 hover:border-accent/40 transition-all duration-700 aspect-4/5 lg:aspect-auto block shadow-2xl">
                <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=800&h=1000&fit=crop" alt="{{ $trainer['name'] }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>
                <div class="absolute bottom-8 left-8 right-8 z-10">
                    <span class="text-accent font-black uppercase text-[10px] tracking-widest block mb-2">{{ $isEs && !empty($trainer['titleEs']) ? $trainer['titleEs'] : $trainer['title'] }}</span>
                    <h4 class="text-white text-3xl md:text-4xl font-black tracking-tighter uppercase mb-3 leading-none">{{ $trainer['name'] }}</h4>
                    <p class="text-white/60 font-medium text-xs md:text-sm leading-relaxed max-w-xs opacity-0 group-hover:opacity-100 transition-all duration-500 translate-y-4 group-hover:translate-y-0">{{ $trainer['bio'] ?? ($isEs && !empty($trainer['bioEs']) ? $trainer['bioEs'] : '') }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </section>

    @php $faqs = [
        ['q' => 'How are trainers selected?', 'qEs' => '¿Cómo se seleccionan los entrenadores?', 'a' => 'Every A1 trainer is certified (CPT) and undergoes a rigorous vetting process. Our team includes doctoral-level physical therapists and master-certified specialists.', 'aEs' => 'Cada entrenador de A1 está certificado (CPT) y pasa por un riguroso proceso de selección. Nuestro equipo incluye terapeutas físicos de nivel doctoral y especialistas certificados maestros.'],
        ['q' => 'Can I switch trainers?', 'qEs' => '¿Puedo cambiar de entrenador?', 'a' => 'Yes. If your goals or preferences change, we\'ll match you with a trainer who specializes in your new focus area.', 'aEs' => 'Sí. Si tus metas o preferencias cambian, te emparejaremos con un entrenador que se especialice en tu nueva área de enfoque.'],
        ['q' => 'Do trainers specialize?', 'qEs' => '¿Los entrenadores se especializan?', 'a' => 'Yes. Each trainer has unique specialties — from boxing and kettlebell to physical therapy and post-rehab training.', 'aEs' => 'Sí. Cada entrenador tiene especialidades únicas, desde boxeo y kettlebell hasta terapia física y entrenamiento post-rehabilitación.'],
        ['q' => 'Can I train with multiple trainers?', 'qEs' => '¿Puedo entrenar con varios entrenadores?', 'a' => 'Absolutely. Many clients work with different specialists — a physical therapist for rehab and a boxing coach for cardio, for example.', 'aEs' => 'Absolutamente. Muchos clientes trabajan con diferentes especialistas: un terapeuta físico para rehabilitación y un entrenador de boxeo para cardio, por ejemplo.'],
    ]; @endphp
    <section class="px-4 pb-24">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-white font-heading text-3xl md:text-4xl uppercase tracking-tighter mb-8 text-center">{{ $isEs ? 'Preguntas Frecuentes' : 'FAQs' }}</h2>
            <div class="space-y-4">
                @foreach($faqs as $i => $faq)
                <div class="bg-white/5 border border-white/10 rounded-2xl p-6" x-data="{ open: false }">
                    <button @click="open = !open" class="flex justify-between items-center w-full text-left">
                        <span class="text-white font-bold text-sm pr-4">{{ $isEs ? $faq['qEs'] : $faq['q'] }}</span>
                        <svg class="w-4 h-4 text-accent shrink-0" :class="open ? 'rotate-180' : ''" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                    </button>
                    <div x-show="open" x-cloak class="mt-4 text-white/40 text-sm leading-relaxed">{{ $isEs ? $faq['aEs'] : $faq['a'] }}</div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <x-sections.cta />
</x-layouts.public>
