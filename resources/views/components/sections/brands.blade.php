@php $isEs = app()->getLocale() === 'es'; @endphp
<section class="py-16 md:py-20 px-4 md:px-6 border-t border-white/5">
    <div class="max-w-7xl mx-auto text-center">
        <p class="text-white/20 text-[10px] font-bold uppercase tracking-[0.3em] mb-10">{{ $isEs ? 'Confianza de los mejores' : 'Trusted by the best' }}</p>
        <div class="flex flex-wrap justify-center items-center gap-12 md:gap-16 opacity-30">
            <span class="text-white font-heading text-2xl md:text-3xl font-black tracking-tighter uppercase">NYC Fit</span>
            <span class="text-white font-heading text-2xl md:text-3xl font-black tracking-tighter uppercase">Elite Body</span>
            <span class="text-white font-heading text-2xl md:text-3xl font-black tracking-tighter uppercase">Iron Core</span>
            <span class="text-white font-heading text-2xl md:text-3xl font-black tracking-tighter uppercase">Peak Form</span>
        </div>
    </div>
</section>
