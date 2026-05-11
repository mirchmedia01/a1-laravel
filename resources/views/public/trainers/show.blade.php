@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<x-layouts.public :meta="$meta ?? []">
    <div class="bg-black min-h-screen">
        <div class="max-w-7xl mx-auto px-4 py-12 pt-28 md:pt-36">
            <a href="{{ $p }}/trainers" class="inline-flex items-center gap-2 text-white/40 hover:text-accent text-xs font-bold uppercase tracking-widest mb-12 transition-colors">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
                {{ $isEs ? 'Volver al Equipo' : 'Back to Team' }}
            </a>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24">
                <div class="relative">
                    @php
                        $slug = $trainer['slug'] ?? '';
                        $localImg = '/images/trainers/' . $slug . '.webp';
                        $img = file_exists(public_path($localImg)) ? $localImg : ($trainer['image'] ?? 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=800&h=1000&fit=crop');
                    @endphp
                    <div class="aspect-4/5 rounded-[50px] overflow-hidden border border-white/10 group shadow-2xl relative">
                        <img src="{{ $img }}" alt="{{ $trainer['name'] }}" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000">
                        <div class="absolute top-8 left-8">
                            <span class="bg-accent text-black px-6 py-2 rounded-full font-black uppercase text-[10px] tracking-widest shadow-2xl border-2 border-black/20">A1 Master Coach</span>
                        </div>
                    </div>
                    <div class="flex gap-4 mt-8 justify-center">
                        <a href="https://www.instagram.com/a1traininggroup/" target="_blank" rel="noopener noreferrer" class="text-white/20 hover:text-accent font-black uppercase tracking-widest text-[9px] border border-white/10 px-4 py-2 rounded-lg transition-all">Instagram</a>
                        <a href="https://www.linkedin.com/in/a1-training-group-110905344/" target="_blank" rel="noopener noreferrer" class="text-white/20 hover:text-accent font-black uppercase tracking-widest text-[9px] border border-white/10 px-4 py-2 rounded-lg transition-all">Linkedin</a>
                    </div>
                </div>

                <div class="flex flex-col justify-center">
                    <span class="text-accent font-black tracking-[0.4em] text-xs mb-4 uppercase">{{ $isEs && !empty($trainer['titleEs']) ? $trainer['titleEs'] : $trainer['title'] }}</span>
                    <h1 class="text-white text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black tracking-tighter uppercase mb-10 leading-[1.1] accent-text-gradient italic inline-block py-1">{{ $trainer['name'] }}</h1>

                    <div class="mb-12">
                        <h3 class="text-white font-heading text-4xl mb-6 uppercase border-b-2 border-accent inline-block">{{ $isEs ? 'Sobre Mí' : 'A Bit About Me' }}</h3>
                        <div class="space-y-6">
                            @php $bio = $isEs && !empty($trainer['longBioEs']) ? $trainer['longBioEs'] : ($trainer['longBio'] ?? $trainer['bio']); @endphp
                            @foreach(explode("\n\n", $bio) as $para)
                            <p class="text-white/60 font-medium text-lg leading-relaxed italic">{{ $para }}</p>
                            @endforeach
                        </div>
                    </div>

                    @if(!empty($trainer['specialties']))
                    <div class="mb-12">
                        <h3 class="text-white font-heading text-2xl mb-4 uppercase">{{ $isEs ? 'Especialidades' : 'Specialties' }}</h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach(($isEs && !empty($trainer['specialtiesEs']) ? $trainer['specialtiesEs'] : $trainer['specialties']) as $s)
                            <span class="bg-accent/10 text-accent text-xs font-bold uppercase tracking-widest px-4 py-2 rounded-full border border-accent/20">{{ $s }}</span>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <div class="space-y-4">
                        <h3 class="text-white font-black uppercase tracking-widest text-[10px] mb-6 opacity-30">{{ $isEs ? 'Opciones de Reserva' : 'Booking Options' }}</h3>
                        <div class="grid grid-cols-1 gap-4">
                            <a href="{{ $p }}/services/consultations" class="group flex items-center justify-between p-6 rounded-3xl border border-white/10 bg-white/5 hover:border-accent hover:bg-accent/10 transition-all">
                                <span class="font-black uppercase tracking-tighter text-xl text-white group-hover:text-accent">{{ $isEs ? "Entrenemos en el Estudio" : "Let's Train at the Studio" }}</span>
                                <span class="w-12 h-12 rounded-full bg-accent flex items-center justify-center text-black group-hover:translate-x-2 transition-transform">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                </span>
                            </a>
                            <a href="{{ $p }}/services/consultations" class="group flex items-center justify-between p-6 rounded-3xl border border-white/10 bg-white/5 hover:border-accent hover:bg-accent/10 transition-all">
                                <span class="font-black uppercase tracking-tighter text-xl text-white group-hover:text-accent">{{ $isEs ? "Trae el Entrenamiento a Mí" : "Bring the Workout to Me" }}</span>
                                <span class="w-12 h-12 rounded-full bg-accent flex items-center justify-center text-black group-hover:translate-x-2 transition-transform">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="py-24 px-4">
            <div class="max-w-7xl mx-auto bg-white rounded-[60px] p-12 md:p-24 text-center border-[12px] border-black shadow-2xl overflow-hidden relative">
                <div class="relative z-10">
                    <h2 class="text-black font-heading text-4xl md:text-6xl leading-none uppercase tracking-tighter mb-8">
                        {{ $isEs ? '¿Listo para la' : 'Ready for' }} <br> <span class="text-accent italic">{{ $isEs ? 'Excelencia?' : 'Excellence?' }}</span>
                    </h2>
                    <p class="text-black/60 font-bold uppercase tracking-widest text-xs mb-12">
                        {{ $isEs ? "Entrena con {$trainer['name']} hoy" : "Train with {$trainer['name']} today" }}
                    </p>
                    <a href="{{ $p }}/services/consultations" class="btn-accent px-12 py-6 rounded-full font-heading text-2xl tracking-wide shadow-2xl inline-block">
                        {{ $isEs ? 'Obtén Tu Primera Sesión' : 'Get Your First Session' }}
                    </a>
                </div>
                <div class="absolute -bottom-20 -right-20 text-gray-100 text-[300px] font-heading leading-none select-none opacity-40 pointer-events-none">A1</div>
            </div>
        </section>
    </div>
</x-layouts.public>
