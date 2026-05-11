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
    <x-faq-accordion :faqs="load_faq('find-class')" title="{{ $isEs ? 'Preguntas Frecuentes' : 'FAQs' }}" />

    <x-sections.cta />
</x-layouts.public>
