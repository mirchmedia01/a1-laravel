@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<x-layouts.public :meta="$meta ?? []">
    <div class="max-w-7xl mx-auto px-4 py-12 pt-28 md:pt-36">
        <a href="{{ $p }}/trainers" class="inline-flex items-center gap-2 text-white/40 hover:text-accent text-xs font-bold uppercase tracking-widest mb-12 transition-colors">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 12H5M12 19l-7-7 7-7"/></svg>
            {{ t('trainers.back_to_team') }}
        </a>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24">
            <div class="relative">
                <div class="aspect-4/5 rounded-[50px] overflow-hidden border border-white/10 shadow-2xl relative">
                    <img src="https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=800&h=1000&fit=crop" alt="{{ $trainer['name'] }}" class="w-full h-full object-cover grayscale transition-all duration-1000">
                    <div class="absolute top-8 left-8">
                        <span class="bg-accent text-black px-6 py-2 rounded-full font-black uppercase text-[10px] tracking-widest shadow-2xl border-2 border-black/20">A1 Master Coach</span>
                    </div>
                </div>
            </div>

            <div class="flex flex-col justify-center">
                <span class="text-accent font-black tracking-[0.4em] text-xs mb-4 uppercase">{{ $isEs && !empty($trainer['titleEs']) ? $trainer['titleEs'] : $trainer['title'] }}</span>
                <h1 class="text-white text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-black tracking-tighter uppercase mb-10 leading-[1.1] text-accent italic">{{ $trainer['name'] }}</h1>

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

                @php $relatedServices = [['slug' => 'personal-training', 'label' => $isEs ? 'Entrenamiento Personal' : 'Personal Training'], ['slug' => 'physical-therapy', 'label' => $isEs ? 'Terapia Física' : 'Physical Therapy'], ['slug' => 'boxing', 'label' => 'Boxing'], ['slug' => 'kettlebell', 'label' => $isEs ? 'Curso Kettlebell' : 'Kettlebell Course']]; @endphp
                <div class="mb-12">
                    <h3 class="text-white font-black uppercase tracking-widest text-[10px] mb-4 opacity-30">{{ $isEs ? 'Servicios Relacionados' : 'Related Services' }}</h3>
                    <div class="grid grid-cols-2 gap-3">
                        @foreach($relatedServices as $rs)
                        <a href="{{ $p }}/services/{{ $rs['slug'] }}" class="bg-white/5 border border-white/10 rounded-2xl p-4 text-center hover:border-accent/40 transition-all">
                            <span class="text-white font-bold text-sm uppercase">{{ $rs['label'] }}</span>
                        </a>
                        @endforeach
                    </div>
                </div>

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

    <x-sections.cta />
</x-layouts.public>
