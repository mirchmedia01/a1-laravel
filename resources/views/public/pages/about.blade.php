@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<x-layouts.public :meta="$meta ?? []">
    <section class="py-24 md:py-32 px-4 relative overflow-hidden pt-36">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-accent/5 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="max-w-7xl mx-auto relative z-10">
            <h1 class="text-white font-heading text-4xl sm:text-5xl md:text-7xl lg:text-8xl tracking-tighter uppercase mb-6 leading-[1.1]">
                {{ $isEs ? 'Entrenamiento Élite.' : 'Elite Training.' }}<br><span class="text-accent italic">{{ $isEs ? 'Traído a Ti.' : 'Brought to You.' }}</span>
            </h1>
            <p class="text-white/40 text-lg md:text-xl font-medium max-w-2xl leading-relaxed">
                {{ $isEs ? 'A1 Training Group es el proveedor #1 de entrenamiento personal a domicilio y móvil en NYC. Fundado en 2012, llevamos fitness de élite directamente a tu puerta en Manhattan y los Hamptons.' : 'A1 Training Group is NYC\'s #1 in-home and mobile personal training provider. Founded in 2012, we bring elite fitness directly to your doorstep in Manhattan and the Hamptons.' }}
            </p>
        </div>
    </section>

    <section class="px-4 md:px-6 pb-24">
        <div class="max-w-7xl mx-auto grid grid-cols-3 gap-4 md:gap-8 mb-20">
            <div class="bg-white/5 border border-white/10 rounded-[20px] p-6 md:p-10 text-center">
                <div class="text-accent font-heading text-4xl md:text-6xl font-black">6</div>
                <p class="text-white/40 text-[10px] font-bold uppercase tracking-widest mt-2">{{ $isEs ? 'Entrenadores Expertos' : 'Expert Trainers' }}</p>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-[20px] p-6 md:p-10 text-center">
                <div class="text-accent font-heading text-4xl md:text-6xl font-black">5.0</div>
                <p class="text-white/40 text-[10px] font-bold uppercase tracking-widest mt-2">Google Rating</p>
            </div>
            <div class="bg-white/5 border border-white/10 rounded-[20px] p-6 md:p-10 text-center">
                <div class="text-accent font-heading text-4xl md:text-6xl font-black">12K+</div>
                <p class="text-white/40 text-[10px] font-bold uppercase tracking-widest mt-2">{{ $isEs ? 'Entrenamientos' : 'Sessions Delivered' }}</p>
            </div>
        </div>

        <div class="max-w-4xl mx-auto mb-20">
            <h2 class="text-white font-heading text-3xl md:text-4xl uppercase tracking-tighter mb-8">{{ $isEs ? 'Nuestra Filosofía' : 'Our Philosophy' }}</h2>
            <div class="space-y-6">
                <div class="bg-white/5 border border-white/10 rounded-[30px] p-8">
                    <span class="text-accent font-heading text-xl font-black">01</span>
                    <h3 class="text-white font-heading text-xl font-black uppercase mt-2 mb-3">{{ $isEs ? 'Precisión' : 'Precision' }}</h3>
                    <p class="text-white/40 leading-relaxed">{{ $isEs ? 'Cada repetición y cada movimiento es analizado para máxima eficiencia y seguridad.' : 'Every rep and every movement is analyzed for maximum efficiency and safety.' }}</p>
                </div>
                <div class="bg-white/5 border border-white/10 rounded-[30px] p-8">
                    <span class="text-accent font-heading text-xl font-black">02</span>
                    <h3 class="text-white font-heading text-xl font-black uppercase mt-2 mb-3">{{ $isEs ? 'Privacidad' : 'Privacy' }}</h3>
                    <p class="text-white/40 leading-relaxed">{{ $isEs ? 'Sin multitudes. Sin distracciones. Solo tú y un profesional en tu espacio preferido.' : 'No crowds. No distractions. Just you and a master professional in your preferred space.' }}</p>
                </div>
                <div class="bg-white/5 border border-white/10 rounded-[30px] p-8">
                    <span class="text-accent font-heading text-xl font-black">03</span>
                    <h3 class="text-white font-heading text-xl font-black uppercase mt-2 mb-3">{{ $isEs ? 'Rendimiento' : 'Performance' }}</h3>
                    <p class="text-white/40 leading-relaxed">{{ $isEs ? 'No solo entrenamos; optimizamos. Observamos la nutrición, el sueño y la recuperación de manera integral.' : 'We don\'t just train; we optimize. We look at nutrition, sleep, and recovery holistically.' }}</p>
                </div>
            </div>
        </div>

        @php $faqs = [
            ['q' => 'Where are you located?', 'qEs' => '¿Dónde están ubicados?', 'a' => 'We serve clients throughout Manhattan, Brooklyn, and the Hamptons. Training can take place at our private studio locations, your home, your building\'s gym, or virtually.', 'aEs' => 'Atendemos clientes en Manhattan, Brooklyn y los Hamptons. El entrenamiento puede realizarse en nuestros estudios privados, tu casa, el gimnasio de tu edificio o virtualmente.'],
            ['q' => 'How do I get started?', 'qEs' => '¿Cómo empiezo?', 'a' => 'Book a free consultation call. We\'ll discuss your goals, assess your movement, and pair you with the perfect trainer or therapist.', 'aEs' => 'Reserva una llamada de consulta gratuita. Discutiremos tus metas, evaluaremos tu movimiento y te emparejaremos con el entrenador o terapeuta perfecto.'],
            ['q' => 'Do you offer virtual training?', 'qEs' => '¿Ofrecen entrenamiento virtual?', 'a' => 'Yes. Our online and hybrid programs deliver customized programming via our app with regular video check-ins.', 'aEs' => 'Sí. Nuestros programas en línea e híbridos ofrecen programación personalizada a través de nuestra aplicación con videollamadas regulares.'],
            ['q' => 'Can I train with a partner?', 'qEs' => '¿Puedo entrenar con un compañero?', 'a' => 'Absolutely. Partner training allows you to split costs while working out with a friend or family member.', 'aEs' => 'Absolutamente. El entrenamiento en pareja te permite compartir costos mientras entrenas con un amigo o familiar.'],
        ]; @endphp
        <section class="px-4">
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
    </section>

    <x-sections.cta />
</x-layouts.public>
