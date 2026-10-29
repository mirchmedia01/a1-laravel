@props(['trainers' => null])

@php
    $isEs = app()->getLocale() === 'es';
    $p = $isEs ? '/es' : '';
    $allTrainers = array_values($trainers ?? load_content('trainers.json'));
@endphp

@if(!empty($allTrainers))
<div class="bg-gray-50 rounded-3xl border border-gray-100 p-6 md:p-8">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-3 mb-6">
        <div>
            <span class="text-accent font-black uppercase tracking-widest text-xs block">{{ $isEs ? 'Nuestro Equipo' : 'Meet Our Trainers' }}</span>
            <h2 class="text-2xl md:text-3xl font-heading font-black uppercase tracking-tight text-asphaltBlack">{{ $isEs ? 'Entrenadores Disponibles' : 'Available Trainers' }}</h2>
        </div>
        <a href="{{ $p }}/trainers" class="text-xs font-black uppercase tracking-widest text-accent hover:text-asphaltBlack">{{ $isEs ? 'Ver Todos' : 'View All' }} &rarr;</a>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-8 gap-4">
        @foreach($allTrainers as $trainer)
        <a href="{{ $p }}/trainers/{{ $trainer['slug'] }}" class="group bg-white rounded-2xl border border-gray-100 overflow-hidden hover:border-accent/50 hover:-translate-y-0.5 transition-all text-center p-3">
            <div class="w-16 h-16 md:w-20 md:h-20 mx-auto rounded-full overflow-hidden border-2 border-gray-100 group-hover:border-accent/50">
                <img src="{{ $trainer['image'] ?? '' }}" alt="{{ $trainer['name'] }}" class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition-all duration-500" loading="lazy">
            </div>
            <div class="mt-3 text-sm font-black text-asphaltBlack leading-tight">{{ $trainer['name'] }}</div>
        </a>
        @endforeach
    </div>
</div>
@endif
