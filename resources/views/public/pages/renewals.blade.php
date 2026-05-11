@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<x-layouts.public :meta="$meta ?? []">
    <section class="py-24 md:py-32 px-4 relative overflow-hidden pt-36">
        <div class="max-w-4xl mx-auto relative z-10">
            <h1 class="text-white font-heading text-4xl sm:text-5xl md:text-7xl tracking-tighter uppercase mb-6 leading-[1.1]">
                {{ $isEs ? 'Renovaciones' : 'Renewals' }}
            </h1>
            <p class="text-white/40 text-lg max-w-2xl leading-relaxed mb-8">{{ $isEs
                ? '¿Listo para continuar tu viaje de fitness? Renueva tu paquete de sesiones y sigue progresando con A1 Training Group.'
                : 'Ready to continue your fitness journey? Renew your session package and keep progressing with A1 Training Group.' }}</p>
            <div class="bg-white/5 border border-white/10 rounded-[30px] p-8 md:p-12 mt-8">
                <h2 class="text-white font-heading text-2xl md:text-3xl font-black uppercase mb-6">{{ $isEs ? 'Opciones de Renovación' : 'Renewal Options' }}</h2>
                <ul class="space-y-4">
                    <li class="flex items-start gap-4">
                        <span class="w-6 h-6 bg-accent rounded-full flex items-center justify-center shrink-0 mt-0.5"><span class="text-black text-xs font-black">1</span></span>
                        <div><span class="text-white font-bold block">{{ $isEs ? 'Paquete Mensual' : 'Monthly Package' }}</span><span class="text-white/40 text-sm">{{ $isEs ? 'Renovación automática cada mes con el mismo entrenador.' : 'Auto-renew each month with the same trainer.' }}</span></div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="w-6 h-6 bg-accent rounded-full flex items-center justify-center shrink-0 mt-0.5"><span class="text-black text-xs font-black">2</span></span>
                        <div><span class="text-white font-bold block">{{ $isEs ? 'Paquete de Sesiones' : 'Session Pack Renewal' }}</span><span class="text-white/40 text-sm">{{ $isEs ? 'Compra un nuevo paquete de sesiones cuando se te acaben.' : 'Purchase a new session pack when you run out.' }}</span></div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="w-6 h-6 bg-accent rounded-full flex items-center justify-center shrink-0 mt-0.5"><span class="text-black text-xs font-black">3</span></span>
                        <div><span class="text-white font-bold block">{{ $isEs ? 'Cambio de Servicio' : 'Service Upgrade' }}</span><span class="text-white/40 text-sm">{{ $isEs ? '¿Listo para probar algo nuevo? Cambia de servicio en cualquier momento.' : 'Ready to try something new? Switch services anytime.' }}</span></div>
                    </li>
                </ul>
                <a href="{{ $p }}/contact" class="inline-block mt-8 bg-accent text-black px-8 py-4 rounded-full font-heading font-black uppercase tracking-widest text-sm hover:bg-white transition-all">{{ $isEs ? 'Habla con Nosotros' : 'Talk to Us About Renewal' }}</a>
            </div>
        </div>
    </section>
    @php $faqs = [
        ['q' => 'When should I renew?', 'qEs' => '¿Cuándo debo renovar?', 'a' => 'We recommend renewing when you have 2-3 sessions remaining to avoid any gap in your training consistency.', 'aEs' => 'Recomendamos renovar cuando te queden 2-3 sesiones para evitar cualquier interrupción en la consistencia de tu entrenamiento.'],
        ['q' => 'Can I switch trainers when I renew?', 'qEs' => '¿Puedo cambiar de entrenador al renovar?', 'a' => 'Yes. You can request a different trainer or add additional services when renewing your package.', 'aEs' => 'Sí. Puedes solicitar un entrenador diferente o agregar servicios adicionales al renovar tu paquete.'],
        ['q' => 'What happens if I don\'t use all my sessions?', 'qEs' => '¿Qué pasa si no uso todas mis sesiones?', 'a' => 'Session packages are valid for 12 months from the purchase date. Unused sessions expire after 12 months.', 'aEs' => 'Los paquetes de sesiones son válidos por 12 meses a partir de la fecha de compra. Las sesiones no utilizadas caducan después de 12 meses.'],
        ['q' => 'Do you offer auto-renewal?', 'qEs' => '¿Ofrecen renovación automática?', 'a' => 'Yes. Monthly auto-renewal plans are available for clients who want hassle-free, continuous training.', 'aEs' => 'Sí. Los planes de renovación automática mensual están disponibles para clientes que desean entrenamiento continuo sin complicaciones.'],
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
