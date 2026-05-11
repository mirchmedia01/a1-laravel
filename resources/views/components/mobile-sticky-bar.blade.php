@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<div class="fixed bottom-0 left-0 right-0 z-50 bg-black/90 backdrop-blur-md border-t border-white/5 lg:hidden">
    <div class="flex items-center justify-around py-3 px-2">
        <a href="{{ $p ?: '/' }}" class="flex flex-col items-center gap-1 text-white/40 hover:text-accent transition-colors">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
            <span class="text-[8px] font-bold uppercase tracking-widest">Home</span>
        </a>
        <a href="{{ $p }}/services" class="flex flex-col items-center gap-1 text-white/40 hover:text-accent transition-colors">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg>
            <span class="text-[8px] font-bold uppercase tracking-widest">{{ $isEs ? 'Servicios' : 'Services' }}</span>
        </a>
        <a href="{{ $p }}/trainers" class="flex flex-col items-center gap-1 text-white/40 hover:text-accent transition-colors">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
            <span class="text-[8px] font-bold uppercase tracking-widest">{{ $isEs ? 'Equipo' : 'Trainers' }}</span>
        </a>
        <a href="{{ $p }}/contact" class="flex flex-col items-center gap-1 text-white/40 hover:text-accent transition-colors">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg>
            <span class="text-[8px] font-bold uppercase tracking-widest">{{ $isEs ? 'Contacto' : 'Contact' }}</span>
        </a>
    </div>
</div>
