@php $isEs = app()->getLocale() === 'es'; $p = $isEs ? '/es' : ''; @endphp
<x-layouts.public :meta="$meta ?? []">
    <section class="py-24 md:py-32 px-4 relative overflow-hidden pt-36">
        <div class="max-w-5xl mx-auto relative z-10 text-center">
            <h1 class="text-white font-heading text-4xl sm:text-5xl md:text-7xl lg:text-8xl tracking-tighter uppercase mb-6 leading-[1.1]">
                {{ $isEs ? 'Gana $100' : 'Earn $100' }}<br><span class="text-accent italic">{{ $isEs ? 'Por Cada Amigo Que Refieras' : 'For Each Friend You Refer' }}</span>
            </h1>
            <p class="text-white/40 text-lg max-w-2xl mx-auto leading-relaxed mb-8">{{ $isEs
                ? 'Comparte el amor por A1 Training Group con tus amigos y familiares. Cuando se inscriban, ambos reciben recompensas.'
                : 'Share the love for A1 Training Group with your friends and family. When they sign up, you both get rewarded.' }}</p>
        </div>
    </section>

    <section class="px-4 pb-16">
        <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-accent p-8 md:p-12 rounded-[30px]">
                <h3 class="text-black font-heading text-3xl font-black uppercase mb-4">{{ $isEs ? 'Para Tu Amigo' : 'For Your Friend' }}</h3>
                <p class="text-black/60 text-lg mb-6">{{ $isEs ? '15% de descuento en su primer ciclo de facturación cuando se registran usando tu enlace de referido.' : '15% off their first billing cycle when they sign up using your referral link.' }}</p>
                <p class="text-black/40 text-sm">{{ $isEs ? 'Ellos prueban A1 con descuento — tú ganas crédito. Todos ganan.' : 'They try A1 at a discount — you earn credit. Everyone wins.' }}</p>
            </div>
            <div class="bg-white/5 border border-white/10 p-8 md:p-12 rounded-[30px]">
                <h3 class="text-white font-heading text-3xl font-black uppercase mb-4">{{ $isEs ? 'Para Ti' : 'For You' }}</h3>
                <p class="text-white/40 text-lg mb-6">{{ $isEs ? '$100 de descuento en tu próxima factura por cada amigo que se registre y complete su primer mes.' : '$100 off your next bill for every friend who signs up and completes their first month.' }}</p>
                <p class="text-white/20 text-sm">{{ $isEs ? 'Sin límite — refiere tantos amigos como quieras.' : 'No limit — refer as many friends as you like.' }}</p>
            </div>
        </div>
    </section>

    <section class="px-4 pb-24">
        <div class="max-w-3xl mx-auto bg-white/5 border border-white/10 rounded-[30px] p-8 md:p-12 text-center">
            <h2 class="text-white font-heading text-2xl font-black uppercase mb-4">{{ $isEs ? '¿Cómo Funciona?' : 'How It Works' }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                <div><span class="text-accent font-heading text-4xl font-black block mb-2">1</span><p class="text-white/40 text-sm">{{ $isEs ? 'Comparte tu enlace' : 'Share your link' }}</p></div>
                <div><span class="text-accent font-heading text-4xl font-black block mb-2">2</span><p class="text-white/40 text-sm">{{ $isEs ? 'Ellos se registran' : 'They sign up' }}</p></div>
                <div><span class="text-accent font-heading text-4xl font-black block mb-2">3</span><p class="text-white/40 text-sm">{{ $isEs ? 'Ambos ganan' : 'You both earn' }}</p></div>
            </div>
            <a href="{{ $p }}/contact" class="inline-block mt-8 bg-accent text-black px-10 py-4 rounded-full font-heading font-black text-lg uppercase tracking-widest hover:bg-white transition-all">{{ $isEs ? 'Comienza a Referir' : 'Start Referring' }}</a>
        </div>
    </section>

    @php $faqs = [
        ['q' => 'How much does my friend save?', 'qEs' => '¿Cuánto ahorra mi amigo?', 'a' => 'Your friend gets 15% off their first billing cycle, making it easier for them to start their fitness journey.', 'aEs' => 'Tu amigo obtiene un 15% de descuento en su primer ciclo de facturación, lo que facilita que comience su viaje de fitness.'],
        ['q' => 'Is there a limit to how many friends I can refer?', 'qEs' => '¿Hay un límite de amigos que puedo referir?', 'a' => 'No limit. Refer as many friends as you like. Each successful referral earns you $100 off your next bill.', 'aEs' => 'Sin límite. Refiere a tantos amigos como quieras. Cada referido exitoso te da $100 de descuento en tu próxima factura.'],
        ['q' => 'When do I receive my $100 credit?', 'qEs' => '¿Cuándo recibo mi crédito de $100?', 'a' => 'The $100 credit is applied after your referred friend completes their first month of paid service.', 'aEs' => 'El crédito de $100 se aplica después de que tu amigo referido complete su primer mes de servicio pagado.'],
        ['q' => 'Can I refer someone who was already a client?', 'qEs' => '¿Puedo referir a alguien que ya era cliente?', 'a' => 'The referral program is for new clients only. Previous or existing clients are not eligible for the referral discount.', 'aEs' => 'El programa de referidos es solo para clientes nuevos. Los clientes anteriores o existentes no son elegibles para el descuento por referido.'],
    ]; @endphp
    <section class="px-4 pb-24">
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

    <x-sections.cta />
</x-layouts.public>
