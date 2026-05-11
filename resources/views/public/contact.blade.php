@php $isEs = app()->getLocale() === 'es'; @endphp
<x-layouts.public :meta="$meta ?? []">
    <section class="py-24 md:py-32 px-4 relative overflow-hidden pt-36">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent/5 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="max-w-7xl mx-auto relative z-10">
            <h1 class="text-white font-heading text-4xl sm:text-5xl md:text-7xl lg:text-8xl tracking-tighter uppercase mb-6 leading-[1.1]">
                {{ $isEs ? 'Ponte en' : 'Get in' }}<br><span class="text-accent italic">{{ $isEs ? 'Contacto' : 'Touch' }}</span>
            </h1>
        </div>
    </section>

    <section class="px-4 md:px-6 pb-24">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16">
            <div class="space-y-8">
                <div class="bg-accent p-8 rounded-[30px]">
                    <h3 class="text-black font-heading text-2xl font-black uppercase mb-2">{{ $isEs ? 'Llámanos' : 'Call Us' }}</h3>
                    <a href="tel:+18888722504" class="text-black/70 text-lg hover:text-black transition-colors">(888) 872-2504</a>
                </div>
                <div class="bg-white/5 border border-white/10 p-8 rounded-[30px]">
                    <h3 class="text-white font-heading text-2xl font-black uppercase mb-2">{{ $isEs ? 'Visítanos' : 'Visit Us' }}</h3>
                    <p class="text-white/40">Manhattan, New York</p>
                </div>
                <div class="bg-white/5 border border-white/10 p-8 rounded-[30px]">
                    <h3 class="text-white font-heading text-2xl font-black uppercase mb-2">{{ $isEs ? 'Escríbenos' : 'Email Us' }}</h3>
                    <a href="mailto:info@a1traininggroupllc.com" class="text-accent hover:underline">info@a1traininggroupllc.com</a>
                </div>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-[30px] p-8 md:p-12">
                <h2 class="text-white font-heading text-3xl uppercase tracking-tighter mb-8">{{ $isEs ? 'Envíanos un Mensaje' : 'Send Us a Message' }}</h2>
                <form method="POST" action="{{ route(app()->getLocale() === 'es' ? 'es.contact.submit' : 'contact.submit') }}" class="space-y-6" x-data="{ loading: false }" @submit="loading = true">
                    @csrf
                    <div>
                        <label class="text-white/40 text-xs font-bold uppercase tracking-widest block mb-2">{{ t('contact.form.name') }}</label>
                        <input type="text" name="name" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-accent focus:outline-none transition-colors">
                    </div>
                    <div>
                        <label class="text-white/40 text-xs font-bold uppercase tracking-widest block mb-2">{{ t('contact.form.email') }}</label>
                        <input type="email" name="email" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-accent focus:outline-none transition-colors">
                    </div>
                    <div>
                        <label class="text-white/40 text-xs font-bold uppercase tracking-widest block mb-2">{{ t('contact.form.message') }}</label>
                        <textarea name="message" rows="5" required class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:border-accent focus:outline-none transition-colors"></textarea>
                    </div>
                    <button type="submit" :disabled="loading" class="w-full bg-accent text-black py-4 rounded-xl font-heading font-black text-lg uppercase hover:bg-accent/90 transition-all disabled:opacity-50 disabled:cursor-not-allowed">
                        <span x-show="!loading">{{ t('contact.form.submit') }}</span>
                        <span x-show="loading" class="flex items-center justify-center gap-2">
                            <svg class="animate-spin w-5 h-5" viewBox="0 0 24 24" fill="none"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"/></svg>
                            {{ $isEs ? 'Enviando...' : 'Sending...' }}
                        </span>
                    </button>
                </form>
                @if(session('success'))
                <p class="text-accent mt-4 text-sm">{{ session('success') }}</p>
                @endif
            </div>
        </div>
    </section>

    @php $faqs = [
        ['q' => 'How quickly do you respond?', 'qEs' => '¿Qué tan rápido responden?', 'a' => 'We typically respond within 2-4 hours during business hours. For urgent inquiries, call us directly at (888) 872-2504.', 'aEs' => 'Generalmente respondemos dentro de 2-4 horas durante el horario laboral. Para consultas urgentes, llámanos directamente al (888) 872-2504.'],
        ['q' => 'Can I book over the phone?', 'qEs' => '¿Puedo reservar por teléfono?', 'a' => 'Yes. Call (888) 872-2504 to speak with our team and schedule your first session or consultation.', 'aEs' => 'Sí. Llama al (888) 872-2504 para hablar con nuestro equipo y programar tu primera sesión o consulta.'],
        ['q' => 'Where are you located?', 'qEs' => '¿Dónde están ubicados?', 'a' => 'We serve clients throughout Manhattan, Brooklyn, and the Hamptons. Our private studios are located in key Manhattan neighborhoods.', 'aEs' => 'Atendemos clientes en Manhattan, Brooklyn y los Hamptons. Nuestros estudios privados están ubicados en vecindarios clave de Manhattan.'],
        ['q' => 'Do you offer virtual consultations?', 'qEs' => '¿Ofrecen consultas virtuales?', 'a' => 'Yes. We can conduct your initial consultation and ongoing training sessions virtually if you prefer.', 'aEs' => 'Sí. Podemos realizar tu consulta inicial y sesiones de entrenamiento virtualmente si lo prefieres.'],
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
</x-layouts.public>
