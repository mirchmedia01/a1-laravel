@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<x-layouts.public :meta="$meta ?? []">
    <section class="py-24 md:py-32 px-4 relative overflow-hidden pt-36">
        <div class="max-w-4xl mx-auto relative z-10">
            <h1 class="text-white font-heading text-4xl sm:text-5xl md:text-7xl tracking-tighter uppercase mb-6 leading-[1.1]">
                {{ t('find_your_class') }}
            </h1>
            <p class="text-white/40 text-lg max-w-2xl leading-relaxed mb-8">{{ $isEs
                ? 'Comienza tu viaje de fitness con la clase perfecta para ti. Ya sea entrenamiento personal, boxeo o terapia física, tenemos una opción para cada objetivo.'
                : 'Start your fitness journey with the perfect class for you. Whether personal training, boxing, or physical therapy, we have an option for every goal.' }}</p>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-12">
                <a href="{{ $p }}/services/personal-training" class="bg-white/5 border border-white/10 rounded-[30px] p-8 hover:border-accent/40 transition-all">
                    <h3 class="text-white font-heading text-2xl font-black uppercase mb-2">{{ t('personal_training') }}</h3>
                    <p class="text-white/40 text-sm">{{ t('1on1_at_studio_home_or_online') }}</p>
                </a>
                <a href="{{ $p }}/services/boxing" class="bg-white/5 border border-white/10 rounded-[30px] p-8 hover:border-accent/40 transition-all">
                    <h3 class="text-white font-heading text-2xl font-black uppercase mb-2">{{ t('boxing') }}</h3>
                    <p class="text-white/40 text-sm">{{ t('highintensity_cardio_and_technique') }}</p>
                </a>
                <a href="{{ $p }}/services/physical-therapy" class="bg-white/5 border border-white/10 rounded-[30px] p-8 hover:border-accent/40 transition-all">
                    <h3 class="text-white font-heading text-2xl font-black uppercase mb-2">{{ t('physical_therapy') }}</h3>
                    <p class="text-white/40 text-sm">{{ t('expert_rehab_and_injury_prevention') }}</p>
                </a>
                <a href="{{ $p }}/services/consultations" class="bg-accent text-black rounded-[30px] p-8 hover:bg-white transition-all">
                    <h3 class="font-heading text-2xl font-black uppercase mb-2">{{ t('free_consultation') }}</h3>
                    <p class="text-black/60 text-sm">{{ t('start_with_a_noobligation_assessment') }}</p>
                </a>
            </div>
        </div>
    </section>
    @php $faqs = [
        ['q' => 'How do I book a class?', 'qEs' => '¿Cómo reservo una clase?', 'a' => 'Book a free consultation first and we\'ll match you with the right program. Existing clients can book directly with their trainer.', 'aEs' => 'Reserva una consulta gratuita primero y te emparejaremos con el programa adecuado. Los clientes existentes pueden reservar directamente con su entrenador.'],
        ['q' => 'What should I wear?', 'qEs' => '¿Qué debo usar?', 'a' => 'Wear comfortable workout clothes and athletic shoes. For in-home sessions, our trainers bring all necessary equipment.', 'aEs' => 'Usa ropa de entrenamiento cómoda y zapatos deportivos. Para sesiones a domicilio, nuestros entrenadores traen todo el equipo necesario.'],
        ['q' => 'Can I try before committing?', 'qEs' => '¿Puedo probar antes de comprometerme?', 'a' => 'Yes. Book a free consultation or complementary session to experience A1 Training with no obligation.', 'aEs' => 'Sí. Reserva una consulta gratuita o una sesión complementaria para experimentar A1 Training sin compromiso.'],
        ['q' => 'What if I need to cancel?', 'qEs' => '¿Qué pasa si necesito cancelar?', 'a' => 'We require 24-hour notice for cancellations. Late cancellations or no-shows may result in the session being forfeited.', 'aEs' => 'Requerimos un aviso de 24 horas para cancelaciones. Las cancelaciones tardías o las ausencias pueden resultar en la pérdida de la sesión.'],
    ]; @endphp
    <section class="px-4 pb-24">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-white font-heading text-3xl md:text-4xl uppercase tracking-tighter mb-8 text-center">{{ t('faqs') }}</h2>
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
