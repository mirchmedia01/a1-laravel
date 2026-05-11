@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<footer class="bg-black border-t border-white/5 py-16 md:py-24 px-4">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            <div class="md:col-span-2">
                <span class="font-heading text-3xl font-black tracking-tighter uppercase block mb-6">
                    A1 <span class="text-accent italic">Training</span>
                </span>
                <p class="text-white/40 text-sm leading-relaxed max-w-md">{{ t('footer.description') }}</p>
                <div class="flex gap-4 mt-8">
                    <a href="https://www.instagram.com/a1traininggroup/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white/40 hover:text-accent hover:border-accent/40 transition-all">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/a1-training-group-110905344/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white/40 hover:text-accent hover:border-accent/40 transition-all">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="text-white font-bold text-xs uppercase tracking-widest mb-6">{{ t('footer.quick_links') }}</h4>
                <ul class="space-y-3">
                    <li><a href="{{ $p }}/services" class="text-white/40 hover:text-accent text-sm transition-colors">{{ t('nav.services') }}</a></li>
                    <li><a href="{{ $p }}/trainers" class="text-white/40 hover:text-accent text-sm transition-colors">{{ t('nav.trainers') }}</a></li>
                    <li><a href="{{ $p }}/blog" class="text-white/40 hover:text-accent text-sm transition-colors">{{ t('nav.blog') }}</a></li>
                    <li><a href="{{ $p }}/about" class="text-white/40 hover:text-accent text-sm transition-colors">{{ t('nav.about') }}</a></li>
                    <li><a href="{{ $p }}/a1-black-member" class="text-white/40 hover:text-accent text-sm transition-colors">{{ t('nav.a1black') }}</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-bold text-xs uppercase tracking-widest mb-6">{{ t('footer.contact_info') }}</h4>
                <ul class="space-y-3">
                    <li class="text-white/40 text-sm">Manhattan, New York</li>
                    <li><a href="tel:+18888722504" class="text-white/40 hover:text-accent text-sm transition-colors">(888) 872-2504</a></li>
                    <li><a href="mailto:info@a1traininggroupllc.com" class="text-white/40 hover:text-accent text-sm transition-colors">info@a1traininggroupllc.com</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-white/5 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-white/20 text-xs">{{ t('footer.copyright') }}</p>
            <div class="flex gap-6">
                <a href="{{ $p }}/privacy" class="text-white/20 hover:text-accent text-xs transition-colors">{{ $isEs ? 'Privacidad' : 'Privacy' }}</a>
                <a href="{{ $p }}/terms" class="text-white/20 hover:text-accent text-xs transition-colors">{{ $isEs ? 'Términos' : 'Terms' }}</a>
            </div>
        </div>
    </div>
</footer>
