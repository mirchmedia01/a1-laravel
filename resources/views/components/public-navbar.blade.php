@php
    $isEs = app()->getLocale() === 'es';
    $localePrefix = $isEs ? '/es' : '';
@endphp
<nav class="fixed top-0 left-0 right-0 z-50 bg-black/90 backdrop-blur-md border-b border-white/5" x-data="{ mobileOpen: false, servicesOpen: false }">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <div class="flex items-center justify-between h-16 md:h-20">
            <a href="{{ $localePrefix ?: '/' }}" class="flex items-center gap-2">
                <span class="font-heading text-2xl md:text-3xl font-black tracking-tighter uppercase">
                    A1 <span class="text-accent italic">Training</span>
                </span>
            </a>

            <div class="hidden lg:flex items-center gap-8">
                <a href="{{ $localePrefix }}/services" class="text-white/70 hover:text-accent text-xs font-bold uppercase tracking-widest transition-colors"
                   @mouseenter="servicesOpen = true" @mouseleave="servicesOpen = false">
                    {{ t('nav.services') }}
                </a>
                <a href="{{ $localePrefix }}/trainers" class="text-white/70 hover:text-accent text-xs font-bold uppercase tracking-widest transition-colors">
                    {{ t('nav.trainers') }}
                </a>
                <a href="{{ $localePrefix }}/blog" class="text-white/70 hover:text-accent text-xs font-bold uppercase tracking-widest transition-colors">
                    {{ t('nav.blog') }}
                </a>
                <a href="{{ $localePrefix }}/about" class="text-white/70 hover:text-accent text-xs font-bold uppercase tracking-widest transition-colors">
                    {{ t('nav.about') }}
                </a>
                <a href="{{ $localePrefix }}/a1-black-member" class="text-white/70 hover:text-accent text-xs font-bold uppercase tracking-widest transition-colors">
                    {{ t('nav.a1black') }}
                </a>
                <a href="{{ $localePrefix }}/contact" class="text-white/70 hover:text-accent text-xs font-bold uppercase tracking-widest transition-colors">
                    {{ t('nav.contact') }}
                </a>

                <a href="{{ $isEs ? '/' : '/es' }}" class="bg-white/5 border border-white/10 px-4 py-2 rounded-full text-white/70 hover:text-accent text-[10px] font-bold uppercase tracking-widest transition-all">
                    {{ t('nav.language') }}
                </a>

                <a href="{{ $localePrefix }}/services/consultations" class="bg-accent text-black px-6 py-2.5 rounded-full font-heading font-bold text-xs uppercase tracking-widest hover:bg-accent/90 transition-all">
                    {{ t('common.free_consultation') }}
                </a>
            </div>

            <button class="lg:hidden text-white p-2" @click="mobileOpen = !mobileOpen">
                <svg x-show="!mobileOpen" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg x-show="mobileOpen" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg>
            </button>
        </div>
    </div>

    <div x-show="mobileOpen" x-cloak class="lg:hidden bg-black/95 backdrop-blur-lg border-t border-white/5">
        <div class="px-4 py-6 space-y-4">
            <a href="{{ $localePrefix }}/services" class="block text-white/70 hover:text-accent text-sm font-bold uppercase tracking-widest">{{ t('nav.services') }}</a>
            <a href="{{ $localePrefix }}/trainers" class="block text-white/70 hover:text-accent text-sm font-bold uppercase tracking-widest">{{ t('nav.trainers') }}</a>
            <a href="{{ $localePrefix }}/blog" class="block text-white/70 hover:text-accent text-sm font-bold uppercase tracking-widest">{{ t('nav.blog') }}</a>
            <a href="{{ $localePrefix }}/about" class="block text-white/70 hover:text-accent text-sm font-bold uppercase tracking-widest">{{ t('nav.about') }}</a>
            <a href="{{ $localePrefix }}/a1-black-member" class="block text-white/70 hover:text-accent text-sm font-bold uppercase tracking-widest">{{ t('nav.a1black') }}</a>
            <a href="{{ $localePrefix }}/refer-friends" class="block text-white/70 hover:text-accent text-sm font-bold uppercase tracking-widest">{{ t('nav.refer') }}</a>
            <a href="{{ $localePrefix }}/reviews" class="block text-white/70 hover:text-accent text-sm font-bold uppercase tracking-widest">{{ t('nav.reviews') }}</a>
            <a href="{{ $localePrefix }}/contact" class="block text-white/70 hover:text-accent text-sm font-bold uppercase tracking-widest">{{ t('nav.contact') }}</a>
            <div class="pt-4 border-t border-white/10">
                <a href="{{ $isEs ? '/' : '/es' }}" class="block bg-white/5 border border-white/10 px-4 py-3 rounded-full text-white/70 text-xs font-bold uppercase tracking-widest text-center">{{ t('nav.language') }}</a>
            </div>
        </div>
    </div>
</nav>
