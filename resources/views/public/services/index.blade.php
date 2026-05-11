@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<x-layouts.public :meta="$meta ?? []">
    <section class="py-24 md:py-32 px-4 relative overflow-hidden pt-36">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent/5 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="max-w-7xl mx-auto relative z-10">
            <h1 class="text-white font-heading text-4xl sm:text-5xl md:text-7xl lg:text-8xl tracking-tighter uppercase mb-6 leading-[1.1]">
                {{ t('our') }} <span class="accent-text-gradient italic inline-block py-1">{{ t('services') }}</span>
            </h1>
            <p class="text-white/40 text-lg md:text-xl font-medium max-w-2xl leading-relaxed">{{ t('choose_the_service_option_that_best_fits_your_lifestyle') }}</p>
        </div>
    </section>

    <section class="px-4 md:px-6 pb-24">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($services as $i => $service)
            <a href="{{ $p }}/services/{{ $service['slug'] }}"
               class="{{ $i === 0 ? 'lg:col-span-2 lg:row-span-2 aspect-4/5 lg:aspect-auto' : 'aspect-4/5' }} group relative rounded-[40px] overflow-hidden border border-white/5 hover:border-accent/40 transition-all duration-700 block shadow-2xl">
                <img src="{{ $service['image'] ?? '' }}" alt="{{ $isEs && !empty($service['titleEs']) ? $service['titleEs'] : $service['title'] }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-black"></div>
                <div class="absolute bottom-8 left-8 right-8 z-10">
                    <h3 class="text-white text-3xl md:text-4xl font-black tracking-tighter uppercase mb-3 leading-tight italic group-hover:text-accent transition-all">
                        {{ $isEs && !empty($service['titleEs']) ? $service['titleEs'] : $service['title'] }}
                    </h3>
                    <p class="text-white/40 text-xs font-medium max-w-xs">{{ $isEs && !empty($service['descriptionEs']) ? $service['descriptionEs'] : ($service['description'] ?? '') }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </section>

    @php $faqs = [
        ['q' => 'How do I choose the right service?', 'qEs' => '¿Cómo elijo el servicio adecuado?', 'a' => 'Book a free consultation and we\'ll assess your goals, fitness level, and preferences to recommend the perfect program.', 'aEs' => 'Reserva una consulta gratuita y evaluaremos tus metas, nivel de condición física y preferencias para recomendarte el programa perfecto.'],
        ['q' => 'Can I switch between services?', 'qEs' => '¿Puedo cambiar entre servicios?', 'a' => 'Yes. Your program can evolve as your needs change. Many clients combine personal training with physical therapy or add boxing for variety.', 'aEs' => 'Sí. Tu programa puede evolucionar a medida que cambian tus necesidades. Muchos clientes combinan entrenamiento personal con terapia física o añaden boxeo para variar.'],
        ['q' => 'Do you offer packages?', 'qEs' => '¿Ofrecen paquetes?', 'a' => 'Yes. We offer session packs ranging from 1 to 20 sessions, with discounts for larger packs. Monthly recurring options are also available.', 'aEs' => 'Sí. Ofrecemos paquetes de sesiones que van de 1 a 20 sesiones, con descuentos para paquetes más grandes. También hay opciones mensuales recurrentes.'],
        ['q' => 'What areas do you serve?', 'qEs' => '¿Qué áreas atienden?', 'a' => 'We serve Manhattan, Brooklyn, and the Hamptons. Virtual training is available anywhere.', 'aEs' => 'Atendemos Manhattan, Brooklyn y los Hamptons. El entrenamiento virtual está disponible en cualquier lugar.'],
        ['q' => 'Can I train at home or only at the studio?', 'qEs' => '¿Puedo entrenar en casa o solo en el estudio?', 'a' => 'Both options are available. In-home training brings the equipment to you. Studio sessions offer a private, distraction-free environment.', 'aEs' => 'Ambas opciones están disponibles. El entrenamiento en casa lleva el equipo a ti. Las sesiones en estudio ofrecen un entorno privado y sin distracciones.'],
        ['q' => 'Do I need equipment for in-home training?', 'qEs' => '¿Necesito equipo para el entrenamiento en casa?', 'a' => 'No. Our trainers bring all necessary equipment. If you have a building gym, we can design a program around its equipment.', 'aEs' => 'No. Nuestros entrenadores traen todo el equipo necesario. Si tienes un gimnasio en tu edificio, podemos diseñar un programa basado en su equipo.'],
    ]; @endphp
    <section class="px-4 pb-24">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-white font-heading text-3xl md:text-4xl uppercase tracking-tighter mb-8 text-center">{{ t('frequently_asked_questions') }}</h2>
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
