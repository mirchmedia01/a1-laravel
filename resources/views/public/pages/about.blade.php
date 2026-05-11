@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<x-layouts.public :meta="$meta ?? []">
    <div class="min-h-screen bg-white pb-24">
        <section class="bg-asphaltBlack text-white pt-20 pb-24 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2"></div>
            <div class="max-w-7xl mx-auto px-4 relative z-10">
                <a href="{{ $p ?: '/' }}" class="group inline-flex items-center gap-2 text-accent text-xs font-bold uppercase tracking-widest mb-8 hover:-translate-x-1 transition-transform">
                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                    <span>{{ $isEs ? 'Volver al Inicio' : 'Back to Home' }}</span>
                </a>
                <div class="max-w-4xl">
                    <span class="bg-accent/10 text-accent border border-accent/30 px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest mb-6 inline-block">{{ $isEs ? 'Sobre Nosotros' : 'About Us' }}</span>
                    <h1 class="text-5xl md:text-7xl font-heading font-black text-white uppercase leading-none tracking-tight mb-6">
                        {{ $isEs ? 'Entrenamiento Élite.' : 'Elite Training.' }}<br>
                        <span class="text-accent">{{ $isEs ? 'Traído a Ti.' : 'Brought to You.' }}</span>
                    </h1>
                    <p class="text-xl text-gray-400 font-medium leading-relaxed max-w-2xl">
                        {{ $isEs ? 'A1 Training Group es el proveedor #1 de entrenamiento personal a domicilio y móvil en NYC. Fuerza, movilidad, boxeo y recuperación directamente a ti.' : 'A1 Training Group is NYC\'s #1 in-home and mobile personal training provider. Strength, mobility, boxing, and recovery brought directly to you.' }}
                    </p>
                </div>
            </div>
            <div class="absolute bottom-0 left-0 w-full h-2 bg-accent"></div>
        </section>

        <section class="max-w-5xl mx-auto px-4 -mt-10 relative z-20">
            <div class="grid grid-cols-3 gap-4">
                @php $stats = [
                    ['value' => '6', 'label' => $isEs ? 'Entrenadores Expertos' : 'Expert Trainers'],
                    ['value' => '5.0', 'label' => 'Google Rating'],
                    ['value' => '7', 'label' => $isEs ? 'Servicios' : 'Services'],
                ]; @endphp
                @foreach($stats as $s)
                <div class="bg-asphaltBlack rounded-2xl p-6 text-center">
                    <div class="text-4xl md:text-5xl font-heading font-black text-accent">{{ $s['value'] }}</div>
                    <div class="text-xs font-bold uppercase tracking-widest text-gray-400 mt-1">{{ $s['label'] }}</div>
                </div>
                @endforeach
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-4 py-20">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-5xl font-heading font-black uppercase text-asphaltBlack">{{ $isEs ? 'Lo Que Nos Diferencia' : 'What Sets Us Apart' }}</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @php $features = [
                    ['icon' => '<path d="M6 4h12M6 4v16M6 4H2M6 20h12M18 4v16M18 4h4M18 20h-4M6 8h12M6 12h8M6 16h6"/>', 'title' => 'Gym or Home', 'desc' => 'Train where you feel most comfortable. We come to you.'],
                    ['icon' => '<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>', 'title' => 'Clinical Approach', 'desc' => 'Our team includes a Doctor of Physical Therapy.'],
                    ['icon' => '<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/>', 'title' => 'Partner Training', 'desc' => 'Train with a friend or partner for extra motivation.'],
                    ['icon' => '<circle cx="12" cy="8" r="6"/><path d="M12 14v6M9 17h6"/>', 'title' => 'Bilingual EN/ES', 'desc' => 'Full service in English and Spanish.'],
                ]; @endphp
                @foreach($features as $f)
                <div class="bg-lightGray rounded-2xl p-6 border-2 border-transparent hover:border-accent/30 transition-all group">
                    <div class="bg-asphaltBlack p-3 rounded-xl w-fit mb-4 group-hover:scale-110 transition-transform">
                        <svg class="w-6 h-6 text-accent" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">{!! $f['icon'] !!}</svg>
                    </div>
                    <h3 class="font-heading font-black uppercase text-asphaltBlack text-lg mb-2">{{ $f['title'] }}</h3>
                    <p class="text-gray-500 text-sm">{{ $f['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </section>

        <section class="max-w-4xl mx-auto px-4">
            <div class="bg-asphaltBlack rounded-[3rem] p-12 text-white text-center relative overflow-hidden">
                <div class="absolute top-0 right-0 w-80 h-80 bg-accent/5 rounded-full blur-3xl translate-x-1/2 -translate-y-1/2"></div>
                <div class="relative z-10">
                    <div class="flex items-center justify-center gap-1 mb-4">@for($s=0; $s<5; $s++)<svg class="w-5 h-5 fill-accent text-accent" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>@endfor</div>
                    <h2 class="text-3xl md:text-5xl font-heading font-black uppercase mb-4">{{ $isEs ? '¿Listo para Comenzar?' : 'Ready to Start?' }}</h2>
                    <a href="{{ $p }}/services/consultations" class="inline-block bg-accent text-asphaltBlack px-8 py-4 rounded-xl font-heading font-black text-xl uppercase hover:bg-yellow-400 transition-all shadow-[0_0_30px_rgba(253,208,82,0.3)] border-b-4 border-asphaltBlack/20">
                        {{ $isEs ? 'Reserva Consulta Gratis' : 'Book Free Consult' }}
                    </a>
                </div>
            </div>
        </section>

        @php $aboutFaqs = [
            ['q' => 'How long has A1 Training Group been in business?', 'qEs' => '¿Cuánto tiempo lleva A1 Training Group en el negocio?', 'a' => 'Founded in 2012, we\'ve been serving Manhattan and the Hamptons for over a decade.', 'aEs' => 'Fundado en 2012, hemos estado sirviendo a Manhattan y los Hamptons por más de una década.'],
            ['q' => 'What makes A1 different from other trainers?', 'qEs' => '¿Qué hace diferente a A1 de otros entrenadores?', 'a' => 'We bring the gym to you — mobile training with full equipment. Plus, our team includes actual Doctors of Physical Therapy.', 'aEs' => 'Llevamos el gimnasio a ti — entrenamiento móvil con equipo completo. Además, nuestro equipo incluye Doctores en Terapia Física.'],
            ['q' => 'Do I need gym equipment?', 'qEs' => '¿Necesito equipo de gimnasio?', 'a' => 'Not at all. Our mobile trainers bring everything needed — kettlebells, bands, TRX, and more. We can also optimize your home or building gym.', 'aEs' => 'Para nada. Nuestros entrenadores móviles traen todo lo necesario — pesas, bandas, TRX y más.'],
            ['q' => 'What\'s included in the free consultation?', 'qEs' => '¿Qué incluye la consulta gratuita?', 'a' => 'A 15-minute call to discuss your goals, followed by a complimentary in-person session to experience our training style.', 'aEs' => 'Una llamada de 15 minutos para discutir tus metas, seguida de una sesión presencial complementaria para experimentar nuestro estilo de entrenamiento.'],
        ]; @endphp
        <section class="max-w-3xl mx-auto px-4 py-24">
            <h2 class="text-3xl md:text-4xl font-heading font-black uppercase mb-8 text-center text-asphaltBlack">{{ $isEs ? 'Preguntas Frecuentes' : 'Frequently Asked Questions' }}</h2>
            <div class="space-y-4" x-data="{ openFaq: null }">
                @foreach($aboutFaqs as $i => $faq)
                <div class="bg-lightGray border border-gray-200 rounded-2xl overflow-hidden" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full flex items-center justify-between p-6 text-left">
                        <span class="text-asphaltBlack font-bold text-lg pr-4">{{ $isEs ? $faq['qEs'] : $faq['q'] }}</span>
                        <svg class="w-5 h-5 text-accent shrink-0" :class="open ? 'rotate-180' : ''" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 9l6 6 6-6"/></svg>
                    </button>
                    <div x-show="open" x-cloak class="px-6 pb-6">
                        <p class="text-gray-600 leading-relaxed">{{ $isEs ? $faq['aEs'] : $faq['a'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
    </div>
</x-layouts.public>
