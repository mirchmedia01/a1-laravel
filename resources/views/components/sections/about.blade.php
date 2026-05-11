@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<section class="py-16 md:py-24 px-4 md:px-6 bg-white rounded-[40px] md:rounded-[60px] mx-2 md:mx-0">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 md:gap-20 items-center">
        <div class="relative">
            <div class="aspect-square rounded-[30px] md:rounded-[40px] overflow-hidden border-8 md:border-[12px] border-black shadow-2xl">
                <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=800&h=800&fit=crop" alt="A1 Training" class="w-full h-full object-cover">
            </div>
            <div class="absolute -bottom-4 md:-bottom-8 -left-4 md:-left-8 bg-accent p-4 md:p-8 rounded-[24px] md:rounded-[32px] border-4 md:border-8 border-white shadow-xl rotate-[-4deg]">
                <span class="text-black font-heading text-2xl md:text-4xl leading-none block">{{ $isEs ? 'Desde' : 'Since' }}</span>
                <span class="text-black font-heading text-2xl md:text-4xl leading-none">2012</span>
            </div>
        </div>

        <div class="text-black mt-8 md:mt-0">
            <h2 class="font-heading text-5xl md:text-7xl uppercase tracking-tighter mb-6 md:mb-8 leading-none">
                {{ $isEs ? 'La' : 'The' }} <span class="text-accent">{{ $isEs ? 'Visión' : 'Vision' }}</span> {{ $isEs ? 'Detrás de A1' : 'Behind A1' }}
            </h2>
            <p class="text-base md:text-lg font-medium mb-4 md:mb-6 leading-relaxed">
                {{ $isEs ? 'A1 Training Group es el proveedor #1 de entrenamiento personal a domicilio y móvil en NYC.' : "A1 Training Group is NYC's #1 in-home and mobile personal training provider." }}
                <a href="{{ $p }}/services/personal-training" class="text-accent underline hover:no-underline font-bold">{{ $isEs ? 'Entrenamiento personal' : 'Personal training' }}</a>,
                <a href="{{ $p }}/services/physical-therapy" class="text-accent underline hover:no-underline font-bold">{{ $isEs ? 'terapia física' : 'physical therapy' }}</a>,
                <a href="{{ $p }}/services/boxing" class="text-accent underline hover:no-underline font-bold">{{ $isEs ? 'boxeo' : 'boxing' }}</a>, {{ $isEs ? 'y más — en tu hogar, en nuestro estudio o en línea.' : 'and more — at your home, our studio, or online.' }}
            </p>
            <p class="text-black/60 mb-8 md:mb-10 leading-relaxed text-sm md:text-base">
                {{ $isEs ? 'Reconocimos que el tiempo es el activo más valioso. Al eliminar la fricción del viaje, permitimos que nuestros clientes se enfoquen puramente en resultados. Nuestros' : 'We recognized that time is the most valuable asset. By removing the friction of travel, we allow our clients to focus purely on results.' }}
                <a href="{{ $p }}/trainers" class="text-accent underline hover:no-underline font-bold">{{ $isEs ? 'entrenadores certificados' : 'certified trainers' }}</a>
                {{ $isEs ? 'y' : 'and' }}
                <a href="{{ $p }}/services/physical-therapy" class="text-accent underline hover:no-underline font-bold">{{ $isEs ? 'terapeutas físicos' : 'physical therapists' }}</a>
                {{ $isEs ? 'ofrecen programas personalizados que se adaptan a tu horario y objetivos.' : 'deliver customized programs that fit your schedule and goals.' }}
            </p>
            <div class="grid grid-cols-2 gap-4 md:gap-8">
                <div>
                    <h4 class="font-heading text-3xl md:text-4xl mb-1">12K+</h4>
                    <p class="text-[8px] md:text-[10px] font-bold uppercase tracking-widest opacity-40">{{ $isEs ? 'Vidas Transformadas' : 'Lives Transformed' }}</p>
                </div>
                <div>
                    <h4 class="font-heading text-3xl md:text-4xl mb-1">NYC / HAMP</h4>
                    <p class="text-[8px] md:text-[10px] font-bold uppercase tracking-widest opacity-40">{{ $isEs ? 'Área de Servicio' : 'Service Area' }}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 md:py-32 px-4 md:px-6">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-white font-heading text-5xl md:text-6xl text-center uppercase tracking-tighter mb-12 md:mb-20 leading-none">
            {{ $isEs ? 'Nuestros Pilares' : 'Our Pillars' }}
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-12">
            <div class="bg-white/5 border border-white/10 p-8 md:p-12 rounded-[30px] md:rounded-[40px] hover:border-accent transition-all duration-500">
                <div class="text-accent font-heading text-3xl md:text-4xl mb-4 md:mb-6">01</div>
                <h3 class="text-white font-heading text-3xl md:text-4xl mb-3 md:mb-4 uppercase leading-none">{{ $isEs ? 'Precisión' : 'Precision' }}</h3>
                <p class="text-white/40 leading-relaxed text-sm md:text-base">{{ $isEs ? 'Cada repetición y cada movimiento se analiza para máxima eficiencia y seguridad.' : 'Every rep and every movement is analyzed for maximum efficiency and safety.' }}</p>
            </div>
            <div class="bg-white/5 border border-white/10 p-8 md:p-12 rounded-[30px] md:rounded-[40px] hover:border-accent transition-all duration-500">
                <div class="text-accent font-heading text-3xl md:text-4xl mb-4 md:mb-6">02</div>
                <h3 class="text-white font-heading text-3xl md:text-4xl mb-3 md:mb-4 uppercase leading-none">{{ $isEs ? 'Privacidad' : 'Privacy' }}</h3>
                <p class="text-white/40 leading-relaxed text-sm md:text-base">{{ $isEs ? 'Sin multitudes. Sin distracciones. Solo tú y un profesional maestro en tu espacio preferido.' : 'No crowds. No distractions. Just you and a master professional in your preferred space.' }}</p>
            </div>
            <div class="bg-white/5 border border-white/10 p-8 md:p-12 rounded-[30px] md:rounded-[40px] hover:border-accent transition-all duration-500">
                <div class="text-accent font-heading text-3xl md:text-4xl mb-4 md:mb-6">03</div>
                <h3 class="text-white font-heading text-3xl md:text-4xl mb-3 md:mb-4 uppercase leading-none">{{ $isEs ? 'Rendimiento' : 'Performance' }}</h3>
                <p class="text-white/40 leading-relaxed text-sm md:text-base">{{ $isEs ? 'No solo entrenamos; optimizamos. Miramos nutrición, sueño y recuperación de forma holística.' : "We don't just train; we optimize. We look at nutrition, sleep, and recovery holistically." }}</p>
            </div>
        </div>
    </div>
</section>
