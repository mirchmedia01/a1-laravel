@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<section class="relative min-h-screen flex items-center overflow-hidden pt-20">
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-accent/5 rounded-full blur-[150px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-accent/3 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 md:px-6 w-full relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <div class="inline-flex items-center gap-4 bg-white/5 border border-white/10 rounded-full px-6 py-2 mb-8">
                    <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                    <span class="text-white/50 text-[10px] font-bold uppercase tracking-widest">{{ $isEs ? 'Haz que tu cuerpo esté en forma esta primavera con nosotros.' : 'Make your body fit this spring with us.' }}</span>
                </div>

                <h1 class="text-white font-heading text-6xl md:text-8xl lg:text-9xl tracking-tighter uppercase leading-none mb-6">
                    {{ t('home.hero.title') }}
                </h1>

                <p class="text-white/40 text-lg md:text-xl font-medium max-w-xl leading-relaxed mb-6">
                    {{ t('home.hero.subtitle') }}
                </p>
                <p class="text-white/30 text-sm max-w-xl leading-relaxed mb-10">
                    {{ $isEs ? 'Desde' : 'From' }}
                    <a href="{{ $p }}/services/personal-training" class="text-accent underline hover:no-underline">{{ $isEs ? 'entrenamiento personal' : 'personal training' }}</a>
                    {{ $isEs ? 'y' : 'and' }}
                    <a href="{{ $p }}/services/physical-therapy" class="text-accent underline hover:no-underline">{{ $isEs ? 'terapia física' : 'physical therapy' }}</a>
                    {{ $isEs ? 'hasta' : 'to' }}
                    <a href="{{ $p }}/services/boxing" class="text-accent underline hover:no-underline">{{ $isEs ? 'boxeo' : 'boxing' }}</a>
                    {{ $isEs ? 'y' : 'and' }}
                    <a href="{{ $p }}/services/kettlebell" class="text-accent underline hover:no-underline">{{ $isEs ? 'kettlebell' : 'kettlebell' }}</a>
                    — {{ $isEs ? 'encontramos el programa perfecto para ti.' : 'we find the perfect program for you.' }}
                    <a href="{{ $p }}/services" class="text-accent underline hover:no-underline font-bold">{{ $isEs ? 'Ver todos los servicios' : 'View all services' }}</a>.
                </p>

                <div class="flex flex-wrap items-center gap-4">
                    <a href="{{ $p }}/services/consultations" class="bg-accent text-black px-8 md:px-12 py-4 md:py-5 rounded-full font-heading font-bold text-lg md:text-xl uppercase tracking-widest hover:scale-105 transition-transform inline-block">
                        {{ t('home.hero.cta') }}
                    </a>
                    <div class="flex items-center gap-3">
                        <div class="flex -space-x-3">
                            <div class="w-9 h-9 rounded-full border-2 border-black bg-gray-500 bg-cover" style="background-image: url('https://images.unsplash.com/photo-1622253692010-333f2da6031d?w=40&h=40&fit=crop')"></div>
                            <div class="w-9 h-9 rounded-full border-2 border-black bg-gray-500 bg-cover" style="background-image: url('https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=40&h=40&fit=crop')"></div>
                            <div class="w-9 h-9 rounded-full border-2 border-black bg-gray-500 bg-cover" style="background-image: url('https://images.unsplash.com/photo-1548690312-e3b507d17a4d?w=40&h=40&fit=crop')"></div>
                        </div>
                        <span class="text-white/30 text-xs font-bold uppercase tracking-widest">12k+ {{ $isEs ? 'clientes' : 'clients' }}</span>
                    </div>
                </div>
            </div>

            <div class="hidden lg:grid grid-cols-2 gap-4">
                <div class="aspect-3/4 rounded-[40px] overflow-hidden border border-white/10 group">
                    <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=600&h=800&fit=crop" alt="Master Trainer" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                    <div class="absolute bottom-4 left-4 bg-black/80 px-4 py-2 rounded-full">
                        <span class="text-white text-[10px] font-bold uppercase tracking-widest">Master Trainer</span>
                    </div>
                </div>
                <div class="aspect-3/4 rounded-[40px] overflow-hidden border border-white/10 group mt-12">
                    <img src="https://images.unsplash.com/photo-1548690312-e3b507d17a4d?w=600&h=800&fit=crop" alt="Elite Fitness" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                    <div class="absolute bottom-4 left-4 bg-black/80 px-4 py-2 rounded-full">
                        <span class="text-white text-[10px] font-bold uppercase tracking-widest">Elite Fitness</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
