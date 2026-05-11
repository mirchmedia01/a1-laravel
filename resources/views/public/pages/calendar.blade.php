@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<x-layouts.public :meta="$meta ?? []">
    <section class="py-24 md:py-32 px-4 relative overflow-hidden pt-36">
        <div class="max-w-4xl mx-auto relative z-10">
            <h1 class="text-white font-heading text-4xl sm:text-5xl md:text-7xl tracking-tighter uppercase mb-6 leading-[1.1]">
                {{ t('class_schedule') }}
            </h1>
            <p class="text-white/40 text-lg max-w-2xl leading-relaxed mb-8">{{ $isEs
                ? 'A1 Training Group ofrece horarios flexibles que se adaptan a tu estilo de vida. Entrena por la mañana, tarde o noche — en nuestro estudio, en tu casa o virtualmente.'
                : 'A1 Training Group offers flexible scheduling to fit your lifestyle. Train in the morning, afternoon, or evening — at our studio, your home, or virtually.' }}</p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
                <div class="bg-white/5 border border-white/10 rounded-[30px] p-8 text-center">
                    <div class="w-14 h-14 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-black font-heading text-2xl font-black">AM</span>
                    </div>
                    <h3 class="text-white font-heading text-xl font-black uppercase mb-2">{{ t('morning') }}</h3>
                    <p class="text-white/40 text-sm">{{ t('600_am_1200_pm') }}</p>
                </div>
                <div class="bg-white/5 border border-white/10 rounded-[30px] p-8 text-center">
                    <div class="w-14 h-14 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-black font-heading text-2xl font-black">PM</span>
                    </div>
                    <h3 class="text-white font-heading text-xl font-black uppercase mb-2">{{ t('afternoon') }}</h3>
                    <p class="text-white/40 text-sm">{{ t('1200_pm_600_pm') }}</p>
                </div>
                <div class="bg-white/5 border border-white/10 rounded-[30px] p-8 text-center">
                    <div class="w-14 h-14 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-black font-heading text-2xl font-black">PM</span>
                    </div>
                    <h3 class="text-white font-heading text-xl font-black uppercase mb-2">{{ t('evening') }}</h3>
                    <p class="text-white/40 text-sm">{{ t('600_pm_900_pm') }}</p>
                </div>
            </div>
            <div class="mt-12 text-center">
                <a href="{{ $p }}/contact" class="inline-block bg-accent text-black px-10 py-4 rounded-full font-heading font-black text-lg uppercase tracking-widest hover:bg-white transition-all">{{ t('book_your_session') }}</a>
            </div>
        </div>
    </section>

    @php $faqs = [
        ['q' => 'What are your hours?', 'qEs' => '¿Cuáles son sus horarios?', 'a' => 'We offer sessions from 6:00 AM to 9:00 PM, Monday through Saturday. Weekend and evening availability varies by trainer.', 'aEs' => 'Ofrecemos sesiones de 6:00 AM a 9:00 PM, de lunes a sábado. La disponibilidad de fines de semana y noche varía según el entrenador.'],
        ['q' => 'How long are sessions?', 'qEs' => '¿Cuánto duran las sesiones?', 'a' => 'Standard sessions are 45-60 minutes. Longer sessions can be arranged based on your program and goals.', 'aEs' => 'Las sesiones estándar son de 45 a 60 minutos. Se pueden arreglar sesiones más largas según tu programa y metas.'],
        ['q' => 'Can I schedule recurring sessions?', 'qEs' => '¿Puedo programar sesiones recurrentes?', 'a' => 'Yes. Most clients schedule 2-3 sessions per week on the same days/times for consistency and results.', 'aEs' => 'Sí. La mayoría de los clientes programan 2-3 sesiones por semana en los mismos días/horarios para mantener la consistencia y los resultados.'],
        ['q' => 'Do you offer weekend classes?', 'qEs' => '¿Ofrecen clases los fines de semana?', 'a' => 'Yes. Weekend sessions are available at select times. Contact us for weekend availability.', 'aEs' => 'Sí. Las sesiones de fin de semana están disponibles en horarios seleccionados. Contáctanos para conocer la disponibilidad de fin de semana.'],
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
</x-layouts.public>
